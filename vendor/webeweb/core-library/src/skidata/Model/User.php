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
use WBW\Library\SkiData\Traits\CustomerTrait;

/**
 * User.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Model
 */
class User {

    use CustomerTrait;

    /**
     * Check licence plate.
     *
     * @var bool|null
     */
    private $checkLicensePlate;

    /**
     * Credit card number.
     *
     * @var string|null
     */
    private $creditCardNumber;

    /**
     * Date of birth.
     *
     * @var DateTime|null
     */
    private $dateBirth;

    /**
     * E-ticket authentication.
     *
     * @var int|null
     */
    private $eTicketAuthentication;

    /**
     * E-ticket email/telephone.
     *
     * @var string|null
     */
    private $eTicketEmailTelephone;

    /**
     * E-ticket service art.
     *
     * @var int|null
     */
    private $eTicketServiceArt;

    /**
     * E-ticket service typ.
     *
     * @var int|null
     */
    private $eTicketServiceTyp;

    /**
     * E-ticket type p
     *
     * @var int|null
     */
    private $eTicketTypeP;

    /**
     * Excess times with credit card.
     *
     * @var bool|null
     */
    private $excessTimesCreditCard;

    /**
     * Expiry date.
     *
     * @var DateTime|null
     */
    private $expiryDate;

    /**
     * Identification number.
     *
     * @var string|null
     */
    private $identificationNumber;

    /**
     * Parking space.
     *
     * @var string|null
     */
    private $parkingSpace;

    /**
     * Passage with license plate permitted
     *
     * @var bool|null
     */
    private $passageLicensePlatePermitted;

    /**
     * User number.
     *
     * @var int|null
     */
    private $userNumber;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the check licence plate.
     *
     * @return bool|null Returns the check licence plate
     */
    public function getCheckLicensePlate(): ?bool {
        return $this->checkLicensePlate;
    }

    /**
     * Get the credit card number.
     *
     * @return string|null Returns the credit card number.
     */
    public function getCreditCardNumber(): ?string {
        return $this->creditCardNumber;
    }

    /**
     * Get the date of birth.
     *
     * @return DateTime|null Returns the date of birth.
     */
    public function getDateBirth(): ?DateTime {
        return $this->dateBirth;
    }

    /**
     * Get the E-ticket authentication.
     *
     * @return int|null Returns the E-ticket authentication.
     */
    public function getETicketAuthentication(): ?int {
        return $this->eTicketAuthentication;
    }

    /**
     * Get the E-ticket email/telephone.
     *
     * @return string|null Returns the E-ticket email/telephone.
     */
    public function getETicketEmailTelephone(): ?string {
        return $this->eTicketEmailTelephone;
    }

    /**
     * Get the E-ticket service art.
     *
     * @return int|null Returns the E-ticket service art.
     */
    public function getETicketServiceArt(): ?int {
        return $this->eTicketServiceArt;
    }

    /**
     * Get the E-ticket service typ.
     *
     * @return int|null Returns the E-ticket service typ.
     */
    public function getETicketServiceTyp(): ?int {
        return $this->eTicketServiceTyp;
    }

    /**
     * Get the E-ticket type p.
     *
     * @return int|null Returns the E-ticket type p.
     */
    public function getETicketTypeP(): ?int {
        return $this->eTicketTypeP;
    }

    /**
     * Get the excess times with credit card.
     *
     * @return bool|null Returns the excess times with credit card.
     */
    public function getExcessTimesCreditCard(): ?bool {
        return $this->excessTimesCreditCard;
    }

    /**
     * Get the expiry date.
     *
     * @return DateTime|null Returns the expiry date.
     */
    public function getExpiryDate(): ?DateTime {
        return $this->expiryDate;
    }

    /**
     * Get the identification number.
     *
     * @return string|null Returns the identification number.
     */
    public function getIdentificationNumber(): ?string {
        return $this->identificationNumber;
    }

    /**
     * Get the parking space.
     *
     * @return string|null Returns the parking space.
     */
    public function getParkingSpace(): ?string {
        return $this->parkingSpace;
    }

    /**
     * Get the passage with license plate permitted.
     *
     * @return bool|null Returns teh passage with license plate permitted.
     */
    public function getPassageLicensePlatePermitted(): ?bool {
        return $this->passageLicensePlatePermitted;
    }

