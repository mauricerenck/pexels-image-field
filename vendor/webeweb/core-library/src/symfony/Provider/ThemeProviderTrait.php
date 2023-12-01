<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider;

/**
 * Theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider
 */
trait ThemeProviderTrait {

    /**
     * Theme provider.
     *
     * @var ThemeProviderInterface|null
     */
    protected $themeProvider;

    /**
     * Get the theme provider.
     *
     * @return ThemeProviderInterface|null Returns the theme provider.
     */
    public function getThemeProvider(): ?ThemeProviderInterface {
        return $this->themeProvider;
    }

    /**
     * Set the theme provider.
     *
     * @param ThemeProviderInterface|null $themeProvider The theme provider.
     * @return self Returns this instance.
     */
    protected function setThemeProvider(?ThemeProviderInterface $themeProvider): self {
        $this->themeProvider = $themeProvider;
        return $this;
    }
}
