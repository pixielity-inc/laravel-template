<?php

declare(strict_types=1);

namespace Pixielity\Database\Scopes;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder as BuilderBase;
use Illuminate\Database\Eloquent\Model as ModelBase;
use Illuminate\Database\Eloquent\SoftDeletingScope as BaseSoftDeletingScope;
use Override;

/**
 * SoftDeleteScope.
 *
 * A global scope to apply soft delete functionality on models.
 * This scope ensures only non-deleted records are queried by default.
 */
#[Scope]
class SoftDeleteScope extends BaseSoftDeletingScope
{
    /**
     * apply the scope to a given Eloquent query builder.
     *
     * @param  BuilderBase<ModelBase>  $builder
     */
    public function apply(BuilderBase $builder, ModelBase $model): void
    {
        if ($model->isSoftDeleteEnabled()) {
            $builder->whereNull($model->getQualifiedDeletedAtColumn());
        }
    }
}
