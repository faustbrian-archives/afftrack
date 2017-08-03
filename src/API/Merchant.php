<?php

declare(strict_types=1);

/*
 * This file is part of Afftrack PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Afftrack\API;

/**
 * Class Merchant.
 */
class Merchant extends AbstractAPI
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
