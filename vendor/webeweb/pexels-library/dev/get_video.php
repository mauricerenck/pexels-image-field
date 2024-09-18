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

use WBW\Library\Pexels\Model\User;
use WBW\Library\Pexels\Model\Video;
use WBW\Library\Pexels\Model\VideoFile;
use WBW\Library\Pexels\Model\VideoPicture;
use WBW\Library\Pexels\Provider\ApiProvider;
use WBW\Library\Pexels\Request\GetVideoRequest;
use WBW\Library\Pexels\Response\VideoResponse;
use WBW\Library\Pexels\Tests\AbstractTestCase;

// Create the API provider.
$provider = new ApiProvider(AbstractTestCase::getToken());

// Create a Get video request.
$request = new GetVideoRequest();
$request->setId(1234);

/** @var VideoResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
$format = "%-20s: %s\n";

echo sprintf($format, "Limit", $response->getLimit());
echo sprintf($format, "Remaining", $response->getRemaining());
echo sprintf($format, "Reset", $response->getReset());

/** @var Video $video */
$video = $response->getVideo();

echo sprintf($format, "Id", $video->getId());
echo sprintf($format, "Width", $video->getWidth());
echo sprintf($format, "Height", $video->getHeight());
echo sprintf($format, "URL", $video->getUrl());

echo sprintf($format, "Image", $video->getImage());
echo sprintf($format, "Full res", $video->getFullRes());
echo sprintf($format, "Duration", $video->getDuration());

/** @var User $user */
$user = $video->getUser();

echo sprintf($format, "Id", $user->getId());
echo sprintf($format, "Name", $user->getName());
echo sprintf($format, "Url", $user->getUrl());

/** @var VideoFile[] $videoFiles */
$videoFiles = $video->getVideosFiles();
foreach ($videoFiles as $vf) {

    echo sprintf($format, "Id", $vf->getId());
    echo sprintf($format, "Quality", $vf->getQuality());
    echo sprintf($format, "File type", $vf->getFileType());
    echo sprintf($format, "Width", $vf->getWidth());
    echo sprintf($format, "Height", $vf->getHeight());
    echo sprintf($format, "Link", $vf->getLink());
}

/** @var VideoPicture[] $videoPictures */
$videoPictures = $video->getVideosPictures();
foreach ($videoPictures as $vp) {

    echo sprintf($format, "Id", $vp->getId());
    echo sprintf($format, "Picture", $vp->getPicture());
    echo sprintf($format, "Nr", $vp->getNr());
}
