<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Image\Factory;

use WBW\Library\Image\Model\Image;
use WBW\Library\Image\Model\ImageInterface;
use WBW\Library\Image\Utility\ImageUtility;

/**
 * Image factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Image\Factory
 */
class ImageFactory {

    /**
     * Creates new dimensions.
     *
     * @param Image $image The image.
     * @param int $maxWidth The maximum width.
     * @param int $maxHeight The maximum height.
     * @return int[] Returns the dimensions.
     */
    public static function newDimensions(Image $image, int $maxWidth, int $maxHeight): array {

        $image->init();

        return ImageUtility::getDimensions($image->getWidth(), $image->getHeight(), $maxWidth, $maxHeight);
    }

    /**
     * Create an input stream.
     *
     * @param Image $image The image.
     * @return resource|null Returns the input stream in case of success, null otherwise.
     */
    public static function newInputStream(Image $image) {

        $stream = null;

        switch ($image->init()->getMimeType()) {

            case ImageInterface::MIME_TYPE_JPEG:
                $stream = imagecreatefromjpeg($image->getPathname());
                break;

            case ImageInterface::MIME_TYPE_PNG:
                $stream = imagecreatefrompng($image->getPathname());
                if (false !== $stream) {
                    imagealphablending($stream, true);
                }
                break;
        }

        return false !== $stream ? $stream : null;
    }

    /**
     * Create an output stream.
     *
     * @param Image $image the image.
     * @param int $width The width.
     * @param int $height The height.
     * @return resource|null Returns the output stream in case of success, null otherwise.
     */
    public static function newOutputStream(Image $image, int $width, int $height) {

        $stream = imagecreatetruecolor($width, $height);

        switch ($image->init()->getMimeType()) {

            case ImageInterface::MIME_TYPE_PNG:

                if (false !== $stream) {
                    imagealphablending($stream, false);
                    imagesavealpha($stream, true);
                }
                break;
        }

        return false !== $stream ? $stream : null;
    }
}
