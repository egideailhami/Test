<?php

namespace grittekno\Test;

use Illuminate\Support\Facades\Facade;

/**
 *
 */
class TestFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'grittekno.test';
    }
}