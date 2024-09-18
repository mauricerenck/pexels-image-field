<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

use DateTime;
use JsonSerializable;

/**
 * Request detail.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
interface RequestDetailInterface extends JsonSerializable {

    /**
     * Get the data "GET".
     *
     * @return string|null Returns the data "GET"
     */
    public function getDataGet(): ?string;

    /**
     * Get the data "POST".
     *
     * @return string|null Returns the data "POST".
     */
    public function getDataPost(): ?string;

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime;

    /**
     * Get the id.
     *
     * @return int|null Returns the id.
     */
    public function getId(): ?int;

    /**
     * Get the IP address.
     *
     * @return string|null Returns the IP address.
     */
    public function getIpAddress(): ?string;

    /**
     * Get the method.
     *
     * @return string|null Returns the method.
     */
    public function getMethod(): ?string;

    /**
     * Get the route.
     *
     * @return string|null Returns the route.
     */
    public function getRoute(): ?string;

    /**
     * Get the URL.
     *
     * @return string|null Returns the URL.
     */
    public function getUrl(): ?string;

    /**
     * Get the user agent.
     *
     * @return string|null Returns the user agent.
     */
    public function getUserAgent(): ?string;

    /**
     * Get the XML HTTP.
     *
     * @return bool|null Returns the XML HTTP.
     */
    public function getXmlHttp(): ?bool;

    /**
     * Set the data "GET".
     *
     * @param string|null $dataGet The data "GET".
     * @return RequestDetailInterface Returns this request detail.
     */
    public function setDataGet(?string $dataGet): RequestDetailInterface;

    /**
     * Set the data "POST".
     *
     * @param string|null $dataPost The data "POST".
     * @return RequestDetailInterface Returns this request detail.
     */
    public function setDataPost(?string $dataPost): RequestDetailInterface;

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return RequestDetailInterface Returns this request detail.
     */
    public function setDate(?DateTime $date);

    /**
     * Set the IP address.
     *
     * @param string|null $ipAddress The IP address.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setIpAddress(?string $ipAddress);

    /**
     * Set the method.
     *
     * @param string|null $method The method.
     * @return RequestDetailInterface Returns this request detail.
     */
    public function setMethod(?string $method);

    /**
     * Set the route.
     *
     * @param string|null $route The route.
     * @return RequestDetailInterface Returns this request detail.
     */
    public function setRoute(?string $route);

    /**
     * Set the URL.
     *
     * @param string|null $url The URL.
     * @return RequestDetailInterface Returns this request detail.
     */
    public function setUrl(?string $url);

    /**
     * Set the user agent.
     *
     * @param string|null $userAgent The user agent.
     * @return RequestDetailInterface Returns this request detail.
     */
    public function setUserAgent(?string $userAgent);

    /**
     * Set the XML HTTP.
     *
     * @param bool|null $xmlHttp The XML HTTP.
     * @return RequestDetailInterface Returns this request detail.
     */
    public function setXmlHttp(?bool $xmlHttp): RequestDetailInterface;
}
