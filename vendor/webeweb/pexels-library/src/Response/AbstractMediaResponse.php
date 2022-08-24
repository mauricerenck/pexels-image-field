<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Response;

use WBW\Library\Pexels\Model\AbstractMedia;

/**
 * Abstract media response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Response
 * @abstract
 */
abstract class AbstractMediaResponse extends AbstractResponse {

    /**
     * Medias.
     *
     * @var AbstractMedia[]
     */
    private $medias;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setMedias([]);
    }

    /**
     * Add a media.
     *
     * @param AbstractMedia $media The media.
     * @return AbstractMediaResponse Returns this media response.
     */
    protected function addMedia(AbstractMedia $media): AbstractMediaResponse {
        $this->medias[] = $media;
        return $this;
    }

    /**
     * Get the medias.
     *
     * @return AbstractMedia[] Returns the medias.
     */
    protected function getMedias(): array {
        return $this->medias;
    }

    /**
     * Set the medias.
     *
     * @param AbstractMedia[] $medias The medias.
     * @return AbstractMediaResponse Returns this media response.
     */
    protected function setMedias(array $medias): AbstractMediaResponse {
        $this->medias = $medias;
        return $this;
    }
}
