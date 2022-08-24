<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Model;

use WBW\Library\Traits\Strings\StringRawDataTrait;

/**
 * Photo.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Model
 */
class Photo extends AbstractMedia {

    use StringRawDataTrait;

    /**
     * Alt.
     *
     * @var string|null
     */
    private $alt;

    /**
     * Average color.
     *
     * @var string|null
     */
    private $avgColor;

    /**
     * Liked.
     *
     * @var bool|null
     */
    private $liked;

    /**
     * Photographer.
     *
     * @var string|null
     */
    private $photographer;

    /**
     * Photographer id.
     *
     * @var string|null
     */
    private $photographerId;

    /**
     * Photographer URL.
     *
     * @var string|null
     */
    private $photographerUrl;

    /**
     * Source.
     *
     * @var Source|null
     */
    private $src;

    /**
     * Get the alt.
     *
     * @return string|null Returns the alt.
     */
    public function getAlt(): ?string {
        return $this->alt;
    }

    /**
     * Get the average color.
     *
     * @return string|null Returns the average color.
     */
    public function getAvgColor(): ?string {
        return $this->avgColor;
    }

    /**
     * Get the liked.
     *
     * @return bool|null Returns the liked.
     */
    public function getLiked(): ?bool {
        return $this->liked;
    }

    /**
     * Get the photographer.
     *
     * @return string|null Returns the photographer.
     */
    public function getPhotographer(): ?string {
        return $this->photographer;
    }

    /**
     * Get the photographer id.
     *
     * @return string|null Returns the photographer id.
     */
    public function getPhotographerId(): ?string {
        return $this->photographerId;
    }

    /**
     * Get the photographer URL.
     *
     * @return string|null Returns the photographer URL.
     */
    public function getPhotographerUrl(): ?string {
        return $this->photographerUrl;
    }

    /**
     * Get the source.
     *
     * @return Source|null Returns the source.
     */
    public function getSrc(): ?Source {
        return $this->src;
    }

    /**
     * Set the alt.
     *
     * @param string|null $alt The alt.
     * @return Photo Returns this photo.
     */
    public function setAlt(?string $alt): Photo {
        $this->alt = $alt;
        return $this;
    }

    /**
     * Set the average color.
     *
     * @param string|null $avgColor The average color.
     * @return Photo Returns this photo.
     */
    public function setAvgColor(?string $avgColor): Photo {
        $this->avgColor = $avgColor;
        return $this;
    }

    /**
     * Set the liked.
     *
     * @param bool|null $liked The liked.
     * @return Photo Returns this photo.
     */
    public function setLiked(?bool $liked): Photo {
        $this->liked = $liked;
        return $this;
    }

    /**
     * Set the photographer.
     *
     * @param string|null $photographer The photographer.
     * @return Photo Returns this photo.
     */
    public function setPhotographer(?string $photographer): Photo {
        $this->photographer = $photographer;
        return $this;
    }

    /**
     * Set the photographer id.
     *
     * @param string|null $photographerId The photographer id.
     * @return Photo Returns this photo.
     */
    public function setPhotographerId(?string $photographerId): Photo {
        $this->photographerId = $photographerId;
        return $this;
    }

    /**
     * Set the photographer URL.
     *
     * @param string|null $photographerUrl The photographer URL.
     * @return Photo Returns this photo.
     */
    public function setPhotographerUrl(?string $photographerUrl): Photo {
        $this->photographerUrl = $photographerUrl;
        return $this;
    }

    /**
     * Set the source.
     *
     * @param Source|null $src The source.
     * @return Photo Returns this photo.
     */
    public function setSrc(?Source $src): Photo {
        $this->src = $src;
        return $this;
    }
}
