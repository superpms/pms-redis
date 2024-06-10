<?php

namespace pms\facade;

use pms\Facade;
use pms\redis\Driver;

/**
 * @see Driver
 * @mixin Driver
 */
class RDb extends Facade
{

    protected static function getFacadeClass(): string
    {
        return Driver::class;
    }
}