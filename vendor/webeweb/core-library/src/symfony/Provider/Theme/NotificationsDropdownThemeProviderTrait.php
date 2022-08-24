<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider\Theme;

/**
 * Notifications dropdown theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Theme
 */
trait NotificationsDropdownThemeProviderTrait {

    /**
     * Notifications dropdown theme provider.
     *
     * @var NotificationsDropdownThemeProviderInterface|null
     */
    private $notificationsDropdownThemeProvider;

    /**
     * Get the notifications dropdown theme provider.
     *
     * @return NotificationsDropdownThemeProviderInterface|null Returns the notifications dropdown theme provider.
     */
    public function getNotificationsDropdownThemeProvider(): ?NotificationsDropdownThemeProviderInterface {
        return $this->notificationsDropdownThemeProvider;
    }

    /**
     * Set the notifications dropdown theme provider.
     *
     * @param NotificationsDropdownThemeProviderInterface|null $notificationsDropdownThemeProvider The notifications dropdown theme provider.
     * @return self Returns this instance.
     */
    protected function setNotificationsDropdownThemeProvider(?NotificationsDropdownThemeProviderInterface $notificationsDropdownThemeProvider): self {
        $this->notificationsDropdownThemeProvider = $notificationsDropdownThemeProvider;
        return $this;
    }
}
