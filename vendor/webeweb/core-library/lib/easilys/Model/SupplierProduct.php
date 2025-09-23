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
use WBW\Library\Common\Traits\Strings\StringReferenceTrait;
use WBW\Library\Easilys\Traits\Booleans\BooleanIsActiveTrait;
use WBW\Library\Easilys\Traits\Integers\IntegerDateCreatedTrait;
use WBW\Library\Easilys\Traits\Integers\IntegerDateUpdatedTrait;
use WBW\Library\Easilys\Traits\Integers\IntegerIdDocumentProductSheetTrait;
use WBW\Library\Easilys\Traits\Integers\IntegerIdSiteOwnerTrait;
use WBW\Library\Easilys\Traits\Strings\StringCodeInternalTrait;
use WBW\Library\Easilys\Traits\Strings\StringExtIdTrait;

/**
 * Supplier product.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class SupplierProduct {

    use BooleanIsActiveTrait;
    use IntegerDateCreatedTrait;
    use IntegerDateUpdatedTrait;
    use IntegerIdDocumentProductSheetTrait;
    use IntegerIdSiteOwnerTrait;
    use IntegerIdTrait {
        setId as public;
    }
    use StringCodeInternalTrait;
    use StringExtIdTrait;
    use StringLabelTrait;
    use StringReferenceTrait;

    /**
     * Billing unit.
     *
     * @var string|null
     */
    protected $billingUnit;

    /**
     * Chain.
     *
     * @var int|null
     */
    protected $chain;

    /**
     * Dairy subsidy.
     *
     * @var DairySubsidy|null
     */
    protected $dairySubsidy;

    /**
     * Is decimal allowed.
     *
     * @var bool|null
     */
    protected $isDecimalAllowed;

    /**
     * Min order qty.
     *
     * @var int|null
     */
    protected $minOrderQty;

    /**
     * Nb billing per order.
     *
     * @var int|null
     */
    protected $nbBillingPerOrder;

    /**
     * Nb production per orders.
     *
     * @var int[]|null
     */
    protected $nbProductionPerOrders;

    /**
     * Nb storage per order.
     *
     * @var int|null
     */
    protected $nbStoragePerOrder;

    /**
     * Order unit.
     *
     * @var string|null
     */
    protected $orderUnit;

    /**
     * Packaging level.
     *
     * @var PackagingLevel|null
     */
    protected $packagingLevel;

    /**
     * Pre order delay.
     *
     * @var int|null
     */
    protected $preOrderDelay;

    /**
     * Product.
     *
     * @var Product|null
     */
    protected $product;

    /**
     * Storage unit.
     *
     * @var string|null
     */
    protected $storageUnit;

    /**
     * Weight order unit.
     *
     * @var int|null
     */
    protected $weightOrderUnit;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the billing unit.
     *
     * @return string|null Returns the billing unit.
     */
    public function getBillingUnit(): ?string {
        return $this->billingUnit;
    }

    /**
     * Get the chain.
     *
     * @return int|null Returns the chain.
     */
    public function getChain(): ?int {
        return $this->chain;
    }

    /**
     * Get the dairy subsidy.
     *
     * @return DairySubsidy|null Returns the dairy subsidy.
     */
    public function getDairySubsidy(): ?DairySubsidy {
        return $this->dairySubsidy;
    }

    /**
     * Get the is decimal allowed.
     *
     * @return bool|null
     */
    public function getIsDecimalAllowed(): ?bool {
        return $this->isDecimalAllowed;
    }

    /**
     * Get the min order qty.
     *
     * @return int|null Returns the min order qty.
     */
    public function getMinOrderQty(): ?int {
        return $this->minOrderQty;
    }

    /**
     * Get the nb billing per order.
     *
     * @return int|null Returns the nb billing per order.
     */
    public function getNbBillingPerOrder(): ?int {
        return $this->nbBillingPerOrder;
    }

    /**
     * Get the nb production per orders.
     *
     * @return int[]|null Returns the nb production per orders.
     */
    public function getNbProductionPerOrders(): ?array {
        return $this->nbProductionPerOrders;
    }

    /**
     * Get the nb storage per order.
     *
     * @return int|null Returns the nb storage per order.
     */
    public function getNbStoragePerOrder(): ?int {
        return $this->nbStoragePerOrder;
    }

    /**
     * Get the order unit.
     *
     * @return string|null Returns the order unit.
     */
    public function getOrderUnit(): ?string {
        return $this->orderUnit;
    }

    /**
     * Get the packaging level.
     *
     * @return PackagingLevel|null Returns the packaging level.
     */
    public function getPackagingLevel(): ?PackagingLevel {
        return $this->packagingLevel;
    }

    /**
     * Get the pre order delay.
     *
     * @return int|null Returns the pre order delay.
     */
    public function getPreOrderDelay(): ?int {
        return $this->preOrderDelay;
    }

    /**
     * Get the product.
     *
     * @return Product|null Returns the product.
     */
    public function getProduct(): ?Product {
        return $this->product;
    }

    /**
     * Get the storage unit.
     *
     * @return string|null Returns the storage unit.
     */
    public function getStorageUnit(): ?string {
        return $this->storageUnit;
    }

    /**
     * Get the weight order unit.
     *
     * @return int|null Returns the weight order unit.
     */
    public function getWeightOrderUnit(): ?int {
        return $this->weightOrderUnit;
    }

    /**
     * Set the billing unit.
     *
     * @param string|null $billingUnit The billing unit.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setBillingUnit(?string $billingUnit): SupplierProduct {
        $this->billingUnit = $billingUnit;
        return $this;
    }

    /**
     * Set the chain.
     *
     * @param int|null $chain The chain.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setChain(?int $chain): SupplierProduct {
        $this->chain = $chain;
        return $this;
    }

    /**
     * Set the dairy subsidy.
     *
     * @param DairySubsidy|null $dairySubsidy The dairy subsidy.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setDairySubsidy(?DairySubsidy $dairySubsidy): SupplierProduct {
        $this->dairySubsidy = $dairySubsidy;
        return $this;
    }

    /**
     * Set the is decimal allowed.
     *
     * @param bool|null $isDecimalAllowed The is decimal allowed.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setIsDecimalAllowed(?bool $isDecimalAllowed): SupplierProduct {
        $this->isDecimalAllowed = $isDecimalAllowed;
        return $this;
    }

    /**
     * Set the min order qty.
     *
     * @param int|null $minOrderQty The min order qty.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setMinOrderQty(?int $minOrderQty): SupplierProduct {
        $this->minOrderQty = $minOrderQty;
        return $this;
    }

    /**
     * Set the nb billing per order.
     *
     * @param int|null $nbBillingPerOrder The nb billing per order.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setNbBillingPerOrder(?int $nbBillingPerOrder): SupplierProduct {
        $this->nbBillingPerOrder = $nbBillingPerOrder;
        return $this;
    }

    /**
     * Set the nb production per orders.
     *
     * @param int[]|null $nbProductionPerOrders The nb production per orders.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setNbProductionPerOrders(?array $nbProductionPerOrders): SupplierProduct {
        $this->nbProductionPerOrders = $nbProductionPerOrders;
        return $this;
    }

    /**
     * Set the nb storage per order.
     *
     * @param int|null $nbStoragePerOrder The nb storage per order.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setNbStoragePerOrder(?int $nbStoragePerOrder): SupplierProduct {
        $this->nbStoragePerOrder = $nbStoragePerOrder;
        return $this;
    }

    /**
     * Set the order unit.
     *
     * @param string|null $orderUnit The order unit.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setOrderUnit(?string $orderUnit): SupplierProduct {
        $this->orderUnit = $orderUnit;
        return $this;
    }

    /**
     * Set the packaging level.
     *
     * @param PackagingLevel|null $packagingLevel The packaging level.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setPackagingLevel(?PackagingLevel $packagingLevel): SupplierProduct {
        $this->packagingLevel = $packagingLevel;
        return $this;
    }

    /**
     * Set the pre order delay.
     *
     * @param int|null $preOrderDelay The pre order delay.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setPreOrderDelay(?int $preOrderDelay): SupplierProduct {
        $this->preOrderDelay = $preOrderDelay;
        return $this;
    }

    /**
     * Set the product.
     *
     * @param Product|null $product The product.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setProduct(?Product $product): SupplierProduct {
        $this->product = $product;
        return $this;
    }

    /**
     * Set the storage unit.
     *
     * @param string|null $storageUnit The storage unit.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setStorageUnit(?string $storageUnit): SupplierProduct {
        $this->storageUnit = $storageUnit;
        return $this;
    }

    /**
     * Set the weight order unit.
     *
     * @param int|null $weightOrderUnit The weight order unit.
     * @return SupplierProduct Returns this supplier product.
     */
    public function setWeightOrderUnit(?int $weightOrderUnit): SupplierProduct {
        $this->weightOrderUnit = $weightOrderUnit;
        return $this;
    }
}
