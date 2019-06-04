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
 * Class Report.
 */
class Report extends AbstractAPI
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
