<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Integers;

/**
 * Integer status trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerStatusTrait {

    /**
     * Status.
     *
     * @var int|null
     */
    protected $status;

    /**
     * Get the status.
     *
     * @return int|null Returns the status.
     */
    public function getStatus(): ?int {
        return $this->status;
    }

    /**
     * Set the status.
     *
     * @param int|null $status The status.
     * @return self Returns this instance.
     */
    public function setStatus(?int $status): self {
        $this->status = $status;
        return $this;
    }
}
