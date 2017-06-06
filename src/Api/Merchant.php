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
 * Class Merchant.
 */
class Merchant extends AbstractApi
{
    /** @var string */
    public $target = 'mer_merchant';

    /** @var array */
    public $methods = [
        'addMerchantBlacklist',
        'createMerchant',
        'getMerchant',
        'getMerchantBlacklist',
        'getMerchantCount',
        'getMerchantGlobalPostback',
        'getMerchantIO',
        'getMerchantStatus',
        'getMerchantTrackingTypes',
        'removeMerchantBlacklist',
        'updateMerchant',
    ];
}
