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

use WBW\Library\Symfony\Serializer\JsonSerializer;
use WBW\Library\Traits\DateTimes\DateTimeDateTrait;
use WBW\Library\Traits\Integers\IntegerIdTrait;
use WBW\Library\Traits\Strings\StringEntityTrait;
use WBW\Library\Traits\Strings\StringIpAddressTrait;
use WBW\Library\Traits\Strings\StringTypeTrait;

/**
 * Repository event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
class RepositoryEvent implements RepositoryEventInterface {

    use DateTimeDateTrait;
    use IntegerIdTrait;
    use StringEntityTrait;
    use StringIpAddressTrait;
    use StringTypeTrait;

    /**
     * Entity data.
     *
     * @var string|null
     */
    protected $entityData;

    /**
     * Entity id.
     *
     * @var string|null
     */
    protected $entityId;

    /**
     * Request data "GET".
     *
     * @var string|null
     */
    protected $requestDataGet;

    /**
     * Request data "POST".
     *
     * @var string|null
     */
    protected $requestDataPost;

    /**
     * Request method.
     *
     * @var string|null
     */
    protected $requestMethod;

    /**
     * Request route.
     *
     * @var string|null
     */
    protected $requestRoute;

    /**
     * Request URL.
     *
     * @var string|null
     */
    protected $requestUrl;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityData(): ?string {
        return $this->entityData;
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityId(): ?string {
        return $this->entityId;
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestDataGet(): ?string {
        return $this->requestDataGet;
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestDataPost(): ?string {
        return $this->requestDataPost;
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestMethod(): ?string {
        return $this->requestMethod;
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestRoute(): ?string {
        return $this->requestRoute;
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestUrl(): ?string {
        return $this->requestUrl;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeRepositoryEvent($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setEntityData(?string $entityData): RepositoryEventInterface {
        $this->entityData = $entityData;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setEntityId(?string $entityId): RepositoryEventInterface {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setRequestDataGet(?string $requestDataGet): RepositoryEventInterface {
        $this->requestDataGet = $requestDataGet;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setRequestDataPost(?string $requestDataPost): RepositoryEventInterface {
        $this->requestDataPost = $requestDataPost;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setRequestMethod(?string $requestMethod): RepositoryEventInterface {
        $this->requestMethod = $requestMethod;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setRequestRoute(?string $requestRoute): RepositoryEventInterface {
        $this->requestRoute = $requestRoute;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setRequestUrl(?string $requestUrl): RepositoryEventInterface {
        $this->requestUrl = $requestUrl;
        return $this;
    }
}
