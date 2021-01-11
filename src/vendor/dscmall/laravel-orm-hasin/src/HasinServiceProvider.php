<?php

namespace Illuminate\Dscmall\Hasin;

use Illuminate\Dscmall\Hasin\Database\Eloquent\Builder;
use Illuminate\Dscmall\Hasin\Database\Eloquent\BuilderMixin;
use Illuminate\Dscmall\Hasin\Database\Eloquent\RelationMixin;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class HasinServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Eloquent\Builder混入宏，提供whereHasIn系列实现
        Builder::mixin(new BuilderMixin());
        // Eloquent\Relation混入宏，对whereHasIn底层提供支持
        Relation::mixin(new RelationMixin());
    }
}
