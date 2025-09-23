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

namespace WBW\Library\Easilys\Traits\Integers;

/**
 * Integer date created trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Integers
 */
trait IntegerDateCreatedTrait {

    /**
     * Date created.
     *
     * @var int|null
     */
    protected $dateCreated;

    /**
     * Get the date created.
     *
     * @return int|null Returns the date created.
     */
    public function getDateCreated(): ?int {
        return $this->dateCreated;
    }

    /**
     * Set the date created.
     *
     * @param int|null $dateCreated The date created.
     * @return self Returns this instance.
     */
    public function setDateCreated(?int $dateCreated): self {
        $this->dateCreated = $dateCreated;
        return $this;
    }
}
