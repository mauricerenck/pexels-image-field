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

namespace WBW\Library\Easilys\Traits\Booleans;

/**
 * Boolean is active trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Booleans
 */
trait BooleanIsActiveTrait {

    /**
     * Is active.
     *
     * @var bool|null
     */
    protected $isActive;

    /**
     * Get the is active.
     *
     * @return bool|null Returns the is active.
     */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Set the is active.
     *
     * @param bool|null $isActive The is active.
     * @return self Returns this instance.
     */
    public function setIsActive(?bool $isActive): self {
        $this->isActive = $isActive;
        return $this;
    }
}
