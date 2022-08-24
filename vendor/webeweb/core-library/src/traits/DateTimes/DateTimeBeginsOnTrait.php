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
 * Date/time begins on trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeBeginsOnTrait {

    /**
     * Begins on.
     *
     * @var DateTime|null
     */
    protected $beginsOn;

    /**
     * Get the begins on.
     *
     * @return DateTime|null Returns the begins on.
     */
    public function getBeginsOn(): ?DateTime {
        return $this->beginsOn;
    }

    /**
     * Set the begins on.
     *
     * @param DateTime|null $beginsOn The begins on.
     * @return self Returns this instance.
     */
    public function setBeginsOn(?DateTime $beginsOn): self {
        $this->beginsOn = $beginsOn;
        return $this;
    }
}
