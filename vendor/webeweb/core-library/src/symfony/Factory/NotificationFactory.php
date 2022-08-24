<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Factory;

use WBW\Library\Symfony\Assets\Notification\DangerNotification;
use WBW\Library\Symfony\Assets\Notification\DefaultNotification;
use WBW\Library\Symfony\Assets\Notification\InfoNotification;
use WBW\Library\Symfony\Assets\Notification\SuccessNotification;
use WBW\Library\Symfony\Assets\Notification\WarningNotification;
use WBW\Library\Symfony\Assets\NotificationInterface;

/**
 * Notification factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Factory
 */
class NotificationFactory {

    /**
     * Creates a danger notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the danger notification.
     */
    public static function newDangerNotification(string $content): NotificationInterface {
        return new DangerNotification($content);
    }

    /**
     * Creates a default notification.
     *
     * @param string $content The content.
     * @param string $type The type.
     * @return NotificationInterface Returns the default notification.
     */
    public static function newDefaultNotification(string $content, string $type): NotificationInterface {
        return new DefaultNotification($type, $content);
    }

    /**
     * Creates an info notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the info notification.
     */
    public static function newInfoNotification(string $content): NotificationInterface {
        return new InfoNotification($content);
    }

    /**
     * Creates a success notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the success notification.
     */
    public static function newSuccessNotification(string $content): NotificationInterface {
        return new SuccessNotification($content);
    }

    /**
     * Creates a warning notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the warning notification.
     */
    public static function newWarningNotification(string $content): NotificationInterface {
        return new WarningNotification($content);
    }
}
