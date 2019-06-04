<?php

declare(strict_types=1);

/*
 * This file is part of Afftrack PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Afftrack\API;

/**
 * Class SystemTools.
 */
class SystemTools extends AbstractAPI
{
    /** @var string */
    public $target = 'system_settings';

    /** @var array */
    public $methods = [
        'addIspBlacklist',
        'addProxyScoreOverride',
        'addUnsubscribeEmail',
        'addWhitelistIp',
        'getIspBlacklist',
        'getProxyScoreOverrides',
        'getUnsubscribeEmails',
        'getWhitelistIps',
        'removeIspBlacklist',
        'removeProxyScoreOverrideAll',
        'removeUnsubscribeEmail',
        'removeWhitelistIp',
    ];
}
