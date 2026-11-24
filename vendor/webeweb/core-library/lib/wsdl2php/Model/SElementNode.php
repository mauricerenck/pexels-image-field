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

namespace WBW\Library\Wsdl2Php\Model;

use DOMNode;
use WBW\Library\Common\Traits\Strings\StringNameTrait;
use WBW\Library\Common\Traits\Strings\StringTypeTrait;

/**
 * s:element node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class SElementNode extends AbstractNode implements IndexedNode {

    use StringNameTrait;
    use StringTypeTrait;

    /**
     * Node name.
     *
     * @var string
     */
    const NODE_NAME = "s:element";

    /**
     * Max occurs.
     *
     * @var int|null
     */
    private $maxOccurs;

    /**
     * Min occurs.
     *
     * @var int|string
     */
    private $minOccurs;

    /**
     * Nillable.
     *
     * @var bool|null
     */
    private $nillable;

    /**
     * {@inheritDoc}
     */
    public function getIndexName(): ?string {
        return $this->getName();
    }

    /**
     * Get the max occurs.
     *
     * @return int|null Returns the max occurs.
     */
    public function getMaxOccurs(): ?int {
        return $this->maxOccurs;
    }

    /**
     * Get the min occurs.
     *
     * @return int|null Returns the min occurs.
     */
    public function getMinOccurs(): ?int {
        return $this->minOccurs;
    }

    /**
     * Get the nillable.
     *
     * @return bool|null Returns the nillable.
     */
    public function getNillable(): ?bool {
        return $this->nillable;
    }

    /**
     * {@inheritDoc}
     */
    public function init(DOMNode $domNode): void {
        $this->setName($this->getAttributeValue($domNode, "name"));
        $this->setMaxOccurs($this->getAttributeValueInt($domNode, "maxOccurs"));
        $this->setMinOccurs($this->getAttributeValueInt($domNode, "minOccurs"));
        $this->setNillable($this->getAttributeValueBool($domNode, "nillable"));
        $this->setType($this->getAttributeValue($domNode, "type"));
    }

    /**
     * Set the max occurs.
     *
     * @param int|null $maxOccurs The max occurs.
     * @return SElementNode Returns this s:element node.
     */
    public function setMaxOccurs(?int $maxOccurs): SElementNode {
        $this->maxOccurs = $maxOccurs;
        return $this;
    }

    /**
     * Set the min occurs.
     *
     * @param int|null $minOccurs The min occurs.
     * @return SElementNode Returns this s:element node.
     */
    public function setMinOccurs(?int $minOccurs): SElementNode {
        $this->minOccurs = $minOccurs;
        return $this;
    }

    /**
     * Set the nillable.
     *
     * @param bool|null $nillable The nillable.
     * @return SElementNode Returns the s:element node.
     */
    public function setNillable(?bool $nillable): SElementNode {
        $this->nillable = $nillable;
        return $this;
    }
}
