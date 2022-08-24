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
 * Hook dropdown theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Theme
 */
trait HookDropdownThemeProviderTrait {

    /**
     * Hook dropdown theme provider.
     *
     * @var HookDropdownThemeProviderInterface|null
     */
    private $hookDropdownThemeProvider;

    /**
     * Get the hook dropdown theme provider.
     *
     * @return HookDropdownThemeProviderInterface|null Returns the hook dropdown theme provider.
     */
    public function getHookDropdownThemeProvider(): ?HookDropdownThemeProviderInterface {
        return $this->hookDropdownThemeProvider;
    }

    /**
     * Set the hook dropdown theme provider.
     *
     * @param HookDropdownThemeProviderInterface|null $hookDropdownThemeProvider The hook dropdown theme provider.
     * @return self Returns this instance.
     */
    protected function setHookDropdownThemeProvider(?HookDropdownThemeProviderInterface $hookDropdownThemeProvider): self {
        $this->hookDropdownThemeProvider = $hookDropdownThemeProvider;
        return $this;
    }
}
