<?php

namespace LibertyTechnologies\Components\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LibertyTechnologies\Components\Components
 */
class Components extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LibertyTechnologies\Components\Components::class;
    }
}
