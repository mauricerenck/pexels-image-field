<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Model;

use DateTime;
use WBW\Library\SkiData\Traits\CardTrait;
use WBW\Library\SkiData\Traits\CustomerTrait;

/**
 * Customer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Model
 */
class Customer {

    use CardTrait;
    use CustomerTrait;

    /**
     * Accounting number
     *
     * @var string|null
     */
    private $accountingNumber;

    /**
     * Begin date.
     *
     * @var DateTime|null
     */
    private $beginDate;

    /**
     * City.
     *
     * @var string|null
     */
    private $city;

    /**
     * Counting of neutral cards.
     *
     * @var bool|null
     */
    private $countingNeutralCards;

    /**
     * Country.
     *
     * @var string|null
     */
    private $country;

    /**
     * Deposit.
     *
     * @var int|null
     */
    private $deposit;

    /**
     * Entry during max. level allowed.
     *
     * @var bool|null
     */
    private $entryMaxLevelAllowed;

    /**
     * ID document no.
     *
     * @var string|null
     */
    private $idDocumentNo;

    /**
     * Max. level per car park.
     *
     * @var bool|null
     */
    private $maxLevelCarPark;

    /**
     * Maximum level.
     *
     * @var int|null
     */
    private $maximumLevel;

    /**
     * Natinality.
     *
     * @var string|null
     */
    private $nationality;

    /**
     * PCode.
     *
     * @var string|null
     */
    private $pCode;

    /**
     * Rental agreement no.
     *
     * @var string|null
     */
    private $rentalAgreementNo;

    /**
     * Street.
     *
     * @var string|null
     */
    private $street;

    /**
     * Tax code.
     *
     * @var string|null
     */
    private $taxCode;

    /**
     * Telephone.
     *
     * @var string|null
     */
    private $telephone;

    /**
     * Termination date.
     *
     * @var DateTime|null
     */
    private $terminationDate;

    /**
     * Ticket return allowed.
     *
     * @var bool|null
     */
    private $ticketReturnAllowed;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the accounting number.
     *
     * @return string|null Returns the accounting number.
     */
    public function getAccountingNumber(): ?string {
        return $this->accountingNumber;
    }

    /**
     * Get the begin date.
     *
     * @return DateTime|null Returns the begin date.
     */
    public function getBeginDate(): ?DateTime {
        return $this->beginDate;
    }

    /**
     * Get the city.
     *
     * @return string|null Returns the city.
     */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Get the counting neutral cards.
     *
     * @return bool|null Returns the counting neutral cards.
     */
    public function getCountingNeutralCards(): ?bool {
        return $this->countingNeutralCards;
    }

    /**
     * Get the country.
     *
     * @return string|null Returns the country.
     */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Get the deposit.
     *
     * @return int|null Returns the deposit.
     */
    public function getDeposit(): ?int {
        return $this->deposit;
    }

    /**
     * Get the entry during max. level allowed.
     *
     * @return bool|null Returns the entry during max. level allowed.
     */
    public function getEntryMaxLevelAllowed(): ?bool {
        return $this->entryMaxLevelAllowed;
    }

    /**
     * Get the ID document no.
     *
     * @return string|null Returns the ID document no.
     */
    public function getIdDocumentNo(): ?string {
        return $this->idDocumentNo;
    }

    /**
     * Get the max level per car park.
     *
     * @return bool|null Returns the max level per car park.
     */
    public function getMaxLevelCarPark(): ?bool {
        return $this->maxLevelCarPark;
    }

    /**
     * Get the maximum level.
     *
     * @return int|null Returns the maximum level.
     */
    public function getMaximumLevel(): ?int {
        return $this->maximumLevel;
    }

    /**
     * Get the nationality.
     *
     * @return string|null Returns the nationality.
     */
    public function getNationality(): ?string {
        return $this->nationality;
    }

    /**
     * Get the PCode.
     *
     * @return string|null Returns the PCode.
     */
    public function getPCode(): ?string {
        return $this->pCode;
    }

    /**
     * Get the rental agreement no.
     *
     * @return string|null Returns the rental agreement no.
     */
    public function getRentalAgreementNo(): ?string {
        return $this->rentalAgreementNo;
    }

    /**
     * Get the street.
     *
     * @return string|null Returns the street.
     */
    public function getStreet(): ?string {
        return $this->street;
    }

    /**
     * Get the tax code.
     *
     * @return string|null Returns the tax code.
     */
    public function getTaxCode(): ?string {
        return $this->taxCode;
    }

    /**
     * Get the telephone.
     *
     * @return string|null Return the telephone.
     */
    public function getTelephone(): ?string {
        return $this->telephone;
    }

    /**
     * Get the termination date.
     *
     * @return DateTime|null Returns the termination date.
     */
    public function getTerminationDate(): ?DateTime {
        return $this->terminationDate;
    }

