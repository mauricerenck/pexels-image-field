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
 * Delivery address interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 */
interface DeliveryAddressInterface extends JsonSerializable {

    /**
     * Get the delivery address "addressee".
     *
     * @return string|null Returns the delivery address "addressee"
     */
    public function getDeliveryAddressAddressee(): ?string;

    /**
     * Get the delivery address "country".
     *
     * @return string|null Returns the delivery address "country".
     */
    public function getDeliveryAddressCountry(): ?string;

    /**
     * Get the delivery address "house number".
     *
     * @return string|null Returns the delivery address "house number".
     */
    public function getDeliveryAddressHouseNumber(): ?string;

    /**
     * Get the delivery address "location".
     *
     * @return string|null Returns the delivery address "location".
     */
    public function getDeliveryAddressLocation(): ?string;

    /**
     * Get the delivery address "postal code".
     *
     * @return string|null Returns the delivery address "postal code".
     */
    public function getDeliveryAddressPostalCode(): ?string;

    /**
     * Get the delivery address "street name".
     *
     * @return string|null Returns the delivery address "street name".
     */
    public function getDeliveryAddressStreetName(): ?string;

    /**
     * Set the delivery address "addressee".
     *
     * @param string|null $deliveryAddressAddressee The delivery address "addressee".
     * @return DeliveryAddressInterface Returns this delivery address.
     */
    public function setDeliveryAddressAddressee(?string $deliveryAddressAddressee);

    /**
     * Set the delivery address "country".
     *
     * @param string|null $deliveryAddressCountry The delivery address "country".
     * @return DeliveryAddressInterface Returns this delivery address.
     */
    public function setDeliveryAddressCountry(?string $deliveryAddressCountry);

    /**
     * Set the delivery address "house number".
     *
     * @param string|null $deliveryAddressHouseNumber The delivery address "house number".
     * @return DeliveryAddressInterface Returns this delivery address.
     */
    public function setDeliveryAddressHouseNumber(?string $deliveryAddressHouseNumber);

    /**
     * Set the delivery address "location".
     *
     * @param string|null $deliveryAddressLocation The delivery address "location".
     * @return DeliveryAddressInterface Returns this delivery address.
     */
    public function setDeliveryAddressLocation(?string $deliveryAddressLocation);

    /**
     * Set the delivery address "postal code".
     *
     * @param string|null $deliveryAddressPostalCode The delivery address "postal code".
     * @return DeliveryAddressInterface Returns this delivery address.
     */
    public function setDeliveryAddressPostalCode(?string $deliveryAddressPostalCode);

    /**
     * Set the delivery address "street name".
     *
     * @param string|null $deliveryAddressStreetName The delivery address "street name".
     * @return DeliveryAddressInterface Returns this delivery address.
     */
    public function setDeliveryAddressStreetName(?string $deliveryAddressStreetName);
}
