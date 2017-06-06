<?php

/*
 * This file is part of Afftrack PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Afftrack\Modifiers;

class BaseUriModifier extends \BrianFaust\Modifiers\AbstractModifier
{
    private $uri = 'http://%s.afftrack.com/apiv4/';

    public function apply()
    {
        $this->httpClient->setOption('base_uri', sprintf(
            $this->uri, $this->httpClient->getConfig('username')
        ));

        return $this->httpClient;
    }
}
