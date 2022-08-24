<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets\Notification;

use WBW\Library\Symfony\Assets\AbstractNotification;

/**
 * Info notification.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Notification
 */
class InfoNotification extends AbstractNotification {

    /**
     * Constructor.
     *
     * @param string $content The content.
     */
    public function __construct(string $content) {
        parent::__construct(self::NOTIFICATION_TYPE_INFO, $content);
    }
}
