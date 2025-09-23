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

use WBW\Library\Easilys\Traits\Booleans\BooleanApplyToChildrenSitesTrait;

/**
 * Supplier product reference.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class SupplierProductReference {

    use BooleanApplyToChildrenSitesTrait;

    /**
     * Is mandatory.
     *
     * @var bool|null
     */
    protected $isMandatory;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the is mandatory.
     *
     * @return bool|null Returns the is mandatory.
     */
    public function getIsMandatory(): ?bool {
        return $this->isMandatory;
    }

    /**
     * Set the is mandatory.
     *
     * @param bool|null $isMandatory The is mandatory.
     * @return SupplierProductReference Returns this supplier product reference.
     */
    public function setIsMandatory(?bool $isMandatory): SupplierProductReference {
        $this->isMandatory = $isMandatory;
        return $this;
    }
}
