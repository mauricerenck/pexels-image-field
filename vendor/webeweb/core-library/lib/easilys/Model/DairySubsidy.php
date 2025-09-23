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

namespace WBW\Library\Easilys\Model;

use WBW\Library\Common\Traits\Integers\IntegerIdTrait;
use WBW\Library\Common\Traits\Strings\StringCodeTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;

/**
 * Dairy subsidy.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class DairySubsidy {

    use IntegerIdTrait {
        setId as public;
    }
    use StringCodeTrait;
    use StringLabelTrait;

    /**
     * Amount.
     *
     * @var float|null
     */
    protected $amount;

    /**
     * Unit.
     *
     * @var Unit|null
     */
    protected $unit;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the amount.
     *
     * @return float|null Returns the amount.
     */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Get the unit.
     *
     * @return Unit|null Returns the unit.
     */
    public function getUnit(): ?Unit {
        return $this->unit;
    }

    /**
     * Set the amount.
     *
     * @param float|null $amount The amount.
     * @return DairySubsidy Returns this dairy subsidy.
     */
    public function setAmount(?float $amount): DairySubsidy {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Set the unit.
     *
     * @param Unit|null $unit The unit.
     * @return DairySubsidy Returns this dairy subsidy.
     */
    public function setUnit(?Unit $unit): DairySubsidy {
        $this->unit = $unit;
        return $this;
    }
}
