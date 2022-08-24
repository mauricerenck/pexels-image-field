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
 * Application theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Theme
 */
trait ApplicationThemeProviderTrait {

    /**
     * Application theme provider.
     *
     * @var ApplicationThemeProviderInterface|null
     */
    private $applicationThemeProvider;

    /**
     * Get the application theme provider.
     *
     * @return ApplicationThemeProviderInterface|null Returns the application theme provider.
     */
    public function getApplicationThemeProvider(): ?ApplicationThemeProviderInterface {
        return $this->applicationThemeProvider;
    }

    /**
     * Set the application theme provider.
     *
     * @param ApplicationThemeProviderInterface|null $applicationThemeProvider The application theme provider.
     * @return self Returns this instance.
     */
    protected function setApplicationThemeProvider(?ApplicationThemeProviderInterface $applicationThemeProvider): self {
        $this->applicationThemeProvider = $applicationThemeProvider;
        return $this;
    }
}
