<?php

/*
 * This file is part of Afftrack PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Afftrack;

/**
 * Class Client.
 */
class Client extends \BrianFaust\AbstractClient
{
    protected function getServiceProvider()
    {
        return ServiceProvider::class;
    }
}
