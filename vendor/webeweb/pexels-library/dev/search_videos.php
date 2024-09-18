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
use WBW\Library\Pexels\Model\User;
use WBW\Library\Pexels\Model\Video;
use WBW\Library\Pexels\Model\VideoFile;
use WBW\Library\Pexels\Model\VideoPicture;
use WBW\Library\Pexels\Provider\ApiProvider;
use WBW\Library\Pexels\Request\SearchVideosRequest;
use WBW\Library\Pexels\Response\VideosResponse;
use WBW\Library\Pexels\Tests\AbstractTestCase;

// Create the API provider.
$provider = new ApiProvider(AbstractTestCase::getToken());

// Create a Search videos request.
$request = new SearchVideosRequest();
$request->setQuery("YOUR QUERY");
$request->setOrientation(RequestInterface::ORIENTATION_LANDSCAPE); // Optional
$request->setSize(RequestInterface::SIZE_LARGE); // Optional
$request->setLocale(RequestInterface::LOCALE_EN_US); // Optional

/** @var VideosResponse $response */
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

/** @var Video $current */
foreach ($response->getVideos() as $current) {

    echo "\n";
    echo sprintf($format, "Id", $current->getId());
    echo sprintf($format, "Width", $current->getWidth());
    echo sprintf($format, "Height", $current->getHeight());
    echo sprintf($format, "URL", $current->getUrl());

    echo sprintf($format, "Image", $current->getImage());
    echo sprintf($format, "Full res", $current->getFullRes());
    echo sprintf($format, "Duration", $current->getDuration());

    /** @var User $user */
    $user = $current->getUser();

    echo sprintf($format, "Id", $user->getId());
    echo sprintf($format, "Name", $user->getName());
    echo sprintf($format, "Url", $user->getUrl());

    /** @var VideoFile[] $videoFiles */
    $videoFiles = $current->getVideosFiles();
    foreach ($videoFiles as $vf) {

        echo sprintf($format, "Id", $vf->getId());
        echo sprintf($format, "Quality", $vf->getQuality());
        echo sprintf($format, "File type", $vf->getFileType());
        echo sprintf($format, "Width", $vf->getWidth());
        echo sprintf($format, "Height", $vf->getHeight());
        echo sprintf($format, "Link", $vf->getLink());
    }

    /** @var VideoPicture[] $videoPictures */
    $videoPictures = $current->getVideosPictures();
    foreach ($videoPictures as $vp) {

        echo sprintf($format, "Id", $vp->getId());
        echo sprintf($format, "Picture", $vp->getPicture());
        echo sprintf($format, "Nr", $vp->getNr());
    }
}
