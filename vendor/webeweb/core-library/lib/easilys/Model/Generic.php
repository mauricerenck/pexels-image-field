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
use WBW\Library\Common\Traits\Strings\StringLabelTrait;
use WBW\Library\Easilys\Traits\Integers\IntegerIdSiteOwnerTrait;

/**
 * Generic.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class Generic {

    use IntegerIdSiteOwnerTrait;
    use IntegerIdTrait {
        setId as public;
    }
    use StringLabelTrait;

    /**
     * Generic family.
     *
     * @var GenericFamily|null
     */
    protected $genericFamily;

    /**
     * Production unit.
     *
     * @var ProductionUnit|null
     */
    protected $productionUnit;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the generic family.
     *
     * @return GenericFamily|null Returns the generic family.
     */
    public function getGenericFamily(): ?GenericFamily {
        return $this->genericFamily;
    }

    /**
     * Get the production unit.
     *
     * @return ProductionUnit|null Returns the production unit.
     */
    public function getProductionUnit(): ?ProductionUnit {
        return $this->productionUnit;
    }

    /**
     * Set the generic family.
     *
     * @param GenericFamily|null $genericFamily The generic family.
     * @return Generic Returns this generic.
     */
    public function setGenericFamily(?GenericFamily $genericFamily): Generic {
        $this->genericFamily = $genericFamily;
        return $this;
    }

    /**
     * Set the production unit.
     *
     * @param ProductionUnit|null $productionUnit The production unit.
     * @return Generic Returns this generic.
     */
    public function setProductionUnit(?ProductionUnit $productionUnit): Generic {
        $this->productionUnit = $productionUnit;
        return $this;
    }
}
