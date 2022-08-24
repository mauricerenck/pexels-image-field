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
 * Sending address interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 */
interface SendingAddressInterface extends JsonSerializable {

    /**
     * Get the sending address "addressee".
     *
     * @return string|null Returns the sending address "addressee"
     */
    public function getSendingAddressAddressee(): ?string;

    /**
     * Get the sending address "country".
     *
     * @return string|null Returns the sending address "country".
     */
    public function getSendingAddressCountry(): ?string;

    /**
     * Get the sending address "house number".
     *
     * @return string|null Returns the sending address "house number".
     */
    public function getSendingAddressHouseNumber(): ?string;

    /**
     * Get the sending address "location".
     *
     * @return string|null Returns the sending address "location".
     */
    public function getSendingAddressLocation(): ?string;

    /**
     * Get the sending address "postal code".
     *
     * @return string|null Returns the sending address "postal code".
     */
    public function getSendingAddressPostalCode(): ?string;

    /**
     * Get the sending address "street name".
     *
     * @return string|null Returns the sending address "street name".
     */
    public function getSendingAddressStreetName(): ?string;

    /**
     * Set the sending address "addressee".
     *
     * @param string|null $sendingAddressAddressee The sending address "addressee".
     * @return SendingAddressInterface Returns this sending address.
     */
    public function setSendingAddressAddressee(?string $sendingAddressAddressee);

    /**
     * Set the sending address "country".
     *
     * @param string|null $sendingAddressCountry The sending address "country".
     * @return SendingAddressInterface Returns this sending address.
     */
    public function setSendingAddressCountry(?string $sendingAddressCountry);

    /**
     * Set the sending address "house number".
     *
     * @param string|null $sendingAddressHouseNumber The sending address "house number".
     * @return SendingAddressInterface Returns this sending address.
     */
    public function setSendingAddressHouseNumber(?string $sendingAddressHouseNumber);

    /**
     * Set the sending address "location".
     *
     * @param string|null $sendingAddressLocation The sending address "location".
     * @return SendingAddressInterface Returns this sending address.
     */
    public function setSendingAddressLocation(?string $sendingAddressLocation);

    /**
     * Set the sending address "postal code".
     *
     * @param string|null $sendingAddressPostalCode The sending address "postal code".
     * @return SendingAddressInterface Returns this sending address.
     */
    public function setSendingAddressPostalCode(?string $sendingAddressPostalCode);

    /**
     * Set the sending address "street name".
     *
     * @param string|null $sendingAddressStreetName The sending address "street name".
     * @return SendingAddressInterface Returns this sending address.
     */
    public function setSendingAddressStreetName(?string $sendingAddressStreetName);
}
