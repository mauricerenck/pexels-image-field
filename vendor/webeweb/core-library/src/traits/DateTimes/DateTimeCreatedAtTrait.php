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
 * Date/time created at trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeCreatedAtTrait {

    /**
     * Created at.
     *
     * @var DateTime|null
     */
    protected $createdAt;

    /**
     * Get the created at.
     *
     * @return DateTime|null Returns the created at.
     */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Set the created at.
     *
     * @param DateTime|null $createdAt The created at.
     * @return self Returns this instance.
     */
    public function setCreatedAt(?DateTime $createdAt): self {
        $this->createdAt = $createdAt;
        return $this;
    }
}
