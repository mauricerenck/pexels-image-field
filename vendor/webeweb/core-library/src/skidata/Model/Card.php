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

/**
 * Card.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Model
 */
class Card {

    use CardTrait;

    /**
     * Article number.
     *
     * @var int|null
     */
    private $articleNumber;

    /**
     * Currency residual value.
     *
     * @var string|null
     */
    private $currencyResidualValue;

    /**
     * Display text.
     *
     * @var bool|null
     */
    private $displayText;

    /**
     * Display text 1.
     *
     * @var string|null
     */
    private $displayText1;

    /**
     * Display text 2.
     *
     * @var string|null
     */
    private $displayText2;

    /**
     * Entry barrier closed.
     *
     * @var bool|null
     */
    private $entryBarrierClosed;

    /**
     * Exit barrier closed.
     *
     * @var bool|null
     */
    private $exitBarrierClosed;

    /**
     * Expires.
     *
     * @var DateTime|null
     */
    private $expires;

    /**
     * Is neutral.
     *
     * @var bool|null
     */
    private $isNeutral;

    /**
     * Personal no.
     *
     * @var int|null
     */
    private $personalNo;

    /**
     * Production counter.
     *
     * @var int|null
     */
    private $productionCounter;

    /**
     * Production facility number.
     *
     * @var int|null
     */
    private $productionFacilityNumber;

    /**
     * Production state.
     *
     * @var int|null
     */
    private $productionState;

    /**
     * Reason for production.
     *
     * @var int|null
     */
    private $reasonProduction;

    /**
     * Residual value.
     *
     * @var int|null
     */
    private $residualValue;

    /**
     * Retain ticket at entry.
     *
     * @var bool|null
     */
    private $retainTicketEntry;

    /**
     * Retain ticket at exit.
     *
     * @var bool|null
     */
    private $retainTicketExit;

    /**
     * Serial no.
     *
     * @var string|null
     */
    private $serialNo;

    /**
     * Serial number KeyCard/Swatch.
     *
     * @var string|null
     */
    private $serialNumberKeyCardSwatch;

    /**
     * Suspend period from.
     *
     * @var DateTime|null
     */
    private $suspendPeriodFrom;

    /**
     * Suspend period until.
     *
     * @var DateTime|null
     */
    private $suspendPeriodUntil;

    /**
     * Ticket number.
     *
     * @var string|null
     */
    private $ticketNumber;

    /**
     * Ticket sub type.
     *
     * @var string|null
     */
    private $ticketSubType;

    /**
     * Ticket type.
     *
     * @var int|null
     */
    private $ticketType;

    /**
     * Use valid car parks.
     *
     * @var bool|null
     */
    private $useValidCarParks;

    /**
     * User number.
     *
     * @var int|null
     */
    private $userNumber;

    /**
     * Valid from.
     *
     * @var DateTime|null
     */
    private $validFrom;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the article number.
     *
     * @return int|null Returns the article number.
     */
    public function getArticleNumber(): ?int {
        return $this->articleNumber;
    }

    /**
     * Get the currency residual value.
     *
     * @return string|null Returns the currency residual value.
     */
    public function getCurrencyResidualValue(): ?string {
        return $this->currencyResidualValue;
    }

    /**
     * Get the display text.
     *
     * @return bool|null Returns the display text.
     */
    public function getDisplayText(): ?bool {
        return $this->displayText;
    }

    /**
     * Get the display text 1.
     *
     * @return string|null Returns the display text 1.
     */
    public function getDisplayText1(): ?string {
        return $this->displayText1;
    }

    /**
     * Get the display text 2.
     *
     * @return string|null Returns the display text 2.
     */
    public function getDisplayText2(): ?string {
        return $this->displayText2;
    }

    /**
     * Get the entry barrier closed.
     *
     * @return bool|null Returns the entry barrier closed.
     */
    public function getEntryBarrierClosed(): ?bool {
        return $this->entryBarrierClosed;
    }

    /**
     * Get the exit barrier closed.
     *
     * @return bool|null Returns the exit barrier closed.
     */
    public function getExitBarrierClosed(): ?bool {
        return $this->exitBarrierClosed;
    }

    /**
     * Get the expires.
     *
     * @return DateTime|null Returns the expires.
     */
    public function getExpires(): ?DateTime {
        return $this->expires;
    }

    /**
     * Get the is neutral.
     *
     * @return bool|null Returns the is neutral.
     */
    public function getIsNeutral(): ?bool {
        return $this->isNeutral;
    }

    /**
     * Get the personal no.
     *
     * @return int|null Returns the personal no.
     */
    public function getPersonalNo(): ?int {
        return $this->personalNo;
    }

    /**
     * Get the production counter.
     *
     * @return int|null Returns the production counter.
     */
    public function getProductionCounter(): ?int {
        return $this->productionCounter;
    }

    /**
     * Get the production facility number.
     *
     * @return int|null Returns the production facility number.
     */
    public function getProductionFacilityNumber(): ?int {
        return $this->productionFacilityNumber;
    }

    /**
     * Get the production state.
     *
     * @return int|null Returns the production state.
     */
    public function getProductionState(): ?int {
        return $this->productionState;
    }

