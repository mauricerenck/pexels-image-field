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
use WBW\Library\Easilys\Traits\Booleans\BooleanIsValidatedTrait;
use WBW\Library\Easilys\Traits\Strings\StringDateEndTrait;
use WBW\Library\Easilys\Traits\Strings\StringDateStartTrait;
use WBW\Library\Easilys\Traits\Strings\StringDateUpdatedTrait;

/**
 * Price list supplier product.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class PriceListSupplierProduct {

    use BooleanIsValidatedTrait;
    use IntegerIdTrait {
        setId as public;
    }
    use StringDateEndTrait;
    use StringDateStartTrait;
    use StringDateUpdatedTrait;

    /**
     * Is available.
     *
     * @var bool|null
     */
    protected $isAvailable;

    /**
     * Is current.
     *
     * @var bool|null
     */
    protected $isCurrent;

    /**
     * Is future.
     *
     * @var bool|null
     */
    protected $isFuture;

    /**
     * Is orderable.
     *
     * @var bool|null
     */
    protected $isOrderable;

    /**
     * Price billing unit.
     *
     * @var float|null
     */
    protected $priceBillingUnit;

    /**
     * Price list.
     *
     * @var PriceList|null
     */
    protected $priceList;

    /**
     * Price order unit.
     *
     * @var float|null
     */
    protected $priceOrderUnit;

    /**
     * Received quantity.
     *
     * @var int|null
     */
    protected $receivedQuantity;

    /**
     * Supplier product.
     *
     * @var SupplierProduct|null
     */
    protected $supplierProduct;

    /**
     * Target quantity.
     *
     * @var int|null
     */
    protected $targetQuantity;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the date updated.
     *
     * @return string|null Returns the date updated.
     */
    public function getDateUpdated(): ?string {
        return $this->dateUpdated;
    }

    /**
     * Get the is available.
     *
     * @return bool|null Returns the is available.
     */
    public function getIsAvailable(): ?bool {
        return $this->isAvailable;
    }

    /**
     * Get the is current.
     *
     * @return bool|null Returns the is current.
     */
    public function getIsCurrent(): ?bool {
        return $this->isCurrent;
    }

    /**
     * Get the is future.
     *
     * @return bool|null Returns the is future.
     */
    public function getIsFuture(): ?bool {
        return $this->isFuture;
    }

    /**
     * Get the is orderable.
     *
     * @return bool|null Returns the is orderable.
     */
    public function getIsOrderable(): ?bool {
        return $this->isOrderable;
    }

    /**
     * Get the price billing unit.
     *
     * @return float|null Returns the price billing unit.
     */
    public function getPriceBillingUnit(): ?float {
        return $this->priceBillingUnit;
    }

    /**
     * Get the price list.
     *
     * @return PriceList|null Returns the price list.
     */
    public function getPriceList(): ?PriceList {
        return $this->priceList;
    }

    /**
     * Get the price order unit.
     *
     * @return float|null Returns the price order unit.
     */
    public function getPriceOrderUnit(): ?float {
        return $this->priceOrderUnit;
    }

    /**
     * Get the received quantity.
     *
     * @return int|null Returns the received quantity.
     */
    public function getReceivedQuantity(): ?int {
        return $this->receivedQuantity;
    }

    /**
     * Get the supplier product.
     *
     * @return SupplierProduct|null Returns the supplier product.
     */
    public function getSupplierProduct(): ?SupplierProduct {
        return $this->supplierProduct;
    }

    /**
     * Get the target quantity.
     *
     * @return int|null Returns the target quantity.
     */
    public function getTargetQuantity(): ?int {
        return $this->targetQuantity;
    }

    /**
     * Set the is available.
     *
     * @param bool|null $isAvailable The is available.
     * @return PriceListSupplierProduct Returns this price list supplier product.
     */
    public function setIsAvailable(?bool $isAvailable): PriceListSupplierProduct {
        $this->isAvailable = $isAvailable;
        return $this;
    }

    /**
     * Set the is current.
     *
     * @param bool|null $isCurrent The is current.
     * @return PriceListSupplierProduct Returns this price list supplier product.
     */
    public function setIsCurrent(?bool $isCurrent): PriceListSupplierProduct {
        $this->isCurrent = $isCurrent;
        return $this;
    }

    /**
     * Set the is future.
     *
     * @param bool|null $isFuture The is future.
     * @return PriceListSupplierProduct Returns this price list supplier product.
     */
    public function setIsFuture(?bool $isFuture): PriceListSupplierProduct {
        $this->isFuture = $isFuture;
        return $this;
    }

    /**
     * Set the is orderable.
     *
     * @param bool|null $isOrderable The is orderable.
     * @return PriceListSupplierProduct Returns this price list supplier product.
     */
    public function setIsOrderable(?bool $isOrderable): PriceListSupplierProduct {
        $this->isOrderable = $isOrderable;
        return $this;
    }

    /**
     * Set the price billing unit.
     *
     * @param float|null $priceBillingUnit The price billing unit.
     * @return PriceListSupplierProduct Returns this price list supplier product.
     */
    public function setPriceBillingUnit(?float $priceBillingUnit): PriceListSupplierProduct {
        $this->priceBillingUnit = $priceBillingUnit;
        return $this;
    }

    /**
     * Set the price list.
     *
     * @param PriceList|null $priceList The price list.
     * @return PriceListSupplierProduct Returns this price list supplier product.
     */
    public function setPriceList(?PriceList $priceList): PriceListSupplierProduct {
        $this->priceList = $priceList;
        return $this;
    }

    /**
     * Set the price order unit.
     *
     * @param float|null $priceOrderUnit The price order unit.
     * @return PriceListSupplierProduct Returns this price list supplier product.
     */
    public function setPriceOrderUnit(?float $priceOrderUnit): PriceListSupplierProduct {
        $this->priceOrderUnit = $priceOrderUnit;
        return $this;
    }

    /**
     * Set the received quantity.
     *
     * @param int|null $receivedQuantity The received quantity.
     * @return PriceListSupplierProduct Returns this price list supplier product.
     */
    public function setReceivedQuantity(?int $receivedQuantity): PriceListSupplierProduct {
        $this->receivedQuantity = $receivedQuantity;
        return $this;
    }

    /** Set the supplier product.
     *
     * @param SupplierProduct|null $supplierProduct The supplier product.
     * @return PriceListSupplierProduct Returns this price list supplier product.
     */
    public function setSupplierProduct(?SupplierProduct $supplierProduct): PriceListSupplierProduct {
        $this->supplierProduct = $supplierProduct;
        return $this;
    }

    /**
     * Set the target quantity.
     *
     * @param int|null $targetQuantity The target quantity.
     * @return PriceListSupplierProduct Returns this price list supplier product.
     */
    public function setTargetQuantity(?int $targetQuantity): PriceListSupplierProduct {
        $this->targetQuantity = $targetQuantity;
        return $this;
    }
}
