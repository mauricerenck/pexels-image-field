<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String picture trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringPictureTrait {

    /**
     * Picture.
     *
     * @var string|null
     */
    protected $picture;

    /**
     * Get the picture.
     *
     * @return string|null Returns the picture.
     */
    public function getPicture(): ?string {
        return $this->picture;
    }

    /**
     * Set the picture.
     *
     * @param string|null $picture The picture.
     * @return self Returns this instance.
     */
    public function setPicture(?string $picture): self {
        $this->picture = $picture;
        return $this;
    }
}
