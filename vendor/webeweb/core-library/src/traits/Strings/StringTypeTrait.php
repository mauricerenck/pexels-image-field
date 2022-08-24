<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String type trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringTypeTrait {

    /**
     * Type.
     *
     * @var string|null
     */
    protected $type;

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return self Returns this instance.
     */
    public function setType(?string $type): self {
        $this->type = $type;
        return $this;
    }
}
