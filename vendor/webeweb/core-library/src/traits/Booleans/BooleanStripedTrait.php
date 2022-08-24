<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Booleans;

/**
 * Boolean striped trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanStripedTrait {

    /**
     * Striped.
     *
     * @var bool|null
     */
    protected $striped;

    /**
     * Get the striped.
     *
     * @return bool|null Returns the striped.
     */
    public function getStriped(): ?bool {
        return $this->striped;
    }

    /**
     * Set the striped.
     *
     * @param bool|null $striped The striped.
     * @return self Returns this instance.
     */
    public function setStriped(?bool $striped): self {
        $this->striped = $striped;
        return $this;
    }
}
