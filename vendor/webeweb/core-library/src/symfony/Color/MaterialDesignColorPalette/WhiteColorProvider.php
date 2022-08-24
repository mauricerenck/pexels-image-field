<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Color\MaterialDesignColorPalette;

use WBW\Library\Symfony\Color\MaterialDesignColorPaletteInterface;
use WBW\Library\Symfony\Provider\AbstractColorProvider;
use WBW\Library\Symfony\Provider\Color\WhiteColorProviderInterface;

/**
 * White color provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Color\MaterialDesignColorPalette
 */
class WhiteColorProvider extends AbstractColorProvider implements WhiteColorProviderInterface, MaterialDesignColorPaletteInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.color.material_design_color_palette.white";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::COLOR_DOMAIN);
    }

    /**
     * {@inheritdoc}
     */
    public function getColors(): array {
        return [
            self::COLOR_50   => self::WHITE_COLOR_500,
            self::COLOR_100  => self::WHITE_COLOR_500,
            self::COLOR_200  => self::WHITE_COLOR_500,
            self::COLOR_300  => self::WHITE_COLOR_500,
            self::COLOR_400  => self::WHITE_COLOR_500,
            self::COLOR_500  => self::WHITE_COLOR_500,
            self::COLOR_600  => self::WHITE_COLOR_500,
            self::COLOR_700  => self::WHITE_COLOR_500,
            self::COLOR_A100 => self::WHITE_COLOR_500,
            self::COLOR_A200 => self::WHITE_COLOR_500,
            self::COLOR_A400 => self::WHITE_COLOR_500,
            self::COLOR_A700 => self::WHITE_COLOR_500,
        ];
    }

    /**
     *{@inheritdoc}
     */
    public function getName(): string {
        return self::WHITE_COLOR_NAME;
    }
}
