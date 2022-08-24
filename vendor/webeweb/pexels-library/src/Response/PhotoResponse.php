<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Response;

use WBW\Library\Pexels\Model\Photo;

/**
 * Photo response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Response
 */
class PhotoResponse extends AbstractMediaResponse {

    /**
     * Get the photo.
     *
     * @return Photo|null Returns the photo.
     */
    public function getPhoto(): ?Photo {
        $medias = $this->getMedias();
        return 1 === count($medias) ? $medias[0] : null;
    }

    /**
     * Set the photo.
     *
     * @param Photo $photo The photo.
     * @return PhotoResponse Returns this photo response.
     */
    public function setPhoto(Photo $photo): PhotoResponse {
        return $this->setMedias([$photo]);
    }
}
