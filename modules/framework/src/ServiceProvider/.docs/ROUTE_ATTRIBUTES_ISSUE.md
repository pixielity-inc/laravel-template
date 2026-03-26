# Route Attributes Not Being Registered

## Issue

Controllers with Pixielity route attributes (`#[Get]`, `#[Post]`, etc.) are not being registered as routes, even though:

- ✅ Spatie's `RouteAttributesServiceProvider` is loaded
- ✅ Config `route-attributes.enabled` is `true`
- ✅ Config `route-attributes.directories` contains the correct Controller directories
- ✅ Controllers exist with proper route attributes
- ✅ Pixielity attributes extend Spatie's attributes

## Investigation Results

### 1. Package Status

```
Spatie RouteAttributes loaded: YES
Config enabled: YES
Config directories: 2
  - /packages/FeatureFlags/src/Controllers
  - /packages/Foundation/src/Controllers
```

### 2. Controllers Found

- `FeatureFlagController.php` - Has 6 route methods with `#[Get]`, `#[Post]`, `#[Delete]`
- `RootController.php` - Has 1 route method with `#[Get]`

### 3. Attributes Used

Controllers use **Pixielity custom attributes** that extend Spatie's:

```php
use Pixielity\Attributes\Attributes\Routing\Get;
use Pixielity\Attributes\Attributes\Routing\Post;
use Pixielity\Attributes\Attributes\Routing\Delete;

// These extend:
class Get extends SpatieGet { ... }
class Post extends SpatiePost { ... }
class Delete extends SpatieDelete { ... }
```

### 4. Routes Registered

```
Routes with features: 0
```

## Root Cause

Spatie's route-attributes package scans for its own attribute classes by default. When we extend those attributes with custom classes, Spatie doesn't recognize them unless configured to do so.

## Possible Solutions

### Option 1: Configure Spatie to Recognize Extended Attributes

Check if Spatie's package has a configuration option to scan for extended attribute classes.

### Option 2: Use Spatie Attributes Directly

Change controllers to use Spatie's attributes directly instead of Pixielity extended versions.

### Option 3: Manual Route Registration

Register routes manually in service providers instead of relying on attribute scanning.

### Option 4: Custom Route Scanner

Implement our own route scanner that recognizes Pixielity attributes and registers them.

## Next Steps

1. Check Spatie's documentation for extending attributes
2. Test with Spatie's native attributes to confirm they work
3. Implement the chosen solution

## Files Involved

- `packages/FeatureFlags/src/Controllers/FeatureFlagController.php`
- `packages/Foundation/src/Controllers/RootController.php`
- `packages/Framework/src/Attributes/src/Attributes/Routing/*.php`
- `apps/api/src/config/route-attributes.php`
- `packages/Framework/src/ServiceProvider/src/Concerns/HasRoutes.php`
