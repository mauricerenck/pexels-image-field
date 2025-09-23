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
 * Indigo color.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Assets\MaterialDesignColorPalette
 */
class IndigoColor extends AbstractColor implements IndigoColorInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::INDIGO_COLOR_NAME);
    }

    /**
     * {@inheritDoc}
     */
    public function getValues(): array {

        return [
            self::COLOR_VALUE_50   => self::INDIGO_COLOR_VALUE_50,
            self::COLOR_VALUE_100  => self::INDIGO_COLOR_VALUE_100,
            self::COLOR_VALUE_200  => self::INDIGO_COLOR_VALUE_200,
            self::COLOR_VALUE_300  => self::INDIGO_COLOR_VALUE_300,
            self::COLOR_VALUE_400  => self::INDIGO_COLOR_VALUE_400,
            self::COLOR_VALUE_500  => self::INDIGO_COLOR_VALUE_500,
            self::COLOR_VALUE_600  => self::INDIGO_COLOR_VALUE_600,
            self::COLOR_VALUE_700  => self::INDIGO_COLOR_VALUE_700,
            self::COLOR_VALUE_A100 => self::INDIGO_COLOR_VALUE_A100,
            self::COLOR_VALUE_A200 => self::INDIGO_COLOR_VALUE_A200,
            self::COLOR_VALUE_A400 => self::INDIGO_COLOR_VALUE_A400,
            self::COLOR_VALUE_A700 => self::INDIGO_COLOR_VALUE_A700,
        ];
    }
}
