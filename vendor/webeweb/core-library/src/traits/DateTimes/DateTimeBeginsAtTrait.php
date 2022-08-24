<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\DateTimes;

use DateTime;

/**
 * Date/time begins at trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeBeginsAtTrait {

    /**
     * Begins at.
     *
     * @var DateTime|null
     */
    protected $beginsAt;

    /**
     * Get the begins at.
     *
     * @return DateTime|null Returns the begins at.
     */
    public function getBeginsAt(): ?DateTime {
        return $this->beginsAt;
    }

    /**
     * Set the begins at.
     *
     * @param DateTime|null $beginsAt The begins at.
     * @return self Returns this instance.
     */
    public function setBeginsAt(?DateTime $beginsAt): self {
        $this->beginsAt = $beginsAt;
        return $this;
    }
}
