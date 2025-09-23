<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Serializer\Component;

use WBW\Library\Common\Serializer\JsonSerializer as BaseJsonSerializer;
use WBW\Library\Common\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\Widget\Component\AlertInterface;
use WBW\Library\Widget\Component\BadgeInterface;
use WBW\Library\Widget\Component\ButtonInterface;
use WBW\Library\Widget\Component\ColorInterface;
use WBW\Library\Widget\Component\DropdownItemInterface;
use WBW\Library\Widget\Component\IconInterface;
use WBW\Library\Widget\Component\LabelInterface;
use WBW\Library\Widget\Component\NavigationNodeInterface;
use WBW\Library\Widget\Component\NotificationInterface;
use WBW\Library\Widget\Component\ProgressBarInterface;
use WBW\Library\Widget\Component\ToastInterface;
use WBW\Library\Widget\Serializer\SerializerKeys;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Serializer\Component
 */
class JsonSerializer {

    /**
     * Serialize an alert.
     *
     * @param AlertInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeAlert(AlertInterface $model): array {

        return [
            BaseSerializerKeys::CONTENT => $model->getContent(),
            BaseSerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serialize an badge.
     *
     * @param BadgeInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeBadge(BadgeInterface $model): array {

        return [
            BaseSerializerKeys::CONTENT => $model->getContent(),
            BaseSerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serialize a button.
     *
     * @param ButtonInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeButton(ButtonInterface $model): array {

        return [
            BaseSerializerKeys::CONTENT => $model->getContent(),
            BaseSerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serialize a color.
     *
     * @param ColorInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeColor(ColorInterface $model): array {

        return [
            BaseSerializerKeys::NAME        => $model->getName(),
            BaseSerializerKeys::VALUE . "s" => $model->getValues(),
        ];
    }

    /**
     * Serialize a dropdown item.
     *
     * @param DropdownItemInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeDropdownItem(DropdownItemInterface $model): array {

        return [
            SerializerKeys::BY_DEFAULT   => $model->getByDefault(),
            BaseSerializerKeys::LABEL    => $model->getLabel(),
            BaseSerializerKeys::POSITION => $model->getPosition(),
        ];
    }

    /**
     * Serialize an icon.
     *
     * @param IconInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeIcon(IconInterface $model): array {

        return [
            BaseSerializerKeys::NAME  => $model->getName(),
            BaseSerializerKeys::STYLE => $model->getStyle(),
        ];
    }

    /**
     * Serialize a label.
     *
     * @param LabelInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeLabel(LabelInterface $model): array {

        return [
            BaseSerializerKeys::CONTENT => $model->getContent(),
            BaseSerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serialize a navigation node.
     *
     * @param NavigationNodeInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeNavigationNode(NavigationNodeInterface $model): array {

        return [
            BaseSerializerKeys::ID      => $model->getId(),
            BaseSerializerKeys::ACTIVE  => $model->getActive(),
            BaseSerializerKeys::ENABLE  => $model->getEnable(),
            BaseSerializerKeys::ICON    => $model->getIcon(),
            BaseSerializerKeys::LABEL   => $model->getLabel(),
            SerializerKeys::MATCHER     => $model->getMatcher(),
            BaseSerializerKeys::PARENT  => BaseJsonSerializer::serializeModel($model->getParent()),
            BaseSerializerKeys::TARGET  => $model->getTarget(),
            BaseSerializerKeys::URI     => $model->getUri(),
            BaseSerializerKeys::VISIBLE => $model->getVisible(),
        ];
    }

    /**
     * Serialize a notification.
     *
     * @param NotificationInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeNotification(NotificationInterface $model): array {

        return [
            BaseSerializerKeys::CONTENT => $model->getContent(),
            BaseSerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serialize a progress bar.
     *
     * @param ProgressBarInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeProgressBar(ProgressBarInterface $model): array {

        return [
            BaseSerializerKeys::CONTENT => $model->getContent(),
            BaseSerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serialize a toast.
     *
     * @param ToastInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeToast(ToastInterface $model): array {

        return [
            BaseSerializerKeys::CONTENT => $model->getContent(),
            BaseSerializerKeys::TYPE    => $model->getType(),
        ];
    }
}
