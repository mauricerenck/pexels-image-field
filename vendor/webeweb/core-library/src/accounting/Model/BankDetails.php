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

use WBW\Library\Accounting\Serializer\JsonSerializer;

/**
 * Bank details.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Model
 */
class BankDetails implements BankDetailsInterface {

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
     * {@inheritdoc}
     */
    public function getAccountNumber(): ?string {
        return $this->accountNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function getBankCode(): ?string {
        return $this->bankCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getBankDomiciliation(): ?string {
        return $this->bankDomiciliation;
    }

    /**
     * {@inheritdoc}
     */
    public function getBankName(): ?string {
        return $this->bankName;
    }

    /**
     * {@inheritdoc}
     */
    public function getBic(): ?string {
        return $this->bic;
    }

    /**
     * {@inheritdoc}
     */
    public function getBranchCode(): ?string {
        return $this->branchCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getIban(): ?string {
        return $this->iban;
    }

    /**
     * {@inheritdoc}
     */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * {@inheritdoc}
     */
    public function getRibKey(): ?string {
        return $this->ribKey;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeBankDetails($this);
    }

    /**
     * {@inheritdoc}
     */
    public function setAccountNumber(?string $accountNumber): BankDetailsInterface {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setBankCode(?string $bankCode): BankDetailsInterface {
        $this->bankCode = $bankCode;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setBankDomiciliation(?string $bankDomiciliation): BankDetailsInterface {
        $this->bankDomiciliation = $bankDomiciliation;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setBankName(?string $bankName): BankDetailsInterface {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setBic(?string $bic): BankDetailsInterface {
        $this->bic = $bic;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setBranchCode(?string $branchCode): BankDetailsInterface {
        $this->branchCode = $branchCode;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setIban(?string $iban): BankDetailsInterface {
        $this->iban = $iban;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setOwner(?string $owner): BankDetailsInterface {
        $this->owner = $owner;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setRibKey(?string $ribKey): BankDetailsInterface {
        $this->ribKey = $ribKey;
        return $this;
    }
}
