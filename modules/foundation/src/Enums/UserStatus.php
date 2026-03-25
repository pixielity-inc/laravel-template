<?php

declare(strict_types=1);

namespace Pixielity\Foundation\Enums;

use Pixielity\Enum\Attributes\Description;
use Pixielity\Enum\Attributes\Label;
use Pixielity\Enum\Attributes\Meta;
use Pixielity\Enum\Enum;

#[Meta([Description::class, Label::class])]
enum UserStatus: string
{
    use Enum;

    #[Label('Active User')]
    #[Description('The user account is active and can access the system')]
    case ACTIVE = 'active';

    #[Label('Inactive User')]
    #[Description('The user account is inactive and cannot access the system')]
    case INACTIVE = 'inactive';

    #[Label('Suspended User')]
    #[Description('The user account has been suspended due to policy violations')]
    case SUSPENDED = 'suspended';

    #[Label('Pending Verification')]
    #[Description('The user account is pending email verification')]
    case PENDING = 'pending';
}
