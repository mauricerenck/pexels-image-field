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
 * String date start trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Strings
 */
trait StringDateStartTrait {

    /**
     * Date start.
     *
     * @var string|null
     */
    protected $dateStart;

    /**
     * Get the date start.
     *
     * @return string|null Returns the date start.
     */
    public function getDateStart(): ?string {
        return $this->dateStart;
    }

    /**
     * Set the date start.
     *
     * @param string|null $dateStart The date start.
     * @return self Returns this instance.
     */
    public function setDateStart(?string $dateStart): self {
        $this->dateStart = $dateStart;
        return $this;
    }
}
