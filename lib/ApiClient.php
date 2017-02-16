<?php

namespace Postradar\Api\Sdk;

use Postradar\Api\Sdk\Http\Client;

class ApiClient
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var array
     */
    protected $params;


    public function __construct($url, $apiKey)
    {
        if ('/' !== $url[strlen($url) - 1]) {
            $url .= '/';
        }

        $this->client = new Client($url, array('token' => $apiKey));
    }

    public function getProfile($params = array())
    {
        return $this->client->makeRequest('profile', 'GET', $params);
    }
}