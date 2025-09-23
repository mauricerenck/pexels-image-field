<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Component\Color;

use WBW\Library\Widget\Component\ColorInterface;

/**
 * Black color interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Color
 */
interface BlackColorInterface extends ColorInterface {

    /**
     * Black color name.
     *
     * @var string
     */
    public const BLACK_COLOR_NAME = "black";

    /**
     * Black color value.
     *
     * @var string
     */
    public const BLACK_COLOR_VALUE = "#000000";
}
