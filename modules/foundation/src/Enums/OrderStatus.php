<?php

declare(strict_types=1);

namespace Pixielity\Foundation\Enums;

use Pixielity\Enum\Attributes\Description;
use Pixielity\Enum\Attributes\Label;
use Pixielity\Enum\Attributes\Meta;
use Pixielity\Enum\Enum;

#[Meta([Description::class, Label::class])]
enum OrderStatus: string
{
    use Enum;

    #[Label('Order Pending')]
    #[Description('Order has been placed and is awaiting processing')]
    case PENDING = 'pending';

    #[Label('Order Processing')]
    #[Description('Order is currently being processed')]
    case PROCESSING = 'processing';

    #[Label('Order Shipped')]
    #[Description('Order has been shipped to the customer')]
    case SHIPPED = 'shipped';

    #[Label('Order Delivered')]
    #[Description('Order has been successfully delivered')]
    case DELIVERED = 'delivered';

    #[Label('Order Cancelled')]
    #[Description('Order has been cancelled by the customer or system')]
    case CANCELLED = 'cancelled';
}
