<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Compounds;

use DateTime;

/**
 * Compound rate limit trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Compounds
 */
trait CompoundRateLimitTrait {

    /**
     * Limit.
     *
     * @var int|null
     */
    private $limit;

    /**
     * Remaining.
     *
     * @var int|null
     */
    private $remaining;

    /**
     * Reset.
     *
     * @var DateTime|null
     */
    private $reset;

    /**
     * Get the limit.
     *
     * @return int|null Returns the limit.
     */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Get the remaining.
     *
     * @return int|null Returns the remaining.
     */
    public function getRemaining(): ?int {
        return $this->remaining;
    }

    /**
     * Get the reset.
     *
     * @return DateTime|null Returns reset.
     */
    public function getReset(): ?DateTime {
        return $this->reset;
    }

    /**
     * Set the limit.
     *
     * @param int|null $limit The limit.
     * @return self Returns this instance.
     */
    public function setLimit(?int $limit): self {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Set the remaining.
     *
     * @param int|null $remaining The remaining.
     * @return self Returns this instance.
     */
    public function setRemaining(?int $remaining): self {
        $this->remaining = $remaining;
        return $this;
    }

    /**
     * Set the reset.
     *
     * @param DateTime|null $reset The reset.
     * @return self Returns this instance.
     */
    public function setReset(?DateTime $reset): self {
        $this->reset = $reset;
        return $this;
    }
}