    /**
     * Get the reason for production.
     *
     * @return int|null Returns the reason for production.
     */
    public function getReasonProduction(): ?int {
        return $this->reasonProduction;
    }

    /**
     * Get the residual value.
     *
     * @return int|null Returns the residual value.
     */
    public function getResidualValue(): ?int {
        return $this->residualValue;
    }

    /**
     * Get the retain ticket at entry.
     *
     * @return bool|null Returns the retain ticket at entry.
     */
    public function getRetainTicketEntry(): ?bool {
        return $this->retainTicketEntry;
    }

    /**
     * Get the retain ticket exit.
     *
     * @return bool|null Returns the retain ticket ax exit.
     */
    public function getRetainTicketExit(): ?bool {
        return $this->retainTicketExit;
    }

    /**
     * Get the serial no.
     *
     * @return string|null Returns the serial no.
     */
    public function getSerialNo(): ?string {
        return $this->serialNo;
    }

    /**
     * Get the serial number KeyCard/Swatch.
     *
     * @return string|null Returns the serial number KeyCard/Swatch.
     */
    public function getSerialNumberKeyCardSwatch(): ?string {
        return $this->serialNumberKeyCardSwatch;
    }

    /**
     * Get the suspend period from.
     *
     * @return DateTime|null Returns the suspend period from.
     */
    public function getSuspendPeriodFrom(): ?DateTime {
        return $this->suspendPeriodFrom;
    }

    /**
     * Get the suspend period until.
     *
     * @return DateTime|null Returns the suspend period until.
     */
    public function getSuspendPeriodUntil(): ?DateTime {
        return $this->suspendPeriodUntil;
    }

    /**
     * Get the ticket number.
     *
     * @return string|null Returns the ticket number.
     */
    public function getTicketNumber(): ?string {
        return $this->ticketNumber;
    }

    /**
     * Get the ticket sub type.
     *
     * @return string|null Returns the ticket sub type.
     */
    public function getTicketSubType(): ?string {
        return $this->ticketSubType;
    }

    /**
     * Get the ticket type.
     *
     * @return int|null Returns the ticket type.
     */
    public function getTicketType(): ?int {
        return $this->ticketType;
    }

