<?php

namespace Petitglacon\GinkoApi\Api;

use Dotenv\Dotenv;
use GuzzleHttp\Client;

class ApiFetcher
{
    private $apiKey;
    private $client;

    public function __construct()
    {

        $this->apiKey = $_ENV['API_KEY'];
        $this->client = new Client(['base_uri' => 'https://api.ginko.voyage/', 'timeout' => 2.0]);
    }

    private function get($parameter) {
        return json_decode($this->client->get('https://api.ginko.voyage/'. $parameter, [
            'query' => ['apiKey' => $this->apiKey]
        ])->getBody()->getContents());
    }

    public function getVoyage() {
        return $this->get('DR/getLignes.do');
    }
}