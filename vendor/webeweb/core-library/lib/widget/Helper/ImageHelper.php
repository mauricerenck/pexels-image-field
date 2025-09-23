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

namespace WBW\Library\Widget\Helper;

use WBW\Library\Widget\Component\ImageInterface;

/**
 * Image helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Helper
 */
class ImageHelper {

    /**
     * Get the dimensions.
     *
     * @param ImageInterface $image The image.
     * @return int[] Returns the dimensions.
     */
    public static function getDimensions(ImageInterface $image): array {

        return [
            $image->getWidth(),
            $image->getHeight(),
        ];
    }

    /**
     * Get the orientation.
     *
     * @param int|null $width The width.
     * @param int|null $height The height.
     * @return string Returns the orientation.
     */
    public static function getOrientation(?int $width, ?int $height): ?string {

        if (null === $width || null === $height) {
            return null;
        }

        if ($width === $height) {
            return ImageInterface::ORIENTATION_SQUARISH;
        }

        if ($width < $height) {
            return ImageInterface::ORIENTATION_PORTRAIT;
        }

        return ImageInterface::ORIENTATION_LANDSCAPE;
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

    /**
     * Resize.
     *
     * @param int|null $width The width.
     * @param int|null $height The height.
     * @param int|null $newWidth The new width.
     * @param int|null $newHeight The new height.
     * @return int[]|null Returns the dimensions.
     */
    public static function resize(?int $width, ?int $height, ?int $newWidth, ?int $newHeight): ?array {

        if (null === $width || null === $height || null === $newWidth || null === $newHeight) {
            return null;
        }

        $oldOrientation = static::getOrientation($width, $height);
        $newOrientation = static::getOrientation($newWidth, $newHeight);
        $newDimensions  = [$newWidth, $newHeight];

        if ($oldOrientation !== $newOrientation) {

            $max = max($newWidth, $newHeight);
            $rat = static::getRatio($width, $height);

            if (ImageInterface::ORIENTATION_SQUARISH === $oldOrientation) {
                $newDimensions = [$max, $max];
            }

            if (ImageInterface::ORIENTATION_LANDSCAPE === $oldOrientation) {
                $newDimensions = [$max, intval($max / $rat)];
            }

            if (ImageInterface::ORIENTATION_PORTRAIT === $oldOrientation) {
                $newDimensions = [intval($max * $rat), $max];
            }
        }

        if ($width < $newDimensions[0] || $height < $newDimensions[1]) {
            return [$width, $height];
        }

        return $newDimensions;
    }
}
