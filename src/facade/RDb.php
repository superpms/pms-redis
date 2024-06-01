<?php

namespace pms\facade;

use pms\Facade;
use pms\RDbManager;

/**
 * @see RDbManager
 * @mixin RDbManager
 */
class RDb extends Facade
{

    protected static function getFacadeClass(): string
    {
        return RDbManager::class;
    }
}