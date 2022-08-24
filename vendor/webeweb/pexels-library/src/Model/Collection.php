<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Model;

use WBW\Library\Traits\Strings\StringDescriptionTrait;
use WBW\Library\Traits\Strings\StringIdTrait;
use WBW\Library\Traits\Strings\StringRawDataTrait;
use WBW\Library\Traits\Strings\StringTitleTrait;

/**
 * Collection.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Model
 */
class Collection {

    use StringDescriptionTrait;
    use StringIdTrait;
    use StringRawDataTrait;
    use StringTitleTrait;

    /**
     * Media count.
     *
     * @var int|null
     */
    private $mediaCount;

    /**
     * Photos count.
     *
     * @var int|null
     */
    private $photosCount;

    /**
     * Private.
     *
     * @var bool|null
     */
    private $private;

    /**
     * Videos count.
     *
     * @var int|null
     */
    private $videosCount;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the media count.
     *
     * @return int|null Returns the media count.
     */
    public function getMediaCount(): ?int {
        return $this->mediaCount;
    }

    /**
     * Get the photos count.
     *
     * @return int|null Returns ths photos count.
     */
    public function getPhotosCount(): ?int {
        return $this->photosCount;
    }

    /**
     * Get the private.
     *
     * @return bool|null Returns the private.
     */
    public function getPrivate(): ?bool {
        return $this->private;
    }

    /**
     * Get the videos count.
     *
     * @return int|null Returns the videos count.
     */
    public function getVideosCount(): ?int {
        return $this->videosCount;
    }

    /**
     * Set the media count.
     *
     * @param int|null $mediaCount The media count.
     * @return Collection Returns this collection.
     */
    public function setMediaCount(?int $mediaCount): Collection {
        $this->mediaCount = $mediaCount;
        return $this;
    }

    /**
     * Set the photos count.
     *
     * @param int|null $photosCount The photo count.
     * @return Collection Returns this collection.
     */
    public function setPhotosCount(?int $photosCount): Collection {
        $this->photosCount = $photosCount;
        return $this;
    }

    /**
     * Set the private.
     *
     * @param bool|null $private The private.
     * @return Collection Returns this collection.
     */
    public function setPrivate(?bool $private): Collection {
        $this->private = $private;
        return $this;
    }

    /**
     * Set the videos count.
     *
     * @param int|null $videosCount The videos count.
     * @return Collection Returns this collection.
     */
    public function setVideosCount(?int $videosCount): Collection {
        $this->videosCount = $videosCount;
        return $this;
    }
}
