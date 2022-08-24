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

use DateTime;
use JsonSerializable;

/**
 * Billable interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 */
interface BillableInterface extends JsonSerializable {

    /**
     * Add a detail.
     *
     * @param BillableDetailInterface $detail The detail.
     * @return BillableInterface Returns this billable.
     */
    public function addDetail(BillableDetailInterface $detail): BillableInterface;

    /**
     * Get the comment.
     *
     * @return string|null Returns the comment.
     */
    public function getComment(): ?string;

    /**
     * Get the created at.
     *
     * @return DateTime|null Returns the created at.
     */
    public function getCreatedAt(): ?DateTime;

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime;

    /**
     * Get the details.
     *
     * @return BillableDetailInterface[] Returns the details.
     */
    public function getDetails(): array;

    /**
     * Get the discount rate.
     *
     * @return float|null Returns the discount rate.
     */
    public function getDiscountRate(): ?float;

    /**
     * Get the discount total.
     *
     * @return float|null Returns the discount total.
     */
    public function getDiscountTotal(): ?float;

    /**
     * Get the excluding VAT total.
     *
     * @return float|null Returns the excluding VAT total.
     */
    public function getExcludingVatTotal(): ?float;

    /**
     * Get the including VAT total.
     *
     * @return float|null Returns the including VAT total.
     */
    public function getIncludingVatTotal(): ?float;

    /**
     * Get the number.
     *
     * @return string|null Returns the number.
     */
    public function getNumber(): ?string;

    /**
     * Get the parent.
     *
     * @return BillableInterface|null Returns the parent.
     */
    public function getParent(): ?BillableInterface;

    /**
     * Get the reference.
     *
     * @return string|null Returns the reference.
     */
    public function getReference(): ?string;

    /**
     * Get the updated at.
     *
     * @return DateTime|null Returns the updated at.
     */
    public function getUpdatedAt(): ?DateTime;

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
     * Remove a detail.
     *
     * @param BillableDetailInterface $detail The detail.
     * @return BillableInterface Returns this billable.
     */
    public function removeDetail(BillableDetailInterface $detail): BillableInterface;

    /**
     * Set the comment.
     *
     * @param string|null $comment The comment.
     * @return BillableInterface Returns this billable.
     */
    public function setComment(?string $comment);

    /**
     * Set the created at.
     *
     * @param DateTime|null $createdAt The created at.
     * @return BillableInterface Returns this billable.
     */
    public function setCreatedAt(?DateTime $createdAt);

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return BillableInterface Returns this billable.
     */
    public function setDate(?DateTime $date);

    /**
     * Set the discount rate.
     *
     * @param float|null $discountRate The discount rate.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setDiscountRate(?float $discountRate);

    /**
     * Set the discount total.
     *
     * @param float|null $discountTotal The discount total.
     * @return BillableInterface Returns this billable.
     */
    public function setDiscountTotal(?float $discountTotal);

    /**
     * Set the excluding VAT total.
     *
     * @param float|null $excludingVatTotal The excluding VAT total.
     * @return BillableInterface Returns this billable.
     */
    public function setExcludingVatTotal(?float $excludingVatTotal);

    /**
     * Set the including VAT total.
     *
     * @param float|null $includingVatTotal The including VAT total.
     * @return BillableInterface Returns this billable.
     */
    public function setIncludingVatTotal(?float $includingVatTotal);

    /**
     * Set the number.
     *
     * @param string|null $number The number.
     * @return BillableInterface Returns this billable.
     */
    public function setNumber(?string $number);

    /**
     * Set the parent.
     *
     * @param BillableInterface|null $parent The parent.
     * @return BillableInterface Returns this billable.
     */
    public function setParent(?BillableInterface $parent): BillableInterface;

    /**
     * Set the reference.
     *
     * @param string|null $reference The reference.
     * @return BillableInterface Returns this billable.
     */
    public function setReference(?string $reference);

    /**
     * Set the updated at.
     *
     * @param DateTime|null $updatedAt The updated at.
     * @return BillableInterface Returns this billable.
     */
    public function setUpdatedAt(?DateTime $updatedAt);

    /**
     * Set the VAT total.
     *
     * @param float|null $vatTotal The VAT total.
     * @return BillableInterface Returns this billable.
     */
    public function setVatTotal(?float $vatTotal);
}
