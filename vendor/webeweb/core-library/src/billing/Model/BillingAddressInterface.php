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
 * Billing address interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 */
interface BillingAddressInterface extends JsonSerializable {

    /**
     * Get the billing address "addressee".
     *
     * @return string|null Returns the billing address "addressee"
     */
    public function getBillingAddressAddressee(): ?string;

    /**
     * Get the billing address "country".
     *
     * @return string|null Returns the billing address "country".
     */
    public function getBillingAddressCountry(): ?string;

    /**
     * Get the billing address "house number".
     *
     * @return string|null Returns the billing address "house number".
     */
    public function getBillingAddressHouseNumber(): ?string;

    /**
     * Get the billing address "location".
     *
     * @return string|null Returns the billing address "location".
     */
    public function getBillingAddressLocation(): ?string;

    /**
     * Get the billing address "postal code".
     *
     * @return string|null Returns the billing address "postal code".
     */
    public function getBillingAddressPostalCode(): ?string;

    /**
     * Get the billing address "street name".
     *
     * @return string|null Returns the billing address "street name".
     */
    public function getBillingAddressStreetName(): ?string;

    /**
     * Set the billing address "addressee".
     *
     * @param string|null $billingAddressAddressee The billing address "addressee".
     * @return BillingAddressInterface Returns this billing address.
     */
    public function setBillingAddressAddressee(?string $billingAddressAddressee);

    /**
     * Set the billing address "country".
     *
     * @param string|null $billingAddressCountry The billing address "country".
     * @return BillingAddressInterface Returns this billing address.
     */
    public function setBillingAddressCountry(?string $billingAddressCountry);

    /**
     * Set the billing address "house number".
     *
     * @param string|null $billingAddressHouseNumber The billing address "house number".
     * @return BillingAddressInterface Returns this billing address.
     */
    public function setBillingAddressHouseNumber(?string $billingAddressHouseNumber);

    /**
     * Set the billing address "location".
     *
     * @param string|null $billingAddressLocation The billing address "location".
     * @return BillingAddressInterface Returns this billing address.
     */
    public function setBillingAddressLocation(?string $billingAddressLocation);

    /**
     * Set the billing address "postal code".
     *
     * @param string|null $billingAddressPostalCode The billing address "postal code".
     * @return BillingAddressInterface Returns this billing address.
     */
    public function setBillingAddressPostalCode(?string $billingAddressPostalCode);

    /**
     * Set the billing address "street name".
     *
     * @param string|null $billingAddressStreetName The billing address "street name".
     * @return BillingAddressInterface Returns this billing address.
     */
    public function setBillingAddressStreetName(?string $billingAddressStreetName);
}
