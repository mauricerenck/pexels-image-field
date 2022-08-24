<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Model;

/**
 * Billable detail interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 */
interface BillableDetailInterface extends TaxableInterface {

    /**
     * Get the billable.
     *
     * @return BillableInterface|null Returns the billable.
     */
    public function getBillable(): ?BillableInterface;

    /**
     * Get the comment.
     *
     * @return string|null Returns the comment.
     */
    public function getComment(): ?string;

    /**
     * Get the discount total.
     *
     * @return float|null The discount total.
     */
    public function getDiscountTotal(): ?float;

    /**
     * Get the excluding VAT total.
     *
     * @return float|null The excluding VAT total.
     */
    public function getExcludingVatTotal(): ?float;

    /**
     * Get the including VAT total.
     *
     * @return float|null The including VAT total.
     */
    public function getIncludingVatTotal(): ?float;

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getLabel(): ?string;

    /**
     * Get the quantity.
     *
     * @return float|null The quantity.
     */
    public function getQuantity(): ?float;

    /**
     * Get the reference.
     *
     * @return string|null Returns the reference.
     */
    public function getReference(): ?string;

    /**
     * Get the VAT total.
     *
     * @return float|null Returns the VAT total.
     */
    public function getVatTotal(): ?float;

    /**
     * On submit.
     *
     * @return void
     */
    public function onSubmit(): void;

    /**
     * Set the billable.
     *
     * @param BillableInterface|null $billable The billable.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setBillable(?BillableInterface $billable): BillableDetailInterface;

    /**
     * Set the comment.
     *
     * @param string|null $comment The comment.
     * @return BillableDetailInterface Returns the billable detail.
     */
    public function setComment(?string $comment);

    /**
     * Set the discount total.
     *
     * @param float|null $excludingVatTotal The discount total.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setDiscountTotal(?float $excludingVatTotal);

    /**
     * Set the excluding VAT total.
     *
     * @param float|null $excludingVatTotal The excluding VAT total.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setExcludingVatTotal(?float $excludingVatTotal);

    /**
     * Set the including VAT total.
     *
     * @param float|null $includingVatTotal The including VAT total.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setIncludingVatTotal(?float $includingVatTotal);

    /**
     * Set the label.
     *
     * @param string|null $label The label.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setLabel(?string $label);

    /**
     * Set the quantity.
     *
     * @param float|null $quantity The quantity.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setQuantity(?float $quantity);

    /**
     * Set the reference.
     *
     * @param string|null $reference The reference.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setReference(?string $reference);

    /**
     * Set the VAT total.
     *
     * @param float|null $vatTotal The VAT total.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setVatTotal(?float $vatTotal);
}
