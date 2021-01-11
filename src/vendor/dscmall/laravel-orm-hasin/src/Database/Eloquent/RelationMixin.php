<?php

namespace Illuminate\Dscmall\Hasin\Database\Eloquent;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;
use Illuminate\Database\Eloquent\Relations\MorphOneOrMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class RelationMixin
{
    public function getRelationInQuery(): Closure
    {
        /**
         * @param  \Illuminate\Database\Eloquent\Builder $query
         * @param  \Illuminate\Database\Eloquent\Builder $parentQuery
         * @param  array|mixed $columns
         * @return \Illuminate\Database\Eloquent\Builder
         */
        return function (Builder $query, Builder $parentQuery, $columns = ['*']): Builder {
            // Abstract Relation
            $relation = function (Builder $query, Builder $parentQuery, $columns = ['*']): Builder {
                /** @var Relation $this */
                $columns = $columns == ['*'] ? $this->getExistenceCompareKey() : $columns;
                return $query->select($columns);
            };
            $hasOneOrMany = function (Builder $query, Builder $parentQuery, $columns = ['*']) use ($relation): Builder {
                return $relation($query, $parentQuery, $columns);
            };
            $morphOneOrMany = function (Builder $query, Builder $parentQuery, $columns = ['*']) use ($hasOneOrMany): Builder {
                /** @var MorphOneOrMany $this */
                return $hasOneOrMany($query, $parentQuery, $columns)->where(
                    $query->qualifyColumn($this->getMorphType()), $this->morphClass
                );
            };
            // Entity Relation
            // BelongsTo (extend Relation, overload)
            $belongsTo = function (Builder $query, Builder $parentQuery, $columns = ['*']): Builder {
                /** @var BelongsTo $this */
                $columns = $columns == ['*'] ? $query->qualifyColumn($this->ownerKey) : $columns;

                return $query->select($columns);
            };
            // BelongsToMany (extend Relation, iteration)
            $belongsToMany = function (Builder $query, Builder $parentQuery, $columns = ['*']) use ($relation): Builder {
                /** @var BelongsToMany $this */
                $this->performJoin($query);

                return $relation($query, $parentQuery, $columns);
            };
            // HasMany (extend HasOneOrMany, inherit)
            $hasMany = function (Builder $query, Builder $parentQuery, $columns = ['*']) use ($hasOneOrMany): Builder {
                return $hasOneOrMany($query, $parentQuery, $columns);
            };
            // HasManyThrough (extend Relation, overload)
            $hasManyThrough = function (Builder $query, Builder $parentQuery, $columns = ['*']): Builder {
                /** @var HasManyThrough $this */
                $columns = $columns == ['*'] ? $this->getQualifiedFirstKeyName() : $columns;
//                 if ($parentQuery->getQuery()->from === $query->getQuery()->from) {
                // TODO
//                     return $this->getRelationExistenceQueryForSelfRelation($query, $parentQuery, $columns);
//                 }

//                 if ($parentQuery->getQuery()->from === $this->throughParent->getTable()) {
                // TODO
//                     return $this->getRelationExistenceQueryForThroughSelfRelation($query, $parentQuery, $columns);
//                 }

                $this->performJoin($query);

                return $query->select($columns);
            };
            // HasOne (extend HasOneOrMany, inherit)
            $hasOne = function (Builder $query, Builder $parentQuery, $columns = ['*']) use ($hasOneOrMany): Builder {
                return $hasOneOrMany($query, $parentQuery, $columns);
            };
            // HasOneThrough (extend HasManyThrough, inherit)
            $hasOneThrough = function (Builder $query, Builder $parentQuery, $columns = ['*']) use ($hasManyThrough): Builder {
                return $hasManyThrough($query, $parentQuery, $columns);
            };
            // MorphMany (extend MorphOneOrMany, inherit)
            $morphMany = function (Builder $query, Builder $parentQuery, $columns = ['*']) use ($morphOneOrMany): Builder {
                return $morphOneOrMany($query, $parentQuery, $columns);
            };
            // MorphOne (extend MorphOneOrMany, inherit)
            $morphOne = function (Builder $query, Builder $parentQuery, $columns = ['*']) use ($morphOneOrMany): Builder {
                return $morphOneOrMany($query, $parentQuery, $columns);
            };
            // MorphTo (extend BelongsTo, inherit)
            $morphTo = function (Builder $query, Builder $parentQuery, $columns = ['*']) use ($belongsTo): Builder {
                return $belongsTo($query, $parentQuery, $columns);
            };
            // MorphToMany (extend BelongsToMany, iteration)
            $morphToMany = function (Builder $query, Builder $parentQuery, $columns = ['*']) use ($belongsToMany): Builder {
                /** @var MorphToMany $this */
                return $belongsToMany($query, $parentQuery, $columns)->where(
                    $this->table . '.' . $this->morphType, $this->morphClass
                );
            };
            /* After all the above code is abbreviated, you can clearly see the inheritance relationship, which perfectly fits the inheritance structure of the original framework */

            /**
             * 上面的这些方法本应该是期望存在各个类中
             * $belongsTo：BelongsTo::getRelationInQuery
             * $hasManyThrough：HasManyThrough::getRelationInQuery
             * $relation：Relation::getRelationInQuery
             * ……
             * 本方法getRelationInQuery是对应getRelationExistenceQuery，都是对QueriesRelationships的实现底层支持
             * 但是框架的代码没法去写，虽然提供mixin混入，但是又因为各个关联类中存在继承，mixin无法支持针对继承类的方法单独混入
             * （有点绕，去实践一下就明白了），所以采用闭包的方式模拟方法继承（这种实现方式真的是灵光一闪）
             * 于是乎就定义好了方法之后，根据当前类名来进行动态函数调用
             * 这一套实现我愿称之为最强！！！
             */
            $relationName = explode('\\', get_class($this));
            $relationName = Arr::last($relationName);
            $relationName = (string)Str::camel($relationName);
            return ${$relationName}($query, $parentQuery, $columns);
        };
    }

    public function getRelationWhereInKey(): Closure
    {
        return function (): string {
            $relation = function (): string {
                /** @var Relation $this */
                return $this->getQualifiedParentKeyName();
            };
            $hasOneOrMany = function () use ($relation): string {
                return $relation();
            };
            $morphOneOrMany = function () use ($hasOneOrMany): string {
                return $hasOneOrMany();
            };

            $belongsTo = function (): string {
                /** @var BelongsTo $this */
                return $this->getQualifiedForeignKeyName();
            };
            $belongsToMany = function () use ($relation): string {
                return $relation();
            };
            $hasMany = function () use ($hasOneOrMany): string {
                return $hasOneOrMany();
            };
            $hasManyThrough = function (): string {
                /** @var HasManyThrough $this */
                return $this->getQualifiedLocalKeyName();
            };
            $hasOne = function () use ($hasOneOrMany): string {
                return $hasOneOrMany();
            };
            $hasOneThrough = function () use ($hasManyThrough): string {
                return $hasManyThrough();
            };
            $morphMany = function () use ($morphOneOrMany): string {
                return $morphOneOrMany();
            };
            $morphOne = function () use ($morphOneOrMany): string {
                return $morphOneOrMany();
            };
            $morphTo = function () use ($belongsTo): string {
                return $belongsTo();
            };
            $morphToMany = function () use ($belongsToMany): string {
                return $belongsToMany();
            };

            $relationName = explode('\\', get_class($this));
            $relationName = Arr::last($relationName);
            $relationName = (string)Str::camel($relationName);

            return ${$relationName}();
        };
    }
}
