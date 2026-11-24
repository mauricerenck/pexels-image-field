<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\DateTimes;

use DateTime;

/**
 * Date/time deleted trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\DateTimes
 */
trait DateTimeDeletedTrait {

    /**
     * Deleted.
     *
     * @var DateTime|null
     */
    protected $deleted;

    /**
     * Get the deleted.
     *
     * @return DateTime|null Returns the deleted.
     */
    public function getDeleted(): ?DateTime {
        return $this->deleted;
    }

    /**
     * Set the deleted.
     *
     * @param DateTime|null $deleted The deleted.
     * @return self Returns this instance.
     */
    public function setDeleted(?DateTime $deleted): self {
        $this->deleted = $deleted;
        return $this;
    }
}
