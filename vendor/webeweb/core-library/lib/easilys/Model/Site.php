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
use WBW\Library\Common\Traits\Integers\IntegerStatusTrait;
use WBW\Library\Common\Traits\Integers\IntegerTypeTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;
use WBW\Library\Common\Traits\Strings\StringLinkTrait;
use WBW\Library\Easilys\Traits\Booleans\BooleanApplyToChildrenSitesTrait;
use WBW\Library\Easilys\Traits\Integers\IntegerIdParentTrait;
use WBW\Library\Easilys\Traits\Integers\IntegerIdTreeTrait;
use WBW\Library\Easilys\Traits\Objects\SupplierTrait;
use WBW\Library\Easilys\Traits\Strings\StringCodeGlnTrait;
use WBW\Library\Easilys\Traits\Strings\StringCodeInternalTrait;
use WBW\Library\Easilys\Traits\Strings\StringExtIdTrait;

/**
 * Site.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class Site {

    use BooleanApplyToChildrenSitesTrait;
    use IntegerIdParentTrait;
    use IntegerIdTrait {
        setId as public;
    }
    use IntegerIdTreeTrait;
    use IntegerStatusTrait;
    use IntegerTypeTrait;
    use StringCodeGlnTrait;
    use StringCodeInternalTrait;
    use StringExtIdTrait;
    use StringLabelTrait;
    use StringLinkTrait;
    use SupplierTrait;

    /**
     * Accounting general.
     *
     * @var AccountingGeneral|null
     */
    protected $accountingGeneral;

    /**
     * Address invoicing.
     *
     * @var Address|null
     */
    protected $addressInvoicing;

    /**
     * Addresses.
     *
     * @var Address[]
     */
    protected $addresses;

    /**
     * Automatic stock transfer.
     *
     * @var AutomaticStockTransfer|null
     */
    protected $automaticStockTransfer;

    /**
     * Billable status.
     *
     * @var int|null
     */
    protected $billableStatus;

    /**
     * Block closing inventory with pending receipts.
     *
     * @var bool|null
     */
    protected $blockClosingInventoryWithPendingReceipts;

    /**
     * Control sample config.
     *
     * @var ControlSampleConfig|null
     */
    protected $controlSampleConfig;

    /**
     * Date start billing.
     *
     * @var string|null
     */
    protected $dateStartBilling;

    /**
     * Depth.
     *
     * @var int|null
     */
    protected $depth;

    /**
     * Display negative stock.
     *
     * @var bool|null
     */
    protected $displayNegativeStock;

    /**
     * Ext data.
     *
     * @var ExtData|null
     */
    protected $extData;

    /**
     * Has finished products.
     *
     * @var bool|null
     */
    protected $hasFinishedProducts;

    /**
     * Id account Ideolys.
     *
     * @var string|null
     */
    protected $idAccountIdeolys;

    /**
     * Id account Ideolys root.
     *
     * @var string|null
     */
    protected $idAccountIdeolysRoot;

    /**
     * Is doing stock transfer.
     *
     * @var bool|null
     */
    protected $isDoingStockTransfer;

    /**
     * Is payment active.
     *
     * @var bool|null
     */
    protected $isPaymentActive;

    /**
     * Is using only orderable supplier product.
     *
     * @var bool|null
     */
    protected $isUsingOnlyOrderableSupplierProduct;

    /**
     * Left border.
     *
     * @var int|null
     */
    protected $leftBorder;

    /**
     * Params.
     *
     * @var Params|null
     */
    protected $params;

    /**
     * Right border.
     *
     * @var int|null
     */
    protected $rightBorder;

    /**
     * Stock valuation type.
     *
     * @var int|null
     */
    protected $stockValuationType;

    /**
     * stock withdrawal origin.
     *
     * @var string|null
     */
    protected $stockWithdrawalOrigin;

    /**
     * Supplier product reference.
     *
     * @var SupplierProductReference|null
     */
    protected $supplierProductReference;

    /**
     * Tags.
     *
     * @var Tag[]
     */
    protected $tags;

    /**
     * Use gross quantity in recipe.
     *
     * @var bool|null
     */
    protected $useGrossQuantityInRecipe;

    /**
     * Use net quantity in recipe.
     *
     * @var bool|null
     */
    protected $useNetQuantityInRecipe;

    /**
     * Zero quantity by default.
     *
     * @var bool|null
     */
    protected $zeroQuantityByDefault;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setAddresses([]);
        $this->setTags([]);
    }

    /**
     * Add an address.
     *
     * @param Address|null $address The address.
     * @return Site Returns this site.
     */
    public function addAddress(?Address $address): Site {

        if (null !== $address) {
            $this->addresses[] = $address;
        }

        return $this;
    }

    /**
     * Add a tag.
     *
     * @param Tag|null $tag The tag.
     * @return Site Returns this site.
     */
    public function addTag(?Tag $tag): Site {

        if (null !== $tag) {
            $this->tags[] = $tag;
        }

        return $this;
    }

    /**
     * Get the accounting general.
     *
     * @return AccountingGeneral|null Returns the accounting general.
     */
    public function getAccountingGeneral(): ?AccountingGeneral {
        return $this->accountingGeneral;
    }

    /**
     * Get the address invoicing.
     *
     * @return Address|null Returns the address invoicing.
     */
    public function getAddressInvoicing(): ?Address {
        return $this->addressInvoicing;
    }

    /**
     * Get the addresses.
     *
     * @return Address[] Returns the addresses.
     */
    public function getAddresses(): array {
        return $this->addresses;
    }

    /**
     * Get the automatic stock transfer.
     *
     * @return AutomaticStockTransfer|null Returns the automatic stock transfer.
     */
    public function getAutomaticStockTransfer(): ?AutomaticStockTransfer {
        return $this->automaticStockTransfer;
    }

    /**
     * Get the billable status.
     *
     * @return int|null Returns the billable status.
     */
    public function getBillableStatus(): ?int {
        return $this->billableStatus;
    }

    /**
     * Get the block closing inventory with pending receipts.
     *
     * @return bool|null Returns the block closing inventory with pending receipts.
     */
    public function getBlockClosingInventoryWithPendingReceipts(): ?bool {
        return $this->blockClosingInventoryWithPendingReceipts;
    }

    /**
     * Get the control sample config.
     *
     * @return ControlSampleConfig|null Returns the control sample config.
     */
    public function getControlSampleConfig(): ?ControlSampleConfig {
        return $this->controlSampleConfig;
    }

    /**
     * Get the date start billing.
     *
     * @return string|null Returns the date start billing.
     */
    public function getDateStartBilling(): ?string {
        return $this->dateStartBilling;
    }

    /**
     * Get the depth.
     *
     * @return int|null Returns the depth.
     */
    public function getDepth(): ?int {
        return $this->depth;
    }

    /**
     * Get the display negative stock.
     *
     * @return bool|null Returns the display negative stock.
     */
    public function getDisplayNegativeStock(): ?bool {
        return $this->displayNegativeStock;
    }

    /**
     * Get the ext data.
     *
     * @return ExtData|null Returns the ext data.
     */
    public function getExtData(): ?ExtData {
        return $this->extData;
    }

    /**
     * Get the has finished products.
     *
     * @return bool|null Returns the has finished products.
     */
    public function getHasFinishedProducts(): ?bool {
        return $this->hasFinishedProducts;
    }

    /**
     * Get the id account Ideolys.
     *
     * @return string|null Returns the id account Ideolys.
     */
    public function getIdAccountIdeolys(): ?string {
        return $this->idAccountIdeolys;
    }

    /**
     * Get the id account Ideolys root.
     *
     * @return string|null Returns the id account Ideolys root.
     */
    public function getIdAccountIdeolysRoot(): ?string {
        return $this->idAccountIdeolysRoot;
    }

    /**
     * Get the is doing stock transfer.
     *
     * @return bool|null Returns the is doing stock transfer.
     */
    public function getIsDoingStockTransfer(): ?bool {
        return $this->isDoingStockTransfer;
    }

    /**
     * Get the is payment active.
     *
     * @return bool|null Returns the  is payment active.
     */
    public function getIsPaymentActive(): ?bool {
        return $this->isPaymentActive;
    }

    /**
     * Get the is using only orderable supplier product.
     *
     * @return bool|null Returns the is using only orderable supplier product.
     */
    public function getIsUsingOnlyOrderableSupplierProduct(): ?bool {
        return $this->isUsingOnlyOrderableSupplierProduct;
    }

    /**
     * Get the left border.
     *
     * @return int|null Returns the left border.
     */
    public function getLeftBorder(): ?int {
        return $this->leftBorder;
    }

    /**
     * Get the params.
     *
     * @return Params|null Returns the params.
     */
    public function getParams(): ?Params {
        return $this->params;
    }

    /**
     * Get the right border.
     *
     * @return int|null Returns the right border.
     */
    public function getRightBorder(): ?int {
        return $this->rightBorder;
    }

    /**
     * Get the stock valuation type.
     *
     * @return int|null Returns the stock valuation type.
     */
    public function getStockValuationType(): ?int {
        return $this->stockValuationType;
    }

    /**
     * Get the stock withdrawal origin.
     *
     * @return string|null Returns the stock withdrawal origin.
     */
    public function getStockWithdrawalOrigin(): ?string {
        return $this->stockWithdrawalOrigin;
    }

    /**
     * Get the supplier product reference.
     *
     * @return SupplierProductReference|null Returns the supplier product reference.
     */
    public function getSupplierProductReference(): ?SupplierProductReference {
        return $this->supplierProductReference;
    }

    /**
     * Get the tags.
     *
     * @return Tag[] Returns the tags.
     */
    public function getTags(): array {
        return $this->tags;
    }

    /**
     * Get the use gross quantity in recipe.
     *
     * @return bool|null Returns the use gross quantity in recipe.
     */
    public function getUseGrossQuantityInRecipe(): ?bool {
        return $this->useGrossQuantityInRecipe;
    }

    /**
     * Get the use net quantity in recipe.
     *
     * @return bool|null Returns the use net quantity in recipe.
     */
    public function getUseNetQuantityInRecipe(): ?bool {
        return $this->useNetQuantityInRecipe;
    }

    /**
     * Get the zero quantity by default.
     *
     * @return bool|null Returns the zero quantity by default.
     */
    public function getZeroQuantityByDefault(): ?bool {
        return $this->zeroQuantityByDefault;
    }

    /**
     * Set the accounting general.
     *
     * @param AccountingGeneral|null $accountingGeneral The accounting general.
     * @return Site Returns this site.
     */
    public function setAccountingGeneral(?AccountingGeneral $accountingGeneral): Site {
        $this->accountingGeneral = $accountingGeneral;
        return $this;
    }

    /**
     * Set the address invoicing.
     *
     * @param Address|null $addressInvoicing The address invoicing.
     * @return Site Returns this site.
     */
    public function setAddressInvoicing(?Address $addressInvoicing): Site {
        $this->addressInvoicing = $addressInvoicing;
        return $this;
    }

    /**
     * Set the addresses.
     *
     * @param Address[] $addresses The addresses.
     * @return Site Returns this site.
     */
    protected function setAddresses(array $addresses): Site {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Set the automatic stock transfer.
     *
     * @param AutomaticStockTransfer|null $automaticStockTransfer The automatic stock transfer.
     * @return Site Returns this site.
     */
    public function setAutomaticStockTransfer(?AutomaticStockTransfer $automaticStockTransfer): Site {
        $this->automaticStockTransfer = $automaticStockTransfer;
        return $this;
    }

    /**
     * Set the billable status.
     *
     * @param int|null $billableStatus The billable status.
     * @return Site Returns this site.
     */
    public function setBillableStatus(?int $billableStatus): Site {
        $this->billableStatus = $billableStatus;
        return $this;
    }

    /**
     * Set the block closing inventory with pending receipts.
     *
     * @param bool|null $blockClosingInventoryWithPendingReceipts The block closing inventory with pending receipts.
     * @return Site Returns this site.
     */
    public function setBlockClosingInventoryWithPendingReceipts(?bool $blockClosingInventoryWithPendingReceipts): Site {
        $this->blockClosingInventoryWithPendingReceipts = $blockClosingInventoryWithPendingReceipts;
        return $this;
    }

    /**
     * Set the control sample config.
     *
     * @param ControlSampleConfig|null $controlSampleConfig The control sample config.
     * @return Site Returns this site.
     */
    public function setControlSampleConfig(?ControlSampleConfig $controlSampleConfig): Site {
        $this->controlSampleConfig = $controlSampleConfig;
        return $this;
    }

    /**
     * Set the date start billing.
     *
     * @param string|null $dateStartBilling The date start billing.
     * @return Site Returns this site.
     */
    public function setDateStartBilling(?string $dateStartBilling): Site {
        $this->dateStartBilling = $dateStartBilling;
        return $this;
    }

    /**
     * Set the depth.
     *
     * @param int|null $depth The depth.
     * @return Site Returns this site.
     */
    public function setDepth(?int $depth): Site {
        $this->depth = $depth;
        return $this;
    }

    /**
     * Set the display negative stock.
     *
     * @param bool|null $displayNegativeStock The display negative stock.
     * @return Site Returns this site.
     */
    public function setDisplayNegativeStock(?bool $displayNegativeStock): Site {
        $this->displayNegativeStock = $displayNegativeStock;
        return $this;
    }

    /**
     * Set the ext data.
     *
     * @param ExtData|null $extData The ext data.
     * @return Site Returns this site.
     */
    public function setExtData(?ExtData $extData): Site {
        $this->extData = $extData;
        return $this;
    }

    /**
     * Set the has finished products.
     *
     * @param bool|null $hasFinishedProducts The has finished products.
     * @return Site Returns this site.
     */
    public function setHasFinishedProducts(?bool $hasFinishedProducts): Site {
        $this->hasFinishedProducts = $hasFinishedProducts;
        return $this;
    }

    /**
     * Set the id account Ideolys.
     *
     * @param string|null $idAccountIdeolys The id account Ideolys.
     * @return Site Returns this site.
     */
    public function setIdAccountIdeolys(?string $idAccountIdeolys): Site {
        $this->idAccountIdeolys = $idAccountIdeolys;
        return $this;
    }

    /**
     * Set the id account Ideolys root.
     *
     * @param string|null $idAccountIdeolysRoot The id account Ideolys root.
     * @return Site Returns this site.
     */
    public function setIdAccountIdeolysRoot(?string $idAccountIdeolysRoot): Site {
        $this->idAccountIdeolysRoot = $idAccountIdeolysRoot;
        return $this;
    }

    /**
     * Set the is doing stock transfer.
     *
     * @param bool|null $isDoingStockTransfer The is doing stock transfer.
     * @return Site Returns this site.
     */
    public function setIsDoingStockTransfer(?bool $isDoingStockTransfer): Site {
        $this->isDoingStockTransfer = $isDoingStockTransfer;
        return $this;
    }

    /**
     * Set the is payment active.
     *
     * @param bool|null $isPaymentActive The is payment active.
     * @return Site Returns this site.
     */
    public function setIsPaymentActive(?bool $isPaymentActive): Site {
        $this->isPaymentActive = $isPaymentActive;
        return $this;
    }

    /**
     * Set the is using only orderable supplier product.
     *
     * @param bool|null $isUsingOnlyOrderableSupplierProduct The is using only orderable supplier product.
     * @return Site Returns this site.
     */
    public function setIsUsingOnlyOrderableSupplierProduct(?bool $isUsingOnlyOrderableSupplierProduct): Site {
        $this->isUsingOnlyOrderableSupplierProduct = $isUsingOnlyOrderableSupplierProduct;
        return $this;
    }

    /**
     * Set the left border.
     *
     * @param int|null $leftBorder The left border.
     * @return Site Returns this site.
     */
    public function setLeftBorder(?int $leftBorder): Site {
        $this->leftBorder = $leftBorder;
        return $this;
    }

    /**
     * Set the params.
     *
     * @param Params|null $params The params.
     * @return Site Returns this site.
     */
    public function setParams(?Params $params): Site {
        $this->params = $params;
        return $this;
    }

    /**
     * Set the right border.
     *
     * @param int|null $rightBorder The right border.
     * @return Site Returns this site.
     */
    public function setRightBorder(?int $rightBorder): Site {
        $this->rightBorder = $rightBorder;
        return $this;
    }

    /**
     * Set the stock valuation type.
     *
     * @param int|null $stockValuationType The stock valuation type.
     * @return Site Returns this site.
     */
    public function setStockValuationType(?int $stockValuationType): Site {
        $this->stockValuationType = $stockValuationType;
        return $this;
    }

    /**
     * Set the stock withdrawal origin.
     *
     * @param string|null $stockWithdrawalOrigin The stock withdrawal origin.
     * @return Site Returns this site.
     */
    public function setStockWithdrawalOrigin(?string $stockWithdrawalOrigin): Site {
        $this->stockWithdrawalOrigin = $stockWithdrawalOrigin;
        return $this;
    }

    /**
     * Set the supplier product reference.
     *
     * @param SupplierProductReference|null $supplierProductReference The supplier product reference.
     * @return Site Returns this site.
     */
    public function setSupplierProductReference(?SupplierProductReference $supplierProductReference): Site {
        $this->supplierProductReference = $supplierProductReference;
        return $this;
    }

    /**
     * Set the tags.
     *
     * @param Tag[] $tags The tags.
     * @return Site Returns this site.
     */
    protected function setTags(array $tags): Site {
        $this->tags = $tags;
        return $this;
    }

    /**
     * Set the use gross quantity in recipe.
     *
     * @param bool|null $useGrossQuantityInRecipe The use gross quantity in recipe.
     * @return Site Returns this site.
     */
    public function setUseGrossQuantityInRecipe(?bool $useGrossQuantityInRecipe): Site {
        $this->useGrossQuantityInRecipe = $useGrossQuantityInRecipe;
        return $this;
    }

    /**
     * Set the use net quantity in recipe.
     *
     * @param bool|null $useNetQuantityInRecipe The use net quantity in recipe.
     * @return Site Returns this site.
     */
    public function setUseNetQuantityInRecipe(?bool $useNetQuantityInRecipe): Site {
        $this->useNetQuantityInRecipe = $useNetQuantityInRecipe;
        return $this;
    }

    /**
     * Set the zero quantity by default.
     *
     * @param bool|null $zeroQuantityByDefault The zero quantity by default.
     * @return Site Returns this site.
     */
    public function setZeroQuantityByDefault(?bool $zeroQuantityByDefault): Site {
        $this->zeroQuantityByDefault = $zeroQuantityByDefault;
        return $this;
    }
}
