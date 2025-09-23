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

namespace WBW\Library\Widget\Utility;

use Imagick;
use ImagickException;
use RuntimeException;
use WBW\Library\Widget\Component\ImageInterface;
use WBW\Library\Widget\Helper\ImageHelper;

/**
 * Image utility.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Utility
 */
class ImageUtility {

    /**
     * Convert a SVG into PNG.
     *
     * @param string $filename The filename.
     * @param int|null $width The width.
     * @param int|null $height The height.
     * @return string|null Returns the converted SVG.
     * @throws ImagickException Throws an imagick exception if an error occurs.
     */
    public static function convertSvgToPng(string $filename, int $width = null, int $height = null): ?string {

        $image = new Imagick();
        $image->setBackgroundColor("transparent");
        $image->readImage($filename);
        $image->setImageFormat("png");

        if (null !== $width && null !== $height) {
            $image->resizeImage($width, $height, Imagick::FILTER_LANCZOS, 1);
        }

        $png = $image->getImageBlob();
        $image->clear();

        return $png;
    }

    /**
     * Encode an image into base 64.
     *
     * @param string|null $uri The URI.
     * @return string|null Returns the encoded image.
     */
    public static function encodeBase64(?string $uri): ?string {

        if (null === $uri) {
            return null;
        }

        $data = file_get_contents($uri);

        $stream = fopen("php://memory", "w+b");
        fwrite($stream, $data);

        $mime = mime_content_type($stream);

        fclose($stream);

        return sprintf("data:%s;base64,%s", $mime, base64_encode($data));
    }

    /**
     * Create an input stream.
     *
     * @param ImageInterface $image The image.
     * @return resource|null Returns the input stream in case of success, null otherwise.
     */
    public static function newInputStream(ImageInterface $image) {

        $stream = null;

        switch ($image->getMimeType()) {

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
     * @param ImageInterface $image the image.
     * @param int $width The width.
     * @param int $height The height.
     * @return resource|null Returns the output stream in case of success, null otherwise.
     */
    public static function newOutputStream(ImageInterface $image, int $width, int $height) {

        $stream = imagecreatetruecolor($width, $height);
        if (false === $stream) {
            return null;
        }

        if (ImageInterface::MIME_TYPE_PNG === $image->getMimeType()) {
            imagealphablending($stream, false);
            imagesavealpha($stream, true);
        }

        return $stream;
    }

    /**
     * Resize.
     *
     * @param ImageInterface $image The image.
     * @param int $newWidth The new width.
     * @param int $newHeight The new height.
     * @param string $pathname The pathname.
     * @return bool Returns true in case of success, false otherwise.
     * @throws RuntimeException Throws a runtime exception if the re-sampled copy failed.
     */
    public static function resize(ImageInterface $image, int $newWidth, int $newHeight, string $pathname): bool {

        [$w, $h] = ImageHelper::resize($image->getWidth(), $image->getHeight(), $newWidth, $newHeight);

        $input  = static::newInputStream($image);
        $output = static::newOutputStream($image, $w, $h);
        if (null === $output) {
            throw new RuntimeException("Failed to create true color image");
        }

        $result = imagecopyresampled($output, $input, 0, 0, 0, 0, $w, $h, $image->getWidth(), $image->getHeight());
        if (false === $result) {
            throw new RuntimeException("Failed to copy re-sampled image");
        }

        return static::saveOutputStream($image, $output, $pathname);
    }

    /**
     * Save an output stream.
     *
     * @param ImageInterface $image the image.
     * @param resource $outputStream The output stream.
     * @param string $pathname The pathname.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected static function saveOutputStream(ImageInterface $image, $outputStream, string $pathname): bool {

        switch ($image->getMimeType()) {

            case ImageInterface::MIME_TYPE_JPEG:
                return imagejpeg($outputStream, $pathname);

            case ImageInterface::MIME_TYPE_PNG:
                return imagepng($outputStream, $pathname);
        }

        return false;
    }
}
