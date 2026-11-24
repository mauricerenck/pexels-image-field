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

namespace WBW\Library\Common\Traits\Integers;

/**
 * Integer year trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Integers
 */
trait IntegerYearTrait {

    /**
     * Year.
     *
     * @var int|null
     */
    protected $year;

    /**
     * Get the year.
     *
     * @return int|null Returns the year.
     */
    public function getYear(): ?int {
        return $this->year;
    }

    /**
     * Set the year.
     *
     * @param int|null $year The year.
     * @return self Returns this instance.
     */
    public function setYear(?int $year): self {
        $this->year = $year;
        return $this;
    }
}
