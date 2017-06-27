<?php

namespace MoltenCore\LaravelMailjet\Facades;

use Illuminate\Support\Facades\Facade;

class Mailjet extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Mailjet';
    }
}
