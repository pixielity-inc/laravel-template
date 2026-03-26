<?php

declare(strict_types=1);

namespace Pixielity\Crud\Concerns;

use Illuminate\Database\Eloquent\Scope;
use Pixielity\Crud\Attributes\AsCriteria;
use Pixielity\Crud\Attributes\AsScope;
use Pixielity\Crud\Registries\CriteriaRegistry;
use Pixielity\Crud\Registries\ScopeRegistry;
use Pixielity\Discovery\Facades\Discovery;
use Pixielity\Support\Reflection;
use Prettus\Repository\Contracts\CriteriaInterface;
use Throwable;

/**
 * HasDiscovery Trait.
 *
 * Provides automatic discovery and registration of Criteria classes
 * marked with the #[AsCriteria] attribute using the Discovery package.
 *
 * ## Purpose:
 * This trait enables automatic discovery and registration of criteria
 * throughout the application, eliminating the need for manual registration
 * in service providers.
 *
 * ## Architecture:
 * 1. Discovery package scans for #[AsCriteria] attributes
 * 2. Validates each class implements CriteriaInterface
 * 3. Registers criteria in CriteriaRegistry
 * 4. Results are cached for performance
 *
 * ## Features:
 * - ✅ Automatic criteria discovery
 * - ✅ Attribute-based configuration
 * - ✅ Validation and error handling
 * - ✅ Performance caching
 * - ✅ Tag-based organization
 *
 * ## Usage:
 * Add this trait to your ServiceProvider:
 *
 * ```php
 * use Pixielity\Crud\Concerns\HasDiscovery;
 *
 * class AppServiceProvider extends ServiceProvider
 * {
 *     use HasDiscovery;
 *
 *     public function boot(): void
 *     {
 *         $this->discoverCriteria();
 *     }
 * }
 * ```
 *
 * ## Criteria Example:
 * ```php
 * #[AsCriteria(
 *     name: 'active',
 *     description: 'Filter only active records',
 *     tags: ['common', 'status']
 * )]
 * class ActiveCriteria implements CriteriaInterface
 * {
 *     public function apply($model, RepositoryInterface $repository)
 *     {
 *         return $model->where('status', 'active');
 *     }
 * }
 * ```
 *
 * ## How It Works:
 * ```
 * Application Boot
 *   → discoverCriteria() called
 *   → Discovery scans for #[AsCriteria]
 *   → Validates each class
 *   → Registers in CriteriaRegistry
 *   → Caches for next request
 * ```
 *
 * ## Performance:
 * - Discovery results are cached
 * - Cache is cleared on code changes
 * - No performance impact in production
 *
 * @since 1.0.0
 */
trait HasDiscovery
{
}
