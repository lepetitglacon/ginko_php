<?php

namespace Petitglacon\GinkoApi;

use Petitglacon\GinkoApi\Api\ApiFetcher;

class GinkoApi
{
    private $database;
    private $api;

    public function __construct()
    {
        $this->api = new ApiFetcher();
    }

    public function voyages() {
        dump($this->api->getVoyage());
    }
}