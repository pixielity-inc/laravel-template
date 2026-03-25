<?php

declare(strict_types=1);

namespace Pixielity\Foundation\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

/**
 * Localization Test Controller.
 *
 * Tests the Localization module functionality including:
 * - Locale detection from headers
 * - Locale detection from query parameters
 * - Timezone handling
 * - Available locales configuration
 * - Translation functionality
 */
class LocalizationTestController extends Controller
{
    /**
     * Test index - shows all available localization tests.
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'message' => 'Localization Test Endpoints',
            'endpoints' => [
                'GET /api/test/localization' => 'This index',
                'GET /api/test/localization/current' => 'Get current locale and timezone',
                'GET /api/test/localization/available' => 'Get available locales',
                'GET /api/test/localization/headers' => 'Test locale detection from headers',
                'GET /api/test/localization/timezone' => 'Test timezone functionality',
                'GET /api/test/localization/all' => 'Run all localization tests',
            ],
            'usage' => [
                'Set locale via header' => 'X-Language: ar',
                'Set locale via query' => '?lang=ar',
                'Set timezone via header' => 'X-Timezone: America/New_York',
            ],
        ]);
    }

    /**
     * Get current locale and timezone information.
     */
    public function current(Request $request): JsonResponse
    {
        return response()->json([
            'test' => 'Current Locale & Timezone',
            'locale' => [
                'current' => App::getLocale(),
                'fallback' => App::getFallbackLocale(),
                'default' => Config::get('app.locale'),
            ],
            'timezone' => [
                'current' => date_default_timezone_get(),
                'default' => Config::get('app.timezone'),
                'from_header' => $request->header('X-Timezone'),
            ],
            'request_info' => [
                'headers' => [
                    'X-Language' => $request->header('X-Language'),
                    'X-Locale' => $request->header('X-Locale'),
                    'Accept-Language' => $request->header('Accept-Language'),
                    'X-Timezone' => $request->header('X-Timezone'),
                ],
                'query_params' => [
                    'lang' => $request->query('lang'),
                    'locale' => $request->query('locale'),
                ],
            ],
        ]);
    }

    /**
     * Get available locales configuration.
     */
    public function available(): JsonResponse
    {
        $locales = Config::get('localization.locales', []);
        $enabledLocales = [];
        $disabledLocales = [];

        foreach ($locales as $code => $config) {
            if ($config['enabled'] ?? false) {
                $enabledLocales[$code] = $config;
            } else {
                $disabledLocales[$code] = $config;
            }
        }

        return response()->json([
            'test' => 'Available Locales',
            'configuration' => [
                'default' => Config::get('localization.default'),
                'fallback' => Config::get('localization.fallback_locale'),
                'auto_detect' => Config::get('localization.auto_detect'),
                'headers' => Config::get('localization.headers'),
                'query_params' => Config::get('localization.query_params'),
            ],
            'locales' => [
                'enabled' => $enabledLocales,
                'disabled' => $disabledLocales,
                'total_enabled' => count($enabledLocales),
                'total_disabled' => count($disabledLocales),
            ],
        ]);
    }

    /**
     * Test locale detection from various sources.
     */
    public function testHeaders(Request $request): JsonResponse
    {
        $tests = [];

        // Test 1: Current locale
        $tests['current_locale'] = [
            'locale' => App::getLocale(),
            'source' => $this->detectLocaleSource($request),
        ];

        // Test 2: Header detection
        $headers = Config::get('localization.headers', []);
        $headerTests = [];
        foreach ($headers as $header) {
            $value = $request->header($header);
            $headerTests[$header] = [
                'value' => $value,
                'present' => $value !== null,
            ];
        }
        $tests['header_detection'] = $headerTests;

        // Test 3: Query parameter detection
        $queryParams = Config::get('localization.query_params', []);
        $queryTests = [];
        foreach ($queryParams as $param) {
            $value = $request->query($param);
            $queryTests[$param] = [
                'value' => $value,
                'present' => $value !== null,
            ];
        }
        $tests['query_param_detection'] = $queryTests;

        // Test 4: Path segment detection
        $tests['path_segment'] = [
            'first_segment' => $request->segment(1),
            'is_locale' => $this->isValidLocale($request->segment(1)),
        ];

        return response()->json([
            'test' => 'Locale Detection from Headers',
            'results' => $tests,
            'summary' => [
                'current_locale' => App::getLocale(),
                'detection_enabled' => Config::get('localization.auto_detect'),
            ],
        ]);
    }

