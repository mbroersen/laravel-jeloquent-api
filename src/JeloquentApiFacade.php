<?php

namespace Mbroersen\JeloquentApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mbroersen\JeloquentApi\Skeleton\SkeletonClass
 */
class JeloquentApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'jeloquent-api';
    }
}
