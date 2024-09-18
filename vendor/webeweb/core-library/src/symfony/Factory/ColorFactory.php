<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Factory;

use WBW\Library\Symfony\Color\MaterialDesignColorPalette\AmberColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\BlackColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\BlueColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\BlueGreyColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\BrownColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\CyanColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\DeepOrangeColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\DeepPurpleColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\GreenColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\GreyColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\IndigoColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\LightBlueColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\LightGreenColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\LimeColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\OrangeColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\PinkColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\PurpleColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\TealColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\WhiteColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\YellowColorProvider;
use WBW\Library\Symfony\Provider\ColorProviderInterface;

/**
 * Color factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Factory
 */
class ColorFactory {

    /**
     * Create a Material Design Color Palette.
     *
     * @return ColorProviderInterface[] Returns the Material Design Color Palette.
     */
    public static function newMaterialDesignColorPalette(): array {

        return [
            new RedColorProvider(),
            new PinkColorProvider(),
            new PurpleColorProvider(),
            new DeepPurpleColorProvider(),
            new IndigoColorProvider(),
            new BlueColorProvider(),
            new LightBlueColorProvider(),
            new CyanColorProvider(),
            new TealColorProvider(),
            new GreenColorProvider(),
            new LightGreenColorProvider(),
            new LimeColorProvider(),
            new YellowColorProvider(),
            new AmberColorProvider(),
            new OrangeColorProvider(),
            new DeepOrangeColorProvider(),
            new BrownColorProvider(),
            new GreyColorProvider(),
            new BlueGreyColorProvider(),
            new BlackColorProvider(),
            new WhiteColorProvider(),
        ];
    }
}
