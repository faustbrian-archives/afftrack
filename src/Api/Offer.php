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
 * Class Offer.
 */
class Offer extends AbstractApi
{
    /** @var string */
    public $target = 'offer_offer';

    /** @var array */
    public $methods = [
        'addBrowserLanguageBlocked',
        'addOfferBlacklist',
        'addOfferBrowserLanguageAllowed',
        'addOfferCategory',
        'addOfferCountry',
        'addOfferCustomAffiliateCap',
        'addOfferCustomAffiliatePayout',
        'addOfferDeviceType',
        'addOfferOptimization',
        'addOfferPrivate',
        'addOfferSelect',
        'addOfferSelectPending',
        'addOfferState',
        'addOfferTrafficType',
        'createBannerCreative',
        'createOffer',
        'createOfferSchedule',
        'createOfferScheduleDaily',
        'createOfferScheduleRate',
        'createTextCreative',
        'getBrowserLanguages',
        'getConvertsOn',
        'getCreativeCounts',
        'getCreatives',
        'getDeviceTypes',
        'getOffer',
        'getOfferAffiliates',
        'getOfferBlacklist',
        'getOfferBrowserLanguageAllowed',
        'getOfferBrowserLanguageBlocked',
        'getOfferCategories',
        'getOfferCategory',
        'getOfferCount',
        'getOfferCountry',
        'getOfferCustomAffiliateCap',
        'getOfferCustomAffiliatePayout',
        'getOfferDeviceType',
        'getOfferOptimization',
        'getOfferPrivate',
        'getOfferSchedule',
        'getOfferSelect',
        'getOfferSelectPending',
        'getOfferState',
        'getOfferStatus',
        'getOfferTargeting',
        'getOfferTrafficType',
        'getOfferTypes',
        'getPixelTypes',
        'getTestLink',
        'getTrackingTypes',
        'getTrafficTypes',
        'removeOfferBanner',
        'removeOfferBlacklist',
        'removeOfferBrowserLanguageAllowed',
        'removeOfferBrowserLanguageBlocked',
        'removeOfferCountry',
        'removeOfferCustomAffiliateCap',
        'removeOfferCustomAffiliatePayout',
        'removeOfferDeviceType',
        'removeOfferOptimization',
        'removeOfferPrivate',
        'removeOfferSchedule',
        'removeOfferScheduleRate',
        'removeOfferSelect',
        'removeOfferSelectPending',
        'removeOfferState',
        'removeOfferTrafficType',
        'updateOffer',
        'updateTrackingLink',
        'uploadOfferBanner',
    ];
}
