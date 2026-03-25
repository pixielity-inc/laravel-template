<?php

use Nwidart\Modules\Activators\FileActivator;
use Nwidart\Modules\Providers\ConsoleServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Module Namespace
    |--------------------------------------------------------------------------
    |
    | Default module namespace.
    |
    */
    'namespace' => env('MODULES_NAMESPACE', 'Pixielity'),

    /*
    |--------------------------------------------------------------------------
    | Vapor Maintenance Mode
    |--------------------------------------------------------------------------
    |
    | Indicates if the application is running on Laravel Vapor.
    | When enabled, cached services path will be set to a writable location.
    |
    */
    'vapor_maintenance_mode' => env('VAPOR_MAINTENANCE_MODE', false),

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Default module stubs.
    |
    */
    'stubs' => [
        'enabled' => false,
        'path' => base_path('vendor/modules/laravel-modules/src/Commands/stubs'),
        'files' => [
            'routes/web' => 'routes/web.php',
            'routes/api' => 'routes/api.php',
            'views/index' => 'resources/views/index.blade.php',
            'views/master' => 'resources/views/components/layouts/master.blade.php',
            'scaffold/config' => 'config/config.php',
            'composer' => 'composer.json',
            'assets/js/app' => 'resources/assets/js/app.js',
            'assets/sass/app' => 'resources/assets/sass/app.scss',
            'vite' => 'vite.config.js',
            'package' => 'package.json',
        ],
        'replacements' => [
            /**
             * Define custom replacements for each section.
             * You can now specify a class name that extends
             * \Nwidart\Modules\Support\ReplacementKeyCommand for dynamic values.
             *
             * Example:
             *
             * 'composer' => [
             *      // Map the UPPERCASE token to your command class
             *      'CUSTOM_KEY' => \App\Pixielity\Support\Replacements\CustomKey::class,
             *      // You can still list built-in tokens by their names
             *      'LOWER_NAME',
             *      'STUDLY_NAME',
             *      // ...
             * ],
             *
             * The command class must extend ReplacementKeyCommand and implement handle(): string
             * to return the replacement text.
             *
             * Note: Keys should be in UPPERCASE.
             */
            'routes/web' => ['LOWER_NAME', 'STUDLY_NAME', 'PLURAL_LOWER_NAME', 'KEBAB_NAME', 'MODULE_NAMESPACE', 'CONTROLLER_NAMESPACE'],
            'routes/api' => ['LOWER_NAME', 'STUDLY_NAME', 'PLURAL_LOWER_NAME', 'KEBAB_NAME', 'MODULE_NAMESPACE', 'CONTROLLER_NAMESPACE'],
            'vite' => ['LOWER_NAME', 'STUDLY_NAME', 'KEBAB_NAME'],
            'json' => ['LOWER_NAME', 'STUDLY_NAME', 'KEBAB_NAME', 'MODULE_NAMESPACE', 'PROVIDER_NAMESPACE'],
            'views/index' => ['LOWER_NAME'],
            'views/master' => ['LOWER_NAME', 'STUDLY_NAME', 'KEBAB_NAME'],
            'scaffold/config' => ['STUDLY_NAME'],
            'composer' => [
                'LOWER_NAME',
                'STUDLY_NAME',
                'VENDOR',
                'AUTHOR_NAME',
                'AUTHOR_EMAIL',
                'MODULE_NAMESPACE',
                'PROVIDER_NAMESPACE',
                'APP_FOLDER_NAME',
            ],
        ],
        'gitkeep' => true,
    ],
    'paths' => [
        /*
        |--------------------------------------------------------------------------
        | Pixielity path
        |--------------------------------------------------------------------------
        |
        | This path is used to save the generated module.
        | This path will also be added automatically to the list of scanned folders.
        |
        */
        'modules' => env('MODULES_PATH', base_path('modules')),

        /*
        |--------------------------------------------------------------------------
        | Pixielity assets path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules' assets path.
        |
        */
        'assets' => env('MODULES_ASSETS_PATH', public_path('modules')),

        /*
        |--------------------------------------------------------------------------
        | The migrations' path
        |--------------------------------------------------------------------------
        |
        | Where you run the 'module:publish-migration' command, where do you publish the
        | the migration files?
        |
        */
        'migration' => env('MODULES_MIGRATION_PATH', base_path('database/migrations')),

        /*
        |--------------------------------------------------------------------------
        | The app path
        |--------------------------------------------------------------------------
        |
        | app folder name
        | for example can change it to 'src' or 'App'
        |
        | NOTE: The generator paths below are currently hardcoded to 'src/'.
        | If you change this value, you'll need to manually update the generator
        | paths below to match your new app_folder structure.
        */
        'app_folder' => env('MODULES_APP_FOLDER', 'src/'),

        /*
        |--------------------------------------------------------------------------
        | Generator path
        |--------------------------------------------------------------------------
        | Customise the paths where the folders will be generated.
        | Setting the generate key to false will not generate that folder
        |
        | IMPORTANT: These paths are relative to the module root and should match
        | the 'app_folder' setting above. If you change app_folder from 'src/' to
        | something else (e.g., 'app/'), update all paths below accordingly.
        */
        'generator' => [
            // src/
            'actions' => ['path' => 'src/Actions', 'generate' => false],
            'casts' => ['path' => 'src/Casts', 'generate' => false],
            'channels' => ['path' => 'src/Broadcasting', 'generate' => false],
            'class' => ['path' => 'src/Classes', 'generate' => false],
            'command' => ['path' => 'src/Console', 'generate' => false],
            'command_replacements' => ['path' => 'src/Console/Replacements', 'generate' => false],
            'component-class' => ['path' => 'src/View/Components', 'generate' => false],
            'emails' => ['path' => 'src/Emails', 'generate' => false],
            'event' => ['path' => 'src/Events', 'generate' => false],
            'enums' => ['path' => 'src/Enums', 'generate' => false],
            'exceptions' => ['path' => 'src/Exceptions', 'generate' => false],
            'jobs' => ['path' => 'src/Jobs', 'generate' => false],
            'helpers' => ['path' => 'src/Helpers', 'generate' => false],
            'interfaces' => ['path' => 'src/Interfaces', 'generate' => false],
            'listener' => ['path' => 'src/Listeners', 'generate' => false],
            'model' => ['path' => 'src/Models', 'generate' => false],
            'notifications' => ['path' => 'src/Notifications', 'generate' => false],
            'observer' => ['path' => 'src/Observers', 'generate' => false],
            'policies' => ['path' => 'src/Policies', 'generate' => false],
            'provider' => ['path' => 'src/Providers', 'generate' => true],
            'repository' => ['path' => 'src/Repositories', 'generate' => false],
            'resource' => ['path' => 'src/Transformers', 'generate' => false],
            'route-provider' => ['path' => 'src/Providers', 'generate' => true],
            'rules' => ['path' => 'src/Rules', 'generate' => false],
            'services' => ['path' => 'src/Services', 'generate' => false],
            'scopes' => ['path' => 'src/Models/Scopes', 'generate' => false],
            'traits' => ['path' => 'src/Traits', 'generate' => false],

            // src/Http/
            'controller' => ['path' => 'src/Http/Controllers', 'generate' => true],
            'filter' => ['path' => 'src/Http/Middleware', 'generate' => false],
            'request' => ['path' => 'src/Http/Requests', 'generate' => false],

            // config/
            'config' => ['path' => 'config', 'generate' => true],

            // database/
            'factory' => ['path' => 'database/factories', 'generate' => true],
            'migration' => ['path' => 'database/migrations', 'generate' => true],
            'seeder' => ['path' => 'database/seeders', 'generate' => true],

            // lang/
            'lang' => ['path' => 'lang', 'generate' => false],

            // resource/
            'assets' => ['path' => 'resources/assets', 'generate' => true],
            'component-view' => ['path' => 'resources/views/components', 'generate' => false],
            'views' => ['path' => 'resources/views', 'generate' => true],
            'inertia' => ['path' => 'resources/js/Pages', 'generate' => false],
            'inertia-components' => ['path' => 'resources/js/Components', 'generate' => false],

            // routes/
            'routes' => ['path' => 'routes', 'generate' => true],

            // tests/
            'test-feature' => ['path' => 'tests/Feature', 'generate' => true],
            'test-unit' => ['path' => 'tests/Unit', 'generate' => true],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Auto Discover of Pixielity
    |--------------------------------------------------------------------------
    |
    | Here you configure auto discover of module
    | This is useful for simplify module providers.
    |
    */
    'auto-discover' => [
        /*
        |--------------------------------------------------------------------------
        | Migrations
        |--------------------------------------------------------------------------
        |
        | This option for register migration automatically.
        |
        */
        'migrations' => env('MODULES_AUTO_DISCOVER_MIGRATIONS', true),

        /*
        |--------------------------------------------------------------------------
        | Translations
        |--------------------------------------------------------------------------
        |
        | This option for register lang file automatically.
        |
        */
        'translations' => env('MODULES_AUTO_DISCOVER_TRANSLATIONS', false),

    ],

    /*
    |--------------------------------------------------------------------------
    | Package commands
    |--------------------------------------------------------------------------
    |
    | Here you can define which commands will be visible and used in your
    | application. You can add your own commands to merge section.
    |
    */
    'commands' => ConsoleServiceProvider::defaultCommands()
        ->merge([
            // New commands go here
        ])->toArray(),

    /*
    |--------------------------------------------------------------------------
    | Scan Path
    |--------------------------------------------------------------------------
    |
    | Here you define which folder will be scanned. By default will scan vendor
    | directory. This is useful if you host the package in packagist website.
    |
    */
    'scan' => [
        'enabled' => env('MODULES_SCAN_ENABLED', true),
        'paths' => [
            base_path('vendor/*/*'),
            base_path('../modules/*'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    |
    | Here is the config for the composer.json file, generated by this package
    |
    */
    'composer' => [
        'vendor' => env('MODULE_VENDOR', 'modules'),
        'author' => [
            'name' => env('MODULE_AUTHOR_NAME', 'Nicolas Widart'),
            'email' => env('MODULE_AUTHOR_EMAIL', 'n.widart@gmail.com'),
        ],
        'composer-output' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Choose what laravel-modules will register as custom namespaces.
    | Setting one to false will require you to register that part
    | in your own Service Provider class.
    |--------------------------------------------------------------------------
    */
    'register' => [
        'translations' => env('MODULES_REGISTER_TRANSLATIONS', true),
        /**
         * load files on boot or register method
         */
        'files' => env('MODULES_REGISTER_FILES', 'register'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Activators
    |--------------------------------------------------------------------------
    |
    | You can define new types of activators here, file, database, etc. The only
    | required parameter is 'class'.
    | The file activator will store the activation status in storage/framework/modules.json
    */
    'activators' => [
        'file' => [
            'class' => FileActivator::class,
            'statuses-file' => storage_path('framework/modules.json'),
        ],
    ],

    'activator' => env('MODULES_ACTIVATOR', 'file'),
];
