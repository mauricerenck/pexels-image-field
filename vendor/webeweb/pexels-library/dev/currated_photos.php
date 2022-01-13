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

// Create the API provider.
$provider = new ApiProvider("YOUR_API_KEY");

// Create a Curated photo request.
$request = new CuratedPhotosRequest();

// Call the API and get the response.
$response = $provider->curatedPhotos($request);

// Handle the response (same as search photos).
// ...
