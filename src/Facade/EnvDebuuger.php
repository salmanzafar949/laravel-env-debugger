<?php

namespace Salman\DbBackup\Facades;

use Illuminate\Support\Facades\Facade;

class EnvDebuuger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'EnvDebugger';
    }

}
