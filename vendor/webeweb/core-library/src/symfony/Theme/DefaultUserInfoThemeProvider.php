<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Theme;

use WBW\Library\Symfony\Provider\Theme\UserInfoThemeProviderInterface;

/**
 * Default user info theme provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Theme
 */
class DefaultUserInfoThemeProvider implements UserInfoThemeProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritdoc}
     */
    public function provideRegisterLink(): ?bool {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function provideResettingLink(): ?bool {
        return false;
    }
}
