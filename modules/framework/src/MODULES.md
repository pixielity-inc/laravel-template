# Framework Sub-Modules

This document describes all sub-modules within the Framework package.

## Module Loading Order (by priority)

Modules are loaded in priority order (lower numbers first):

| Priority | Module | Description |
|----------|--------|-------------|
| 0 | Support | Core utilities and helpers (no dependencies) |
| 1 | Container | Dependency injection utilities |
| 1 | Enum | Enhanced PHP enums |
| 2 | Database | Database and Eloquent extensions |
| 3 | Localization | Multi-language support |
| 3 | Routing | Enhanced routing utilities |
| 4 | Serializer | Data serialization |
| 5 | Crud | CRUD operations and repositories |

---

## Module Details

### Support (Priority: 0)
**Alias**: `support`  
**Dependencies**: None  
**Provider**: `Pixielity\Support\Providers\SupportServiceProvider`

Core support utilities, helpers, and base classes. This is the foundation module with no dependencies.

**Features**:
- Helper functions
- Base classes
- Utility traits
- Common interfaces

---

### Container (Priority: 1)
**Alias**: `container`  
**Dependencies**: `support`  
**Provider**: `Pixielity\Container\Providers\ContainerServiceProvider`

Dependency injection container utilities and extensions.

**Features**:
- Attribute-based binding (`#[Bind]`, `#[Tagged]`)
- Automatic class discovery
- Service provider enhancements
- Container utilities

---

### Enum (Priority: 1)
**Alias**: `enum`  
**Dependencies**: `support`  
**Provider**: None (utility module)

Enhanced PHP enums with additional functionality.

**Features**:
- Enum attributes (`#[Label]`, `#[Description]`)
- Enum utilities
- Backed enum helpers
- Enum collections

---

### Database (Priority: 2)
**Alias**: `database`  
**Dependencies**: `support`, `container`  
**Provider**: `Pixielity\Database\Providers\DatabaseServiceProvider`

Database utilities, Eloquent extensions, and attribute-based model configuration.

**Features**:
- Attribute-based models (`#[Translatable]`, `#[Searchable]`, `#[Filterable]`, `#[Sortable]`, `#[Auditable]`)
- Blueprint macros (`baseId()`)
- Model traits (HasTranslations, HasSearch, HasFilterable, HasSortable)
- Repository pattern support
- Query builder extensions

---

### Localization (Priority: 3)
**Alias**: `localization`  
**Dependencies**: `support`  
**Provider**: `Pixielity\Localization\Providers\LocalizationServiceProvider`

Multi-language support and localization utilities.

**Features**:
- Locale detection
- Translation helpers
- Multi-language routing
- Locale middleware

---

### Routing (Priority: 3)
**Alias**: `routing`  
**Dependencies**: `support`  
**Provider**: `Pixielity\Routing\Providers\RoutingServiceProvider`

Enhanced routing utilities and attribute-based route registration.

**Features**:
- Attribute-based routes
- Route utilities
- Controller helpers
- Middleware management

---

### Serializer (Priority: 4)
**Alias**: `serializer`  
**Dependencies**: `support`  
**Provider**: `Pixielity\Serializer\Providers\SerializerServiceProvider`

Data serialization and transformation utilities.

**Features**:
- Data transformation
- DTO support
- JSON serialization
- API response formatting

---

### Crud (Priority: 5)
**Alias**: `crud`  
**Dependencies**: `support`, `database`  
**Provider**: `Pixielity\Crud\Providers\CrudServiceProvider`

CRUD operations and repository pattern implementation.

**Features**:
- Repository pattern
- CRUD operations
- Data access layer
- Query abstractions

---

## Module Structure

Each module follows this structure:

```
ModuleName/
├── module.json          # Module metadata
├── composer.json        # Composer configuration
├── src/                 # Source code
│   ├── Providers/       # Service providers
│   ├── Contracts/       # Interfaces
│   ├── Traits/          # Reusable traits
│   ├── Attributes/      # PHP attributes
│   └── ...
├── tests/               # Tests
│   ├── Unit/
│   └── Feature/
└── README.md            # Module documentation
```

---

## Module.json Schema

```json
{
  "name": "ModuleName",
  "alias": "module-alias",
  "description": "Module description",
  "keywords": ["keyword1", "keyword2"],
  "priority": 0,
  "providers": [
    "Namespace\\Providers\\ServiceProvider"
  ],
  "aliases": {},
  "files": [],
  "requires": ["dependency1", "dependency2"]
}
```

### Fields:

- **name**: Human-readable module name
- **alias**: Short identifier for the module
- **description**: Brief description of module purpose
- **keywords**: Array of keywords for searchability
- **priority**: Loading order (0 = first, higher = later)
- **providers**: Array of service provider class names
- **aliases**: Facade aliases (if any)
- **files**: Additional files to load
- **requires**: Array of module aliases this module depends on

---

## Dependency Graph

```
Support (0)
├── Container (1)
│   └── Database (2)
│       └── Crud (5)
├── Enum (1)
├── Localization (3)
├── Routing (3)
└── Serializer (4)
```

---

## Adding a New Module

1. Create module directory in `modules/framework/src/`
2. Create `module.json` with appropriate metadata
3. Create `composer.json` for standalone usage
4. Implement service provider
5. Add to dependency graph
6. Update this documentation

---

## Module Best Practices

### Priority Assignment
- **0**: Core utilities with no dependencies
- **1-2**: Foundation modules (container, database)
- **3-4**: Feature modules (routing, serializer)
- **5+**: High-level modules (crud, api)

### Dependencies
- Keep dependencies minimal
- Only depend on lower-priority modules
- Avoid circular dependencies
- Document all dependencies in `requires`

### Naming
- Use PascalCase for module names
- Use kebab-case for aliases
- Keep aliases short and memorable
- Use descriptive keywords

---

## Testing Modules

Each module should have comprehensive tests:

```bash
# Test specific module
vendor/bin/phpunit modules/framework/src/Database/tests

# Test all modules
vendor/bin/phpunit modules/framework/src/*/tests
```

---

## Module Versioning

Modules follow semantic versioning:
- **Major**: Breaking changes
- **Minor**: New features (backward compatible)
- **Patch**: Bug fixes

Version is managed in `composer.json` of each module.
