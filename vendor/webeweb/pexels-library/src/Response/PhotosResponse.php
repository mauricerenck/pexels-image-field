<?php

declare(strict_types = 1);

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Response;

use WBW\Library\Pexels\Api\PaginateResponseInterface;
use WBW\Library\Pexels\Model\Photo;
use WBW\Library\Pexels\Serializer\ResponseDeserializer;
use WBW\Library\Pexels\Traits\Integers\IntegerTotalResultsTrait;
use WBW\Library\Pexels\Traits\Strings\StringNextPageTrait;
use WBW\Library\Pexels\Traits\Strings\StringPrevPageTrait;
use WBW\Library\Traits\Integers\IntegerPageTrait;
use WBW\Library\Traits\Integers\IntegerPerPageTrait;
use WBW\Library\Traits\Strings\StringUrlTrait;

/**
 * Photos response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Response
 */
class PhotosResponse extends AbstractMediaResponse implements PaginateResponseInterface {

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
     * Add a photo.
     *
     * @param Photo $photo The photo.
     * @return PhotosResponse Returns this photo response.
     */
    public function addPhoto(Photo $photo): PhotosResponse {
        return $this->addMedia($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializePhotosResponse($rawResponse);
    }

    /**
     * Get the photos.
     *
     * @return Photo[] Returns the photos.
     */
    public function getPhotos(): array {

        /** @var Photo[] */
        return $this->getMedias();
    }
}
