<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Image\Model;

use InvalidArgumentException;
use RuntimeException;
use WBW\Library\Image\Helper\ImageHelper;
use WBW\Library\Traits\Integers\IntegerHeightTrait;
use WBW\Library\Traits\Integers\IntegerSizeTrait;
use WBW\Library\Traits\Integers\IntegerWidthTrait;
use WBW\Library\Traits\Strings\StringDirectoryTrait;
use WBW\Library\Traits\Strings\StringExtensionTrait;
use WBW\Library\Traits\Strings\StringFilenameTrait;
use WBW\Library\Traits\Strings\StringMimeTypeTrait;
use WBW\Library\Traits\Strings\StringPathnameTrait;

/**
 * Image.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Image\Model
 */
class Image implements ImageInterface {

    use IntegerHeightTrait;
    use IntegerSizeTrait;
    use IntegerWidthTrait;
    use StringDirectoryTrait;
    use StringExtensionTrait;
    use StringFilenameTrait;
    use StringMimeTypeTrait;
    use StringPathnameTrait;

    /**
     * Constructor.
     *
     * @param string $pathname The pathname.
     */
    public function __construct(string $pathname) {
        $this->setPathname($pathname);
    }

    /**
     * Encode into base 64.
     *
     * @return string Returns this image encoded into base 64.
     */
    public function base64Encode(): string {
        return ImageHelper::base64Encode($this->getPathname());
    }

    /**
     * Get the dimensions.
     *
     * @return int[] Returns the dimensions.
     */
    public function getDimensions(): array {

        return [
            $this->getWidth(),
            $this->getHeight(),
        ];
    }

    /**
     * Get the orientation.
     *
     * @return string|null Returns the orientation, null if width and height are equals.
     */
    public function getOrientation(): ?string {

        if ($this->getHeight() < $this->getWidth()) {
            return self::ORIENTATION_HORIZONTAL;
        }

        if ($this->getWidth() < $this->getHeight()) {
            return self::ORIENTATION_VERTICAL;
        }

        return null;
    }

    /**
     * Initialize.
     *
     * @return Image Returns this image.
     */
    public function init(): Image {

        if (null !== $this->getDirectory()) {
            return $this;
        }

        $this->setDirectory(dirname($this->getPathname()));
        $this->setFilename(basename($this->getPathname()));

        $parts = explode(".", $this->getFilename());
        $this->setExtension(end($parts));

        $this->setMimeType(mime_content_type($this->getPathname()));

        [$width, $height] = getimagesize($this->getPathname());
        $this->setWidth($width);
        $this->setHeight($height);

        $this->setSize(filesize($this->getPathname()));

        return $this;
    }

    /**
     * Resize.
     *
     * @param int $newWidth The new width.
     * @param int $newHeight The new height.
     * @param string $pathname The pathname.
     * @return bool Returns true in case of success, false otherwise.
     * @throws RuntimeException Throws a runtime exception if the re-sampled copy failed.
     */
    public function resize(int $newWidth, int $newHeight, string $pathname): bool {
        return ImageHelper::resize($this, $newWidth, $newHeight, $pathname);
    }

    /**
     * Set the pathname.
     *
     * @param string $pathname The pathname.
     * @return Image Returns this image.
     * @throws InvalidArgumentException Throws an invalid argument exception if the pathname was not found.
     */
    protected function setPathname(string $pathname): Image {

        if (false === realpath($pathname)) {
            throw new InvalidArgumentException(sprintf('The image "%s" was not found', $pathname));
        }

        $this->pathname = realpath($pathname);
        return $this;
    }
}
