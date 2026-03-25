<?php

return [
    /*
     *  Automatic registration of routes will only happen if this setting is `true`
     */
    'enabled' => false,

    /*
     * Controllers in these directories that have routing attributes
     * will automatically be registered.
     */
    'directories' => [],

    /*
     * This middleware will be applied to all routes.
     */
    'middleware' => [
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],

    /*
     * When enabled, implicitly scoped bindings will be enabled by default.
     */
    'scope-bindings' => null,
];
