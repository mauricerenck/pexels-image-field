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
 * Boolean visible trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanVisibleTrait {

    /**
     * Visible.
     *
     * @var bool|null
     */
    protected $visible;

    /**
     * Get the visible.
     *
     * @return bool|null Returns the visible.
     */
    public function getVisible(): ?bool {
        return $this->visible;
    }

    /**
     * Set the visible.
     *
     * @param bool|null $visible The visible.
     * @return self Returns this instance.
     */
    public function setVisible(?bool $visible): self {
        $this->visible = $visible;
        return $this;
    }
}
