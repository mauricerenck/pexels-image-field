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

use InvalidArgumentException;
use WBW\Library\Common\Traits\Integers\IntegerHeightTrait;
use WBW\Library\Common\Traits\Integers\IntegerSizeTrait;
use WBW\Library\Common\Traits\Integers\IntegerWidthTrait;
use WBW\Library\Common\Traits\Strings\StringDirectoryTrait;
use WBW\Library\Common\Traits\Strings\StringExtensionTrait;
use WBW\Library\Common\Traits\Strings\StringFilenameTrait;
use WBW\Library\Common\Traits\Strings\StringMimeTypeTrait;
use WBW\Library\Common\Traits\Strings\StringPathnameTrait;
use WBW\Library\Widget\Helper\ImageHelper;

/**
 * Abstract image.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component
 * @abstract
 */
abstract class AbstractImage implements ImageInterface {

    use IntegerHeightTrait;
    use IntegerSizeTrait;
    use IntegerWidthTrait;
    use StringDirectoryTrait;
    use StringExtensionTrait;
    use StringFilenameTrait;
    use StringMimeTypeTrait;
    use StringPathnameTrait {
        setPathname as protected;
    }

    /**
     * Constructor.
     *
     * @param string $pathname The pathname.
     * @throws InvalidArgumentException Throws an invalid argument exception if the pathname was not found.
     */
    protected function __construct(string $pathname) {

        if (false === file_exists($pathname)) {
            throw new InvalidArgumentException(sprintf('The image "%s" was not found', $pathname));
        }

        $this->setPathname(realpath($pathname));
    }

    /**
     * {@inheritDoc}
     */
    public function getDimensions(): array {
        return ImageHelper::getDimensions($this);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrientation(): ?string {
        return ImageHelper::getOrientation($this->getWidth(), $this->getHeight());
    }

    /**
     * {@inheritDoc}
     */
    public function getRatio(): ?float {
        return ImageHelper::getRatio($this->getWidth(), $this->getHeight());
    }

    /**
     * Load.
     *
     * @return ImageInterface Returns this image.
     */
    protected function load(): ImageInterface {

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
}
