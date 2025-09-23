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

/**
 * Params.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class Params {

    /**
     * Supplier order auto receipt.
     *
     * @var bool|null
     */
    protected $supplierOrderAutoReceipt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the supplier order auto receipt.
     *
     * @return bool|null Returns the supplier order auto receipt
     */
    public function getSupplierOrderAutoReceipt(): ?bool {
        return $this->supplierOrderAutoReceipt;
    }

    /**
     * Set the supplier order auto receipt.
     *
     * @param bool|null $supplierOrderAutoReceipt The supplier order auto receipt.
     * @return Params Returns this params.
     */
    public function setSupplierOrderAutoReceipt(?bool $supplierOrderAutoReceipt): Params {
        $this->supplierOrderAutoReceipt = $supplierOrderAutoReceipt;
        return $this;
    }
}
