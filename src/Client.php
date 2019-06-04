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

namespace Plients\Afftrack;

use Plients\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $key;

    /**
     * Create a new Afftrack Client instance.
     *
     * @param string $username
     * @param string $key
     */
    public function __construct(string $username, string $key)
    {
        $this->username = $username;
        $this->key = $key;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \Plients\Afftrack\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri("http://{$this->username}.afftrack.com/apiv4/?key={$this->key}&format=json");

        $class = "Plients\\Afftrack\\API\\{$name}";

        return new $class($client);
    }
}
