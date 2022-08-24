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
use WBW\Library\Serializer\SerializerKeys;
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
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Serializer
 */
class JsonSerializer {

    /**
     * Serializes an alert.
     *
     * @param AlertInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeAlert(AlertInterface $model): array {
        return [
            SerializerKeys::CONTENT => $model->getContent(),
            SerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serializes an badge.
     *
     * @param BadgeInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeBadge(BadgeInterface $model): array {
        return [
            SerializerKeys::CONTENT => $model->getContent(),
            SerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serializes a button.
     *
     * @param ButtonInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeButton(ButtonInterface $model): array {
        return [
            SerializerKeys::CONTENT => $model->getContent(),
            SerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serializes a Full Calendar event.
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
     * Serializes an icon.
     *
     * @param IconInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeIcon(IconInterface $model): array {
        return [
            SerializerKeys::NAME  => $model->getName(),
            SerializerKeys::STYLE => $model->getStyle(),
        ];
    }

    /**
     * Serializes a label.
     *
     * @param LabelInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeLabel(LabelInterface $model): array {
        return [
            SerializerKeys::CONTENT => $model->getContent(),
            SerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serializes a navigation node.
     *
     * @param NavigationNodeInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeNavigationNode(NavigationNodeInterface $model): array {

        return [
            SerializerKeys::ID      => $model->getId(),
            SerializerKeys::ACTIVE  => $model->getActive(),
            SerializerKeys::ENABLE  => $model->getEnable(),
            SerializerKeys::ICON    => $model->getIcon(),
            SerializerKeys::LABEL   => $model->getLabel(),
            "matcher"               => $model->getMatcher(),
            SerializerKeys::PARENT  => JsonSerializerHelper::jsonSerializeModel($model->getParent()),
            SerializerKeys::TARGET  => $model->getTarget(),
            SerializerKeys::URI     => $model->getUri(),
            SerializerKeys::VISIBLE => $model->getVisible(),
        ];
    }

    /**
     * Serializes a notification.
     *
     * @param NotificationInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeNotification(NotificationInterface $model): array {
        return [
            SerializerKeys::CONTENT => $model->getContent(),
            SerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serializes a progress bar.
     *
     * @param ProgressBarInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeProgressBar(ProgressBarInterface $model): array {
        return [
            SerializerKeys::CONTENT => $model->getContent(),
            SerializerKeys::TYPE    => $model->getType(),
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
            SerializerKeys::ID   => $model->getSelect2OptionId(),
            SerializerKeys::TEXT => $model->getSelect2OptionText(),
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
     * Serializes a toast.
     *
     * @param ToastInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeToast(ToastInterface $model): array {
        return [
            SerializerKeys::CONTENT => $model->getContent(),
            SerializerKeys::TYPE    => $model->getType(),
        ];
    }
}
