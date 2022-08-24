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

use WBW\Library\Traits\Integers\IntegerIdTrait;
use WBW\Library\Traits\Strings\StringRawDataTrait;

/**
 * Video picture.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Model
 */
class VideoPicture {

    use IntegerIdTrait {
        setId as public;
    }
    use StringRawDataTrait;

    /**
     * Number.
     *
     * @var int|null
     */
    private $nr;

    /**
     * Picture.
     *
     * @var string|null
     */
    private $picture;

    /**
     * Get the number.
     *
     * @return int|null Returns the number.
     */
    public function getNr(): ?int {
        return $this->nr;
    }

    /**
     * Get the picture.
     *
     * @return string|null Returns the picture.
     */
    public function getPicture(): ?string {
        return $this->picture;
    }

    /**
     * Set the number.
     *
     * @param int|null $nr The number.
     * @return VideoPicture Returns this video picture.
     */
    public function setNr(?int $nr): VideoPicture {
        $this->nr = $nr;
        return $this;
    }

    /**
     * Set the picture.
     *
     * @param string|null $picture The picture.
     * @return VideoPicture Returns this picture.
     */
    public function setPicture(?string $picture): VideoPicture {
        $this->picture = $picture;
        return $this;
    }
}
