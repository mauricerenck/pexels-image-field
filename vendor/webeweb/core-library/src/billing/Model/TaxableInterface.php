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

use JsonSerializable;

/**
 * Taxable interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 */
interface TaxableInterface extends JsonSerializable {

    /**
     * Get the discount amount.
     *
     * @return float|null Returns the discount amount.
     */
    public function getDiscountAmount(): ?float;

    /**
     * Get the discount rate.
     *
     * @return float|null The discount rate.
     */
    public function getDiscountRate(): ?float;

    /**
     * Get the excluding VAT price.
     *
     * @return float|null The excluding VAT price.
     */
    public function getExcludingVatPrice(): ?float;

    /**
     * Get the including VAT price.
     *
     * @return float|null The including VAT price.
     */
    public function getIncludingVatPrice(): ?float;

    /**
     * Get the VAT amount.
     *
     * @return float|null Returns the VAT amount.
     */
    public function getVatAmount(): ?float;

    /**
     * Get the VAT rate.
     *
     * @return float|null Returns the VAT rate.
     */
    public function getVatRate(): ?float;

    /**
     * On submit.
     *
     * @return void.
     */
    public function onSubmit(): void;

    /**
     * Set the discount amount.
     *
     * @param float|null $discountAmount The discount amount.
     * @return TaxableInterface Returns this taxable.
     */
    public function setDiscountAmount(?float $discountAmount);

    /**
     * Set the discount rate.
     *
     * @param float|null $discountRate The discount rate.
     * @return TaxableInterface Returns this taxable.
     */
    public function setDiscountRate(?float $discountRate);

    /**
     * Set the excluding VAT price.
     *
     * @param float|null $excludingVatPrice The excluding VAT price.
     * @return TaxableInterface Returns this taxable.
     */
    public function setExcludingVatPrice(?float $excludingVatPrice);

    /**
     * Set the including VAT price.
     *
     * @param float|null $includingVatPrice The including VAT price.
     * @return TaxableInterface Returns this taxable.
     */
    public function setIncludingVatPrice(?float $includingVatPrice);

    /**
     * Set the VAT amount.
     *
     * @param float|null $vatAmount The VAT amount.
     * @return TaxableInterface Returns this taxable.
     */
    public function setVatAmount(?float $vatAmount);

    /**
     * Set the VAT rate.
     *
     * @param float|null $vatRate The VAT rate.
     * @return TaxableInterface Returns this taxable.
     */
    public function setVatRate(?float $vatRate);
}
