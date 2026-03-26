# Route Attributes Investigation Summary

## Current Status

Routes defined with Pixielity attributes (`#[Get]`, `#[Post]`, etc.) are **NOT being registered** by Spatie's route-attributes package.

## What We've Confirmed

### ✅ Working Components

1. **Spatie Package**: Installed and service provider is loaded
2. **Config**: `route-attributes.enabled` is `true`
3. **Controllers Exist**: 2 packages have Controllers directories
    - `packages/FeatureFlags/src/Controllers/FeatureFlagController.php` (6 route methods)
    - `packages/Foundation/src/Controllers/RootController.php` (1 route method)
4. **Attributes Extend Spatie**: Pixielity attributes properly extend Spatie's base attributes
5. **Discovery Package**: Working and finding controller directories

### ❌ The Problem

**Namespace Resolution**: Spatie can't resolve class names because:

- Controllers are in `Pixielity\FeatureFlags\Controllers\` namespace
- Located at `/packages/FeatureFlags/src/Controllers`
- But Spatie is using `App\` namespace with `/apps/api/src` as base path

## Root Cause

When directories are provided as simple paths (integer keys), Spatie uses:

```php
// What we're providing:
[
    0 => '/packages/FeatureFlags/src/Controllers',
    1 => '/packages/Foundation/src/Controllers',
]

// What Spatie does:
- namespace: App\  (from app()->getNamespace())
- base_path: /apps/api/src  (from app()->path())
```

This causes Spatie to look for `App\Controllers\FeatureFlagController` instead of `Pixielity\FeatureFlags\Controllers\FeatureFlagController`.

## Required Solution

Provide namespace mapping in config:

```php
[
    'Pixielity\FeatureFlags' => [
        'base_path' => '/packages/FeatureFlags',
        'namespace' => 'Pixielity\FeatureFlags',
    ],
    'Pixielity\Foundation' => [
        'base_path' => '/packages/Foundation',
        'namespace' => 'Pixielity\Foundation',
    ],
]
```

## Current Implementation

The `discoverAndSetRouteAttributesDirectories()` method in `HasRoutes` trait:

- ✅ Uses Discovery facade to find controller directories
- ✅ Extracts package names from paths
- ✅ Builds namespace mapping array
- ✅ Sets config with proper structure
- ❓ **But routes still not registering** - needs debugging

## Next Steps

1. Verify the config is actually being set with namespace mapping
2. Check if Spatie is reading the updated config
3. Ensure the method is called at the right time (before Spatie boots)
4. Consider using `Discovery::finder()` if `Discovery::directories()` isn't sufficient

## Files Modified

- `packages/Framework/src/ServiceProvider/src/Concerns/HasRoutes.php`
- `apps/api/src/config/route-attributes.php`
- `packages/Discovery/src/DiscoveryBuilder.php` (added `implements()` method)
