# Laravel Template - Production-Ready Headless API Backend

Production-ready Laravel 13 template with Docker, Redis, PostgreSQL, and comprehensive tooling for building headless API backends.

## Features

- Laravel 13 with PHP 8.4
- Production-grade configuration for headless API
- Docker infrastructure (PostgreSQL, Redis, MinIO, Mailpit, Meilisearch, Reverb)
- Token-based authentication (Sanctum ready)
- Code quality tools (Pint, Rector, PHPStan, PHPInsights)
- Modular architecture with nwidart/laravel-modules
- Automated environment setup

## Quick Start

### 1. Create from Template

```bash
# Using GitHub CLI
gh repo create my-api --template pixielity-inc/laravel-template --clone

# Or using Composer
composer create-project pixielity/laravel-template my-api

# Or clone directly
git clone https://github.com/pixielity-inc/laravel-template.git my-api
cd my-api
```

### 2. Setup Environment

```bash
# Quick setup (env files + dependencies + key generation)
composer setup:quick

# Review and update environment files
# - environments/.env (application config)
# - environments/.env.docker (Docker infrastructure)
```

### 3. Start Docker Services

```bash
# Start all Docker containers
composer docker:up

# Check container status
composer docker:ps

# View logs
composer docker:logs
```

### 4. Run Migrations

```bash
# Run database migrations
php artisan migrate

# Or use the full setup (includes docker:up and migrate)
composer setup
```

### 5. Start Development Server

```bash
# Traditional Laravel server
composer dev:traditional

# Or with Octane (FrankenPHP)
composer octane
```

## Setup Scripts

- `composer setup:quick` - Setup env files, install dependencies, generate key (no Docker/migrations)
- `composer setup:env` - Setup environment files only
- `composer setup` - Full setup: env + docker + dependencies + migrations
- `composer docker:up` - Start Docker containers
- `composer docker:down` - Stop Docker containers
- `composer docker:restart` - Restart Docker containers
- `composer docker:ps` - Show container status
- `composer docker:logs` - Show container logs

## Development

```bash
# Start development server
composer dev:traditional        # Laravel built-in server
composer octane                 # Octane with FrankenPHP

# Code quality
composer format                 # Format code with Pint
composer refactor              # Refactor with Rector
composer analyse               # Static analysis with PHPStan
composer quality:fix           # Run all quality tools

# Testing
composer test                  # Run tests
```

## Docker Services

The template includes the following Docker services:

- **PostgreSQL** - Primary database (port 5432)
  - **pgAdmin** - PostgreSQL admin UI at http://localhost:5050
  - Login: admin@admin.com / admin
  - Pre-configured with "Laravel PostgreSQL" server connection
- **Redis** - Cache, session, and queue (port 6379)
- **MinIO** - S3-compatible storage (port 9000, console 9001)
- **Mailpit** - Email testing (SMTP 1025, UI 8025)
- **Meilisearch** - Search engine (port 7700)
- **Reverb** - WebSocket server (port 6001)

## Configuration

### Environment Files

- `environments/.env` - Application configuration
- `environments/.env.docker` - Docker infrastructure configuration
- Symlinks created automatically:
  - `.env` → `environments/.env`
  - `docker/.env.docker` → `environments/.env.docker`

### Production Defaults

- **Auth**: Sanctum (token-based API authentication)
- **Database**: PostgreSQL
- **Cache**: Redis
- **Session**: Redis
- **Queue**: Redis
- **Storage**: S3 (MinIO)
- **Mail**: SMTP (Mailpit for development)

## API Features

- CORS configuration
- Security headers (.htaccess)
- Rate limiting ready
- API versioning support
- Robots.txt configured for API (disallow all)

## Code Quality Tools

```bash
composer format              # Laravel Pint (code formatting)
composer format:test         # Check formatting without changes
composer refactor           # Rector (automated refactoring)
composer refactor:dry       # Dry run refactoring
composer analyse            # PHPStan (static analysis)
composer analyse:baseline   # Generate PHPStan baseline
composer insights           # PHP Insights (code quality)
composer insights:fix       # Fix issues with PHP Insights
composer quality            # Run all checks
composer quality:fix        # Run all fixes
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
