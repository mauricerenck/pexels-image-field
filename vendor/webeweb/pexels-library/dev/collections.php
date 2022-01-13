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

use WBW\Library\Pexels\Model\Collection;
use WBW\Library\Pexels\Provider\ApiProvider;
use WBW\Library\Pexels\Request\CollectionsRequest;

// Create the API provider.
$provider = new ApiProvider("YOUR_API_KEY");

// Create a Collections request.
$request = new CollectionsRequest();

// Call the API and get the response.
$response = $provider->collections($request);

// Handle the response.
$format = "%20s: %s\n";

echo sprintf($format, "Limit", $response->getLimit());
echo sprintf($format, "Remaining", $response->getRemaining());
echo sprintf($format, "Reset", $response->getReset());

/** @var Collection $current */
foreach ($response->getCollections() as $current) {

    echo sprintf($format, "Id", $current->getId());
    echo sprintf($format, "Title", $current->getTitle());
    echo sprintf($format, "Description", $current->getDescription());
    echo sprintf($format, "Private", $current->getPrivate());
    echo sprintf($format, "Media count", $current->getMediaCount());
    echo sprintf($format, "Photos count", $current->getPhotosCount());
    echo sprintf($format, "Video count", $current->getVideosCount());
}