<?php

namespace Adaptcms\FieldTimezone\Facades;

use Illuminate\Support\Facades\Facade;

class FieldTimezone extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'FieldTimezone';
    }
}
