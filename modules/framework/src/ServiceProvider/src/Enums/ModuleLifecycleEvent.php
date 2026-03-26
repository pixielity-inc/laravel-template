<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Enums;

use Pixielity\Enum\Attributes\Description;
use Pixielity\Enum\Attributes\Label;
use Pixielity\Enum\Enum;
use Pixielity\Support\Str;

/**
 * Module Lifecycle Events Enum.
 *
 * Defines the lifecycle events that can be fired during module registration and boot.
 *
 * @method static REGISTERING() Returns the REGISTERING enum instance
 * @method static REGISTERED()  Returns the REGISTERED enum instance
 * @method static BOOTING()     Returns the BOOTING enum instance
 * @method static BOOTED()      Returns the BOOTED enum instance
 *
 * @since 1.0.0
 * @see \Pixielity\ServiceProvider\Concerns\HasModuleLifecycle
 */
enum ModuleLifecycleEvent: string
{
    use Enum;

    /**
     * Module Registration Starting Event.
     *
     * Fired at the start of the register() method.
     */
    #[Label('Registering')]
    #[Description('Module Registration Starting Event. Fired at the start of the register() method.')]
    case REGISTERING = 'module.registering';

    /**
     * Module Registration Complete Event.
     *
     * Fired at the end of the register() method.
     */
    #[Label('Registered')]
    #[Description('Module Registration Complete Event. Fired at the end of the register() method.')]
    case REGISTERED = 'module.registered';

    /**
     * Module Boot Starting Event.
     *
     * Fired at the start of the boot() method.
     */
    #[Label('Booting')]
    #[Description('Module Boot Starting Event. Fired at the start of the boot() method.')]
    case BOOTING = 'module.booting';

    /**
     * Module Boot Complete Event.
     *
     * Fired at the end of the boot() method.
     */
    #[Label('Booted')]
    #[Description('Module Boot Complete Event. Fired at the end of the boot() method.')]
    case BOOTED = 'module.booted';

    /**
     * Get all lifecycle events in order.
     *
     * @return array<self>
     */
    public static function all(): array
    {
        return [
            self::REGISTERING,
            self::REGISTERED,
            self::BOOTING,
            self::BOOTED,
        ];
    }

    /**
     * Get the event name without the 'module.' prefix.
     *
     * @return string The event name
     */
    public function eventName(): string
    {
        return Str::replace('module.', '', $this->value);
    }
}
