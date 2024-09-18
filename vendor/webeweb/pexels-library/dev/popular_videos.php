<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require_once __DIR__ . "/../vendor/autoload.php";

use WBW\Library\Pexels\Provider\ApiProvider;
use WBW\Library\Pexels\Request\PopularVideosRequest;
use WBW\Library\Pexels\Response\VideosResponse;
use WBW\Library\Pexels\Tests\AbstractTestCase;

// Create the API provider.
$provider = new ApiProvider(AbstractTestCase::getToken());

// Create a Popular videos request.
$request = new PopularVideosRequest();

/** @var VideosResponse $response */
$response = $provider->sendRequest($request);

// Handle the response (same as search videos).
// ...
