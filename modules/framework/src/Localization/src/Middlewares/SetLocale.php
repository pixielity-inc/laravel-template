<?php

namespace Pixielity\Localization\Middlewares;

use Closure;
use Illuminate\Container\Attributes\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

use function in_array;

use Pixielity\Routing\Attributes\AsMiddleware;
use Pixielity\Support\Arr;
use Pixielity\Support\Reflection;
use Symfony\Component\HttpFoundation\Response;

/**
 * Set Application Locale Middleware.
 *
 * Automatically sets the application locale (language) based on multiple sources
 * with a priority order. This enables multi-language support for the API.
 *
 * ## Locale Priority Order:
 * 1. **User Preference** (highest priority)
 *    - Authenticated user's saved locale preference
 *    - Stored in users.locale column
 *
 * 2. **Request Headers**
 *    - Checks configured headers in priority order
 *    - Default: x-language, x-locale, locale, accept-language
 *    - Only if auto-detect is enabled
 *
 * 3. **Default Locale** (fallback)
 *    - From config/localization.php
 *    - Or config/app.php as final fallback
 *
 * ## Configuration:
 *
 * ```php
 * // config/localization.php
 * return [
 *     'default' => 'en',
 *     'auto_detect' => true,
 *     'headers' => ['x-language', 'x-locale', 'locale', 'accept-language'],
 *     'locales' => [
 *         'en' => ['enabled' => true, 'name' => 'English'],
 *         'ar' => ['enabled' => true, 'name' => 'Arabic'],
 *         'fr' => ['enabled' => false, 'name' => 'French'],
 *     ],
 * ];
 * ```
 *
 * ## Usage Examples:
 *
 * ### Client Sends X-Language Header:
 * ```
 * GET /api/v1/users
 * X-Language: ar
 * Response: {"message": "تم بنجاح"} (Arabic)
 * ```
 *
 * ### Client Sends Accept-Language:
 * ```
 * GET /api/v1/users
 * Accept-Language: fr
 * Response: {"message": "Succès"} (French)
 * ```
 *
 * ### Authenticated User with Preference:
 * ```
 * GET /api/v1/users
 * Authorization: Bearer token
 * User locale: fr
 * Response: {"message": "Succès"} (French)
 * ```
 *
 * ### No Preference (Uses Default):
 * ```
 * GET /api/v1/users
 * Response: {"message": "Success"} (English - default)
 * ```
 *
 * ## Benefits:
 * - **User Experience**: Content in user's preferred language
 * - **Flexibility**: Multiple headers and ways to specify language
 * - **Security**: Only enabled locales are accepted
 * - **Performance**: Locale set once per request
 *
 * @since 1.0.0
 */
#[AsMiddleware(
    alias: 'set.locale',
    priority: 50
)]
class SetLocale
{
    /**
     * The default locale to use when no other locale is detected.
     */
    private readonly string $defaultLocale;

    /**
     * Create a new SetLocale middleware instance.
     *
     * @param array<string, array<string, mixed>> $locales             Available locales configuration
     * @param bool                                $autoDetect          Whether to auto-detect locale from headers
     * @param array<string>                       $headers             Headers to check for locale (in priority order)
     * @param array<string>                       $queryParams         Query parameters to check for locale
     * @param string|null                         $localizationDefault Default locale from localization config
     * @param string|null                         $appLocale           Fallback locale from app config
     * @param string|null                         $fallbackLocale      Fallback locale from localization config
     */
    public function __construct(
        #[Config('localization.locales', [])]
        private readonly array $locales,
        #[Config('localization.auto_detect', true)]
        private readonly bool $autoDetect,
        #[Config('localization.headers', ['accept-language'])]
        private readonly array $headers,
        #[Config('localization.query_params', ['lang', 'locale'])]
        private readonly array $queryParams,
        #[Config('localization.default')]
        ?string $localizationDefault = null,
        #[Config('app.locale')]
        ?string $appLocale = null,
        #[Config('localization.fallback_locale')]
        ?string $fallbackLocale = null,
    ) {
        // Handle the fallback chain: localization.default -> app.locale -> localization.fallback_locale -> 'en'
        $this->defaultLocale = $localizationDefault ?? $appLocale ?? $fallbackLocale ?? 'en';
    }

