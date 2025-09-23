<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Model\Repository;

use DateTime;
use JsonSerializable;

/**
 * Repository event interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Repository
 */
interface RepositoryEventInterface extends JsonSerializable {

    /**
     * Type "delete".
     *
     * @var string
     */
    public const TYPE_DELETE = "delete";

    /**
     * Type "insert".
     *
     * @var string
     */
    public const TYPE_INSERT = "insert";

    /**
     * Type "update".
     *
     * @var string
     */
    public const TYPE_UPDATE = "update";

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime;

    /**
     * Get the entity.
     *
     * @return string|null Returns the entity.
     */
    public function getEntity(): ?string;

    /**
     * Get the entity data.
     *
     * @return string|null Returns the entity data.
     */
    public function getEntityData(): ?string;

    /**
     * Get the entity id.
     *
     * @return string|null Returns the entity id.
     */
    public function getEntityId(): ?string;

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
     * Get the request data "GET".
     *
     * @return string|null Returns the request data "GET".
     */
    public function getRequestDataGet(): ?string;

    /**
     * Get the request data "POST".
     *
     * @return string|null Returns the request data "POST".
     */
    public function getRequestDataPost(): ?string;

    /**
     * Get the request method.
     *
     * @return string|null Returns the request method.
     */
    public function getRequestMethod(): ?string;

    /**
     * Get the request route.
     *
     * @return string|null Returns the request route.
     */
    public function getRequestRoute(): ?string;

    /**
     * Get the request URL.
     *
     * @return string|null Returns the request URL.
     */
    public function getRequestUrl(): ?string;

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string;

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setDate(?DateTime $date);

    /**
     * Set the entity.
     *
     * @param string|null $entity The entity.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setEntity(?string $entity);

    /**
     * Set the entity data.
     *
     * @param string|null $entityData The entity data.
     * @return RepositoryEventInterface Returns the repository event.
     */
    public function setEntityData(?string $entityData): RepositoryEventInterface;

    /**
     * Set the entity id.
     *
     * @param string|null $entityId The entity id.
     * @return RepositoryEventInterface Returns the repository event.
     */
    public function setEntityId(?string $entityId): RepositoryEventInterface;

    /**
     * Set the IP address.
     *
     * @param string|null $ipAddress The IP address.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setIpAddress(?string $ipAddress);

    /**
     * Set the request data "GET".
     *
     * @param string|null $requestDataGet The request data "GET"
     * @return RepositoryEventInterface Returns the repository event.
     */
    public function setRequestDataGet(?string $requestDataGet): RepositoryEventInterface;

    /**
     * Set the request data "POST".
     *
     * @param string|null $requestDataPost The request data "POST".
     * @return RepositoryEventInterface Returns the repository event.
     */
    public function setRequestDataPost(?string $requestDataPost): RepositoryEventInterface;

    /**
     * Set the request method.
     *
     * @param string|null $requestMethod The request method.
     * @return RepositoryEventInterface Returns the entity me.
     */
    public function setRequestMethod(?string $requestMethod): RepositoryEventInterface;

    /**
     * Set the request route.
     *
     * @param string|null $requestRoute The request route.
     * @return RepositoryEventInterface Returns the repository event.
     */
    public function setRequestRoute(?string $requestRoute): RepositoryEventInterface;

    /**
     * Set the request URL.
     *
     * @param string|null $requestUrl The request URL.
     * @return RepositoryEventInterface Returns the repository event.
     */
    public function setRequestUrl(?string $requestUrl): RepositoryEventInterface;

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setType(?string $type);
}
