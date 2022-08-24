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
 * Billing address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 */
trait BillingAddressTrait {

    /**
     * Billing address "addressee".
     *
     * @var string|null
     */
    protected $billingAddressAddressee;

    /**
     * Billing address "country".
     *
     * @var string|null
     */
    protected $billingAddressCountry;

    /**
     * Billing address "house number".
     *
     * @var string|null
     */
    protected $billingAddressHouseNumber;

    /**
     * Billing address "location".
     *
     * @var string|null
     */
    protected $billingAddressLocation;

    /**
     * Billing address "postal code".
     *
     * @var string|null
     */
    protected $billingAddressPostalCode;

    /**
     * Billing address "street name".
     *
     * @var string|null
     */
    protected $billingAddressStreetName;

    /**
     * Get the billing address "addressee".
     *
     * @return string|null Returns the billing address "addressee"
     */
    public function getBillingAddressAddressee(): ?string {
        return $this->billingAddressAddressee;
    }

    /**
     * Get the billing address "country".
     *
     * @return string|null Returns the billing address "country".
     */
    public function getBillingAddressCountry(): ?string {
        return $this->billingAddressCountry;
    }

    /**
     * Get the billing address "house number".
     *
     * @return string|null Returns the billing address "house number".
     */
    public function getBillingAddressHouseNumber(): ?string {
        return $this->billingAddressHouseNumber;
    }

    /**
     * Get the billing address "location".
     *
     * @return string|null Returns the billing address "location".
     */
    public function getBillingAddressLocation(): ?string {
        return $this->billingAddressLocation;
    }

    /**
     * Get the billing address "postal code".
     *
     * @return string|null Returns the billing address "postal code".
     */
    public function getBillingAddressPostalCode(): ?string {
        return $this->billingAddressPostalCode;
    }

    /**
     * Get the billing address "street name".
     *
     * @return string|null Returns the billing address "street name".
     */
    public function getBillingAddressStreetName(): ?string {
        return $this->billingAddressStreetName;
    }

    /**
     * Set the billing address "addressee".
     *
     * @param string|null $billingAddressAddressee The billing address "addressee".
     * @return self Returns this instance.
     */
    public function setBillingAddressAddressee(?string $billingAddressAddressee): self {
        $this->billingAddressAddressee = $billingAddressAddressee;
        return $this;
    }

    /**
     * Set the billing address "country".
     *
     * @param string|null $billingAddressCountry The billing address "country".
     * @return self Returns this instance.
     */
    public function setBillingAddressCountry(?string $billingAddressCountry): self {
        $this->billingAddressCountry = $billingAddressCountry;
        return $this;
    }

    /**
     * Set the billing address "house number".
     *
     * @param string|null $billingAddressHouseNumber The billing address "house number".
     * @return self Returns this instance.
     */
    public function setBillingAddressHouseNumber(?string $billingAddressHouseNumber): self {
        $this->billingAddressHouseNumber = $billingAddressHouseNumber;
        return $this;
    }

    /**
     * Set the billing address "location".
     *
     * @param string|null $billingAddressLocation The billing address "location".
     * @return self Returns this instance.
     */
    public function setBillingAddressLocation(?string $billingAddressLocation): self {
        $this->billingAddressLocation = $billingAddressLocation;
        return $this;
    }

    /**
     * Set the billing address "postal code".
     *
     * @param string|null $billingAddressPostalCode The billing address "postal code".
     * @return self Returns this instance.
     */
    public function setBillingAddressPostalCode(?string $billingAddressPostalCode): self {
        $this->billingAddressPostalCode = $billingAddressPostalCode;
        return $this;
    }

    /**
     * Set the billing address "street name".
     *
     * @param string|null $billingAddressStreetName The billing address "street name".
     * @return self Returns this instance.
     */
    public function setBillingAddressStreetName(?string $billingAddressStreetName): self {
        $this->billingAddressStreetName = $billingAddressStreetName;
        return $this;
    }
}
