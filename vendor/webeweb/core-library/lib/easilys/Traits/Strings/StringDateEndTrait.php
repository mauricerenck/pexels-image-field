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
 * String date end trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Strings
 */
trait StringDateEndTrait {

    /**
     * Date end.
     *
     * @var string|null
     */
    protected $dateEnd;

    /**
     * Get the date end.
     *
     * @return string|null Returns the date end.
     */
    public function getDateEnd(): ?string {
        return $this->dateEnd;
    }

    /**
     * Set the date end.
     *
     * @param string|null $dateEnd The date end.
     * @return self Returns this instance.
     */
    public function setDateEnd(?string $dateEnd): self {
        $this->dateEnd = $dateEnd;
        return $this;
    }
}
