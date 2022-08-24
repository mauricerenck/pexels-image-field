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

use WBW\Library\Symfony\Assets\Navigation\NavigationTree;
use WBW\Library\Symfony\Provider\Theme\NavigationThemeProviderInterface;

/**
 * Default navigation theme provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Theme
 */
class DefaultNavigationThemeProvider implements NavigationThemeProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritdoc}
     */
    public function getTree(): NavigationTree {
        return new NavigationTree("");
    }
}
