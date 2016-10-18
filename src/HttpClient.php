<?php

/*
 * This file is part of GetCake PHP Client.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Apivore\GetCake;

use Apivore\Core\AbstractHttpClient;
use Apivore\GetCake\Request\Modifiers\ApiKeyModifier;
use Apivore\GetCake\Request\Modifiers\BaseUriModifier;
use Apivore\GetCake\Request\Modifiers\AffiliateIdModifier;

/**
 * Class HttpClient.
 */
class HttpClient extends AbstractHttpClient
{
    /**
     * {@inheritdoc}
     */
    protected $options = [
        'headers' => [
           'User-Agent' => 'Apivore/GetCake',
        ],
    ];

    /**
     * {@inheritdoc}
     */
    protected $requestModifiers = [
        BaseUriModifier::class,
        AffiliateIdModifier::class,
        ApiKeyModifier::class,
    ];

    /**
     * @var string
     */
    protected $responseFormat = 'xml';

    /**
     * @param $baseUri
     * @param $path
     *
     * @return string
     */
    protected function buildRequestUri($baseUri, $path)
    {
        return $baseUri.'/affiliates/api/'.$path;
    }
}
