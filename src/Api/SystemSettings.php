<?php

/*
 * This file is part of Afftrack PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Afftrack\Api;

/**
 * Class SystemSettings.
 */
class SystemSettings extends AbstractApi
{
    /** @var string */
    public $target = 'system_settings';

    /** @var array */
    public $methods = [
        'getCountries',
        'getLoginDomains',
        'getRedirectReasons',
        'getStates',
        'getTimeZones',
        'getTrackingDomains',
    ];
}
