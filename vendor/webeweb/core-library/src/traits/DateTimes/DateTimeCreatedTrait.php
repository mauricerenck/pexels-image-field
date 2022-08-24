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
 * Date/time created trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeCreatedTrait {

    /**
     * Created.
     *
     * @var DateTime|null
     */
    protected $created;

    /**
     * Get the created.
     *
     * @return DateTime|null Returns the created.
     */
    public function getCreated(): ?DateTime {
        return $this->created;
    }

    /**
     * Set the created.
     *
     * @param DateTime|null $created The created.
     * @return self Returns this instance.
     */
    public function setCreated(?DateTime $created): self {
        $this->created = $created;
        return $this;
    }
}
