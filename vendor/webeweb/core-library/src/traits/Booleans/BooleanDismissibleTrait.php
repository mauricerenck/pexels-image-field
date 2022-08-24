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
 * Boolean dismissible trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanDismissibleTrait {

    /**
     * Dismissible.
     *
     * @var bool|null
     */
    protected $dismissible;

    /**
     * Get the dismissible.
     *
     * @return bool|null Returns the dismissible.
     */
    public function getDismissible(): ?bool {
        return $this->dismissible;
    }

    /**
     * Set the dismissible.
     *
     * @param bool|null $dismissible The dismissible.
     * @return self Returns this instance.
     */
    public function setDismissible(?bool $dismissible): self {
        $this->dismissible = $dismissible;
        return $this;
    }
}
