<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

use JsonSerializable;

/**
 * Notification interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 */
interface NotificationInterface extends JsonSerializable {

    /**
     * Notification type "danger".
     *
     * @var string
     */
    const NOTIFICATION_TYPE_DANGER = "danger";

    /**
     * Notification type "info".
     *
     * @var string
     */
    const NOTIFICATION_TYPE_INFO = "info";

    /**
     * Notification type "success".
     *
     * @var string
     */
    const NOTIFICATION_TYPE_SUCCESS = "success";

    /**
     * Notification type "warning".
     *
     * @var string
     */
    const NOTIFICATION_TYPE_WARNING = "warning";

    /**
     * Get the content.
     *
     * @return string Returns the content.
     */
    public function getContent(): string;

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType(): string;
}
