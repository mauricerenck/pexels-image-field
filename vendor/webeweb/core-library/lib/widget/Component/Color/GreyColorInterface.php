<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Component\Color;

use WBW\Library\Widget\Component\ColorInterface;

/**
 * Grey color interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Color
 */
interface GreyColorInterface extends ColorInterface {

    /**
     * Grey color name.
     *
     * @var string
     */
    public const GREY_COLOR_NAME = "grey";
}
