<?php

namespace Facades\XContains\XContains\Helpers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \XContains\XContains\Helpers\Helper
 */
class Helper extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'XContains\XContains\Helpers\Helper';
    }
}
