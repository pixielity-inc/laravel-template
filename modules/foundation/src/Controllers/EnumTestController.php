<?php

declare(strict_types=1);

namespace Pixielity\Foundation\Controllers;

use Illuminate\Http\JsonResponse;
use Pixielity\Foundation\Enums\OrderStatus;
use Pixielity\Foundation\Enums\UserStatus;
use Pixielity\Routing\Attributes\AsController;
use Pixielity\Routing\Attributes\Get;
use Pixielity\Routing\Attributes\Group;
use Pixielity\Routing\Attributes\Prefix;
use Pixielity\Routing\Controller;

#[AsController]
#[Group('api')]
#[Prefix('test/enums')]
class EnumTestController extends Controller
{
    #[Get('/', name: 'foundation.api.test.enums.index')]
    public function index(): JsonResponse
    {
        return response()->json([
            'message' => 'Enum Test API',
            'endpoints' => [
                '/api/test/enums/user-status' => 'Test UserStatus enum',
                '/api/test/enums/order-status' => 'Test OrderStatus enum',
                '/api/test/enums/all' => 'Test all enums',
            ],
        ]);
    }

    #[Get('/user-status', name: 'foundation.api.test.enums.user-status')]
    public function userStatus(): JsonResponse
    {
        $data = [];

        foreach (UserStatus::cases() as $case) {
            $data[] = [
                'name' => $case->name,
                'value' => $case->value,
                'label' => $case->label(),
                'description' => $case->description(),
            ];
        }

        return response()->json([
            'enum' => 'UserStatus',
            'cases' => $data,
            'names' => UserStatus::names(),
            'values' => UserStatus::values(),
            'options' => UserStatus::options(),
        ]);
    }

    #[Get('/order-status', name: 'foundation.api.test.enums.order-status')]
    public function orderStatus(): JsonResponse
    {
        $data = [];

        foreach (OrderStatus::cases() as $case) {
            $data[] = [
                'name' => $case->name,
                'value' => $case->value,
                'label' => $case->label(),
                'description' => $case->description(),
            ];
        }

        return response()->json([
            'enum' => 'OrderStatus',
            'cases' => $data,
            'names' => OrderStatus::names(),
            'values' => OrderStatus::values(),
            'options' => OrderStatus::options(),
        ]);
    }

    #[Get('/all', name: 'foundation.api.test.enums.all')]
    public function all(): JsonResponse
    {
        return response()->json([
            'user_status' => $this->userStatus()->getData(),
            'order_status' => $this->orderStatus()->getData(),
        ]);
    }
}
