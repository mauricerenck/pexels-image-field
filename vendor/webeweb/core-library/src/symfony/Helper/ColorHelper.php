<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Helper;

use WBW\Library\Symfony\Provider\ColorProviderInterface;

/**
 * Color helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Helper
 */
class ColorHelper {

    /**
     * Get an identifier.
     *
     * @param ColorProviderInterface $colorProvider The color provider.
     * @return string Returns the identifier.
     */
    public static function getIdentifier(ColorProviderInterface $colorProvider): string {
        return implode(":", [$colorProvider->getDomain(), $colorProvider->getName()]);
    }

    /**
     * Convert a color into rgba().
     *
     * @param string|null $color The hexadecimal color.
     * @param float $alpha The alpha channel.
     * @return string|null Returns the rgba().
     */
    public static function hexToRgba(?string $color, float $alpha = 1.00): ?string {

        if (0 === preg_match_all("/^#?([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/", strtolower($color), $hex)) {
            return null;
        }

        $length = strlen($hex[1][0]);

        $pattern = "/[A-Fa-f0-9]{" . intval($length / 3) . "}/";
        preg_match_all($pattern, $hex[1][0], $channels);

        if (3 === $length) {
            $channels[0] = [
                str_repeat($channels[0][0], 2),
                str_repeat($channels[0][1], 2),
                str_repeat($channels[0][2], 2),
            ];
        }

        return vsprintf("rgba(%d, %d, %d, %s)", [
            hexdec($channels[0][0]),
            hexdec($channels[0][1]),
            hexdec($channels[0][2]),
            number_format($alpha, 2),
        ]);
    }
}
