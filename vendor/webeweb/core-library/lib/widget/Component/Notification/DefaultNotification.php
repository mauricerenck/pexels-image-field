<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Component\Notification;

use WBW\Library\Widget\Component\AbstractNotification;

/**
 * Default notification.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Notification
 */
class DefaultNotification extends AbstractNotification {

    /**
     * Constructor.
     *
     * @param string $type The type.
     * @param string $content The content.
     */
    public function __construct(string $type, string $content) {
        parent::__construct($type, $content);
    }
}
