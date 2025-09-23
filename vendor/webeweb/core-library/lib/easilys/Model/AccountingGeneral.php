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
 * Accounting general.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class AccountingGeneral {

    /**
     * Accounting credit invoice.
     *
     * @var string|null
     */
    protected $accountingCreditInvoice;

    /**
     * Accounting general supplier.
     *
     * @var string|null
     */
    protected $accountingGeneralSupplier;

    /**
     * Accounting purchaseI invoice
     *
     * @var string|null
     */
    protected $accountingPurchaseInvoice;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the accounting credit invoice.
     *
     * @return string|null Returns the accounting credit invoice.
     */
    public function getAccountingCreditInvoice(): ?string {
        return $this->accountingCreditInvoice;
    }

    /**
     * Get the accounting general supplier.
     *
     * @return string|null Returns the accounting general supplier.
     */
    public function getAccountingGeneralSupplier(): ?string {
        return $this->accountingGeneralSupplier;
    }

    /**
     * Get the accounting purchase invoice.
     *
     * @return string|null Returns the accounting purchase invoice.
     */
    public function getAccountingPurchaseInvoice(): ?string {
        return $this->accountingPurchaseInvoice;
    }

    /**
     * Set the accounting credit invoice.
     *
     * @param string|null $accountingCreditInvoice The accounting credit invoice.
     * @return AccountingGeneral Returns this accounting general.
     */
    public function setAccountingCreditInvoice(?string $accountingCreditInvoice): AccountingGeneral {
        $this->accountingCreditInvoice = $accountingCreditInvoice;
        return $this;
    }

    /**
     * Set the accounting general supplier.
     *
     * @param string|null $accountingGeneralSupplier The accounting general supplier.
     * @return AccountingGeneral Returns this accounting general.
     */
    public function setAccountingGeneralSupplier(?string $accountingGeneralSupplier): AccountingGeneral {
        $this->accountingGeneralSupplier = $accountingGeneralSupplier;
        return $this;
    }

    /**
     * Set the accounting purchase invoice.
     *
     * @param string|null $accountingPurchaseInvoice The accounting purchase invoice.
     * @return AccountingGeneral Returns this accounting general.
     */
    public function setAccountingPurchaseInvoice(?string $accountingPurchaseInvoice): AccountingGeneral {
        $this->accountingPurchaseInvoice = $accountingPurchaseInvoice;
        return $this;
    }
}
