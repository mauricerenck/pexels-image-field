<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Integers;

/**
 * Integer min duration trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerMinDurationTrait {

    /**
     * Min duration.
     *
     * @var int|null
     */
    protected $minDuration;

    /**
     * Get the min duration.
     *
     * @return int|null Returns the min duration.
     */
    public function getMinDuration(): ?int {
        return $this->minDuration;
    }

    /**
     * Set the min duration.
     *
     * @param int|null $minDuration The min duration.
     * @return self Returns this instance.
     */
    public function setMinDuration(?int $minDuration): self {
        $this->minDuration = $minDuration;
        return $this;
    }
}
