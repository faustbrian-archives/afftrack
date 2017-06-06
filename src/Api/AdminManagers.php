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
 * Class AdminManagers.
 */
class AdminManagers extends AbstractApi
{
    /** @var string */
    public $target = 'admin_managers';

    /** @var array */
    public $methods = [
        'getAdmins',
        'getAdminStatus',
    ];
}
