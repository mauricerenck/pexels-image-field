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

use WBW\Library\Pexels\Api\RequestInterface;
use WBW\Library\Pexels\Model\Photo;
use WBW\Library\Pexels\Model\Source;
use WBW\Library\Pexels\Provider\ApiProvider;
use WBW\Library\Pexels\Request\SearchPhotosRequest;
use WBW\Library\Pexels\Response\PhotosResponse;
use WBW\Library\Pexels\Tests\AbstractTestCase;

// Create the API provider.
$provider = new ApiProvider(AbstractTestCase::getToken());

// Create a Search photos request.
$request = new SearchPhotosRequest();
$request->setQuery("YOUR QUERY");
$request->setOrientation(RequestInterface::ORIENTATION_LANDSCAPE); // Optional
$request->setSize(RequestInterface::SIZE_LARGE); // Optional
$request->setLocale(RequestInterface::LOCALE_EN_US); // Optional

/** @var PhotosResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
$format = "%-20s: %s\n";

echo sprintf($format, "Limit", $response->getLimit());
echo sprintf($format, "Remaining", $response->getRemaining());
echo sprintf($format, "Reset", $response->getReset());

echo sprintf($format, "Per page", $response->getPerPage());
echo sprintf($format, "Page", $response->getPage());
echo sprintf($format, "Total results", $response->getTotalResults());

echo sprintf($format, "Prev page", $response->getPrevPage());
echo sprintf($format, "Next page", $response->getNextPage());

echo sprintf($format, "URL", $response->getUrl());

/** @var Photo $current */
foreach ($response->getPhotos() as $current) {

    echo "\n";

    echo sprintf($format, "Id", $current->getId());
    echo sprintf($format, "Width", $current->getWidth());
    echo sprintf($format, "Height", $current->getHeight());
    echo sprintf($format, "URL", $current->getUrl());

    echo sprintf($format, "Photographer", $current->getPhotographer());
    echo sprintf($format, "Photographer URL", $current->getPhotographerUrl());
    echo sprintf($format, "Photographer id", $current->getPhotographerId());

    /** @var Source src */
    $src = $current->getSrc();

    echo sprintf($format, "Original", $src->getOriginal());
    echo sprintf($format, "Large 2x", $src->getLarge2x());
    echo sprintf($format, "Large", $src->getLarge());
    echo sprintf($format, "Medium", $src->getMedium());
    echo sprintf($format, "Small", $src->getSmall());
    echo sprintf($format, "Portrait", $src->getPortrait());
    echo sprintf($format, "Landscape", $src->getLandscape());
    echo sprintf($format, "Tiny", $src->getTiny());
}
