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

// Create the API provider.
$provider = new ApiProvider("YOUR_API_KEY");

// Create a Popular videos request.
$request = new PopularVideosRequest();

// Call the API and get the response.
$response = $provider->popularVideos($request);

// Handle the response (same as search videos).
// ...
