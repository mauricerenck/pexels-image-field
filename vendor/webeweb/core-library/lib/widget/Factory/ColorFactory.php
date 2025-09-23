<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Factory;

use WBW\Library\Widget\Assets\MaterialDesignColorPalette\AmberColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\BlueColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\BlueGreyColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\BrownColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\CyanColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\DeepOrangeColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\DeepPurpleColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\GreenColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\GreyColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\IndigoColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\LightBlueColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\LightGreenColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\LimeColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\OrangeColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\PinkColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\PurpleColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\RedColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\TealColor;
use WBW\Library\Widget\Assets\MaterialDesignColorPalette\YellowColor;
use WBW\Library\Widget\Component\Color\BlackColor;
use WBW\Library\Widget\Component\Color\WhiteColor;
use WBW\Library\Widget\Component\ColorInterface;

/**
 * Color factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Factory
 */
class ColorFactory {

    /**
     * Create a Material Design color palette.
     *
     * @return ColorInterface[] Returns the colors.
     */
    public static function newMaterialDesignColorPalette(): array {

        return [
            new RedColor(),
            new PinkColor(),
            new PurpleColor(),
            new DeepPurpleColor(),
            new IndigoColor(),
            new BlueColor(),
            new LightBlueColor(),
            new CyanColor(),
            new TealColor(),
            new GreenColor(),
            new LightGreenColor(),
            new LimeColor(),
            new YellowColor(),
            new AmberColor(),
            new OrangeColor(),
            new DeepOrangeColor(),
            new BrownColor(),
            new GreyColor(),
            new BlueGreyColor(),
            new BlackColor(),
            new WhiteColor(),
        ];
    }
}
