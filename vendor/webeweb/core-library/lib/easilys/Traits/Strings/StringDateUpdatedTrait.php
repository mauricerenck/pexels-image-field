<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Traits\Strings;

/**
 * String date updated trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Strings
 */
trait StringDateUpdatedTrait {

    /**
     * Date updated.
     *
     * @var string|null
     */
    protected $dateUpdated;

    /**
     * Get the date updated.
     *
     * @return string|null Returns the date updated.
     */
    public function getDateUpdated(): ?string {
        return $this->dateUpdated;
    }

    /**
     * Set the date updated.
     *
     * @param string|null $dateUpdated The date updated.
     * @return self Returns this instance.
     */
    public function setDateUpdated(?string $dateUpdated): self {
        $this->dateUpdated = $dateUpdated;
        return $this;
    }
}
