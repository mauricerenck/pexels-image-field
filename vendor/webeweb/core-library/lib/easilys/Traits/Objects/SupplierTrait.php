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

namespace WBW\Library\Easilys\Traits\Objects;

use WBW\Library\Easilys\Model\Supplier;

/**
 * Supplier trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Objects
 */
trait SupplierTrait {

    /**
     * Supplier.
     *
     * @var Supplier|null
     */
    protected $supplier;

    /**
     * Get the supplier.
     *
     * @return Supplier|null Returns the supplier.
     */
    public function getSupplier(): ?Supplier {
        return $this->supplier;
    }

    /**
     * Set the supplier.
     *
     * @param Supplier|null $supplier The supplier.
     * @return self Returns this instance.
     */
    public function setSupplier(?Supplier $supplier): self {
        $this->supplier = $supplier;
        return $this;
    }
}
