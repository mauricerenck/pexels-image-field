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

namespace WBW\Library\Widget\Assets\MaterialDesignColorPalette;

use WBW\Library\Widget\Component\Color\GreyColorInterface as BaseGreyColorInterface;

/**
 * Grey color interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Assets\MaterialDesignColorPalette
 */
interface GreyColorInterface extends BaseGreyColorInterface {

    /**
     * Grey color value "100"
     *
     * @var string
     */
    public const GREY_COLOR_VALUE_100 = "#f5f5f5";

    /**
     * Grey color value "200"
     *
     * @var string
     */
    public const GREY_COLOR_VALUE_200 = "#eeeeee";

    /**
     * Grey color value "300"
     *
     * @var string
     */
    public const GREY_COLOR_VALUE_300 = "#e0e0e0";

    /**
     * Grey color value "400"
     *
     * @var string
     */
    public const GREY_COLOR_VALUE_400 = "#bdbdbd";

    /**
     * Grey color value "50"
     *
     * @var string
     */
    public const GREY_COLOR_VALUE_50 = "#fafafa";

    /**
     * Grey color value "500"
     *
     * @var string
     */
    public const GREY_COLOR_VALUE_500 = "#9e9e9e";

    /**
     * Grey color value "600"
     *
     * @var string
     */
    public const GREY_COLOR_VALUE_600 = "#757575";

    /**
     * Grey color value "700"
     *
     * @var string
     */
    public const GREY_COLOR_VALUE_700 = "#616161";

    /**
     * Grey color value "800"
     *
     * @var string
     */
    public const GREY_COLOR_VALUE_800 = "#424242";

    /**
     * Grey color value "900"
     *
     * @var string
     */
    public const GREY_COLOR_VALUE_900 = "#212121";
}
