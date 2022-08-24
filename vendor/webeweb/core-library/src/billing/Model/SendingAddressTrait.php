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
 * Sending address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Model
 */
trait SendingAddressTrait {

    /**
     * Sending address "addressee".
     *
     * @var string|null
     */
    protected $sendingAddressAddressee;

    /**
     * Sending address "country".
     *
     * @var string|null
     */
    protected $sendingAddressCountry;

    /**
     * Sending address "house number".
     *
     * @var string|null
     */
    protected $sendingAddressHouseNumber;

    /**
     * Sending address "location".
     *
     * @var string|null
     */
    protected $sendingAddressLocation;

    /**
     * Sending address "postal code".
     *
     * @var string|null
     */
    protected $sendingAddressPostalCode;

    /**
     * Sending address "street name".
     *
     * @var string|null
     */
    protected $sendingAddressStreetName;

    /**
     * Get the sending address "addressee".
     *
     * @return string|null Returns the sending address "addressee"
     */
    public function getSendingAddressAddressee(): ?string {
        return $this->sendingAddressAddressee;
    }

    /**
     * Get the sending address "country".
     *
     * @return string|null Returns the sending address "country".
     */
    public function getSendingAddressCountry(): ?string {
        return $this->sendingAddressCountry;
    }

    /**
     * Get the sending address "house number".
     *
     * @return string|null Returns the sending address "house number".
     */
    public function getSendingAddressHouseNumber(): ?string {
        return $this->sendingAddressHouseNumber;
    }

    /**
     * Get the sending address "location".
     *
     * @return string|null Returns the sending address "location".
     */
    public function getSendingAddressLocation(): ?string {
        return $this->sendingAddressLocation;
    }

    /**
     * Get the sending address "postal code".
     *
     * @return string|null Returns the sending address "postal code".
     */
    public function getSendingAddressPostalCode(): ?string {
        return $this->sendingAddressPostalCode;
    }

    /**
     * Get the sending address "street name".
     *
     * @return string|null Returns the sending address "street name".
     */
    public function getSendingAddressStreetName(): ?string {
        return $this->sendingAddressStreetName;
    }

    /**
     * Set the sending address "addressee".
     *
     * @param string|null $sendingAddressAddressee The sending address "addressee".
     * @return self Returns this instance.
     */
    public function setSendingAddressAddressee(?string $sendingAddressAddressee): self {
        $this->sendingAddressAddressee = $sendingAddressAddressee;
        return $this;
    }

    /**
     * Set the sending address "country".
     *
     * @param string|null $sendingAddressCountry The sending address "country".
     * @return self Returns this instance.
     */
    public function setSendingAddressCountry(?string $sendingAddressCountry): self {
        $this->sendingAddressCountry = $sendingAddressCountry;
        return $this;
    }

    /**
     * Set the sending address "house number".
     *
     * @param string|null $sendingAddressHouseNumber The sending address "house number".
     * @return self Returns this instance.
     */
    public function setSendingAddressHouseNumber(?string $sendingAddressHouseNumber): self {
        $this->sendingAddressHouseNumber = $sendingAddressHouseNumber;
        return $this;
    }

    /**
     * Set the sending address "location".
     *
     * @param string|null $sendingAddressLocation The sending address "location".
     * @return self Returns this instance.
     */
    public function setSendingAddressLocation(?string $sendingAddressLocation): self {
        $this->sendingAddressLocation = $sendingAddressLocation;
        return $this;
    }

    /**
     * Set the sending address "postal code".
     *
     * @param string|null $sendingAddressPostalCode The sending address "postal code".
     * @return self Returns this instance.
     */
    public function setSendingAddressPostalCode(?string $sendingAddressPostalCode): self {
        $this->sendingAddressPostalCode = $sendingAddressPostalCode;
        return $this;
    }

    /**
     * Set the sending address "street name".
     *
     * @param string|null $sendingAddressStreetName The sending address "street name".
     * @return self Returns this instance.
     */
    public function setSendingAddressStreetName(?string $sendingAddressStreetName): self {
        $this->sendingAddressStreetName = $sendingAddressStreetName;
        return $this;
    }
}
