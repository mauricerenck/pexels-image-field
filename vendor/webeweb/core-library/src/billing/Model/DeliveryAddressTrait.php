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
 * Delivery address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 */
trait DeliveryAddressTrait {

    /**
     * Delivery address "addressee".
     *
     * @var string|null
     */
    protected $deliveryAddressAddressee;

    /**
     * Delivery address "country".
     *
     * @var string|null
     */
    protected $deliveryAddressCountry;

    /**
     * Delivery address "house number".
     *
     * @var string|null
     */
    protected $deliveryAddressHouseNumber;

    /**
     * Delivery address "location".
     *
     * @var string|null
     */
    protected $deliveryAddressLocation;

    /**
     * Delivery address "postal code".
     *
     * @var string|null
     */
    protected $deliveryAddressPostalCode;

    /**
     * Delivery address "street name".
     *
     * @var string|null
     */
    protected $deliveryAddressStreetName;

    /**
     * Get the delivery address "addressee".
     *
     * @return string|null Returns the delivery address "addressee"
     */
    public function getDeliveryAddressAddressee(): ?string {
        return $this->deliveryAddressAddressee;
    }

    /**
     * Get the delivery address "country".
     *
     * @return string|null Returns the delivery address "country".
     */
    public function getDeliveryAddressCountry(): ?string {
        return $this->deliveryAddressCountry;
    }

    /**
     * Get the delivery address "house number".
     *
     * @return string|null Returns the delivery address "house number".
     */
    public function getDeliveryAddressHouseNumber(): ?string {
        return $this->deliveryAddressHouseNumber;
    }

    /**
     * Get the delivery address "location".
     *
     * @return string|null Returns the delivery address "location".
     */
    public function getDeliveryAddressLocation(): ?string {
        return $this->deliveryAddressLocation;
    }

    /**
     * Get the delivery address "postal code".
     *
     * @return string|null Returns the delivery address "postal code".
     */
    public function getDeliveryAddressPostalCode(): ?string {
        return $this->deliveryAddressPostalCode;
    }

    /**
     * Get the delivery address "street name".
     *
     * @return string|null Returns the delivery address "street name".
     */
    public function getDeliveryAddressStreetName(): ?string {
        return $this->deliveryAddressStreetName;
    }

    /**
     * Set the delivery address "addressee".
     *
     * @param string|null $deliveryAddressAddressee The delivery address "addressee".
     * @return self Returns this instance.
     */
    public function setDeliveryAddressAddressee(?string $deliveryAddressAddressee): self {
        $this->deliveryAddressAddressee = $deliveryAddressAddressee;
        return $this;
    }

    /**
     * Set the delivery address "country".
     *
     * @param string|null $deliveryAddressCountry The delivery address "country".
     * @return self Returns this instance.
     */
    public function setDeliveryAddressCountry(?string $deliveryAddressCountry): self {
        $this->deliveryAddressCountry = $deliveryAddressCountry;
        return $this;
    }

    /**
     * Set the delivery address "house number".
     *
     * @param string|null $deliveryAddressHouseNumber The delivery address "house number".
     * @return self Returns this instance.
     */
    public function setDeliveryAddressHouseNumber(?string $deliveryAddressHouseNumber): self {
        $this->deliveryAddressHouseNumber = $deliveryAddressHouseNumber;
        return $this;
    }

    /**
     * Set the delivery address "location".
     *
     * @param string|null $deliveryAddressLocation The delivery address "location".
     * @return self Returns this instance.
     */
    public function setDeliveryAddressLocation(?string $deliveryAddressLocation): self {
        $this->deliveryAddressLocation = $deliveryAddressLocation;
        return $this;
    }

    /**
     * Set the delivery address "postal code".
     *
     * @param string|null $deliveryAddressPostalCode The delivery address "postal code".
     * @return self Returns this instance.
     */
    public function setDeliveryAddressPostalCode(?string $deliveryAddressPostalCode): self {
        $this->deliveryAddressPostalCode = $deliveryAddressPostalCode;
        return $this;
    }

    /**
     * Set the delivery address "street name".
     *
     * @param string|null $deliveryAddressStreetName The delivery address "street name".
     * @return self Returns this instance.
     */
    public function setDeliveryAddressStreetName(?string $deliveryAddressStreetName): self {
        $this->deliveryAddressStreetName = $deliveryAddressStreetName;
        return $this;
    }
}
