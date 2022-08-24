<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Model;

use WBW\Library\OcrLad\Model\Attribute\ArrayWordsTrait;
use WBW\Library\Traits\Integers\IntegerHeightTrait;
use WBW\Library\Traits\Integers\IntegerWidthTrait;

/**
 * Page.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Model
 */
class Page {

    use ArrayWordsTrait;
    use IntegerHeightTrait;
    use IntegerWidthTrait;

    /**
     * Parent.
     *
     * @var Document|null
     */
    private $parent;

    /**
     * Resolution.
     *
     * @var int|null
     */
    private $resolution;

    /**
     * Rotation.
     *
     * @var int|null
     */
    private $rotation;

    /**
     * Tag.
     *
     * @var int|null
     */
    private $tag;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setWords([]);
    }

    /**
     * Get the parent.
     *
     * @return Document|null Returns the parent.
     */
    public function getParent(): ?Document {
        return $this->parent;
    }

    /**
     * Get the resolution.
     *
     * @return int|null Returns the resolution.
     */
    public function getResolution(): ?int {
        return $this->resolution;
    }

    /**
     * Get the rotation.
     *
     * @return int|null Returns the rotation.
     */
    public function getRotation(): ?int {
        return $this->rotation;
    }

    /**
     * Get the tag.
     *
     * @return int|null Returns the tag.
     */
    public function getTag(): ?int {
        return $this->tag;
    }

    /**
     * Set the parent.
     *
     * @param Document|null $parent The parent.
     * @return Page Returns this page.
     */
    public function setParent(Document $parent = null): Page {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Set the resolution.
     *
     * @param int|null $resolution
     * @return Page Returns this page.
     */
    public function setResolution(?int $resolution): Page {
        $this->resolution = $resolution;
        return $this;
    }

    /**
     * Set the rotation.
     *
     * @param int|null $rotation The rotation.
     * @return Page Returns this page.
     */
    public function setRotation(?int $rotation): Page {
        $this->rotation = $rotation;
        return $this;
    }

    /**
     * Set the tag.
     *
     * @param int|null $tag The tag.
     * @return Page Returns this page.
     */
    public function setTag(?int $tag): Page {
        $this->tag = $tag;
        return $this;
    }
}
