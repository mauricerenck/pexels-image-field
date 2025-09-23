<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Factory;

use WBW\Library\Widget\Component\Notification\DangerNotification;
use WBW\Library\Widget\Component\Notification\DefaultNotification;
use WBW\Library\Widget\Component\Notification\InfoNotification;
use WBW\Library\Widget\Component\Notification\SuccessNotification;
use WBW\Library\Widget\Component\Notification\WarningNotification;
use WBW\Library\Widget\Component\NotificationInterface;

/**
 * Notification factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Factory
 */
class NotificationFactory {

    /**
     * Create a danger notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the danger notification.
     */
    public static function newDangerNotification(string $content): NotificationInterface {
        return new DangerNotification($content);
    }

    /**
     * Create a default notification.
     *
     * @param string $content The content.
     * @param string $type The type.
     * @return NotificationInterface Returns the default notification.
     */
    public static function newDefaultNotification(string $content, string $type): NotificationInterface {
        return new DefaultNotification($type, $content);
    }

    /**
     * Create an info notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the info notification.
     */
    public static function newInfoNotification(string $content): NotificationInterface {
        return new InfoNotification($content);
    }

    /**
     * Create a success notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the success notification.
     */
    public static function newSuccessNotification(string $content): NotificationInterface {
        return new SuccessNotification($content);
    }

    /**
     * Create a warning notification.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns the warning notification.
     */
    public static function newWarningNotification(string $content): NotificationInterface {
        return new WarningNotification($content);
    }
}
