<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

/**
 * Notification trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 */
trait NotificationTrait {

    /**
     * Notification.
     *
     * @var NotificationInterface|null
     */
    protected $notification;

    /**
     * Get the notification.
     *
     * @return NotificationInterface|null Returns the notification.
     */
    public function getNotification(): ?NotificationInterface {
        return $this->notification;
    }

    /**
     * Set the notification.
     *
     * @param NotificationInterface|null $notification The notification.
     * @return self Returns this instance.
     */
    protected function setNotification(?NotificationInterface $notification): self {
        $this->notification = $notification;
        return $this;
    }
}
