<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Model;

use DateTime;
use WBW\Library\Traits\Strings\StringAccountingCodeTrait;
use WBW\Library\Traits\Strings\StringReferenceTrait;

/**
 * Line.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Model
 */
class Line {

    use StringAccountingCodeTrait;
    use StringReferenceTrait;

    /**
     * Amount.
     *
     * @var string|null
     */
    private $amount;

    /**
     * Amount sign.
     *
     * @var string|null
     */
    private $amountSign;

    /**
     * Analytic code.
     *
     * @var string|null
     */
    private $analyticCode;

    /**
     * Booking journal code.
     *
     * @var string|null
     */
    private $bookingJournalCode;

    /**
     * Currency.
     *
     * @var string|null
     */
    private $currency;

    /**
     * Free field.
     *
     * @var string|null
     */
    private $freeField;

    /**
     * Invoice date.
     *
     * @var DateTime|null
     */
    private $invoiceDate;

    /**
     * Invoice due date.
     *
     * @var DateTime|null
     */
    private $invoiceDueDate;

    /**
     * Invoice number.
     *
     * @var string|null
     */
    private $invoiceNumber;

    /**
     * Subledger account.
     *
     * @var string|null
     */
    private $subledgerAccount;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the amount.
     *
     * @return string|null Returns the amount.
     */
    public function getAmount(): ?string {
        return $this->amount;
    }

    /**
     * Get the amount sign.
     *
     * @return string|null Returns the amount sign.
     */
    public function getAmountSign(): ?string {
        return $this->amountSign;
    }

    /**
     * Get the analytic code.
     *
     * @return string|null Returns the analytic code.
     */
    public function getAnalyticCode(): ?string {
        return $this->analyticCode;
    }

    /**
     * Get the booking journal code.
     *
     * @return string|null Returns the booking journal code.
     */
    public function getBookingJournalCode(): ?string {
        return $this->bookingJournalCode;
    }

    /**
     * Get the currency.
     *
     * @return string|null Returns the currency.
     */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Get the free field.
     *
     * @return string|null Returns the free field.
     */
    public function getFreeField(): ?string {
        return $this->freeField;
    }

    /**
     * Get the invoice date.
     *
     * @return DateTime|null Returns the invoice date.
     */
    public function getInvoiceDate(): ?DateTime {
        return $this->invoiceDate;
    }

    /**
     * Get the invoice date.
     *
     * @return DateTime|null Returns the invoice date.
     */
    public function getInvoiceDueDate(): ?DateTime {
        return $this->invoiceDueDate;
    }

    /**
     * Get the invoice number.
     *
     * @return string|null Returns the invoice number.
     */
    public function getInvoiceNumber(): ?string {
        return $this->invoiceNumber;
    }

    /**
     * Get the subledger account.
     *
     * @return string|null Returns the subledger account.
     */
    public function getSubledgerAccount(): ?string {
        return $this->subledgerAccount;
    }

    /**
     * Set the amount.
     *
     * @param string|null $amount The amount.
     * @return Line Returns this line.
     */
    public function setAmount(?string $amount): Line {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Set the amount sign.
     *
     * @param string|null $amountSign The amount sign.
     * @return Line Returns this line.
     */
    public function setAmountSign(?string $amountSign): Line {
        $this->amountSign = $amountSign;
        return $this;
    }

    /**
     * Set the analytic code.
     *
     * @param string|null $analyticCode The analytic code.
     * @return Line Returns this line.
     */
    public function setAnalyticCode(?string $analyticCode): Line {
        $this->analyticCode = $analyticCode;
        return $this;
    }

    /**
     * Set the booking journal code.
     *
     * @param string|null $bookingJournalCode The booking journal code.
     * @return Line Returns this line.
     */
    public function setBookingJournalCode(?string $bookingJournalCode): Line {
        $this->bookingJournalCode = $bookingJournalCode;
        return $this;
    }

    /**
     * Set the currency.
     *
     * @param string|null $currency The currency.
     * @return Line Returns this line.
     */
    public function setCurrency(?string $currency): Line {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Set the free field.
     *
     * @param string|null $freeField The free field.
     * @return Line Returns this line.
     */
    public function setFreeField(?string $freeField): Line {
        $this->freeField = $freeField;
        return $this;
    }

    /**
     * Set the invoice date.
     *
     * @param DateTime|null $invoiceDate The invoice date.
     * @return Line Returns this line.
     */
    public function setInvoiceDate(?DateTime $invoiceDate): Line {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    /**
     * Set the invoice due date.
     *
     * @param DateTime|null $invoiceDueDate The invoice due date.
     * @return Line Returns this line.
     */
    public function setInvoiceDueDate(?DateTime $invoiceDueDate): Line {
        $this->invoiceDueDate = $invoiceDueDate;
        return $this;
    }

    /**
     * Set the invoice number.
     *
     * @param string|null $invoiceNumber The invoice number.
     * @return Line Returns this line.
     */
    public function setInvoiceNumber(?string $invoiceNumber): Line {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * Set the subledger account.
     *
     * @param string|null $subledgerAccount The subledger account.
     * @return Line Returns this line.
     */
    public function setSubledgerAccount(?string $subledgerAccount): Line {
        $this->subledgerAccount = $subledgerAccount;
        return $this;
    }
}
