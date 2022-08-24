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
 * UserInfo theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Theme
 */
trait UserInfoThemeProviderTrait {

    /**
     * User info theme provider.
     *
     * @var UserInfoThemeProviderInterface|null
     */
    private $userInfoThemeProvider;

    /**
     * Get the user info theme provider.
     *
     * @return UserInfoThemeProviderInterface|null Returns the user info theme provider.
     */
    public function getUserInfoThemeProvider(): ?UserInfoThemeProviderInterface {
        return $this->userInfoThemeProvider;
    }

    /**
     * Set the user info theme provider.
     *
     * @param UserInfoThemeProviderInterface|null $userInfoThemeProvider The user info theme provider.
     * @return self Returns this instance.
     */
    protected function setUserInfoThemeProvider(?UserInfoThemeProviderInterface $userInfoThemeProvider): self {
        $this->userInfoThemeProvider = $userInfoThemeProvider;
        return $this;
    }
}
