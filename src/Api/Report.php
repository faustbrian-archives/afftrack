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
 * Class Report.
 */
class Report extends AbstractApi
{
    /** @var string */
    public $target = 'report';

    /** @var array */
    public $methods = [
        'getAffiliatePostbackReport',
        'getClickReport',
        'getEventReport',
        'getLeadReport',
        'getMerchantPostbackReport',
        'getOfferRevenueReport',
        'getRedirectHistoryReport',
    ];
}
