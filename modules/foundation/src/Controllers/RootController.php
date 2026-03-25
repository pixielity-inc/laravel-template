<?php

namespace Pixielity\Foundation\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Where;

class RootController extends Controller
{
    /**
     * Handle the root web request.
     */
    #[Get('/', name: 'foundation.index')]
    public function web(): JsonResponse
    {
        abort(401);
    }

    /**
     * Handle the root API request.
     */
    #[Get('/api', name: 'foundation.api.index')]
    public function api(): JsonResponse
    {
        abort(401);
    }

    /**
     * Handle versioned API requests.
     */
    #[Get('/api/{version}', name: 'foundation.api.version.index')]
    #[Where('version', 'v[0-9]+')]
    public function versionedApi(): JsonResponse
    {
        abort(401);
    }
}
