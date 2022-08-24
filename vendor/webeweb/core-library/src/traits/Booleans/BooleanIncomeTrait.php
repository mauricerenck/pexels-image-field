<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Booleans;

/**
 * Boolean income trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanIncomeTrait {

    /**
     * Income.
     *
     * @var bool|null
     */
    protected $income;

    /**
     * Get the income.
     *
     * @return bool|null Returns the income.
     */
    public function getIncome(): ?bool {
        return $this->income;
    }

    /**
     * Set the income.
     *
     * @param bool|null $income The income.
     * @return self Returns this instance.
     */
    public function setIncome(?bool $income): self {
        $this->income = $income;
        return $this;
    }
}
