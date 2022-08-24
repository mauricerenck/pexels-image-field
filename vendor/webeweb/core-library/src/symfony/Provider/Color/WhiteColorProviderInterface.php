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
 * White color provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
interface WhiteColorProviderInterface extends ColorProviderInterface {

    /**
     * White color "500"
     *
     * @var string
     */
    const WHITE_COLOR_500 = "#FFFFFF";

    /**
     * White color name.
     *
     * @var string
     */
    const WHITE_COLOR_NAME = "white";
}
