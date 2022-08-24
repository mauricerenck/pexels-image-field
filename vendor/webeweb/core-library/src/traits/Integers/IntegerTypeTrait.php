<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Integers;

/**
 * Integer type trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerTypeTrait {

    /**
     * Type.
     *
     * @var int|null
     */
    protected $type;

    /**
     * Get the type.
     *
     * @return int|null Returns the type.
     */
    public function getType(): ?int {
        return $this->type;
    }

    /**
     * Set the type.
     *
     * @param int|null $type The type.
     * @return self Returns this instance.
     */
    public function setType(?int $type): self {
        $this->type = $type;
        return $this;
    }
}
