<?php

namespace talesmousinho\LaravelApiConsume\Facades;

use Illuminate\Support\Facades\Facade;

class ApiConsume extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'talesmousinho\LaravelApiConsume\ApiConsume';
    }
}