    /**
     * Get the ticket return allowed.
     *
     * @return bool|null Returns the ticket return allowed.
     */
    public function getTicketReturnAllowed(): ?bool {
        return $this->ticketReturnAllowed;
    }

    /**
     * Set the accounting number.
     *
     * @param string|null $accountingNumber The accounting number.
     * @return Customer Returns this customer.
     */
    public function setAccountingNumber(?string $accountingNumber): Customer {
        $this->accountingNumber = $accountingNumber;
        return $this;
    }

    /**
     * Set the begin date.
     *
     * @param DateTime|null $beginDate The begin date.
     * @return Customer Returns this customer.
     */
    public function setBeginDate(?DateTime $beginDate): Customer {
        $this->beginDate = $beginDate;
        return $this;
    }

    /**
     * Set the city.
     *
     * @param string|null $city The city.
     * @return Customer Returns this customer.
     */
    public function setCity(?string $city): Customer {
        $this->city = $city;
        return $this;
    }

    /**
     * Set the counting neutral cards.
     *
     * @param bool|null $countingNeutralCards The counting neutral cards.
     * @return Customer Returns this customer.
     */
    public function setCountingNeutralCards(?bool $countingNeutralCards): Customer {
        $this->countingNeutralCards = $countingNeutralCards;
        return $this;
    }

    /**
     * Set the country.
     *
     * @param string|null $country The country.
     * @return Customer Returns this customer.
     */
    public function setCountry(?string $country): Customer {
        $this->country = $country;
        return $this;
    }

    /**
     * Set the deposit.
     *
     * @param int|null $deposit The deposit.
     * @return Customer Returns this customer.
     */
    public function setDeposit(?int $deposit): Customer {
        $this->deposit = $deposit;
        return $this;
    }

    /**
     * Set the entry during max level allowed.
     *
     * @param bool|null $entryMaxLevelAllowed The entry during max level allowed.
     * @return Customer Returns this customer.
     */
    public function setEntryMaxLevelAllowed(?bool $entryMaxLevelAllowed): Customer {
        $this->entryMaxLevelAllowed = $entryMaxLevelAllowed;
        return $this;
    }

    /**
     * Set the ID document no.
     *
     * @param string|null $idDocumentNo The ID document no.
     * @return Customer Returns this customer.
     */
    public function setIdDocumentNo(?string $idDocumentNo): Customer {
        $this->idDocumentNo = $idDocumentNo;
        return $this;
    }

    /**
     * Set the max level per car park.
     *
     * @param bool|null $maxLevelCarPark The max level per car park.
     * @return Customer Returns this customer.
     */
    public function setMaxLevelCarPark(?bool $maxLevelCarPark): Customer {
        $this->maxLevelCarPark = $maxLevelCarPark;
        return $this;
    }

    /**
     * Set the maximum level.
     *
     * @param int|null $maximumLevel The maximum level.
     * @return Customer Returns this customer.
     */
    public function setMaximumLevel(?int $maximumLevel): Customer {
        $this->maximumLevel = $maximumLevel;
        return $this;
    }

    /**
     * Set the nationality.
     *
     * @param string|null $nationality The nationality.
     * @return Customer Returns this customer.
     */
    public function setNationality(?string $nationality): Customer {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * Set the PCode.
     *
     * @param string|null $pCode The PCode.
     * @return Customer Returns this customer.
     */
    public function setPCode(?string $pCode): Customer {
        $this->pCode = $pCode;
        return $this;
    }

    /**
     * Set the rental agreements no.
     *
     * @param string|null $rentalAgreementNo The rental agreement no.
     * @return Customer Returns this customer.
     */
    public function setRentalAgreementNo(?string $rentalAgreementNo): Customer {
        $this->rentalAgreementNo = $rentalAgreementNo;
        return $this;
    }

    /**
     * Set the street.
     *
     * @param string|null $street The street.
     * @return Customer Returns this customer.
     */
    public function setStreet(?string $street): Customer {
        $this->street = $street;
        return $this;
    }

    /**
     * Set the tax code.
     *
     * @param string|null $taxCode The tax code.
     * @return Customer Returns this customer.
     */
    public function setTaxCode(?string $taxCode): Customer {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * Set the telephone.
     *
     * @param string|null $telephone The telephone.
     * @return Customer Returns this customer.
     */
    public function setTelephone(?string $telephone): Customer {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Set the termination date.
     *
     * @param DateTime|null $terminationDate The termination date.
     * @return Customer Returns this customer.
     */
    public function setTerminationDate(?DateTime $terminationDate): Customer {
        $this->terminationDate = $terminationDate;
        return $this;
    }

    /**
     * Set the ticket return allowed.
     *
     * @param bool|null $ticketReturnAllowed The ticket return allowed.
     * @return Customer Returns this customer.
     */
    public function setTicketReturnAllowed(?bool $ticketReturnAllowed): Customer {
        $this->ticketReturnAllowed = $ticketReturnAllowed;
        return $this;
    }
}
