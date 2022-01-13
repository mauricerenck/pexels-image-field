<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Model;

use JsonSerializable;
use WBW\Library\Accounting\Serializer\JsonSerializer;

/**
 * Bank details.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Model
 */
class BankDetails implements BankDetailsInterface, JsonSerializable {

    /**
     * Account number.
     *
     * @var string|null
     */
    protected $accountNumber;

    /**
     * Bank code.
     *
     * @var string|null
     */
    protected $bankCode;

    /**
     * Bank domiciliation.
     *
     * @var string|null
     */
    protected $bankDomiciliation;

    /**
     * Bank name.
     *
     * @var string|null
     */
    protected $bankName;

    /**
     * BIC.
     *
     * @var string|null
     */
    protected $bic;

    /**
     * Branch code.
     *
     * @var string|null
     */
    protected $branchCode;

    /**
     * IBAN.
     *
     * @var string|null
     */
    protected $iban;

    /**
     * Owner.
     *
     * @var string|null
     */
    protected $owner;

    /**
     * RIB key.
     *
     * @var string|null
     */
    protected $ribKey;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountNumber(): ?string {
        return $this->accountNumber;
    }

    /**
     * {@inheritDoc}
     */
    public function getBankCode(): ?string {
        return $this->bankCode;
    }

    /**
     * {@inheritDoc}
     */
    public function getBankDomiciliation(): ?string {
        return $this->bankDomiciliation;
    }

    /**
     * {@inheritDoc}
     */
    public function getBankName(): ?string {
        return $this->bankName;
    }

    /**
     * {@inheritDoc}
     */
    public function getBic(): ?string {
        return $this->bic;
    }

    /**
     * {@inheritDoc}
     */
    public function getBranchCode(): ?string {
        return $this->branchCode;
    }

    /**
     * {@inheritDoc}
     */
    public function getIban(): ?string {
        return $this->iban;
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * {@inheritDoc}
     */
    public function getRibKey(): ?string {
        return $this->ribKey;
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeBankDetails($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountNumber(?string $accountNumber): BankDetailsInterface {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setBankCode(?string $bankCode): BankDetailsInterface {
        $this->bankCode = $bankCode;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setBankDomiciliation(?string $bankDomiciliation): BankDetailsInterface {
        $this->bankDomiciliation = $bankDomiciliation;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setBankName(?string $bankName): BankDetailsInterface {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setBic(?string $bic): BankDetailsInterface {
        $this->bic = $bic;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setBranchCode(?string $branchCode): BankDetailsInterface {
        $this->branchCode = $branchCode;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setIban(?string $iban): BankDetailsInterface {
        $this->iban = $iban;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(?string $owner): BankDetailsInterface {
        $this->owner = $owner;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setRibKey(?string $ribKey): BankDetailsInterface {
        $this->ribKey = $ribKey;
        return $this;
    }
}