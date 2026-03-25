<?php

declare(strict_types=1);

namespace Pixielity\Foundation\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Pixielity\Foundation\Enums\OrderStatus;
use Pixielity\Foundation\Enums\UserStatus;

class EnumTestController extends Controller
{
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

    public function all(): JsonResponse
    {
        return response()->json([
            'user_status' => $this->userStatus()->getData(),
            'order_status' => $this->orderStatus()->getData(),
        ]);
    }
}
