<?php

declare(strict_types=1);

namespace Pixielity\Database\Enums;

use Pixielity\Enum\Attributes\Description;
use Pixielity\Enum\Attributes\Label;
use Pixielity\Enum\Enum;

/**
 * Search Engine Enum.
 *
 * Defines available search engines for Laravel Scout.
 *
 * @method static COLLECTION() Returns the COLLECTION enum instance
 * @method static DATABASE() Returns the DATABASE enum instance
 * @method static MEILISEARCH() Returns the MEILISEARCH enum instance
 * @method static ALGOLIA() Returns the ALGOLIA enum instance
 * @method static TYPESENSE() Returns the TYPESENSE enum instance
 *
 * @see https://laravel.com/docs/scout#configuration
 * @since 1.0.0
 */
enum SearchEngine: string
{
    use Enum;

    /**
     * Database/Collection driver (default).
     */
    #[Label('Collection')]
    #[Description("Uses Laravel's database for search. No external dependencies. Good for small datasets and development.")]
    case COLLECTION = 'collection';

    /**
     * Database driver (alias for COLLECTION).
     */
    #[Label('Database')]
    #[Description("Uses Laravel's database for search (alias for COLLECTION).")]
    case DATABASE = 'database';

    /**
     * Meilisearch driver.
     */
    #[Label('Meilisearch')]
    #[Description('Fast, typo-tolerant search engine. Requires Meilisearch server.')]
    case MEILISEARCH = 'meilisearch';

    /**
     * Algolia driver.
     */
    #[Label('Algolia')]
    #[Description('Powerful hosted search service. Requires Algolia account.')]
    case ALGOLIA = 'algolia';

    /**
     * Typesense driver.
     */
    #[Label('Typesense')]
    #[Description('Open-source alternative to Algolia. Requires Typesense server.')]
    case TYPESENSE = 'typesense';

    /**
     * Get the engine name for Scout configuration.
     *
     * @return string Engine name
     */
    public function getEngineName(): string
    {
        return $this->value;
    }

    /**
     * Check if this is a database-based engine.
     *
     * @return bool True if database-based
     */
    public function isDatabase(): bool
    {
        return in_array($this->value, [self::COLLECTION->value, self::DATABASE->value], true);
    }

    /**
     * Check if this engine requires external service.
     *
     * @return bool True if requires external service
     */
    public function requiresExternalService(): bool
    {
        return ! $this->isDatabase();
    }
}
