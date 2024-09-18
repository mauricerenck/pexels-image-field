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

use WBW\Library\Pexels\Model\Photo;
use WBW\Library\Pexels\Model\Source;
use WBW\Library\Pexels\Provider\ApiProvider;
use WBW\Library\Pexels\Request\GetPhotoRequest;
use WBW\Library\Pexels\Response\PhotoResponse;
use WBW\Library\Pexels\Tests\AbstractTestCase;

// Create the API provider.
$provider = new ApiProvider(AbstractTestCase::getToken());

// Create a Get photo request.
$request = new GetPhotoRequest();
$request->setId(1234);

/** @var PhotoResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
$format = "%-20s: %s\n";

echo sprintf($format, "Limit", $response->getLimit());
echo sprintf($format, "Remaining", $response->getRemaining());
echo sprintf($format, "Reset", $response->getReset());

/** @var Photo $photo */
$photo = $response->getPhoto();

echo sprintf($format, "Id", $photo->getId());
echo sprintf($format, "Width", $photo->getWidth());
echo sprintf($format, "Height", $photo->getHeight());
echo sprintf($format, "URL", $photo->getUrl());

echo sprintf($format, "Photographer", $photo->getPhotographer());
echo sprintf($format, "Photographer URL", $photo->getPhotographerUrl());
echo sprintf($format, "Photographer id", $photo->getPhotographerId());

/** @var Source src */
$src = $photo->getSrc();

echo sprintf($format, "Original", $src->getOriginal());
echo sprintf($format, "Large 2x", $src->getLarge2x());
echo sprintf($format, "Large", $src->getLarge());
echo sprintf($format, "Medium", $src->getMedium());
echo sprintf($format, "Small", $src->getSmall());
echo sprintf($format, "Portrait", $src->getPortrait());
echo sprintf($format, "Landscape", $src->getLandscape());
echo sprintf($format, "Tiny", $src->getTiny());
