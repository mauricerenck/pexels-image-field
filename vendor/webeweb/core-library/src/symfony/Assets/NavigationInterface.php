<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

/**
 * Navigation interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 */
interface NavigationInterface {

    /**
     * Navigation HREF "default".
     *
     * @var string
     */
    const NAVIGATION_HREF_DEFAULT = "javascript: void(0);";

    /**
     * Navigation matcher "regular expression".
     *
     * @var string
     */
    const NAVIGATION_MATCHER_REGEXP = "regexp";

    /**
     * Navigation matcher "router".
     *
     * @var string
     */
    const NAVIGATION_MATCHER_ROUTER = "router";

    /**
     * Navigation matcher "URL".
     *
     * @var string
     */
    const NAVIGATION_MATCHER_URL = "url";
}
