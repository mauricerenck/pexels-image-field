<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Image\Utility;

/**
 * Image utility.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Image\Utility
 */
class ImageUtility {

    /**
     * Get the dimensions.
     *
     * @param int|null $width The width.
     * @param int|null $height The height.
     * @param int|null $newWidth The new width.
     * @param int|null $newHeight The new height.
     * @return array|null Returns the dimensions.
     */
    public static function getDimensions(?int $width, ?int $height, ?int $newWidth, ?int $newHeight): ?array {

        if (null === $width || null === $height || null === $newWidth || null === $newHeight) {
            return null;
        }

        $orientation    = static::getOrientation($width, $height);
        $newOrientation = static::getOrientation($newWidth, $newHeight);
        $newDimensions  = [$newWidth, $newHeight];

        if ($orientation !== $newOrientation) {

            $max = max($newWidth, $newHeight);
            $rat = static::getRatio($width, $height);

            if (1 === $orientation) { // Landscape
                $newDimensions = [$max, intval($max / $rat)];
            }

            if (0 === $orientation) { // Squarish
                $newDimensions = [$max, $max];
            }

            if (-1 === $orientation) { // Portrait
                $newDimensions = [intval($max * $rat), $max];
            }
        }

        if ($width < $newDimensions[0] || $height < $newDimensions[1]) {
            return [$width, $height];
        }

        return $newDimensions;
    }

    /**
     * Get the orientation.
     *
     * @param int|null $width The width.
     * @param int|null $height The height.
     * @return int|null Returns the orientation.
     *  null if one dimension is null
     *  -1 for a portrait
     *  0 for a squarish
     *  1 for a landscape
     */
    public static function getOrientation(?int $width, ?int $height): ?int {

        if (null === $width || null === $height) {
            return null;
        }

        if ($height < $width) {
            return 1;
        }

        if ($width < $height) {
            return -1;
        }

        return 0;
    }

    /**
     * Get the ratio.
     *
     * @param int|null $width The width.
     * @param int|null $height The height.
     * @return float|null Returns the ratio.
     */
    public static function getRatio(?int $width, ?int $height): ?float {

        if (null === $width || null === $height) {
            return null;
        }

        return $width / $height;
    }
}
