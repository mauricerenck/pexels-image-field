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
 * Breadcrumbs theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Theme
 */
trait BreadcrumbsThemeProviderTrait {

    /**
     * Breadcrumbs theme provider.
     *
     * @var BreadcrumbsThemeProviderInterface|null
     */
    private $breadcrumbsThemeProvider;

    /**
     * Get the breadcrumbs theme provider.
     *
     * @return BreadcrumbsThemeProviderInterface|null Returns the breadcrumbs theme provider.
     */
    public function getBreadcrumbsThemeProvider(): ?BreadcrumbsThemeProviderInterface {
        return $this->breadcrumbsThemeProvider;
    }

    /**
     * Set the breadcrumbs theme provider.
     *
     * @param BreadcrumbsThemeProviderInterface|null $breadcrumbsThemeProvider The breadcrumbs theme provider.
     * @return self Returns this instance.
     */
    protected function setBreadcrumbsThemeProvider(?BreadcrumbsThemeProviderInterface $breadcrumbsThemeProvider): self {
        $this->breadcrumbsThemeProvider = $breadcrumbsThemeProvider;
        return $this;
    }
}
