# Database Attributes

This directory contains custom PHP attributes for database-related functionality.

## Available Attributes

### `#[UseRepository]` - Automatic Repository Injection

Inspired by TypeORM and MikroORM, automatically injects repository instances into service classes.

#### Basic Usage

```php
use Pixielity\Database\Attributes\UseRepository;
use App\Models\User;
use App\Repositories\UserRepository;

class UserService
{
    public function __construct(
        #[UseRepository(User::class)]
        private UserRepository $users
    ) {}

    public function createUser(array $data): User
    {
        return $this->users->create($data);
    }

    public function findUser(int $id): ?User
    {
        return $this->users->find($id);
    }
}
```

#### Multiple Repositories

```php
class OrderService
{
    public function __construct(
        #[UseRepository(Order::class)]
        private OrderRepository $orders,

        #[UseRepository(Product::class)]
        private ProductRepository $products,

        #[UseRepository(Customer::class)]
        private CustomerRepository $customers
    ) {}

    public function createOrder(int $customerId, array $items): Order
    {
        $customer = $this->customers->findOrFail($customerId);
        $products = $this->products->findMany($items);
        return $this->orders->createWithItems($customer, $products);
    }
}
```

#### Custom Repository

```php
class UserService
{
    public function __construct(
        #[UseRepository(User::class, CustomUserRepository::class)]
        private CustomUserRepository $users
    ) {}
}
```

#### How It Works

1. Uses Laravel's `ContextualAttribute` interface
2. Container automatically resolves repositories during dependency injection
3. Convention: `App\Models\User` → `App\Repositories\UserRepository`
4. No service provider configuration needed

#### Repository Convention

The attribute follows this naming convention:

- Model: `App\Models\User`
- Repository: `App\Repositories\UserRepository`

If your repository is in a different location, specify it explicitly:

```php
#[UseRepository(User::class, \Custom\Path\UserRepository::class)]
```

---

### `#[UseFactory]` - Specify Factory Class

Extends Laravel's `UseFactory` attribute to specify which factory class should be used for model instances.

#### Usage

```php
use Pixielity\Database\Attributes\UseFactory;
use Database\Factories\UserFactory;

#[UseFactory(UserFactory::class)]
class User extends Model
{
    // Model implementation
}
```

---

### `#[AsDatabaseBlueprint]` - Blueprint Macro Registration

Marks a class as containing Blueprint macros for automatic discovery and registration.

#### Usage

```php
use Pixielity\Database\Attributes\AsDatabaseBlueprint;
use Illuminate\Database\Schema\Blueprint;

#[AsDatabaseBlueprint(priority: 10)]
class CustomBlueprintMacros
{
    public function __invoke(): void
    {
        Blueprint::macro('status', function() {
            return $this->string('status', 50)->default('active');
        });
    }
}
```

## Comparison with Other ORMs

### TypeORM (TypeScript)

```typescript
@Injectable()
class UserService {
  constructor(
    @InjectRepository(User)
    private userRepository: Repository<User>
  ) {}
}
```

### MikroORM (TypeScript)

```typescript
@Injectable()
class UserService {
  constructor(
    @InjectRepository(User)
    private readonly userRepository: EntityRepository<User>
  ) {}
}
```

### Laravel (with UseRepository)

```php
class UserService
{
    public function __construct(
        #[UseRepository(User::class)]
        private UserRepository $users
    ) {}
}
```

## Benefits

- ✅ Less boilerplate code
- ✅ Type-safe repository access
- ✅ Automatic dependency resolution
- ✅ Familiar pattern from TypeORM/MikroORM
- ✅ IDE autocomplete support
- ✅ Native Laravel container integration
- ✅ No custom service provider needed

## Requirements

- Laravel 11+ (uses `ContextualAttribute`)
- Repository classes must exist or be resolvable
- Parameters must be typed with repository class
- Service classes must be resolved through container