    /**
     * Handle an incoming request.
     *
     * Determines the appropriate locale and sets it for the application.
     * The locale affects translations, date formatting, and number formatting.
     * Also adds locale to log context for debugging.
     *
     * ## Process:
     * 1. Load available locales from config
     * 2. Check user preference (if authenticated)
     * 3. Check configured headers in priority order (if auto-detect enabled)
     * 4. Fall back to default locale
     * 5. Set application locale
     * 6. Add locale to log context
     *
     * ## Log Context:
     * All logs within this request will automatically include:
     * - locale: The active locale for this request
     * - user_id: The authenticated user ID (if authenticated)
     *
     * @param  Request                      $request The incoming HTTP request
     * @param  Closure(Request): (Response) $next    The next middleware in the pipeline
     * @return Response                     The HTTP response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get available locales from configuration
        // Only enabled locales are considered valid
        $availableLocales = Arr::keys(
            Arr::filter($this->locales, fn ($locale) => $locale['enabled'] ?? false)
        );

        $selectedLocale = $this->defaultLocale;

        // Priority 1: User preference (highest priority)
        // If user is authenticated and has a locale preference, use it
        if ($user = $request->user()) {
            $userLocale = is_object($user) && Reflection::propertyExists($user, 'locale') ? $user->locale : null;
            if ($userLocale && in_array($userLocale, $availableLocales, true)) {
                $selectedLocale = $userLocale;
                App::setLocale($selectedLocale);

                // Add user context to logs
                $userId = is_object($user) && Reflection::propertyExists($user, 'id') ? $user->id : null;
                Log::withContext([
                    'locale' => $selectedLocale,
                    'user_id' => $userId,
                ]);

                return $next($request);
            }

            // User is authenticated but no locale preference
            // Still add user_id to log context
            $userId = is_object($user) && Reflection::propertyExists($user, 'id') ? $user->id : null;
            Log::withContext([
                'user_id' => $userId,
            ]);
        }

        // Priority 2: Query Parameters
        if ($this->autoDetect) {
            foreach ($this->queryParams as $queryParam) {
                $locale = $request->query($queryParam);
                $localeStr = is_array($locale) ? ($locale[0] ?? null) : $locale;
                if ($localeStr && in_array($localeStr, $availableLocales, true)) {
                    return $this->setLocaleAndContinue($localeStr, $request, $next);
                }
            }
        }

        // Priority 3: Path Segment (e.g., /ar/...)
        $locale = $request->segment(1);
        if (is_string($locale) && in_array($locale, $availableLocales, true)) {
            return $this->setLocaleAndContinue($locale, $request, $next);
        }

        // Priority 4: Route Parameters (if defined in the route, e.g., {locale}/...)
        $locale = $request->route('locale');
        if (is_string($locale) && in_array($locale, $availableLocales, true)) {
            return $this->setLocaleAndContinue($locale, $request, $next);
        }

        // Priority 5: Request headers
        if ($this->autoDetect) {
            foreach ($this->headers as $header) {
                $locale = $request->header($header);
                $localeStr = is_array($locale) ? ($locale[0] ?? null) : $locale;
                if ($localeStr && in_array($localeStr, $availableLocales, true)) {
                    return $this->setLocaleAndContinue($localeStr, $request, $next);
                }
            }
        }

        // Priority 5: Default locale (fallback)
        // Use the configured default locale if no other preference found
        App::setLocale($selectedLocale);

        // Add locale to log context
        Log::withContext([
            'locale' => $selectedLocale,
        ]);

        return $next($request);
    }

    /**
     * Set locale, add to log context, and continue.
     */
    private function setLocaleAndContinue(string $locale, Request $request, Closure $next): Response
    {
        App::setLocale($locale);
        Log::withContext(['locale' => $locale]);

        return $next($request);
    }
}
