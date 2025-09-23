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

namespace WBW\Library\Widget\Assets\MaterialDesignColorPalette;

use WBW\Library\Widget\Component\AbstractColor;

/**
 * Yellow color.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Assets\MaterialDesignColorPalette
 */
class YellowColor extends AbstractColor implements YellowColorInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::YELLOW_COLOR_NAME);
    }

    /**
     * {@inheritDoc}
     */
    public function getValues(): array {

        return [
            self::COLOR_VALUE_50   => self::YELLOW_COLOR_VALUE_50,
            self::COLOR_VALUE_100  => self::YELLOW_COLOR_VALUE_100,
            self::COLOR_VALUE_200  => self::YELLOW_COLOR_VALUE_200,
            self::COLOR_VALUE_300  => self::YELLOW_COLOR_VALUE_300,
            self::COLOR_VALUE_400  => self::YELLOW_COLOR_VALUE_400,
            self::COLOR_VALUE_500  => self::YELLOW_COLOR_VALUE_500,
            self::COLOR_VALUE_600  => self::YELLOW_COLOR_VALUE_600,
            self::COLOR_VALUE_700  => self::YELLOW_COLOR_VALUE_700,
            self::COLOR_VALUE_A100 => self::YELLOW_COLOR_VALUE_A100,
            self::COLOR_VALUE_A200 => self::YELLOW_COLOR_VALUE_A200,
            self::COLOR_VALUE_A400 => self::YELLOW_COLOR_VALUE_A400,
            self::COLOR_VALUE_A700 => self::YELLOW_COLOR_VALUE_A700,
        ];
    }
}
