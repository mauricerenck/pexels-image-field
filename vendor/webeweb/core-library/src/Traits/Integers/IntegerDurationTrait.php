<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Integers;

/**
 * Integer duration trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Integers
 */
trait IntegerDurationTrait {

    /**
     * Duration.
     *
     * @var int|null
     */
    protected $duration;

    /**
     * Get the duration.
     *
     * @return int|null Returns the duration.
     */
    public function getDuration(): ?int {
        return $this->duration;
    }

    /**
     * Set the duration.
     *
     * @param int|null $duration The duration.
     * @return self Returns this instance.
     */
    public function setDuration(?int $duration): self {
        $this->duration = $duration;
        return $this;
    }
}
