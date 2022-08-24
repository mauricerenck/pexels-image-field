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
 * Source.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Model
 */
class Source {

    use StringRawDataTrait;

    /**
     * Landscape.
     *
     * @var string|null
     */
    private $landscape;

    /**
     * Large.
     *
     * @var string|null
     */
    private $large;

    /**
     * Large 2X.
     *
     * @var string|null
     */
    private $large2x;

    /**
     * Medium.
     *
     * @var string|null
     */
    private $medium;

    /**
     * Original.
     *
     * @var string|null
     */
    private $original;

    /**
     * Portrait.
     *
     * @var string|null
     */
    private $portrait;

    /**
     * Small.
     *
     * @var string|null
     */
    private $small;

    /**
     * Tiny.
     *
     * @var string|null
     */
    private $tiny;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the landscape.
     *
     * @return string|null Returns the landscape.
     */
    public function getLandscape(): ?string {
        return $this->landscape;
    }

    /**
     * Get the large.
     *
     * @return string|null Returns the large.
     */
    public function getLarge(): ?string {
        return $this->large;
    }

    /**
     * Get the large 2x.
     *
     * @return string|null Returns the large 2x.
     */
    public function getLarge2x(): ?string {
        return $this->large2x;
    }

    /**
     * Get the medium.
     *
     * @return string|null Returns the medium.
     */
    public function getMedium(): ?string {
        return $this->medium;
    }

    /**
     * Get the original.
     *
     * @return string|null Returns the original.
     */
    public function getOriginal(): ?string {
        return $this->original;
    }

    /**
     * Get the portrait.
     *
     * @return string|null Returns the portrait.
     */
    public function getPortrait(): ?string {
        return $this->portrait;
    }

    /**
     * Get the small.
     *
     * @return string|null Returns the small.
     */
    public function getSmall(): ?string {
        return $this->small;
    }

    /**
     * Get the tiny.
     *
     * @return string|null Returns the tiny.
     */
    public function getTiny(): ?string {
        return $this->tiny;
    }

    /**
     * Set the landscape.
     *
     * @param string|null $landscape The landscape.
     * @return Source Returns this source.
     */
    public function setLandscape(?string $landscape): Source {
        $this->landscape = $landscape;
        return $this;
    }

    /**
     * Set the large.
     *
     * @param string|null $large The large.
     * @return Source Returns this source.
     */
    public function setLarge(?string $large): Source {
        $this->large = $large;
        return $this;
    }

    /**
     * Set the large 2x.
     *
     * @param string|null $large2x The large 2x.
     * @return Source Returns this source.
     */
    public function setLarge2x(?string $large2x): Source {
        $this->large2x = $large2x;
        return $this;
    }

    /**
     * Set the medium.
     *
     * @param string|null $medium The medium.
     * @return Source Returns this source.
     */
    public function setMedium(?string $medium): Source {
        $this->medium = $medium;
        return $this;
    }

    /**
     * Set the original.
     *
     * @param string|null $original The original.
     * @return Source Returns this source.
     */
    public function setOriginal(?string $original): Source {
        $this->original = $original;
        return $this;
    }

    /**
     * Set the portrait.
     *
     * @param string|null $portrait The portrait.
     * @return Source Returns this source.
     */
    public function setPortrait(?string $portrait): Source {
        $this->portrait = $portrait;
        return $this;
    }

    /**
     * Set the small.
     *
     * @param string|null $small The small.
     * @return Source Returns this source.
     */
    public function setSmall(?string $small): Source {
        $this->small = $small;
        return $this;
    }

    /**
     * Set the tiny.
     *
     * @param string|null $tiny The tiny.
     * @return Source Returns this source.
     */
    public function setTiny(?string $tiny): Source {
        $this->tiny = $tiny;
        return $this;
    }
}
