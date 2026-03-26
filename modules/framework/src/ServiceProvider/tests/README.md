# ServiceProvider Package Tests

Comprehensive test suite for the ServiceProvider package.

## Test Structure

```
tests/
├── Unit/                           # Unit tests for individual components
│   ├── HasDebuggingTest.php       # Tests for debugging trait
│   ├── HasDeferredLoadingTest.php # Tests for deferred loading
│   ├── HasModuleConfigurationTest.php
│   ├── HasModuleDependenciesTest.php
│   ├── HasModuleLifecycleTest.php
│   ├── ModuleLifecycleEventTest.php
│   ├── ServiceProviderInterfaceTest.php
│   └── TerminatableInterfaceTest.php
├── Feature/                        # Integration tests
│   └── ServiceProviderIntegrationTest.php
├── Stubs/                          # Test doubles and fixtures
│   ├── TestServiceProvider.php
│   ├── DeferredServiceProvider.php
│   ├── NonDeferredServiceProvider.php
│   ├── DependentServiceProvider.php
│   ├── InvalidServiceProvider.php
│   ├── TerminatableServiceProvider.php
│   └── FullFeatureServiceProvider.php
├── TestCase.php                    # Base test case
└── README.md                       # This file
```

## Running Tests

### Run All Tests

```bash
cd packages/ServiceProvider
../../vendor/bin/phpunit
```

### Run Unit Tests Only

```bash
../../vendor/bin/phpunit --testsuite=Unit
```

### Run Feature Tests Only

```bash
../../vendor/bin/phpunit --testsuite=Feature
```

### Run Specific Test File

```bash
../../vendor/bin/phpunit tests/Unit/HasDebuggingTest.php
```

### Run with Coverage

```bash
../../vendor/bin/phpunit --coverage-html coverage
```

## Test Coverage

### Contracts

- ✅ ServiceProviderInterface
- ✅ Terminatable

### Enums

- ✅ ModuleLifecycleEvent

### Traits

- ✅ HasDebugging
- ✅ HasDeferredLoading
- ✅ HasModuleConfiguration
- ✅ HasModuleLifecycle
- ⚠️ HasHealthChecks (requires Health module)
- ⚠️ HasPublishing (requires filesystem setup)
- ⚠️ HasResourceDiscovery (requires filesystem setup)
- ⚠️ HasResourceLoading (requires filesystem setup)
- ⚠️ HasScheduledTasks (requires scheduler setup)

### Providers

- ✅ ServiceProvider (integration tests)

## Test Stubs

Test stubs are located in `tests/Stubs/` and provide test doubles for various scenarios:

- **TestServiceProvider**: Basic provider for general testing
- **DeferredServiceProvider**: Tests deferred loading
- **NonDeferredServiceProvider**: Tests immediate loading
- **DependentServiceProvider**: Tests dependency validation
- **InvalidServiceProvider**: Tests validation failures
- **TerminatableServiceProvider**: Tests termination callbacks
- **FullFeatureServiceProvider**: Integration testing with all features

## Writing New Tests

### Unit Test Template

```php
<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Unit;

use Pixielity\Support\Str;
use Pixielity\ServiceProvider\Tests\TestCase;

class MyTest extends TestCase
{
    public function test_something(): void
    {
        // Arrange
        $provider = new TestServiceProvider($this->app);

        // Act
        $result = $provider->doSomething();

        // Assert
        $this->assertTrue($result);
    }
}
```

### Feature Test Template

```php
<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Feature;

use Pixielity\Support\Str;
use Pixielity\ServiceProvider\Tests\TestCase;

class MyIntegrationTest extends TestCase
{
    public function test_full_workflow(): void
    {
        // Test complete workflow
        $provider = new FullFeatureServiceProvider($this->app);
        $provider->register();
        $provider->boot();

        $this->assertTrue(true);
    }
}
```

## Mocking

### Mocking Events

```php
use Illuminate\Support\Facades\Event;

Event::fake();

// Your code that fires events

Event::assertDispatched(ModuleLifecycleEvent::BOOTING());
```

### Mocking Logs

```php
use Illuminate\Support\Facades\Log;

Log::spy();

// Your code that logs

Log::shouldHaveReceived('debug')
    ->once()
    ->with('[Module: TestModule] Test message', []);
```

## Best Practices

1. **Isolation**: Each test should be independent
2. **Naming**: Use descriptive test names that explain what is being tested
3. **AAA Pattern**: Arrange, Act, Assert
4. **One Assertion**: Focus on testing one thing per test
5. **Mock External Dependencies**: Don't rely on external services
6. **Clean Up**: Use tearDown() to clean up resources

## Continuous Integration

Tests are automatically run on:

- Pull requests
- Commits to main branch
- Release tags

## Troubleshooting

### Tests Fail with "Class not found"

Make sure you've run:

```bash
composer install
composer dump-autoload
```

### Memory Issues

Increase PHP memory limit:

```bash
php -d memory_limit=512M ../../vendor/bin/phpunit
```

## Contributing

When adding new features to the ServiceProvider package:

1. Write tests first (TDD approach)
2. Ensure all existing tests pass
3. Add integration tests for new features
4. Update this README if needed
5. Aim for >80% code coverage

## Resources

- [PHPUnit Documentation](https://phpunit.de/documentation.html)
- [Orchestra Testbench](https://github.com/orchestral/testbench)
- [Mockery Documentation](http://docs.mockery.io/)
- [Laravel Testing](https://laravel.com/docs/testing)
