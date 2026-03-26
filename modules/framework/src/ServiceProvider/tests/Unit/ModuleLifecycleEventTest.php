<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Unit;

use Pixielity\ServiceProvider\Enums\ModuleLifecycleEvent;
use Pixielity\ServiceProvider\Tests\TestCase;

/**
 * Tests for ModuleLifecycleEvent Enum.
 *
 * Validates the lifecycle event enum values and helper methods
 * for tracking module registration and boot phases.
 *
 * @covers \Pixielity\ServiceProvider\Enums\ModuleLifecycleEvent
 */
class ModuleLifecycleEventTest extends TestCase
{
    /**
     * Test that REGISTERING event has correct value.
     *
     * Ensures the event name follows naming convention.
     */
    public function test_registering_event_has_correct_value(): void
    {
        $event = new ModuleLifecycleEvent()->REGISTERING();

        $this->assertEquals('module.registering', $event->value);
    }

    /**
     * Test that REGISTERED event has correct value.
     *
     * Validates post-registration event name.
     */
    public function test_registered_event_has_correct_value(): void
    {
        $event = new ModuleLifecycleEvent()->REGISTERED();

        $this->assertEquals('module.registered', $event->value);
    }

    /**
     * Test that BOOTING event has correct value.
     *
     * Ensures boot phase event name is correct.
     */
    public function test_booting_event_has_correct_value(): void
    {
        $event = new ModuleLifecycleEvent()->BOOTING();

        $this->assertEquals('module.booting', $event->value);
    }

    /**
     * Test that BOOTED event has correct value.
     *
     * Validates post-boot event name.
     */
    public function test_booted_event_has_correct_value(): void
    {
        $event = new ModuleLifecycleEvent()->BOOTED();

        $this->assertEquals('module.booted', $event->value);
    }

    /**
     * Test that all() returns complete lifecycle event list.
     *
     * Ensures all four lifecycle events are returned in order.
     */
    public function test_all_returns_all_events_in_order(): void
    {
        $events = ModuleLifecycleEvent::all();

        $this->assertCount(4, $events);
        $this->assertEquals('module.registering', $events[0]->value);
        $this->assertEquals('module.registered', $events[1]->value);
        $this->assertEquals('module.booting', $events[2]->value);
        $this->assertEquals('module.booted', $events[3]->value);
    }

    /**
     * Test that eventName() strips the module prefix.
     *
     * Validates helper method for getting short event names.
     */
    public function test_event_name_returns_name_without_prefix(): void
    {
        $event = new ModuleLifecycleEvent()->BOOTING();

        $this->assertEquals('booting', $event->eventName());
    }
}
