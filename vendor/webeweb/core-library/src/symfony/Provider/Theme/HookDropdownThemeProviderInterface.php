<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider\Theme;

use WBW\Library\Symfony\Provider\ThemeProviderInterface;

/**
 * Hook dropdown theme provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Theme
 */
interface HookDropdownThemeProviderInterface extends ThemeProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.theme.hook_dropdown";

    /**
     * Get the items.
     *
     * @return array Returns the items.
     */
    public function getItems(): array;
}
