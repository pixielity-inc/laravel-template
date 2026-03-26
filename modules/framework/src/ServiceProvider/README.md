<div align="center">

<img src="https://gitlab.com/pixielity/laravel-laravel/framework/service-provider/-/raw/main/.gitlab/banner.svg" alt="ServiceProvider" width="100%">

</div>

# Service Provider Package

A base service provider package for Pixielity modules, providing common functionality and conventions for registering services, configurations, routes, migrations, and more.

## Features

- **Base Service Provider** - Abstract base class for all module providers
- **Auto-Discovery** - Automatic registration of common module components
- **Configuration Publishing** - Easy config file publishing
- **Migration Loading** - Automatic migration registration
- **Route Registration** - Convention-based route loading
- **View Registration** - Automatic view namespace registration
- **Translation Loading** - i18n support
- **Command Registration** - Artisan command auto-discovery
- **Event Listeners** - Automatic event listener registration
- **Middleware Registration** - Easy middleware registration
- **Policy Registration** - Automatic policy discovery

## Installation

```bash
composer require pixielity/laravel-service-provider
```

## Usage

### Creating a Module Service Provider

Extend the base service provider:

```php
<?php

namespace Pixielity\YourModule\Providers;

use Pixielity\Support\Str;
use Pixielity\ServiceProvider\Providers\ServiceProvider;

class YourModuleServiceProvider extends ServiceProvider
{
    /**
     * Module namespace for auto-discovery
     */
    protected string $moduleNamespace = 'Pixielity\\YourModule';

    /**
     * Module name for paths
     */
    protected string $moduleName = 'your-module';

    /**
     * Register services
     */
    public function register(): void
    {
        parent::register();

        // Register your bindings
        $this->registerBindings();
    }

    /**
     * Bootstrap services
     */
    public function boot(): void
    {
        parent::boot();

        // Additional boot logic
    }
}
```

### Auto-Discovery Features

The base service provider automatically discovers and registers:

#### 1. Configuration Files

Place config files in `config/` directory:

```
your-module/
  config/
    your-module.php
```

They will be automatically published and merged.

#### 2. Migrations

Place migrations in `src/Migrations/` directory:

```
your-module/
  src/
    Migrations/
      2026_01_01_000000_create_table.php
```

They will be automatically loaded.

#### 3. Routes

Place route files in `routes/` directory:

```
your-module/
  routes/
    api.php      # API routes
    web.php      # Web routes
    console.php  # Console routes
```

They will be automatically registered with appropriate middleware.

#### 4. Views

Place views in `resources/views/` directory:

```
your-module/
  resources/
    views/
      index.blade.php
```

Access with namespace: `view('your-module::index')`

#### 5. Translations

Place translations in `resources/lang/` directory:

```
your-module/
  resources/
    lang/
      en/
        messages.php
```

Access with namespace: `__('your-module::messages.key')`

#### 6. Commands

Place commands in `src/Console/Commands/` directory:

```
your-module/
  src/
    Console/
      Commands/
        YourCommand.php
```

They will be automatically registered.

## Configuration

### Module Structure

Follow this structure for auto-discovery:

```
your-module/
├── config/
│   └── your-module.php
├── resources/
│   ├── views/
│   │   └── index.blade.php
│   └── lang/
│       └── en/
│           └── messages.php
├── routes/
│   ├── api.php
│   ├── web.php
│   └── console.php
├── src/
│   ├── Console/
│   │   └── Commands/
│   ├── Controllers/
│   ├── Events/
│   ├── Listeners/
│   ├── Middleware/
│   ├── Migrations/
│   ├── Models/
│   ├── Policies/
│   ├── Providers/
│   │   └── YourModuleServiceProvider.php
│   ├── Repositories/
│   └── Services/
└── composer.json
```

## Advanced Usage

### Custom Configuration Publishing

```php
protected function registerConfig(): void
{
    $configPath = $this->getModulePath('config/your-module.php');

    $this->publishes([
        $configPath => config_path('your-module.php'),
    ], 'your-module-config');

    $this->mergeConfigFrom($configPath, 'your-module');
}
```

### Custom Route Registration

```php
protected function registerRoutes(): void
{
    if ($this->app->routesAreCached()) {
        return;
    }

    Route::middleware('api')
        ->prefix('api/v1')
        ->group($this->getModulePath('routes/api.php'));

    Route::middleware('web')
        ->group($this->getModulePath('routes/web.php'));
}
```

### Custom Migration Loading

```php
protected function registerMigrations(): void
{
    $this->loadMigrationsFrom($this->getModulePath('src/Migrations'));
}
```

### Custom View Registration

```php
protected function registerViews(): void
{
    $viewPath = $this->getModulePath('resources/views');

    $this->loadViewsFrom($viewPath, 'your-module');

    $this->publishes([
        $viewPath => resource_path('views/vendor/your-module'),
    ], 'your-module-views');
}
```

### Custom Translation Loading

```php
protected function registerTranslations(): void
{
    $langPath = $this->getModulePath('resources/lang');

    $this->loadTranslationsFrom($langPath, 'your-module');

    $this->publishes([
        $langPath => resource_path('lang/vendor/your-module'),
    ], 'your-module-translations');
}
```

