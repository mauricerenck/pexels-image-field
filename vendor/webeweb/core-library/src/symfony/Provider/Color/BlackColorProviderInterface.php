<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider\Color;

use WBW\Library\Symfony\Provider\ColorProviderInterface;

/**
 * Black color provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
interface BlackColorProviderInterface extends ColorProviderInterface {

    /**
     * Black color "500"
     *
     * @var string
     */
    const BLACK_COLOR_500 = "#000000";

    /**
     * Black color name.
     *
     * @var string
     */
    const BLACK_COLOR_NAME = "black";
}
