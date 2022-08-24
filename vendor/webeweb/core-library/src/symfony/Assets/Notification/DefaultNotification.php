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
 * Default notification.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Notification
 */
class DefaultNotification extends AbstractNotification {

    /**
     * Constructor.
     *
     * @param string|null $type The type.
     * @param string|null $content The content.
     */
    public function __construct(string $type, string $content) {
        parent::__construct($type, $content);
    }
}
