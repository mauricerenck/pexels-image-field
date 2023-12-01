<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Serializer;

use InvalidArgumentException;
use WBW\Library\Serializer\Helper\JsonSerializerHelper;
use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\Symfony\Assets\AlertInterface;
use WBW\Library\Symfony\Assets\BadgeInterface;
use WBW\Library\Symfony\Assets\ButtonInterface;
use WBW\Library\Symfony\Assets\FullCalendarEventInterface;
use WBW\Library\Symfony\Assets\IconInterface;
use WBW\Library\Symfony\Assets\LabelInterface;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;
use WBW\Library\Symfony\Assets\NotificationInterface;
use WBW\Library\Symfony\Assets\ProgressBarInterface;
use WBW\Library\Symfony\Assets\Select2OptionInterface;
use WBW\Library\Symfony\Assets\ToastInterface;
use WBW\Library\Symfony\Model\RepositoryEventInterface;
use WBW\Library\Symfony\Model\RequestDetailInterface;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Serializer
 */
class JsonSerializer {

    /**
     * Serialize an alert.
     *
     * @param AlertInterface $model The model.
     * @return array Returns the serialized model.
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
     * @return array Returns the serialized model.
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
     * @return array Returns the serialized model.
     */
    public static function serializeButton(ButtonInterface $model): array {

        return [
            BaseSerializerKeys::CONTENT => $model->getContent(),
            BaseSerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serialize a Full Calendar event.
     *
     * @param FullCalendarEventInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeFullCalendarEvent(FullCalendarEventInterface $model): array {

        $output = [];

        ArrayHelper::set($output, "id", $model->getId(), [null]);
        ArrayHelper::set($output, "groupId", $model->getGroupId(), [null]);
        ArrayHelper::set($output, "allDay", $model->getAllDay(), [null]);

        if (null !== $model->getStart()) {
            ArrayHelper::set($output, "start", $model->getStart()->format("Y-m-d\TH:i:s"));
        }

        if (null !== $model->getEnd()) {
            ArrayHelper::set($output, "end", $model->getEnd()->format("Y-m-d\TH:i:s"));
        }

        ArrayHelper::set($output, "startStr", $model->getStartStr(), [null]);
        ArrayHelper::set($output, "endStr", $model->getEndStr(), [null]);
        ArrayHelper::set($output, "title", $model->getTitle(), [null]);
        ArrayHelper::set($output, "url", $model->getUrl(), [null]);
        ArrayHelper::set($output, "classNames", $model->getClassNames(), [null]);
        ArrayHelper::set($output, "editable", $model->getEditable(), [null]);
        ArrayHelper::set($output, "startEditable", $model->getStartEditable(), [null]);
        ArrayHelper::set($output, "durationEditable", $model->getDurationEditable(), [null]);
        ArrayHelper::set($output, "resourceEditable", $model->getResourceEditable(), [null]);
        ArrayHelper::set($output, "display", $model->getDisplay(), [null]);
        ArrayHelper::set($output, "backgroundColor", $model->getBackgroundColor(), [null]);
        ArrayHelper::set($output, "borderColor", $model->getBorderColor(), [null]);
        ArrayHelper::set($output, "textColor", $model->getTextColor(), [null]);
        ArrayHelper::set($output, "extraParams", $model->getExtraParams());

        return $output;
    }

    /**
     * Serialize an icon.
     *
     * @param IconInterface $model The model.
     * @return array Returns the serialized model.
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
     * @return array Returns the serialized model.
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
     * @return array Returns the serialized model.
     */
    public static function serializeNavigationNode(NavigationNodeInterface $model): array {

        return [
            BaseSerializerKeys::ID      => $model->getId(),
            BaseSerializerKeys::ACTIVE  => $model->getActive(),
            BaseSerializerKeys::ENABLE  => $model->getEnable(),
            BaseSerializerKeys::ICON    => $model->getIcon(),
            BaseSerializerKeys::LABEL   => $model->getLabel(),
            SerializerKeys::MATCHER     => $model->getMatcher(),
            BaseSerializerKeys::PARENT  => JsonSerializerHelper::jsonSerializeModel($model->getParent()),
            BaseSerializerKeys::TARGET  => $model->getTarget(),
            BaseSerializerKeys::URI     => $model->getUri(),
            BaseSerializerKeys::VISIBLE => $model->getVisible(),
        ];
    }

    /**
     * Serialize a notification.
     *
     * @param NotificationInterface $model The model.
     * @return array Returns the serialized model.
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
     * @return array Returns the serialized model.
     */
    public static function serializeProgressBar(ProgressBarInterface $model): array {

        return [
            BaseSerializerKeys::CONTENT => $model->getContent(),
            BaseSerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serialize a repository event.
     *
     * @param RepositoryEventInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeRepositoryEvent(RepositoryEventInterface $model): array {

        return [
            BaseSerializerKeys::ID            => $model->getId(),
            BaseSerializerKeys::DATE          => $model->getDate(),
            SerializerKeys::ENTITY            => $model->getEntity(),
            SerializerKeys::ENTITY_DATA       => $model->getEntityData(),
            SerializerKeys::ENTITY_ID         => $model->getEntityId(),
            BaseSerializerKeys::IP_ADDRESS    => $model->getIpAddress(),
            SerializerKeys::REQUEST_DATA_GET  => $model->getRequestDataGet(),
            SerializerKeys::REQUEST_DATA_POST => $model->getRequestDataPost(),
            SerializerKeys::REQUEST_METHOD    => $model->getRequestMethod(),
            SerializerKeys::REQUEST_ROUTE     => $model->getRequestRoute(),
            SerializerKeys::REQUEST_URL       => $model->getRequestUrl(),
            BaseSerializerKeys::TYPE          => $model->getType(),
        ];
    }

    /**
     * Serialize a request detail.
     *
     * @param RequestDetailInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeRequestDetail(RequestDetailInterface $model): array {

        return [
            BaseSerializerKeys::ID         => $model->getId(),
            SerializerKeys::DATA_GET       => $model->getDataGet(),
            SerializerKeys::DATA_POST      => $model->getDataPost(),
            BaseSerializerKeys::DATE       => $model->getDate(),
            BaseSerializerKeys::IP_ADDRESS => $model->getIpAddress(),
            BaseSerializerKeys::METHOD     => $model->getMethod(),
            BaseSerializerKeys::ROUTE      => $model->getRoute(),
            BaseSerializerKeys::URL        => $model->getUrl(),
            BaseSerializerKeys::USER_AGENT => $model->getUserAgent(),
            SerializerKeys::XML_HTTP       => $model->getXmlHttp(),
        ];
    }

    /**
     * Serialize a Select2 option.
     *
     * @param Select2OptionInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeSelect2Option(Select2OptionInterface $model): array {

        return [
            BaseSerializerKeys::ID   => $model->getSelect2OptionId(),
            BaseSerializerKeys::TEXT => $model->getSelect2OptionText(),
        ];
    }

    /**
     * Serialize a Select2 options.
     *
     * @param Select2OptionInterface[] $models The models.
     * @return array Returns the serialized models.
     * @throws InvalidArgumentException Throws an invalid argument exception if an item does not implement Select2OptionInterface.
     */
    public static function serializeSelect2Options(array $models): array {

        $result = [];

        foreach ($models as $current) {
            $result[] = static::serializeSelect2Option($current);
        }

        return $result;
    }

    /**
     * Serialize a toast.
     *
     * @param ToastInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeToast(ToastInterface $model): array {

        return [
            BaseSerializerKeys::CONTENT => $model->getContent(),
            BaseSerializerKeys::TYPE    => $model->getType(),
        ];
    }
}
