<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Integers;

/**
 * Integer minimum trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Integers
 */
trait IntegerMinimumTrait {

    /**
     * Minimum.
     *
     * @var int|null
     */
    protected $minimum;

    /**
     * Get the minimum.
     *
     * @return int|null Returns the minimum.
     */
    public function getMinimum(): ?int {
        return $this->minimum;
    }

    /**
     * Set the minimum.
     *
     * @param int|null $minimum The minimum.
     * @return self Returns this instance.
     */
    public function setMinimum(?int $minimum): self {
        $this->minimum = $minimum;
        return $this;
    }
}
