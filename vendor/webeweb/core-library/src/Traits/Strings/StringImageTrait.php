<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Strings;

/**
 * String image trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringImageTrait {

    /**
     * Image.
     *
     * @var string|null
     */
    protected $image;

    /**
     * Get the image.
     *
     * @return string|null Returns the image.
     */
    public function getImage(): ?string {
        return $this->image;
    }

    /**
     * Set the image.
     *
     * @param string|null $image The image.
     * @return self Returns this instance.
     */
    public function setImage(?string $image): self {
        $this->image = $image;
        return $this;
    }
}
