<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Examples;

use Pixielity\ServiceProvider\Attributes\LoadsResources;
use Pixielity\ServiceProvider\Providers\ServiceProvider;

/**
 * Example: Attribute-Based Service Provider.
 *
 * This example demonstrates the new attribute-based configuration approach
 * for ServiceProviders, replacing boolean flags and should*() methods.
 *
 * ## Benefits:
 * - Declarative configuration
 * - Self-documenting
 * - Build-time compilation friendly
 * - Less code, clearer intent
 *
 * @see \Pixielity\ServiceProvider\Attributes\LoadsResources
 */

// ============================================================================
// Example 1: Full-Featured Module (Load Everything)
// ============================================================================

#[LoadsResources] // All resources enabled by default
class FullFeaturedServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'FullFeatured';
    protected string $moduleNamespace = 'Pixielity\FullFeatured';
    
    // That's it! No flags, no should*() methods needed
    // All resources will be loaded automatically
}

// ============================================================================
// Example 2: API-Only Module (No Views/Translations)
// ============================================================================

#[LoadsResources(
    views: false,        // API doesn't need views
    translations: false  // API returns JSON, no translations needed
)]
class ApiServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Api';
    protected string $moduleNamespace = 'Pixielity\Api';
    
    // Only loads: migrations, routes, config, commands, seeders
    // Skips: views, translations
}

// ============================================================================
// Example 3: Event-Only Module (No Resources)
// ============================================================================

#[LoadsResources(
    migrations: false,
    routes: false,
    views: false,
    translations: false,
    config: false,
    commands: false,
    seeders: false,
    publishables: false
)]
class EventServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Events';
    protected string $moduleNamespace = 'Pixielity\Events';
    
    public function boot(): void
    {
        parent::boot();
        
        // Only register event listeners, no resources
        // Event::listen(UserCreated::class, SendWelcomeEmail::class);
    }
}

// ============================================================================
// Example 4: Routes-Only Module
// ============================================================================

#[LoadsResources(
    routes: true,        // Only load routes
    migrations: false,
    views: false,
    translations: false,
    config: false,
    commands: false,
    seeders: false,
    publishables: false
)]
class RoutingServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Routing';
    protected string $moduleNamespace = 'Pixielity\Routing';
    
    // Only routes will be loaded
}

// ============================================================================
// Example 5: Testing Module (No Migrations)
// ============================================================================

#[LoadsResources(
    migrations: false  // Don't run migrations in test environment
)]
class TestingServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Testing';
    protected string $moduleNamespace = 'Pixielity\Testing';
    
    // All resources except migrations will be loaded
}

// ============================================================================
// Example 6: Admin Module (Full Features)
// ============================================================================

#[LoadsResources(
    migrations: true,
    routes: true,
    views: true,
    translations: true,
    config: true,
    commands: true,
    seeders: true,
    publishables: true,
    middleware: true,
    observers: true,
    policies: true
)]
class AdminServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Admin';
    protected string $moduleNamespace = 'Pixielity\Admin';
    
    // Explicitly enable all resources for clarity
}

// ============================================================================
// Example 7: Minimal Module (Config Only)
// ============================================================================

#[LoadsResources(
    config: true,        // Only load config
    migrations: false,
    routes: false,
    views: false,
    translations: false,
    commands: false,
    seeders: false,
    publishables: false
)]
class ConfigServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Config';
    protected string $moduleNamespace = 'Pixielity\Config';
    
    // Only configuration will be loaded
}

// ============================================================================
// Example 8: Background Jobs Module
// ============================================================================

#[LoadsResources(
    commands: true,      // Load commands for job processing
    config: true,        // Load job configuration
    migrations: true,    // Load job tables
    routes: false,       // No HTTP routes needed
    views: false,        // No views needed
    translations: false  // No translations needed
)]
class JobsServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Jobs';
    protected string $moduleNamespace = 'Pixielity\Jobs';
    
    // Optimized for background job processing
}

// ============================================================================
// Comparison: Old vs New Approach
// ============================================================================

/**
 * OLD APPROACH (Flag-Based) ❌
 */
class OldApproachServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'OldApproach';
    protected string $moduleNamespace = 'Pixielity\OldApproach';
    
    // ❌ Boolean flags scattered everywhere
    protected bool $loadResources = true;
    
    // ❌ Override methods for each resource
    protected function shouldLoadMigrations(): bool
    {
        return $this->loadResources && !app()->environment('testing');
    }
    
    protected function shouldLoadViews(): bool
    {
        return $this->loadResources && !config('mymodule.api_only');
    }
    
    protected function shouldLoadRoutes(): bool
    {
        return $this->loadResources;
    }
    
    // ... more should*() methods
}

/**
 * NEW APPROACH (Attribute-Based) ✅
 */
#[LoadsResources(
    migrations: false,  // Don't load in testing
    views: false,       // API-only
    routes: true
)]
class NewApproachServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'NewApproach';
    protected string $moduleNamespace = 'Pixielity\NewApproach';
    
    // ✅ That's it! Clean, declarative, self-documenting
}