    /**
     * Test timezone functionality.
     */
    public function testTimezone(Request $request): JsonResponse
    {
        $currentTimezone = date_default_timezone_get();
        $requestedTimezone = $request->header('X-Timezone');

        // Test timezone validation
        $timezoneTests = [
            'UTC' => $this->isValidTimezone('UTC'),
            'America/New_York' => $this->isValidTimezone('America/New_York'),
            'Europe/London' => $this->isValidTimezone('Europe/London'),
            'Asia/Dubai' => $this->isValidTimezone('Asia/Dubai'),
            'Invalid/Timezone' => $this->isValidTimezone('Invalid/Timezone'),
        ];

        // Test date formatting in different timezones
        $timestamp = time();
        $dateFormats = [
            'current_timezone' => [
                'timezone' => $currentTimezone,
                'date' => date('Y-m-d H:i:s', $timestamp),
                'iso8601' => date('c', $timestamp),
            ],
        ];

        // If timezone header is provided and valid, show comparison
        if ($requestedTimezone && $this->isValidTimezone($requestedTimezone)) {
            $originalTz = date_default_timezone_get();
            date_default_timezone_set($requestedTimezone);
            $dateFormats['requested_timezone'] = [
                'timezone' => $requestedTimezone,
                'date' => date('Y-m-d H:i:s', $timestamp),
                'iso8601' => date('c', $timestamp),
            ];
            date_default_timezone_set($originalTz);
        }

        return response()->json([
            'test' => 'Timezone Functionality',
            'current' => [
                'timezone' => $currentTimezone,
                'default' => Config::get('app.timezone'),
                'header_name' => Config::get('app.timezone_header', 'X-Timezone'),
            ],
            'request' => [
                'timezone_header' => $requestedTimezone,
                'is_valid' => $requestedTimezone ? $this->isValidTimezone($requestedTimezone) : null,
            ],
            'validation_tests' => $timezoneTests,
            'date_formatting' => $dateFormats,
        ]);
    }

    /**
     * Run all localization tests.
     */
    public function testAll(Request $request): JsonResponse
    {
        return response()->json([
            'message' => 'All Localization Tests',
            'current' => $this->current($request)->getData(),
            'available' => $this->available()->getData(),
            'headers' => $this->testHeaders($request)->getData(),
            'timezone' => $this->testTimezone($request)->getData(),
        ]);
    }

    /**
     * Detect the source of the current locale.
     */
    private function detectLocaleSource(Request $request): string
    {
        // Check user preference
        if ($user = $request->user()) {
            if (property_exists($user, 'locale') && $user->locale) {
                return 'user_preference';
            }
        }

        // Check query parameters
        $queryParams = Config::get('localization.query_params', []);
        foreach ($queryParams as $param) {
            if ($request->query($param)) {
                return "query_param:{$param}";
            }
        }

        // Check path segment
        if ($this->isValidLocale($request->segment(1))) {
            return 'path_segment';
        }

        // Check headers
        $headers = Config::get('localization.headers', []);
        foreach ($headers as $header) {
            if ($request->header($header)) {
                return "header:{$header}";
            }
        }

        return 'default';
    }

    /**
     * Check if a locale code is valid.
     */
    private function isValidLocale(?string $locale): bool
    {
        if (!$locale) {
            return false;
        }

        $locales = Config::get('localization.locales', []);
        return isset($locales[$locale]) && ($locales[$locale]['enabled'] ?? false);
    }

    /**
     * Check if a timezone is valid.
     */
    private function isValidTimezone(string $timezone): bool
    {
        try {
            new \DateTimeZone($timezone);
            return true;
        } catch (\Exception) {
            return false;
        }
    }
}
