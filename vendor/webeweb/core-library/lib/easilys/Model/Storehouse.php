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
use WBW\Library\Common\Traits\Strings\StringLabelTrait;
use WBW\Library\Easilys\Traits\Arrays\ArrayCertificationsTrait;
use WBW\Library\Easilys\Traits\Booleans\BooleanIsActiveTrait;
use WBW\Library\Easilys\Traits\Integers\IntegerIdSiteOwnerTrait;
use WBW\Library\Easilys\Traits\Integers\IntegerIdSiteTrait;
use WBW\Library\Easilys\Traits\Objects\AddressTrait;
use WBW\Library\Easilys\Traits\Objects\SupplierTrait;
use WBW\Library\Easilys\Traits\Strings\StringCodeGlnTrait;
use WBW\Library\Easilys\Traits\Strings\StringCodeInternalTrait;
use WBW\Library\Easilys\Traits\Strings\StringDateEndTrait;
use WBW\Library\Easilys\Traits\Strings\StringDateStartTrait;

/**
 * Storehouse.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class Storehouse {

    use AddressTrait;
    use ArrayCertificationsTrait;
    use BooleanIsActiveTrait;
    use IntegerIdSiteTrait;
    use IntegerIdSiteOwnerTrait;
    use IntegerIdTrait {
        setId as public;
    }
    use StringCodeGlnTrait;
    use StringCodeInternalTrait;
    use StringDateEndTrait;
    use StringDateStartTrait;
    use StringLabelTrait;
    use SupplierTrait;

    /**
     * Accounting number.
     *
     * @var string|null
     */
    protected $accountingNumber;

    /**
     * All claim workflow.
     *
     * @var bool|null
     */
    protected $allClaimWorkflow;

    /**
     * Analytical group.
     *
     * @var AnalyticalGroup|null
     */
    protected $analyticalGroup;

    /**
     * Auto close receipt.
     *
     * @var bool|null
     */
    protected $autoCloseReceipt;

    /**
     * Auto sent pre order.
     *
     * @var bool|null
     */
    protected $autoSentPreOrder;

    /**
     * Catchwords.
     *
     * @var string|null
     */
    protected $catchwords;

    /**
     * Date linked.
     *
     * @var string|null
     */
    protected $dateLinked;

    /**
     * Date valid.
     *
     * @var string|null
     */
    protected $dateValid;

    /**
     * Delivery data sending modes.
     *
     * @var mixed[]|null
     */
    protected $deliveryDataSendingModes;

    /**
     * Delivery days productions.
     *
     * @var DeliveryDaysProduction[]
     */
    protected $deliveryDaysProductions;

    /**
     * Delivery weekdays.
     *
     * @var DeliveryWeekday[]
     */
    protected $deliveryWeekdays;

    /**
     * Emails.
     *
     * @var Email[]
     */
    protected $emails;

    /**
     * Faxes.
     *
     * @var Fax[]
     */
    protected $faxes;

    /**
     * Id Oasys supplier.
     *
     * @var int|null
     */
    protected $idOasysSupplier;

    /**
     * Intra community VAT.
     *
     * @var string|null
     */
    protected $intraCommunityVAT;

    /**
     * Is claim forced when receipt updated.
     *
     * @var bool|null
     */
    protected $isClaimForcedWhenReceiptUpdated;

    /**
     * Is claim must be send by fax.
     *
     * @var bool|null
     */
    protected $isClaimMustBeSendByFax;

    /**
     * Is claim must send by mail.
     *
     * @var bool|null
     */
    protected $isClaimMustBeSendByMail;

    /**
     * Is credit note must be send by fax.
     *
     * @var bool|null
     */
    protected $isCreditNoteMustBeSendByFax;

    /**
     * Is credit note must be send by mail.
     *
     * @var bool|null
     */
    protected $isCreditNoteMustBeSendByMail;

    /**
     * Is delivery note invoice.
     *
     * @var bool|null
     */
    protected $isDeliveryNoteInvoice;

    /**
     * Is in claim workflow.
     *
     * @var bool|null
     */
    protected $isInClaimWorkflow;

    /**
     * Is on supplier directory.
     *
     * @var bool|null
     */
    protected $isOnSupplierDirectory;

    /**
     * Is order delay nullable.
     *
     * @var bool|null
     */
    protected $isOrderDelayNullable;

    /**
     * Is preorder authorized.
     *
     * @var bool|null
     */
    protected $isPreorderAuthorized;

    /**
     * Is receipt prices from price list.
     *
     * @var bool|null
     */
    protected $isReceiptPricesFromPricelist;

    /**
     * Is shipping cost nullable.
     *
     * @var bool|null
     */
    protected $isShippingCostNullable;

    /**
     * Is status link in order email.
     *
     * @var bool|null
     */
    protected $isStatusLinkInOrderEmail;

    /**
     * Is threshold strict.
     *
     * @var bool|null
     */
    protected $isThresholdStrict;

    /**
     * Is using delivery days production.
     *
     * @var bool|null
     */
    protected $isUsingDeliveryDaysProduction;

    /**
     * Linked users.
     *
     * @var LinkedUser[]
     */
    protected $linkedUsers;

    /**
     * Logo.
     *
     * @var string|null
     */
    protected $logo;

    /**
     * Nb days between delivery and consumption.
     *
     * @var int|null
     */
    protected $nbDaysBetweenDeliveryAndConsumption;

    /**
     * Nb days delivery before production.
     *
     * @var int|null
     */
    protected $nbDaysDeliveryBeforeProduction;

    /**
     * Network full.
     *
     * @var int|null
     */
    protected $networkFull;

    /**
     * Opening days type.
     *
     * @var int|null
     */
    protected $openingDaysType;

    /**
     * Order delay.
     *
     * @var int|null
     */
    protected $orderDelay;

    /**
     * Order supplier unit.
     *
     * @var int|null
     */
    protected $orderSupplierUnit;

    /**
     * Payment method.
     *
     * @var int|null
     */
    protected $paymentMethod;

    /**
     * Payment terms.
     *
     * @var int|null
     */
    protected $paymentTerms;

    /**
     * Phones.
     *
     * @var Phone[]
     */
    protected $phones;

    /**
     * Presentation.
     *
     * @var string|null
     */
    protected $presentation;

    /**
     * Prod families.
     *
     * @var ProdFamily[]
     */
    protected $prodFamilies;

    /**
     * Purchase type.
     *
     * @var int|null
     */
    protected $purchaseType;

    /**
     * Ref. site of supplier.
     *
     * @var string|null
     */
    protected $refSiteOfSupplier;

    /**
     * Sending modes
     *
     * @var int[]|null
     */
    protected $sendingModes;

    /**
     * Shipping cost.
     *
     * @var int|null
     */
    protected $shippingCost;

    /**
     * SIRET.
     *
     * @var string|null
     */
    protected $siret;

    /**
     * Specifications.
     *
     * @var string|null
     */
    protected $specifications;

    /**
     * Threshold order.
     *
     * @var int|null
     */
    protected $thresholdOrder;

    /**
     * Types.
     *
     * @var int[]|null
     */
    protected $types;

    /**
     * Universes.
     *
     * @var int[]|null
     */
    protected $universes;

    /**
     * Website.
     *
     * @var string|null
     */
    protected $website;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setCertifications([]);
        $this->setDeliveryDaysProductions([]);
        $this->setDeliveryWeekdays([]);
        $this->setEmails([]);
        $this->setFaxes([]);
        $this->setLinkedUsers([]);
        $this->setPhones([]);
        $this->setProdFamilies([]);
    }

    /**
     * Add a delivery days production.
     *
     * @param DeliveryDaysProduction|null $deliveryDaysProduction The delivery days production.
     * @return Storehouse Returns this storehouse.
     */
    public function addDeliveryDaysProduction(?DeliveryDaysProduction $deliveryDaysProduction): Storehouse {

        if (null !== $deliveryDaysProduction) {
            $this->deliveryDaysProductions[] = $deliveryDaysProduction;
        }

        return $this;
    }

    /**
     * Add a delivery weekday.
     *
     * @param DeliveryWeekday|null $deliveryWeekday The delivery weekday.
     * @return Storehouse Returns this storehouse.
     */
    public function addDeliveryWeekday(?DeliveryWeekday $deliveryWeekday): Storehouse {

        if (null !== $deliveryWeekday) {
            $this->deliveryWeekdays[] = $deliveryWeekday;
        }

        return $this;
    }

    /**
     * Add an email.
     *
     * @param Email|null $email The email.
     * @return Storehouse Returns this storehouse.
     */
    public function addEmail(?Email $email): Storehouse {

        if (null !== $email) {
            $this->emails[] = $email;
        }

        return $this;
    }

    /**
     * Add a fax.
     *
     * @param Fax|null $fax The fax.
     * @return Storehouse Returns this storehouse.
     */
    public function addFax(?Fax $fax): Storehouse {

        if (null !== $fax) {
            $this->faxes[] = $fax;
        }

        return $this;
    }

    /**
     * Add a linked user.
     *
     * @param LinkedUser|null $linkedUser The linked user.
     * @return Storehouse Returns this storehouse.
     */
    public function addLinkedUser(?LinkedUser $linkedUser): Storehouse {

        if (null !== $linkedUser) {
            $this->linkedUsers[] = $linkedUser;
        }

        return $this;
    }

    /**
     * Add a phone.
     *
     * @param Phone|null $phone The phone.
     * @return Storehouse Returns this storehouse.
     */
    public function addPhone(?Phone $phone): Storehouse {

        if (null !== $phone) {
            $this->phones[] = $phone;
        }

        return $this;
    }

    /**
     * Add a prod family.
     *
     * @param ProdFamily|null $prodFamily The prod family.
     * @return Storehouse Returns this storehouse.
     */
    public function addProdFamily(?ProdFamily $prodFamily): Storehouse {

        if (null !== $prodFamily) {
            $this->prodFamilies[] = $prodFamily;
        }

        return $this;
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
     * Get the all claim workflow.
     *
     * @return bool|null Returns the all claim workflow.
     */
    public function getAllClaimWorkflow(): ?bool {
        return $this->allClaimWorkflow;
    }

    /**
     * Get the analytical group.
     *
     * @return AnalyticalGroup|null Returns the analytical group.
     */
    public function getAnalyticalGroup(): ?AnalyticalGroup {
        return $this->analyticalGroup;
    }

    /**
     * Get the auto close receipt.
     *
     * @return bool|null Returns the auto close receipt.
     */
    public function getAutoCloseReceipt(): ?bool {
        return $this->autoCloseReceipt;
    }

    /**
     * Get the auto sent pre-order.
     *
     * @return bool|null Returns the auto send pre-order.
     */
    public function getAutoSentPreOrder(): ?bool {
        return $this->autoSentPreOrder;
    }

    /**
     * Get the catchwords.
     *
     * @return string|null Returns the catchwords.
     */
    public function getCatchwords(): ?string {
        return $this->catchwords;
    }

    /**
     * Get the date linked.
     *
     * @return string|null Returns the date linked.
     */
    public function getDateLinked(): ?string {
        return $this->dateLinked;
    }

    /**
     * Get the date valid.
     *
     * @return string|null Returns the date valid.
     */
    public function getDateValid(): ?string {
        return $this->dateValid;
    }

    /**
     * Get the delivery data sending modes.
     *
     * @return mixed[]|null Returns the delivery data sending modes.
     */
    public function getDeliveryDataSendingModes(): ?array {
        return $this->deliveryDataSendingModes;
    }

    /**
     * Get the delivery days productions.
     *
     * @return DeliveryDaysProduction[] Returns the delivery days productions.
     */
    public function getDeliveryDaysProductions(): array {
        return $this->deliveryDaysProductions;
    }

    /**
     * Get the delivery weekdays.
     *
     * @return DeliveryWeekday[] Returns the delivery weekdays.
     */
    public function getDeliveryWeekdays(): array {
        return $this->deliveryWeekdays;
    }

    /**
     * Get the emails.
     *
     * @return Email[] Returns the emails.
     */
    public function getEmails(): array {
        return $this->emails;
    }

    /**
     * Get the faxes.
     *
     * @return Fax[] Returns the faxes.
     */
    public function getFaxes(): array {
        return $this->faxes;
    }

    /**
     * Get the id Oasys supplier.
     *
     * @return int|null Returns the id Oasys supplier.
     */
    public function getIdOasysSupplier(): ?int {
        return $this->idOasysSupplier;
    }

    /**
     * Get the intra community VAT.
     *
     * @return string|null Returns the intra community VAT.
     */
    public function getIntraCommunityVAT(): ?string {
        return $this->intraCommunityVAT;
    }

    /**
     * Get the is claim forced when receipt updated.
     *
     * @return bool|null Returns the is claim forced when receipt updated.
     */
    public function getIsClaimForcedWhenReceiptUpdated(): ?bool {
        return $this->isClaimForcedWhenReceiptUpdated;
    }

    /**
     * Get the is claim must send by fax.
     *
     * @return bool|null Returns the is claim must be send by fax.
     */
    public function getIsClaimMustBeSendByFax(): ?bool {
        return $this->isClaimMustBeSendByFax;
    }

    /**
     * Get the is claim must be send by mail.
     *
     * @return bool|null Returns the is claim must be send by mail.
     */
    public function getIsClaimMustBeSendByMail(): ?bool {
        return $this->isClaimMustBeSendByMail;
    }

    /**
     * Get the is credit note must be send by fax.
     *
     * @return bool|null Returns the is credit note must be send by fax.
     */
    public function getIsCreditNoteMustBeSendByFax(): ?bool {
        return $this->isCreditNoteMustBeSendByFax;
    }

    /**
     * Get the is credit note must be send by mail.
     *
     * @return bool|null Returns the is credit note must be send by mail.
     */
    public function getIsCreditNoteMustBeSendByMail(): ?bool {
        return $this->isCreditNoteMustBeSendByMail;
    }

    /**
     * Get the is delivery note invoice.
     *
     * @return bool|null Returns the is delivery note invoice.
     */
    public function getIsDeliveryNoteInvoice(): ?bool {
        return $this->isDeliveryNoteInvoice;
    }

    /**
     * Get the is claim workflow.
     *
     * @return bool|null Returns the is claim workflow.
     */
    public function getIsInClaimWorkflow(): ?bool {
        return $this->isInClaimWorkflow;
    }

    /**
     * Get the is on supplier directory.
     *
     * @return bool|null Returns the is on supplier directory.
     */
    public function getIsOnSupplierDirectory(): ?bool {
        return $this->isOnSupplierDirectory;
    }

    /**
     * Get the is order delay nullable.
     *
     * @return bool|null Returns the is order delay nullable.
     */
    public function getIsOrderDelayNullable(): ?bool {
        return $this->isOrderDelayNullable;
    }

    /**
     * Get the is preorder authorized.
     *
     * @return bool|null Returns the is preorder authorized.
     */
    public function getIsPreorderAuthorized(): ?bool {
        return $this->isPreorderAuthorized;
    }

    /**
     * Get the is receipt prices from price list.
     *
     * @return bool|null Returns the is receipt prices from price list.
     */
    public function getIsReceiptPricesFromPricelist(): ?bool {
        return $this->isReceiptPricesFromPricelist;
    }

    /**
     * Get the is shipping cost nullable.
     *
     * @return bool|null Returns the is shipping cost nullable.
     */
    public function getIsShippingCostNullable(): ?bool {
        return $this->isShippingCostNullable;
    }

    /**
     * Get the is status link in order email.
     *
     * @return bool|null Returns the is status link in order email.
     */
    public function getIsStatusLinkInOrderEmail(): ?bool {
        return $this->isStatusLinkInOrderEmail;
    }

    /**
     * Get the is threshold strict.
     *
     * @return bool|null Returns the is threshold strict.
     */
    public function getIsThresholdStrict(): ?bool {
        return $this->isThresholdStrict;
    }

    /**
     * Get the is using delivery days production.
     *
     * @return bool|null Returns the is using delivery days production.
     */
    public function getIsUsingDeliveryDaysProduction(): ?bool {
        return $this->isUsingDeliveryDaysProduction;
    }

    /**
     * Get the linked users.
     *
     * @return LinkedUser[] Returns the linked users.
     */
    public function getLinkedUsers(): array {
        return $this->linkedUsers;
    }

    /**
     * Get the logo.
     *
     * @return string|null Returns the logo.
     */
    public function getLogo(): ?string {
        return $this->logo;
    }

    /**
     * Get the nb days between delivery and consumption.
     *
     * @return int|null Returns the  nb days between delivery and consumption.
     */
    public function getNbDaysBetweenDeliveryAndConsumption(): ?int {
        return $this->nbDaysBetweenDeliveryAndConsumption;
    }

    /**
     * Get the nb days delivery before production.
     *
     * @return int|null Returns the nb days delivery before production.
     */
    public function getNbDaysDeliveryBeforeProduction(): ?int {
        return $this->nbDaysDeliveryBeforeProduction;
    }

    /**
     * Get the network full.
     *
     * @return int|null Returns the network full.
     */
    public function getNetworkFull(): ?int {
        return $this->networkFull;
    }

    /**
     * Get the opening days type.
     *
     * @return int|null Returns the opening days type.
     */
    public function getOpeningDaysType(): ?int {
        return $this->openingDaysType;
    }

    /**
     * Get the order delay.
     *
     * @return int|null Returns the order delay.
     */
    public function getOrderDelay(): ?int {
        return $this->orderDelay;
    }

    /**
     * Get the order supplier unit.
     *
     * @return int|null Returns the order supplier unit.
     */
    public function getOrderSupplierUnit(): ?int {
        return $this->orderSupplierUnit;
    }

    /**
     * Get the payment method.
     *
     * @return int|null Returns the payment method.
     */
    public function getPaymentMethod(): ?int {
        return $this->paymentMethod;
    }

    /**
     * Get the payment terms.
     *
     * @return int|null Returns the payment terms.
     */
    public function getPaymentTerms(): ?int {
        return $this->paymentTerms;
    }

    /**
     * Get the phones.
     *
     * @return Phone[] Returns the phones.
     */
    public function getPhones(): array {
        return $this->phones;
    }

    /**
     * Get the presentation.
     *
     * @return string|null Returns the presentation.
     */
    public function getPresentation(): ?string {
        return $this->presentation;
    }

    /**
     * Get the prod families.
     *
     * @return ProdFamily[] Returns the prod families.
     */
    public function getProdFamilies(): array {
        return $this->prodFamilies;
    }

    /**
     * Get the purchase type.
     *
     * @return int|null Returns the purchase type.
     */
    public function getPurchaseType(): ?int {
        return $this->purchaseType;
    }

    /**
     * Get the ref. site of supplier.
     *
     * @return string|null Returns the ref. site of supplier.
     */
    public function getRefSiteOfSupplier(): ?string {
        return $this->refSiteOfSupplier;
    }

    /**
     * Get the sending modes.
     *
     * @return int[]|null Returns the sending modes.
     */
    public function getSendingModes(): ?array {
        return $this->sendingModes;
    }

    /**
     * Get the shipping cost.
     *
     * @return int|null Returns the shipping cost.
     */
    public function getShippingCost(): ?int {
        return $this->shippingCost;
    }

    /**
     * Get the SIRET.
     *
     * @return string|null Returns the SIRET.
     */
    public function getSiret(): ?string {
        return $this->siret;
    }

    /**
     * Get the specifications.
     *
     * @return string|null Returns the specifications.
     */
    public function getSpecifications(): ?string {
        return $this->specifications;
    }

    /**
     * Get the threshold order.
     *
     * @return int|null Returns the threshold order.
     */
    public function getThresholdOrder(): ?int {
        return $this->thresholdOrder;
    }

    /**
     * Get the types.
     *
     * @return int[]|null Returns the types.
     */
    public function getTypes(): ?array {
        return $this->types;
    }

    /**
     * Get the universes.
     *
     * @return int[]|null Returns the universes.
     */
    public function getUniverses(): ?array {
        return $this->universes;
    }

    /**
     * Get the website.
     *
     * @return string|null Returns the website.
     */
    public function getWebsite(): ?string {
        return $this->website;
    }

    /**
     * Set the accounting number.
     *
     * @param string|null $accountingNumber The accounting number.
     * @return Storehouse Returns this storehouse.
     */
    public function setAccountingNumber(?string $accountingNumber): Storehouse {
        $this->accountingNumber = $accountingNumber;
        return $this;
    }

    /**
     * Set the all claim workflow.
     *
     * @param bool|null $allClaimWorkflow The all claim workflow.
     * @return Storehouse Returns this storehouse.
     */
    public function setAllClaimWorkflow(?bool $allClaimWorkflow): Storehouse {
        $this->allClaimWorkflow = $allClaimWorkflow;
        return $this;
    }

    /**
     * Set the analytical group.
     *
     * @param AnalyticalGroup|null $analyticalGroup The analytical group.
     * @return Storehouse Returns this storehouse.
     */
    public function setAnalyticalGroup(?AnalyticalGroup $analyticalGroup): Storehouse {
        $this->analyticalGroup = $analyticalGroup;
        return $this;
    }

    /**
     * Set the auto close receipt.
     *
     * @param bool|null $autoCloseReceipt The auto close receipt.
     * @return Storehouse Returns this storehouse.
     */
    public function setAutoCloseReceipt(?bool $autoCloseReceipt): Storehouse {
        $this->autoCloseReceipt = $autoCloseReceipt;
        return $this;
    }

    /**
     * Set the auto sent pre-order.
     *
     * @param bool|null $autoSentPreOrder The auto sent pre-order.
     * @return Storehouse Returns this storehouse.
     */
    public function setAutoSentPreOrder(?bool $autoSentPreOrder): Storehouse {
        $this->autoSentPreOrder = $autoSentPreOrder;
        return $this;
    }

    /**
     * Set the catchwords.
     *
     * @param string|null $catchwords The catchwords.
     * @return Storehouse Returns this storehouse.
     */
    public function setCatchwords(?string $catchwords): Storehouse {
        $this->catchwords = $catchwords;
        return $this;
    }

    /**
     * Set the date linked.
     *
     * @param string|null $dateLinked The date linked.
     * @return Storehouse Returns this storehouse.
     */
    public function setDateLinked(?string $dateLinked): Storehouse {
        $this->dateLinked = $dateLinked;
        return $this;
    }

    /**
     * Set the date valid.
     *
     * @param string|null $dateValid The date valid.
     * @return Storehouse Returns this storehouse.
     */
    public function setDateValid(?string $dateValid): Storehouse {
        $this->dateValid = $dateValid;
        return $this;
    }

    /**
     * Set the delivery data sending modes.
     *
     * @param mixed[]|null $deliveryDataSendingModes The delivery data sending modes.
     * @return Storehouse Returns this storehouse.
     */
    public function setDeliveryDataSendingModes(?array $deliveryDataSendingModes): Storehouse {
        $this->deliveryDataSendingModes = $deliveryDataSendingModes;
        return $this;
    }

    /**
     * Set the delivery days productions.
     *
     * @param DeliveryDaysProduction[] $deliveryDaysProductions The delivery days productions.
     * @return Storehouse Returns this storehouse.
     */
    protected function setDeliveryDaysProductions(array $deliveryDaysProductions): Storehouse {
        $this->deliveryDaysProductions = $deliveryDaysProductions;
        return $this;
    }

    /**
     * Set the delivery weekdays.
     *
     * @param DeliveryWeekday[] $deliveryWeekdays The delivery weekdays.
     * @return Storehouse Returns this storehouse.
     */
    protected function setDeliveryWeekdays(array $deliveryWeekdays): Storehouse {
        $this->deliveryWeekdays = $deliveryWeekdays;
        return $this;
    }

    /**
     * Set the emails.
     *
     * @param Email[] $emails The emails.
     * @return Storehouse Returns this storehouse.
     */
    protected function setEmails(array $emails): Storehouse {
        $this->emails = $emails;
        return $this;
    }

    /**
     * Set the faxes.
     *
     * @param Fax[] $faxes The faxes.
     * @return Storehouse Returns this storehouse.
     */
    protected function setFaxes(array $faxes): Storehouse {
        $this->faxes = $faxes;
        return $this;
    }

    /**
     * Set the id Oasys supplier.
     *
     * @param int|null $idOasysSupplier The id Oasys supplier.
     * @return Storehouse Returns this storehouse.
     */
    public function setIdOasysSupplier(?int $idOasysSupplier): Storehouse {
        $this->idOasysSupplier = $idOasysSupplier;
        return $this;
    }

    /**
     * Set the intra community VAT.
     *
     * @param string|null $intraCommunityVAT The intra community VAT.
     * @return Storehouse Returns this storehouse.
     */
    public function setIntraCommunityVAT(?string $intraCommunityVAT): Storehouse {
        $this->intraCommunityVAT = $intraCommunityVAT;
        return $this;
    }

    /**
     * Set the is claim forced when receipt updated.
     *
     * @param bool|null $isClaimForcedWhenReceiptUpdated The is claim forced when receipt updated.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsClaimForcedWhenReceiptUpdated(?bool $isClaimForcedWhenReceiptUpdated): Storehouse {
        $this->isClaimForcedWhenReceiptUpdated = $isClaimForcedWhenReceiptUpdated;
        return $this;
    }

    /**
     * Set the is claim must be send by fax.
     *
     * @param bool|null $isClaimMustBeSendByFax The is claim must be send by fax.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsClaimMustBeSendByFax(?bool $isClaimMustBeSendByFax): Storehouse {
        $this->isClaimMustBeSendByFax = $isClaimMustBeSendByFax;
        return $this;
    }

    /**
     * Set the is claim must be send by mail.
     *
     * @param bool|null $isClaimMustBeSendByMail The is claim must be send by mail.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsClaimMustBeSendByMail(?bool $isClaimMustBeSendByMail): Storehouse {
        $this->isClaimMustBeSendByMail = $isClaimMustBeSendByMail;
        return $this;
    }

    /**
     * Set the is credit note must send by fax.
     *
     * @param bool|null $isCreditNoteMustBeSendByFax The is credit note must be send by fax.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsCreditNoteMustBeSendByFax(?bool $isCreditNoteMustBeSendByFax): Storehouse {
        $this->isCreditNoteMustBeSendByFax = $isCreditNoteMustBeSendByFax;
        return $this;
    }

    /**
     * Set the is credit note must be send by mail.
     *
     * @param bool|null $isCreditNoteMustBeSendByMail The is credit note must be send by mail.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsCreditNoteMustBeSendByMail(?bool $isCreditNoteMustBeSendByMail): Storehouse {
        $this->isCreditNoteMustBeSendByMail = $isCreditNoteMustBeSendByMail;
        return $this;
    }

    /**
     * Set the is delivery note invoice.
     *
     * @param bool|null $isDeliveryNoteInvoice The is delivery note invoice
     * @return Storehouse Returns this storehouse.
     */
    public function setIsDeliveryNoteInvoice(?bool $isDeliveryNoteInvoice): Storehouse {
        $this->isDeliveryNoteInvoice = $isDeliveryNoteInvoice;
        return $this;
    }

    /**
     * Set the is claim workflow.
     *
     * @param bool|null $isInClaimWorkflow The is claim workflow.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsInClaimWorkflow(?bool $isInClaimWorkflow): Storehouse {
        $this->isInClaimWorkflow = $isInClaimWorkflow;
        return $this;
    }

    /**
     * Set the is on supplier directory.
     *
     * @param bool|null $isOnSupplierDirectory The is on supplier directory.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsOnSupplierDirectory(?bool $isOnSupplierDirectory): Storehouse {
        $this->isOnSupplierDirectory = $isOnSupplierDirectory;
        return $this;
    }

    /**
     * Set the is order delay nullable.
     *
     * @param bool|null $isOrderDelayNullable The is order delay nullable.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsOrderDelayNullable(?bool $isOrderDelayNullable): Storehouse {
        $this->isOrderDelayNullable = $isOrderDelayNullable;
        return $this;
    }

    /**
     * Set the is preorder authorized.
     *
     * @param bool|null $isPreorderAuthorized The is preorder authorized.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsPreorderAuthorized(?bool $isPreorderAuthorized): Storehouse {
        $this->isPreorderAuthorized = $isPreorderAuthorized;
        return $this;
    }

    /**
     * Set the is receipt prices from price list.
     *
     * @param bool|null $isReceiptPricesFromPricelist The is receipt prices from price list.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsReceiptPricesFromPricelist(?bool $isReceiptPricesFromPricelist): Storehouse {
        $this->isReceiptPricesFromPricelist = $isReceiptPricesFromPricelist;
        return $this;
    }

    /**
     * Set the is shipping cost nullable.
     *
     * @param bool|null $isShippingCostNullable The is shipping cost nullable.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsShippingCostNullable(?bool $isShippingCostNullable): Storehouse {
        $this->isShippingCostNullable = $isShippingCostNullable;
        return $this;
    }

    /**
     * Set the is status link in order email.
     *
     * @param bool|null $isStatusLinkInOrderEmail The is status link in order email.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsStatusLinkInOrderEmail(?bool $isStatusLinkInOrderEmail): Storehouse {
        $this->isStatusLinkInOrderEmail = $isStatusLinkInOrderEmail;
        return $this;
    }

    /**
     * Set the is threshold strict.
     *
     * @param bool|null $isThresholdStrict The is threshold strict.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsThresholdStrict(?bool $isThresholdStrict): Storehouse {
        $this->isThresholdStrict = $isThresholdStrict;
        return $this;
    }

    /**
     * Set the is using delivery days production.
     *
     * @param bool|null $isUsingDeliveryDaysProduction The is using delivery days production.
     * @return Storehouse Returns this storehouse.
     */
    public function setIsUsingDeliveryDaysProduction(?bool $isUsingDeliveryDaysProduction): Storehouse {
        $this->isUsingDeliveryDaysProduction = $isUsingDeliveryDaysProduction;
        return $this;
    }

    /**
     * Set the linked users.
     *
     * @param LinkedUser[] $linkedUsers The linked users.
     * @return Storehouse Returns this storehouse.
     */
    protected function setLinkedUsers(array $linkedUsers): Storehouse {
        $this->linkedUsers = $linkedUsers;
        return $this;
    }

    /**
     * Set the logo.
     *
     * @param string|null $logo The logo.
     * @return Storehouse Returns this storehouse.
     */
    public function setLogo(?string $logo): Storehouse {
        $this->logo = $logo;
        return $this;
    }

    /**
     * Set the  nb days between delivery and consumption.
     *
     * @param int|null $nbDaysBetweenDeliveryAndConsumption The  nb days between delivery and consumption.
     * @return Storehouse Returns this storehouse.
     */
    public function setNbDaysBetweenDeliveryAndConsumption(?int $nbDaysBetweenDeliveryAndConsumption): Storehouse {
        $this->nbDaysBetweenDeliveryAndConsumption = $nbDaysBetweenDeliveryAndConsumption;
        return $this;
    }

    /**
     * Set the nb days delivery before production.
     *
     * @param int|null $nbDaysDeliveryBeforeProduction The nb days delivery before production.
     * @return Storehouse Returns this storehouse.
     */
    public function setNbDaysDeliveryBeforeProduction(?int $nbDaysDeliveryBeforeProduction): Storehouse {
        $this->nbDaysDeliveryBeforeProduction = $nbDaysDeliveryBeforeProduction;
        return $this;
    }

    /**
     * Set the network full.
     *
     * @param int|null $networkFull The network full.
     * @return Storehouse Returns this storehouse.
     */
    public function setNetworkFull(?int $networkFull): Storehouse {
        $this->networkFull = $networkFull;
        return $this;
    }

    /**
     * Set the opening days type.
     *
     * @param int|null $openingDaysType The opening days type.
     * @return Storehouse Returns this storehouse.
     */
    public function setOpeningDaysType(?int $openingDaysType): Storehouse {
        $this->openingDaysType = $openingDaysType;
        return $this;
    }

    /**
     * Set the order delay.
     *
     * @param int|null $orderDelay The order delay.
     * @return Storehouse Returns this storehouse.
     */
    public function setOrderDelay(?int $orderDelay): Storehouse {
        $this->orderDelay = $orderDelay;
        return $this;
    }

    /**
     * Set the order supplier unit.
     *
     * @param int|null $orderSupplierUnit The order supplier unit.
     * @return Storehouse Returns this storehouse.
     */
    public function setOrderSupplierUnit(?int $orderSupplierUnit): Storehouse {
        $this->orderSupplierUnit = $orderSupplierUnit;
        return $this;
    }

    /**
     * Set the payment method.
     *
     * @param int|null $paymentMethod The payment method.
     * @return Storehouse Returns this storehouse.
     */
    public function setPaymentMethod(?int $paymentMethod): Storehouse {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Set the payment terms.
     *
     * @param int|null $paymentTerms The payment terms.
     * @return Storehouse Returns this storehouse.
     */
    public function setPaymentTerms(?int $paymentTerms): Storehouse {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Set the phones.
     *
     * @param Phone[] $phones The phones.
     * @return Storehouse Returns this storehouse.
     */
    protected function setPhones(array $phones): Storehouse {
        $this->phones = $phones;
        return $this;
    }

    /**
     * Set the presentation.
     *
     * @param string|null $presentation The presentation.
     * @return Storehouse Returns this storehouse.
     */
    public function setPresentation(?string $presentation): Storehouse {
        $this->presentation = $presentation;
        return $this;
    }

    /**
     * Set the prod families.
     *
     * @param ProdFamily[] $prodFamilies The prod families.
     * @return Storehouse Returns this storehouse.
     */
    protected function setProdFamilies(array $prodFamilies): Storehouse {
        $this->prodFamilies = $prodFamilies;
        return $this;
    }

    /**
     * Set the purchase type.
     *
     * @param int|null $purchaseType The purchase type.
     * @return Storehouse Returns this storehouse.
     */
    public function setPurchaseType(?int $purchaseType): Storehouse {
        $this->purchaseType = $purchaseType;
        return $this;
    }

    /**
     * Set the ref. site of supplier.
     *
     * @param string|null $refSiteOfSupplier The ref. site of supplier.
     * @return Storehouse Returns this storehouse.
     */
    public function setRefSiteOfSupplier(?string $refSiteOfSupplier): Storehouse {
        $this->refSiteOfSupplier = $refSiteOfSupplier;
        return $this;
    }

    /**
     * Set the sending modes.
     *
     * @param int[]|null $sendingModes The sending modes.
     * @return Storehouse Returns this storehouse.
     */
    public function setSendingModes(?array $sendingModes): Storehouse {
        $this->sendingModes = $sendingModes;
        return $this;
    }

    /**
     * Set the shipping cost.
     *
     * @param int|null $shippingCost The shipping cost.
     * @return Storehouse Returns this storehouse.
     */
    public function setShippingCost(?int $shippingCost): Storehouse {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * Set the SIRET.
     *
     * @param string|null $siret The SIRET.
     * @return Storehouse Returns this storehouse.
     */
    public function setSiret(?string $siret): Storehouse {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the specifications.
     *
     * @param string|null $specifications The specifications.
     * @return Storehouse Returns this storehouse.
     */
    public function setSpecifications(?string $specifications): Storehouse {
        $this->specifications = $specifications;
        return $this;
    }

    /**
     * Set the threshold order.
     *
     * @param int|null $thresholdOrder The  threshold order.
     * @return Storehouse Returns this storehouse.
     */
    public function setThresholdOrder(?int $thresholdOrder): Storehouse {
        $this->thresholdOrder = $thresholdOrder;
        return $this;
    }

    /**
     * Set the types.
     *
     * @param int[]|null $types The types.
     * @return Storehouse Returns this storehouse.
     */
    public function setTypes(?array $types): Storehouse {
        $this->types = $types;
        return $this;
    }

    /**
     * Set the universes.
     *
     * @param int[]|null $universes The universes.
     * @return Storehouse Returns this storehouse.
     */
    public function setUniverses(?array $universes): Storehouse {
        $this->universes = $universes;
        return $this;
    }

    /**
     * Set the website.
     *
     * @param string|null $website The website.
     * @return Storehouse Returns this storehouse.
     */
    public function setWebsite(?string $website): Storehouse {
        $this->website = $website;
        return $this;
    }
}
