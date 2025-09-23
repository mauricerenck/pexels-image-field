<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pexels\Response;

use WBW\Library\Common\Traits\Integers\IntegerPageTrait;
use WBW\Library\Common\Traits\Integers\IntegerPerPageTrait;
use WBW\Library\Common\Traits\Strings\StringUrlTrait;
use WBW\Library\Pexels\Api\PaginateResponseInterface;
use WBW\Library\Pexels\Model\Video;
use WBW\Library\Pexels\Serializer\ResponseDeserializer;
use WBW\Library\Pexels\Traits\Integers\IntegerTotalResultsTrait;
use WBW\Library\Pexels\Traits\Strings\StringNextPageTrait;
use WBW\Library\Pexels\Traits\Strings\StringPrevPageTrait;

/**
 * Videos response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Response
 */
class VideosResponse extends AbstractMediaResponse implements PaginateResponseInterface {

    use IntegerPageTrait;
    use IntegerPerPageTrait;
    use IntegerTotalResultsTrait;
    use StringNextPageTrait;
    use StringPrevPageTrait;
    use StringUrlTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Add a video.
     *
     * @param Video $video The video.
     * @return VideosResponse Returns this video response.
     */
    public function addVideo(Video $video): VideosResponse {
        return $this->addMedia($video);
    }

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeVideosResponse($rawResponse);
    }

    /**
     * Get the videos.
     *
     * @return Video[] Returns the videos.
     */
    public function getVideos(): array {

        /** @var Video[] */
        return $this->getMedias();
    }
}
