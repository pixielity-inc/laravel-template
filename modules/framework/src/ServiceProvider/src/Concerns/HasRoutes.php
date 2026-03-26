<?php

namespace Pixielity\ServiceProvider\Concerns;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Pixielity\Discovery\Facades\Discovery;
use Pixielity\Foundation\Contracts\ApplicationInterface;
use Pixielity\Foundation\Enums\ContainerToken;
use Pixielity\Routing\Attributes\AsController;
use Pixielity\ServiceProvider\Contracts\HasRoutes as HasRoutesContract;
use Pixielity\Routing\RouteRegistrar;
use Pixielity\Support\Reflection;
use Pixielity\Support\Str;

/**
 * Has Routes Trait.
 *
 * Provides comprehensive route registration functionality for module service providers.
 * Handles both file-based routes (api.php, web.php, channels.php) and programmatic routes.
 *
 * ## Purpose:
 * This trait centralizes ALL route loading logic for modules, including:
 * - File-based routes from routes/ directory
 * - Programmatic routes via routes() method
 * - Conditional route loading
 *
 * ## Features:
 * - ✅ Automatic route file discovery (API, Web, Channels)
 * - ✅ Programmatic route registration via interface
 * - ✅ Conditional route loading with shouldLoadRoutes()
 * - ✅ Global resource loading toggle support
 * - ✅ API route middleware configuration
 * - ✅ Access to Router instance for custom routes
 *
 * ## File-Based Routes:
 * Place route files in your module's routes/ directory:
 * ```
 * src/routes/
 * ├── api.php       # API routes with 'api' middleware
 * ├── web.php       # Web routes with 'web' middleware
 * └── channels.php  # Broadcast channels
 * ```
 *
 * ## Programmatic Routes:
 * Implement the HasRoutes interface in your service provider:
 * ```php
 * class MyServiceProvider extends ServiceProvider implements HasRoutes
 * {
 *     public function routes(Router $router): void
 *     {
 *         $router->get('/my-route', [MyController::class, 'index']);
 *         $router->group(['prefix' => 'api'], function ($router) {
 *             $router->apiResource('users', UserController::class);
 *         });
 *     }
 * }
 * ```
 *
 * @property string $modulePath    The path to the current module
 * @property bool   $loadResources Global toggle for all resource loading
 * @property ApplicationInterface $app The Application
 *
 * @method string getModuleSourcePath()                          Get the module source path
 * @method void   debugLog(string $message, array $context = []) Log debug message
 *
 * @since 1.0.0
 */
trait HasRoutes
{
    use HasModuleConstants;

    /**
     * Collect and load all routes for the module.
     *
     * This method is the main entry point for route loading. It follows the
     * standard "collect" pattern used throughout the framework for consistency.
     *
     * ## How It Works:
     * 1. Discovers controllers with #[AsController] attribute and registers them
     * 2. Loads file-based routes (api.php, web.php, channels.php)
     * 3. Calls programmatic routes() method if provider implements HasRoutes interface
     *
     * ## Discovery Process:
     * Controllers are discovered using the Discovery facade which scans for the
     * #[AsController] attribute across all modules. This approach:
     * - Avoids directory scanning and glob patterns
     * - Eliminates namespace resolution issues
     * - Works seamlessly with monorepo structure
     * - Uses composer's attribute collector for performance
     *
     * ## Example:
     * ```php
     * // Routes are automatically loaded from:
     * // 1. Controllers with #[AsController] attribute (via Discovery)
     * // 2. routes/api.php - API routes with 'api' middleware
     * // 3. routes/web.php - Web routes with 'web' middleware
     * // 4. routes/channels.php - Broadcast channels
     * // 5. Programmatic routes via routes() method
     * ```
     */
    protected function collectRoutes(): void
    {
        if (! $this->shouldLoadRoutes()) {
            return;
        }

        $this->debugLog('Loading routes');

        // Step 1: Discover and register controllers with #[AsController] attribute
        $this->registerDiscoveredControllers();

        // Step 2: Load file-based routes (api.php, web.php, channels.php)
        $this->loadModuleRoutes();
    }

