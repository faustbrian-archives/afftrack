<?php

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
 * Class Affiliate.
 */
class Affiliate extends AbstractAPI
{
    /** @var string */
    public $target = 'aff_affiliate';

    /** @var array */
    public $methods = [
        'affiliatePostback',
        'createAffiliate',
        'createAffiliateEmailBlast',
        'getAffiliate',
        'getAffiliateCount',
        'getAffiliateEmailBlastFrom',
        'getAffiliateEmailBlastWho',
        'getAffiliateEmails',
        'getAffiliatePaymentMethods',
        'getAffiliatePaymentTerms',
        'getAffiliateStatus',
        'getAffiliateTypes',
        'getAffiliateWebsite',
        'getOfferFeedStatus',
        'updateAffiliate',
        'updateAffiliateBalance',
        'updateAffiliateEmail',
        'updateAffiliatePrivateOverride',
        'updateAffiliateSelectOverride',
        'updateAffiliateWebsite',
        'updateOfferFeed',
    ];
}
