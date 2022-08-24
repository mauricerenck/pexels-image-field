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

/**
 * Bank details interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Model
 */
interface BankDetailsInterface extends JsonSerializable {

    /**
     * Get the account number.
     *
     * @return string|null Returns the account number.
     */
    public function getAccountNumber(): ?string;

    /**
     * Get the bank code.
     *
     * @return string|null Returns the bank code.
     */
    public function getBankCode(): ?string;

    /**
     * Get the bank domiciliation.
     *
     * @return string|null Returns the bank domiciliation.
     */
    public function getBankDomiciliation(): ?string;

    /**
     * Get the bank name.
     *
     * @return string|null Returns the bank name.
     */
    public function getBankName(): ?string;

    /**
     * Get the BIC.
     *
     * @return string|null Returns the BIC.
     */
    public function getBic(): ?string;

    /**
     * Get the branch code.
     *
     * @return string|null Returns the branch code.
     */
    public function getBranchCode(): ?string;

    /**
     * Get the IBAN.
     *
     * @return string|null Returns the IBAN.
     */
    public function getIban(): ?string;

    /**
     * Get the owner.
     *
     * @return string|null Returns the owner.
     */
    public function getOwner(): ?string;

    /**
     * Get the RIB key.
     *
     * @return string|null Returns the RIB key.
     */
    public function getRibKey(): ?string;

    /**
     * Set the account number.
     *
     * @param string|null $accountNumber The account number.
     * @return BankDetailsInterface Returns this bank details.
     */
    public function setAccountNumber(?string $accountNumber): BankDetailsInterface;

    /**
     * Set the bank code.
     *
     * @param string|null $bankCode The bank code.
     * @return BankDetailsInterface Returns this bank details.
     */
    public function setBankCode(?string $bankCode): BankDetailsInterface;

    /**
     * Set the bank domiciliation.
     *
     * @param string|null $bankDomiciliation The bank domiciliation.
     * @return BankDetailsInterface Returns this bank details.
     */
    public function setBankDomiciliation(?string $bankDomiciliation): BankDetailsInterface;

    /**
     * Set the bank name.
     *
     * @param string|null $bankName The bank name.
     * @return BankDetailsInterface Returns this bank details.
     */
    public function setBankName(?string $bankName): BankDetailsInterface;

    /**
     * Set the BIC.
     *
     * @param string|null $bic The BIC.
     * @return BankDetailsInterface Returns this bank details.
     */
    public function setBic(?string $bic): BankDetailsInterface;

    /**
     * Set the branch code.
     *
     * @param string|null $branchCode The branch code.
     * @return BankDetailsInterface Returns this bank details.
     */
    public function setBranchCode(?string $branchCode): BankDetailsInterface;

    /**
     * Set the IBAN.
     *
     * @param string|null $iban The IBAN.
     * @return BankDetailsInterface Returns this bank details.
     */
    public function setIban(?string $iban): BankDetailsInterface;

    /**
     * Set the owner.
     *
     * @param string|null $owner The owner.
     * @return BankDetailsInterface Returns this bank details.
     */
    public function setOwner(?string $owner): BankDetailsInterface;

    /**
     * Set the RIB key.
     *
     * @param string|null $ribKey The RIB key.
     * @return BankDetailsInterface Returns this bank details.
     */
    public function setRibKey(?string $ribKey): BankDetailsInterface;
}
