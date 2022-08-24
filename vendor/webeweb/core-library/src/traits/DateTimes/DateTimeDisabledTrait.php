<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\DateTimes;

use DateTime;

/**
 * Date/time disabled trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeDisabledTrait {

    /**
     * Disabled.
     *
     * @var DateTime|null
     */
    protected $disabled;

    /**
     * Get the disabled.
     *
     * @return DateTime|null Returns the disabled.
     */
    public function getDisabled(): ?DateTime {
        return $this->disabled;
    }

    /**
     * Set the disabled.
     *
     * @param DateTime|null $disabled The disabled.
     * @return self Returns this instance.
     */
    public function setDisabled(?DateTime $disabled): self {
        $this->disabled = $disabled;
        return $this;
    }
}
