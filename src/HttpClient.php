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
 * Class HttpClient.
 */
class HttpClient extends \BrianFaust\AbstractHttpClient
{
    /**
     * {@inheritdoc}
     */
    protected $options = [
        'headers' => [
           'User-Agent' => 'BrianFaust\Afftrack',
        ],
    ];

    /**
     * {@inheritdoc}
     */
    protected $requestModifiers = [
        Modifiers\ApiKeyModifier::class,
        Modifiers\FormatModifier::class,
        Modifiers\TargetModifier::class,
    ];

    /**
     * @param $baseUri
     * @param $path
     *
     * @return string
     */
    protected function buildRequestUri($baseUri, $path)
    {
        return $baseUri;
    }
}
