<?php

use Dotenv\Dotenv;
use Petitglacon\GinkoApi\GinkoApi;

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$ginko = new GinkoApi();

$ginko->voyages();