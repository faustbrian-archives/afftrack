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
 * Class AbstractApi.
 */
abstract class AbstractApi extends \BrianFaust\AbstractApi
{
    /**
     * @param string $method
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call(string $method, array $arguments)
    {
        if (in_array($method, $this->methods)) {
            return $this->setFormParameters(array_merge([
                'action' => $method,
            ], $parameters))->post(null);
        }

        return call_user_func_array([$this->httpClient, $method], $arguments);
    }
}
