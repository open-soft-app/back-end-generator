<?php

namespace OpenSoftApp\BackEndGenerator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \OpenSoftApp\BackEndGenerator\BackEndGenerator
 */
class BackEndGeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'back-end-generator';
    }
}
