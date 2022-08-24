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
 * Footer theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Theme
 */
trait FooterThemeProviderTrait {

    /**
     * Footer theme provider.
     *
     * @var FooterThemeProviderInterface|null
     */
    private $footerThemeProvider;

    /**
     * Get the footer theme provider.
     *
     * @return FooterThemeProviderInterface|null Returns the footer theme provider.
     */
    public function getFooterThemeProvider(): ?FooterThemeProviderInterface {
        return $this->footerThemeProvider;
    }

    /**
     * Set the footer theme provider.
     *
     * @param FooterThemeProviderInterface|null $footerThemeProvider The footer theme provider.
     * @return self Returns this instance.
     */
    protected function setFooterThemeProvider(?FooterThemeProviderInterface $footerThemeProvider): self {
        $this->footerThemeProvider = $footerThemeProvider;
        return $this;
    }
}
