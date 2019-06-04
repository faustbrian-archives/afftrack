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

use Plients\Http\HttpResponse;
use Plients\Http\PendingHttpRequest;

abstract class AbstractAPI
{
    /**
     * @var \Plients\Http\PendingHttpRequest
     */
    protected $client;

    /**
     * Create a new API class instance.
     *
     * @param \Plients\Http\PendingHttpRequest $client
     */
    public function __construct(PendingHttpRequest $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $method
     * @param array  $arguments
     *
     * @throws \BadMethodCallException
     *
     * @return \Plients\Http\HttpResponse
     */
    public function __call(string $method, array $arguments): HttpResponse
    {
        if (!in_array($method, $this->methods, true)) {
            throw new \BadMethodCallException("Method [{$method}] does not exist.");
        }

        return $this->client->post('/', $parameters + [
            'target' => $this->target,
            'action' => $method,
        ]);
    }
}
