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

class TargetModifier extends \BrianFaust\Modifiers\AbstractModifier
{
    public function apply()
    {
        $this->httpClient->addQuery('target', $this->httpClient->arguments['target']);

        return $this->httpClient;
    }
}