    /**
     * Discover and register controllers with #[AsController] attribute.
     *
     * This method uses the Discovery facade to find all controllers marked with
     * the #[AsController] attribute and registers them with Spatie's route system.
     *
     * ## Discovery Process:
     * 1. Uses Discovery::attribute() to find all classes with #[AsController] attribute
     * 2. Returns a Collection of fully qualified class names
     * 3. Filters to ensure classes exist using Reflection::exists()
     * 4. Registers each controller using the RouteRegistrar
     *
     * ## Why Discovery Instead of Directory Scanning:
     * - **Performance**: Uses composer's cached attribute data
     * - **No Namespace Issues**: Works with any namespace structure
     * - **Monorepo Friendly**: Automatically finds controllers across modules
     * - **No Glob Patterns**: Avoids filesystem scanning overhead
     *
     * ## Example Controller:
     * ```php
     * use Pixielity\Routing\Attributes\AsController;
     * use Pixielity\Routing\Attributes\Get;
     *
     * #[AsController]
     * #[Prefix('api/v1/users')]
     * class UserController extends BaseController
     * {
     *     #[Get('/', name: 'users.index')]
     *     public function index() { }
     * }
     * ```
     */
    protected function registerDiscoveredControllers(): void
    {
        // Get the RouteRegistrar from the container
        // This is our custom registrar that extends Spatie's
        $registrar = $this->app->make(RouteRegistrar::class);

        // Use Discovery to find all controllers with #[AsController] attribute
        // get() returns a collection with metadata, keys() gives us just the class names
        Discovery::attribute(AsController::class)
            ->get()
            ->keys()
            // Filter out any classes that don't exist (safety check)
            ->filter(fn (string $controller): bool => Reflection::exists($controller))
            // Register each controller with Spatie's route system
            ->each(fn (string $controller) => $registrar->registerController($controller));
    }

    /**
     * Load module routes from the routes directory.
     *
     * Automatically discovers and registers route files:
     * - `routes/api.php` - API routes with `api` middleware
     * - `routes/web.php` - Web routes with `web` middleware
     * - `routes/channels.php` - Broadcast channel routes
     *
     * Also registers programmatic routes if the provider implements HasRoutes interface.
     *
     * ## API Routes:
     * - Middleware: `api`
     * - Example: `/api/users`
     *
     * ## Example Route Files:
     * ```php
     * // routes/api.php
     * Route::get('/users', [UserController::class, 'index']);
     *
     * // routes/web.php
     * Route::get('/dashboard', [DashboardController::class, 'index']);
     *
     * // routes/channels.php
     * Broadcast::channel('user.{id}', function ($user, $id) {
     *     return (int) $user->id === (int) $id;
     * });
     * ```
     */
    protected function loadModuleRoutes(): void
    {
        $sourcePath = $this->getModuleSourcePath();

        // Load API Routes with 'api' middleware
        $apiRoutesPath = Str::format('%s/%s/%s', $sourcePath, static::DIR_ROUTES, static::FILE_ROUTES_API);
        if (File::exists($apiRoutesPath)) {
            Route::middleware('api')->group($apiRoutesPath);
        }

        // Load Web Routes
        $webRoutesPath = Str::format('%s/%s/%s', $sourcePath, static::DIR_ROUTES, static::FILE_ROUTES_WEB);
        if (File::exists($webRoutesPath)) {
            $this->loadRoutesFrom($webRoutesPath);
        }

        // Load Broadcast Channels
        $channelsPath = Str::format('%s/%s/%s', $sourcePath, static::DIR_ROUTES, static::FILE_ROUTES_CHANNELS);
        if (File::exists($channelsPath)) {
            $this->loadRoutesFrom($channelsPath);
        }

        // Load programmatic routes if provider implements HasRoutes interface
        if (Reflection::implements($this, HasRoutesContract::class)) {
            $this->routes($this->app[ContainerToken::ROUTER()]);
        }
    }
}
