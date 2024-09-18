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
use WBW\Library\Pexels\Request\CuratedPhotosRequest;
use WBW\Library\Pexels\Response\PhotosResponse;
use WBW\Library\Pexels\Tests\AbstractTestCase;

// Create the API provider.
$provider = new ApiProvider(AbstractTestCase::getToken());

// Create a Curated photo request.
$request = new CuratedPhotosRequest();

/** @var PhotosResponse $response */
$response = $provider->sendRequest($request);

// Handle the response (same as search photos).
// ...
