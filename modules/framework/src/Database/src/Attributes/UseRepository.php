<?php

declare(strict_types=1);

namespace Pixielity\Database\Attributes;

use Attribute;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Container\ContextualAttribute;

/**
 * UseRepository Attribute - Automatic Repository Injection.
 *
 * Inspired by TypeORM and MikroORM, this attribute automatically injects
 * repository instances into service classes based on the entity/model class.
 * Uses Laravel's contextual attribute system for seamless container integration.
 *
 * ## Features:
 * - Automatic repository resolution and injection
 * - Type-safe repository access
 * - Convention-based repository discovery
 * - Support for custom repository classes
 * - Native Laravel container integration
 * - IDE-friendly with proper type hints
 *
 * ## How It Works:
 * 1. Add #[UseRepository(Model::class)] to a constructor parameter
 * 2. Laravel's container automatically resolves the repository
 * 3. Repository is injected when the service is instantiated
 *
 * ## Repository Resolution:
 * - Looks for {Model}Repository class
 * - Falls back to generic Repository<Model>
 * - Supports custom repository classes
 *
 * ## Examples:
 *
 * ### Basic Usage (Constructor Injection):
 * ```php
 * use Pixielity\Database\Attributes\UseRepository;
 * use App\Models\User;
 * use App\Repositories\UserRepository;
 *
 * class UserService
 * {
 *     public function __construct(
 *         #[UseRepository(User::class)]
 *         private UserRepository $users
 *     ) {}
 *
 *     public function createUser(array $data): User
 *     {
 *         return $this->users->create($data);
 *     }
 * }
 * ```
 *
 * ### Multiple Repositories:
 * ```php
 * class OrderService
 * {
 *     public function __construct(
 *         #[UseRepository(Order::class)]
 *         private OrderRepository $orders,
 *
 *         #[UseRepository(Product::class)]
 *         private ProductRepository $products,
 *
 *         #[UseRepository(Customer::class)]
 *         private CustomerRepository $customers
 *     ) {}
 *
 *     public function createOrder(int $customerId, array $items): Order
 *     {
 *         $customer = $this->customers->findOrFail($customerId);
 *         $products = $this->products->findMany($items);
 *         return $this->orders->createWithItems($customer, $products);
 *     }
 * }
 * ```
 *
 * ### Custom Repository Class:
 * ```php
 * class UserService
 * {
 *     public function __construct(
 *         #[UseRepository(User::class, CustomUserRepository::class)]
 *         private CustomUserRepository $users
 *     ) {}
 * }
 * ```
 *
 * ### Mixed Dependencies:
 * ```php
 * class UserService
 * {
 *     public function __construct(
 *         #[UseRepository(User::class)]
 *         private UserRepository $users,
 *
 *         private LoggerInterface $logger,
 *         private EventDispatcher $events
 *     ) {
 *         // All dependencies are automatically injected
 *     }
 * }
 * ```
 *
 * ## Repository Interface:
 * Repositories should implement standard CRUD methods:
 * ```php
 * interface RepositoryInterface
 * {
 *     public function find(int $id): ?Model;
 *     public function findOrFail(int $id): Model;
 *     public function all(): Collection;
 *     public function create(array $data): Model;
 *     public function update(Model $model, array $data): Model;
 *     public function delete(Model $model): bool;
 * }
 * ```
 *
 * ## Comparison with TypeORM/MikroORM:
 *
 * ### TypeORM:
 * ```typescript
 * @Injectable()
 * class UserService {
 *   constructor(
 *     @InjectRepository(User)
 *     private userRepository: Repository<User>
 *   ) {}
 * }
 * ```
 *
 * ### MikroORM:
 * ```typescript
 * @Injectable()
 * class UserService {
 *   constructor(
 *     @InjectRepository(User)
 *     private readonly userRepository: EntityRepository<User>
 *   ) {}
 * }
 * ```
 *
 * ### Laravel (with this attribute):
 * ```php
 * class UserService
 * {
 *     public function __construct(
 *         #[UseRepository(User::class)]
 *         private UserRepository $users
 *     ) {}
 * }
 * ```
 *
 * ## Benefits:
 * - ✅ Less boilerplate code
 * - ✅ Cleaner service classes
 * - ✅ Type-safe repository access
 * - ✅ Automatic dependency resolution
 * - ✅ Familiar pattern from TypeORM/MikroORM
 * - ✅ IDE autocomplete support
 * - ✅ Native Laravel container integration
 * - ✅ No custom service provider needed
 *
 * ## Requirements:
 * - Repository class must exist or be resolvable
 * - Parameter must be typed with repository class
 * - Service class must be resolved through container
 * - Laravel 11+ (uses ContextualAttribute)
 *
 * @see \Pixielity\Database\Repository Base repository class
 * @see \Illuminate\Contracts\Container\ContextualAttribute
 * @since 1.0.0
 */
#[Attribute(Attribute::TARGET_PARAMETER)]
class UseRepository implements ContextualAttribute
{
    /**
     * Create a new UseRepository attribute instance.
     *
     * @param class-string              $entity     The entity/model class name
     * @param class-string<object>|null $repository Optional custom repository class
     */
    public function __construct(
        public readonly string $entity,
        public readonly ?string $repository = null,
    ) {}

    /**
     * Resolve the repository instance from the container.
     *
     * This method is called by Laravel's container when resolving dependencies.
     *
     * @param  self      $attribute The attribute instance
     * @param  Container $container The service container
     * @return object The resolved repository instance
     */
    public static function resolve(self $attribute, Container $container): object
    {
        $repositoryClass = $attribute->getRepositoryClass();

        // Check if repository class exists
        if (! class_exists($repositoryClass)) {
            throw new \RuntimeException(
                "Repository class [{$repositoryClass}] not found for entity [{$attribute->entity}]. " .
                "Create the repository class or specify a custom repository in the UseRepository attribute."
            );
        }

        // Resolve from container
        return $container->make($repositoryClass);
    }

    /**
     * Get the repository class name.
     *
     * Resolves the repository class based on entity name or custom repository.
     *
     * @return class-string<object>
     */
    protected function getRepositoryClass(): string
    {
        // Use custom repository if provided
        if ($this->repository !== null) {
            return $this->repository;
        }

        // Convention: {Entity}Repository
        $entityClass = class_basename($this->entity);
        $namespace = str_replace('\\Models\\', '\\Repositories\\', $this->entity);
        $namespace = str_replace('\\' . $entityClass, '', $namespace);

        return $namespace . '\\' . $entityClass . 'Repository';
    }
}
