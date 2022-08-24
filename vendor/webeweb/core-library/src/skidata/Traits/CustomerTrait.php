<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Traits;

use DateTime;

/**
 * Customer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Traits
 */
trait CustomerTrait {

    /**
     * Customer number.
     *
     * @var int|null
     */
    private $customerNumber;

    /**
     * Date/time of last modification.
     *
     * @var DateTime|null
     */
    private $datetimeLastModification;

    /**
     * Deleted record.
     *
     * @var bool|null
     */
    private $deletedRecord;

    /**
     * Division.
     *
     * @var string|null
     */
    private $division;

    /**
     * E-mail.
     *
     * @var string|null
     */
    private $email;

    /**
     * First name.
     *
     * @var string|null
     */
    private $firstname;

    /**
     * Group counting.
     *
     * @var bool|null
     */
    private $groupCounting;

    /**
     * Remarks.
     *
     * @var string|null
     */
    private $remarks;

    /**
     * Remarks 2.
     *
     * @var string|null
     */
    private $remarks2;

    /**
     * Remarks 3.
     *
     * @var string|null
     */
    private $remarks3;

    /**
     * Surname.
     *
     * @var string|null
     */
    private $surname;

    /**
     * Title.
     *
     * @var string|null
     */
    private $title;

    /**
     * Get the customer number.
     *
     * @return int|null Returns the customer number.
     */
    public function getCustomerNumber(): ?int {
        return $this->customerNumber;
    }

    /**
     * Get the date/time of last modification.
     *
     * @return DateTime|null Returns the date/time of last modification.
     */
    public function getDatetimeLastModification(): ?DateTime {
        return $this->datetimeLastModification;
    }

    /**
     * Get the deleted record.
     *
     * @return bool|null Returns the deleted record.
     */
    public function getDeletedRecord(): ?bool {
        return $this->deletedRecord;
    }

    /**
     * Get the division.
     *
     * @return string|null Returns the division.
     */
    public function getDivision(): ?string {
        return $this->division;
    }

    /**
     * Get the email.
     *
     * @return string|null Returns the email.
     */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Get the firstname.
     *
     * @return string|null Returns the firstname.
     */
    public function getFirstname(): ?string {
        return $this->firstname;
    }

    /**
     * Get the group counting.
     *
     * @return bool|null Returns the group counting.
     */
    public function getGroupCounting(): ?bool {
        return $this->groupCounting;
    }

    /**
     * Get the remarks.
     *
     * @return string|null Returns the remarks.
     */
    public function getRemarks(): ?string {
        return $this->remarks;
    }

    /**
     * Get the remarks 2.
     *
     * @return string|null Returns the remarks 2.
     */
    public function getRemarks2(): ?string {
        return $this->remarks2;
    }

    /**
     * Get the remarks 3.
     *
     * @return string|null Returns the remarks 3.
     */
    public function getRemarks3(): ?string {
        return $this->remarks3;
    }

    /**
     * Get the surname.
     *
     * @return string|null Returns the surname.
     */
    public function getSurname(): ?string {
        return $this->surname;
    }

    /**
     * Get the title.
     *
     * @return string|null Returns the title.
     */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Set the customer number.
     *
     * @param int|null $customerNumber The customer number.
     * @return self Returns this instance.
     */
    public function setCustomerNumber(?int $customerNumber): self {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    /**
     * Set the date/time of last modification.
     *
     * @param DateTime|null $datetimeLastModification The date/time of last modification.
     * @return self Returns this instance.
     */
    public function setDatetimeLastModification(?DateTime $datetimeLastModification): self {
        $this->datetimeLastModification = $datetimeLastModification;
        return $this;
    }

    /**
     * Set the deleted record.
     *
     * @param bool|null $deletedRecord The deleted record.
     * @return self Returns this instance.
     */
    public function setDeletedRecord(?bool $deletedRecord): self {
        $this->deletedRecord = $deletedRecord;
        return $this;
    }

    /**
     * Set the division.
     *
     * @param string|null $division The division.
     * @return self Returns this instance.
     */
    public function setDivision(?string $division): self {
        $this->division = $division;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string|null $email The email.
     * @return self Returns this instance.
     */
    public function setEmail(?string $email): self {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the firstname.
     *
     * @param string|null $firstname The firstname.
     * @return self Returns this instance.
     */
    public function setFirstname(?string $firstname): self {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Set the group counting.
     *
     * @param bool|null $groupCounting The group counting.
     * @return self Returns this instance.
     */
    public function setGroupCounting(?bool $groupCounting): self {
        $this->groupCounting = $groupCounting;
        return $this;
    }

    /**
     * Set the remarks.
     *
     * @param string|null $remarks The remarks .
     * @return self Returns this instance.
     */
    public function setRemarks(?string $remarks): self {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Set the remarks 2.
     *
     * @param string|null $remarks2 The remarks 2.
     * @return self Returns this instance.
     */
    public function setRemarks2(?string $remarks2): self {
        $this->remarks2 = $remarks2;
        return $this;
    }

    /**
     * Set the remarks 3.
     *
     * @param string|null $remarks3 The remarks 3.
     * @return self Returns this instance.
     */
    public function setRemarks3(?string $remarks3): self {
        $this->remarks3 = $remarks3;
        return $this;
    }

    /**
     * Set the surname.
     *
     * @param string|null $surname The surname.
     * @return self Returns this instance.
     */
    public function setSurname(?string $surname): self {
        $this->surname = $surname;
        return $this;
    }

    /**
     * Set the title.
     *
     * @param string|null $title The title.
     * @return self Returns this instance.
     */
    public function setTitle(?string $title): self {
        $this->title = $title;
        return $this;
    }
}
