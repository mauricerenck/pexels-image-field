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
 * Navigation theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Theme
 */
trait NavigationThemeProviderTrait {

    /**
     * Navigation theme provider.
     *
     * @var NavigationThemeProviderInterface|null
     */
    private $navigationThemeProvider;

    /**
     * Get the navigation theme provider.
     *
     * @return NavigationThemeProviderInterface|null Returns the navigation theme provider.
     */
    public function getNavigationThemeProvider(): ?NavigationThemeProviderInterface {
        return $this->navigationThemeProvider;
    }

    /**
     * Set the navigation theme provider.
     *
     * @param NavigationThemeProviderInterface|null $navigationThemeProvider The navigation theme provider.
     * @return self Returns this instance.
     */
    protected function setNavigationThemeProvider(?NavigationThemeProviderInterface $navigationThemeProvider): self {
        $this->navigationThemeProvider = $navigationThemeProvider;
        return $this;
    }
}
