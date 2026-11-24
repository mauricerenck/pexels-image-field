<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Strings;

/**
 * String format trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringFormatTrait {

    /**
     * Format.
     *
     * @var string|null
     */
    protected $format;

    /**
     * Get the format.
     *
     * @return string|null Returns the format.
     */
    public function getFormat(): ?string {
        return $this->format;
    }

    /**
     * Set the format.
     *
     * @param string|null $format The format.
     * @return self Returns this instance.
     */
    public function setFormat(?string $format): self {
        $this->format = $format;
        return $this;
    }
}
