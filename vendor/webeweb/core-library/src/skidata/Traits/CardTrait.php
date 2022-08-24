<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Traits;

use DateTime;

/**
 * Card trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Traits
 */
trait CardTrait {

    /**
     * Blocked.
     *
     * @var bool|null
     */
    private $blocked;

    /**
     * Blocked as of date.
     *
     * @var DateTime|null
     */
    private $blockedDate;

    /**
     * Get the blocked.
     *
     * @return bool|null Returns the blocked.
     */
    public function getBlocked(): ?bool {
        return $this->blocked;
    }

    /**
     * Get the blocked as of date.
     *
     * @return DateTime|null Returns the blocked as of date.
     */
    public function getBlockedDate(): ?DateTime {
        return $this->blockedDate;
    }

    /**
     * Set the blocked.
     *
     * @param bool|null $blocked The blocked.
     * @return self Returns this instance.
     */
    public function setBlocked(?bool $blocked): self {
        $this->blocked = $blocked;
        return $this;
    }

    /**
     * Set the blocked as of date.
     *
     * @param DateTime|null $blockedDate The blocked as of date.
     * @return self Returns this instance.
     */
    public function setBlockedDate(?DateTime $blockedDate): self {
        $this->blockedDate = $blockedDate;
        return $this;
    }
}