    /**
     * Get the user number.
     *
     * @return int|null Returns the user number.
     */
    public function getUserNumber(): ?int {
        return $this->userNumber;
    }

    /**
     * Set the check with license plate.
     *
     * @param bool|null $checkLicensePlate The check with license plate.
     * @return User Returns this user.
     */
    public function setCheckLicensePlate(?bool $checkLicensePlate): User {
        $this->checkLicensePlate = $checkLicensePlate;
        return $this;
    }

    /**
     * Set the credit card number.
     *
     * @param string|null $creditCardNumber The credit card number.
     * @return User Returns this user.
     */
    public function setCreditCardNumber(?string $creditCardNumber): User {
        $this->creditCardNumber = $creditCardNumber;
        return $this;
    }

    /**
     * Set the date of birth.
     *
     * @param DateTime|null $dateBirth The date of birth.
     * @return User Returns this user.
     */
    public function setDateBirth(?DateTime $dateBirth): User {
        $this->dateBirth = $dateBirth;
        return $this;
    }

    /**
     * Set the E-ticket authentication.
     *
     * @param int|null $eTicketAuthentication The E-ticket authentication.
     * @return User Returns this user.
     */
    public function setETicketAuthentication(?int $eTicketAuthentication): User {
        $this->eTicketAuthentication = $eTicketAuthentication;
        return $this;
    }

    /**
     * Set the E-ticket email/telephone.
     *
     * @param string|null $eTicketEmailTelephone The E-ticket email/telephone.
     * @return User Returns this user.
     */
    public function setETicketEmailTelephone(?string $eTicketEmailTelephone): User {
        $this->eTicketEmailTelephone = $eTicketEmailTelephone;
        return $this;
    }

    /**
     * Set the E-ticket service art.
     *
     * @param int|null $eTicketServiceArt The E-ticket service art.
     * @return User Returns this user.
     */
    public function setETicketServiceArt(?int $eTicketServiceArt): User {
        $this->eTicketServiceArt = $eTicketServiceArt;
        return $this;
    }

    /**
     * Set the E-ticket service typ.
     *
     * @param int|null $eTicketServiceTyp The E-ticket service typ.
     * @return User Returns this user.
     */
    public function setETicketServiceTyp(?int $eTicketServiceTyp): User {
        $this->eTicketServiceTyp = $eTicketServiceTyp;
        return $this;
    }

    /**
     * Set the E-ticket type p.
     *
     * @param int|null $eTicketTypeP The E-ticket type p.
     * @return User Returns this user.
     */
    public function setETicketTypeP(?int $eTicketTypeP): User {
        $this->eTicketTypeP = $eTicketTypeP;
        return $this;
    }

    /**
     * Set the excess times with credit card.
     *
     * @param bool|null $excessTimesCreditCard The excess times with credit card.
     * @return User Returns this user.
     */
    public function setExcessTimesCreditCard(?bool $excessTimesCreditCard): User {
        $this->excessTimesCreditCard = $excessTimesCreditCard;
        return $this;
    }

    /**
     * Set the expiry date.
     *
     * @param DateTime|null $expiryDate The expiry date.
     * @return User Returns this user.
     */
    public function setExpiryDate(?DateTime $expiryDate): User {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Set the identification number.
     *
     * @param string|null $identificationNumber The identification number.
     * @return User Returns this user.
     */
    public function setIdentificationNumber(?string $identificationNumber): User {
        $this->identificationNumber = $identificationNumber;
        return $this;
    }

    /**
     * Set the parking space.
     *
     * @param string|null $parkingSpace The parking space.
     * @return User Returns this user.
     */
    public function setParkingSpace(?string $parkingSpace): User {
        $this->parkingSpace = $parkingSpace;
        return $this;
    }

    /**
     * Set the passage with license plate permitted.
     *
     * @param bool|null $passageLicensePlatePermitted The passage with license plate permitted.
     * @return User Returns this user.
     */
    public function setPassageLicensePlatePermitted(?bool $passageLicensePlatePermitted): User {
        $this->passageLicensePlatePermitted = $passageLicensePlatePermitted;
        return $this;
    }

    /**
     * Set the user number.
     *
     * @param int|null $userNumber The user number.
     * @return User Returns this user.
     */
    public function setUserNumber(?int $userNumber): User {
        $this->userNumber = $userNumber;
        return $this;
    }
}