### Command Registration

```php
protected function registerCommands(): void
{
    if ($this->app->runningInConsole()) {
        $this->commands([
            YourCommand::class,
            AnotherCommand::class,
        ]);
    }
}
```

### Event Listener Registration

```php
protected function registerEventListeners(): void
{
    Event::listen(
        YourEvent::class,
        YourListener::class
    );
}
```

protected function registerMiddleware(): void
{
$router = $this->app[ContainerToken::ROUTER];

    $router->aliasMiddleware('your-middleware', YourMiddleware::class);

    $router->pushMiddlewareToGroup('api', YourMiddleware::class);

}

````

### Policy Registration

```php
protected function registerPolicies(): void
{
    Gate::policy(YourModel::class, YourPolicy::class);
}
````

## Helper Methods

### Get Module Path

```php
$path = $this->getModulePath('config/your-module.php');
```

### Get Module Namespace

```php
$namespace = $this->getModuleNamespace('Controllers');
// Returns: Pixielity\YourModule\Controllers
```

### Check if Running in Console

```php
if ($this->app->runningInConsole()) {
    // Console-specific logic
}
```

### Publish Assets

```php
$this->publishes([
    $this->getModulePath('public') => public_path('vendor/your-module'),
], 'your-module-assets');
```

## Publishing

### Publish Configuration

```bash
bin/laravel vendor:publish --tag=your-module-config
```

### Publish Views

```bash
bin/laravel vendor:publish --tag=your-module-views
```

### Publish Translations

```bash
bin/laravel vendor:publish --tag=your-module-translations
```

### Publish Assets

```bash
bin/laravel vendor:publish --tag=your-module-assets
```

### Publish Everything

```bash
bin/laravel vendor:publish --provider="Pixielity\YourModule\Providers\YourModuleServiceProvider"
```

## Testing

```php
use Orchestra\Testbench\TestCase;

class ServiceProviderTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            YourModuleServiceProvider::class,
        ];
    }

    public function test_config_is_registered()
    {
        $this->assertNotNull(config('your-module'));
    }

    public function test_routes_are_registered()
    {
        $this->assertTrue(Route::has('your-module.index'));
    }

    public function test_views_are_registered()
    {
        $this->assertTrue(View::exists('your-module::index'));
    }

    public function test_commands_are_registered()
    {
        $this->assertTrue(Artisan::has('your-module:command'));
    }
}
```

## Best Practices

### 1. Follow Naming Conventions

```php
// ✅ Good
protected string $moduleName = 'your-module';
protected string $moduleNamespace = 'Pixielity\\YourModule';

// ❌ Bad
protected string $moduleName = 'YourModule';
```

### 2. Use Auto-Discovery

```php
// ✅ Good - Let base provider handle it
public function boot(): void
{
    parent::boot(); // Handles migrations, views, etc.
}

// ❌ Bad - Manual registration
public function boot(): void
{
    $this->loadMigrationsFrom(__DIR__ . '/../Migrations');
    $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'your-module');
}
```

### 3. Register Bindings in register()

```php
// ✅ Good
public function register(): void
{
    parent::register();
    $this->registerBindings();
}

// ❌ Bad
public function boot(): void
{
    $this->app->singleton(...); // Should be in register()
}
```

### 4. Use Deferred Providers When Possible

```php
class YourModuleServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function provides()
    {
        return [
            YourServiceInterface::class,
        ];
    }
}
```

### 5. Organize by Responsibility

```php
protected function registerBindings(): void { }
protected function registerCommands(): void { }
protected function registerEventListeners(): void { }
protected function registerMiddleware(): void { }
protected function registerPolicies(): void { }
```

## Common Patterns

### Module with API Routes

```php
class YourModuleServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'your-module';

    protected function registerRoutes(): void
    {
        Route::prefix('api/v1')
            ->middleware('api')
            ->group($this->getModulePath('routes/api.php'));
    }
}
```

### Module with Commands

```php
class YourModuleServiceProvider extends ServiceProvider
{
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\InstallCommand::class,
                Commands\SyncCommand::class,
            ]);
        }
    }
}
```

### Module with Events

```php
class YourModuleServiceProvider extends ServiceProvider
{
    protected function registerEventListeners(): void
    {
        Event::listen(
            Events\ModelCreated::class,
            Listeners\SendNotification::class
        );
    }
}
```

## Troubleshooting

### Routes Not Loading

1. Check routes file exists in `routes/` directory
2. Verify route file name (api.php, web.php)
3. Clear route cache: `bin/laravel route:clear`

### Views Not Found

1. Check views exist in `resources/views/`
2. Verify view namespace matches module name
3. Clear view cache: `bin/laravel view:clear`

### Config Not Loading

1. Check config file exists in `config/`
2. Clear config cache: `bin/laravel config:clear`
3. Verify config file name matches module name

## License

This package is proprietary software developed by Pixielity.

## Support

For support, please contact the development team or open an issue in the project repository.