    /**
     * Get the use valid car parks.
     *
     * @return bool|null Returns the use valid car parks.
     */
    public function getUseValidCarParks(): ?bool {
        return $this->useValidCarParks;
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
     * Get the valid from.
     *
     * @return DateTime|null Returns the valid from.
     */
    public function getValidFrom(): ?DateTime {
        return $this->validFrom;
    }

    /**
     * Set the article number.
     *
     * @param int|null $articleNumber The article number.
     * @return Card Returns this card.
     */
    public function setArticleNumber(?int $articleNumber): Card {
        $this->articleNumber = $articleNumber;
        return $this;
    }

    /**
     * Set the currency residual value.
     *
     * @param string|null $currencyResidualValue The currency residual value.
     * @return Card Returns this card.
     */
    public function setCurrencyResidualValue(?string $currencyResidualValue): Card {
        $this->currencyResidualValue = $currencyResidualValue;
        return $this;
    }

    /**
     * Set the display text.
     *
     * @param bool|null $displayText The display text.
     * @return Card Returns this card.
     */
    public function setDisplayText(?bool $displayText): Card {
        $this->displayText = $displayText;
        return $this;
    }

    /**
     * Set the display text 1.
     *
     * @param string|null $displayText1 The display text 1.
     * @return Card Returns this card.
     */
    public function setDisplayText1(?string $displayText1): Card {
        $this->displayText1 = $displayText1;
        return $this;
    }

    /**
     * Set the display text 2.
     *
     * @param string|null $displayText2 The display text 2.
     * @return Card Returns this card.
     */
    public function setDisplayText2(?string $displayText2): Card {
        $this->displayText2 = $displayText2;
        return $this;
    }

    /**
     * Set the entry barrier closed.
     *
     * @param bool|null $entryBarrierClosed The entry barrier closed.
     * @return Card Returns this card.
     */
    public function setEntryBarrierClosed(?bool $entryBarrierClosed): Card {
        $this->entryBarrierClosed = $entryBarrierClosed;
        return $this;
    }

    /**
     * Set the exit barrier closed.
     *
     * @param bool|null $exitBarrierClosed The exit barrier closed.
     * @return Card Returns this card.
     */
    public function setExitBarrierClosed(?bool $exitBarrierClosed): Card {
        $this->exitBarrierClosed = $exitBarrierClosed;
        return $this;
    }

    /**
     * Set the expires.
     *
     * @param DateTime|null $expires The expires.
     * @return Card Returns this card.
     */
    public function setExpires(?DateTime $expires): Card {
        $this->expires = $expires;
        return $this;
    }

    /**
     * Set the is neutral.
     *
     * @param bool|null $isNeutral The is neutral.
     * @return Card Returns this card.
     */
    public function setIsNeutral(?bool $isNeutral): Card {
        $this->isNeutral = $isNeutral;
        return $this;
    }

    /**
     * Set the personal no.
     *
     * @param int|null $personalNo The personal no.
     * @return Card Returns this card.
     */
    public function setPersonalNo(?int $personalNo): Card {
        $this->personalNo = $personalNo;
        return $this;
    }

    /**
     * Set the production counter.
     *
     * @param int|null $productionCounter The production counter.
     * @return Card Returns this card.
     */
    public function setProductionCounter(?int $productionCounter): Card {
        $this->productionCounter = $productionCounter;
        return $this;
    }

    /**
     * Set the production facility number.
     *
     * @param int|null $productionFacilityNumber The production facility number.
     * @return Card Returns this card.
     */
    public function setProductionFacilityNumber(?int $productionFacilityNumber): Card {
        $this->productionFacilityNumber = $productionFacilityNumber;
        return $this;
    }

    /**
     * Set the production state.
     *
     * @param int|null $productionState The production state.
     * @return Card Returns this card.
     */
    public function setProductionState(?int $productionState): Card {
        $this->productionState = $productionState;
        return $this;
    }

    /**
     * Set the reason for production.
     *
     * @param int|null $reasonProduction The reason for production.
     * @return Card Returns this card.
     */
    public function setReasonProduction(?int $reasonProduction): Card {
        $this->reasonProduction = $reasonProduction;
        return $this;
    }

    /**
     * Set the residual value.
     *
     * @param int|null $residualValue The residual value.
     * @return Card Returns this card.
     */
    public function setResidualValue(?int $residualValue): Card {
        $this->residualValue = $residualValue;
        return $this;
    }

    /**
     * Set the retain ticket at entry.
     *
     * @param bool|null $retainTicketEntry The retain ticket at entry.
     * @return Card Returns this card.
     */
    public function setRetainTicketEntry(?bool $retainTicketEntry): Card {
        $this->retainTicketEntry = $retainTicketEntry;
        return $this;
    }

    /**
     * Set the retain ticket at exit.
     *
     * @param bool|null $retainTicketExit The retain ticket at exit.
     * @return Card Returns this card.
     */
    public function setRetainTicketExit(?bool $retainTicketExit): Card {
        $this->retainTicketExit = $retainTicketExit;
        return $this;
    }

    /**
     * Set the serial no.
     *
     * @param string|null $serialNo The serial no.
     * @return Card Returns this card.
     */
    public function setSerialNo(?string $serialNo): Card {
        $this->serialNo = $serialNo;
        return $this;
    }

    /**
     * Set the serial number KeyCard/Swatch.
     *
     * @param string|null $serialNumberKeyCardSwatch The serial number KeyCard/Swatch.
     * @return Card Returns this card.
     */
    public function setSerialNumberKeyCardSwatch(?string $serialNumberKeyCardSwatch): Card {
        $this->serialNumberKeyCardSwatch = $serialNumberKeyCardSwatch;
        return $this;
    }

    /**
     * Set the suspend period from.
     *
     * @param DateTime|null $suspendPeriodFrom The suspend period from.
     * @return Card Returns this card.
     */
    public function setSuspendPeriodFrom(?DateTime $suspendPeriodFrom): Card {
        $this->suspendPeriodFrom = $suspendPeriodFrom;
        return $this;
    }

    /**
     * Set the suspend period until.
     *
     * @param DateTime|null $suspendPeriodUntil The suspend period until.
     * @return Card Returns this card.
     */
    public function setSuspendPeriodUntil(?DateTime $suspendPeriodUntil): Card {
        $this->suspendPeriodUntil = $suspendPeriodUntil;
        return $this;
    }

    /**
     * Set the ticket number.
     *
     * @param string|null $ticketNumber The ticket number.
     * @return Card Returns this card.
     */
    public function setTicketNumber(?string $ticketNumber): Card {
        $this->ticketNumber = $ticketNumber;
        return $this;
    }

    /**
     * Set the ticket sub type.
     *
     * @param string|null $ticketSubType The ticket sub type.
     * @return Card Returns this card.
     */
    public function setTicketSubType(?string $ticketSubType): Card {
        $this->ticketSubType = $ticketSubType;
        return $this;
    }

    /**
     * Set the ticket type.
     *
     * @param int|null $ticketType The ticket type.
     * @return Card Returns this card.
     */
    public function setTicketType(?int $ticketType): Card {
        $this->ticketType = $ticketType;
        return $this;
    }

    /**
     * Set the use valid car parks.
     *
     * @param bool|null $useValidCarParks The use valid car parks.
     * @return Card Returns this card.
     */
    public function setUseValidCarParks(?bool $useValidCarParks): Card {
        $this->useValidCarParks = $useValidCarParks;
        return $this;
    }

    /**
     * Set the user number.
     *
     * @param int|null $userNumber The user number.
     * @return Card Returns this card.
     */
    public function setUserNumber(?int $userNumber): Card {
        $this->userNumber = $userNumber;
        return $this;
    }

    /**
     * Set the valid from.
     *
     * @param DateTime|null $validFrom The valid from.
     * @return Card Returns this card.
     */
    public function setValidFrom(?DateTime $validFrom): Card {
        $this->validFrom = $validFrom;
        return $this;
    }
}
