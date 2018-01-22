<?php

namespace Moskalyovd\FCMBundle\Guzzle\Factory;

use GuzzleHttp\Client as GuzzleClient;

class GuzzleClientFactory
{
    /**
     * createGuzzleClient
     *
     * @return GuzzleClient
     */
    public static function createGuzzleClient()
    {
        return new GuzzleClient();
    }
}