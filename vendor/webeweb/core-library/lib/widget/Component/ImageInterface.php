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

namespace WBW\Library\Widget\Component;

/**
 * Image interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component
 */
interface ImageInterface {

    /**
     * Mime type "jpeg".
     *
     * @var string
     */
    public const MIME_TYPE_JPEG = "image/jpeg";

    /**
     * Mime type "png".
     *
     * @var string
     */
    public const MIME_TYPE_PNG = "image/png";

    /**
     * Orientation "landscape".
     *
     * @var string
     */
    public const ORIENTATION_LANDSCAPE = "landscape";

    /**
     * Orientation "portrait".
     *
     * @var string
     */
    public const ORIENTATION_PORTRAIT = "portrait";

    /**
     * Orientation "squarish".
     *
     * @var string
     */
    public const ORIENTATION_SQUARISH = "squarish";

    /**
     * Get the dimensions.
     *
     * @return int[] Returns the dimensions.
     */
    public function getDimensions(): array;

    /**
     * Get the directory.
     *
     * @return string|null Returns the directory.
     */
    public function getDirectory(): ?string;

    /**
     * Get the extension.
     *
     * @return string|null Returns the extension.
     */
    public function getExtension(): ?string;

    /**
     * Get the filename.
     *
     * @return string|null Returns the filename.
     */
    public function getFilename(): ?string;

    /**
     * Get the height.
     *
     * @return int|null Returns the height.
     */
    public function getHeight(): ?int;

    /**
     * Get the mime type.
     *
     * @return string|null Returns the mime type.
     */
    public function getMimeType(): ?string;

    /**
     * Get the orientation.
     *
     * @return string|null Returns the orientation.
     */
    public function getOrientation(): ?string;

    /**
     * Get the pathname.
     *
     * @return string|null Returns the pathname.
     */
    public function getPathname(): ?string;

    /**
     * Get the ratio.
     *
     * @return float|null Returns the ratio.
     */
    public function getRatio(): ?float;

    /**
     * Get the size.
     *
     * @return int|null Returns the size.
     */
    public function getSize(): ?int;

    /**
     * Get the width.
     *
     * @return int|null Returns the width.
     */
    public function getWidth(): ?int;

    /**
     * Set the directory.
     *
     * @param string|null $directory The directory.
     * @return ImageInterface Returns this image
     */
    public function setDirectory(?string $directory);

    /**
     * Set the extension.
     *
     * @param string|null $extension The extension.
     * @return ImageInterface Returns this image
     */
    public function setExtension(?string $extension);

    /**
     * Set the filename.
     *
     * @param string|null $filename The filename.
     * @return ImageInterface Returns this image
     */
    public function setFilename(?string $filename);

    /**
     * Set the height.
     *
     * @param int|null $height The height.
     * @return ImageInterface Returns this image
     */
    public function setHeight(?int $height);

    /**
     * Set the mime type.
     *
     * @param string|null $mimeType The mime type.
     * @return ImageInterface Returns this image
     */
    public function setMimeType(?string $mimeType);

    /**
     * Set the size.
     *
     * @param int|null $size The size.
     * @return ImageInterface Returns this image
     */
    public function setSize(?int $size);

    /**
     * Set the width.
     *
     * @param int|null $width The width.
     * @return ImageInterface Returns this image
     */
    public function setWidth(?int $width);
}
