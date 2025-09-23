<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Serializer\Repository;

use WBW\Library\Common\Model\Repository\RepositoryEventInterface;
use WBW\Library\Common\Serializer\SerializerKeys;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Serializer\Repository
 */
class JsonSerializer {

    /**
     * Serialize a repository event.
     *
     * @param RepositoryEventInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeRepositoryEvent(RepositoryEventInterface $model): array {

        return [
            SerializerKeys::ID                => $model->getId(),
            SerializerKeys::DATE              => $model->getDate(),
            SerializerKeys::ENTITY            => $model->getEntity(),
            SerializerKeys::ENTITY_DATA       => $model->getEntityData(),
            SerializerKeys::ENTITY_ID         => $model->getEntityId(),
            SerializerKeys::IP_ADDRESS        => $model->getIpAddress(),
            SerializerKeys::REQUEST_DATA_GET  => $model->getRequestDataGet(),
            SerializerKeys::REQUEST_DATA_POST => $model->getRequestDataPost(),
            SerializerKeys::REQUEST_METHOD    => $model->getRequestMethod(),
            SerializerKeys::REQUEST_ROUTE     => $model->getRequestRoute(),
            SerializerKeys::REQUEST_URL       => $model->getRequestUrl(),
            SerializerKeys::TYPE              => $model->getType(),
        ];
    }
}
