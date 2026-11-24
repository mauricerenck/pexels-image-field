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

/**
 * wsdl:part node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class WsdlPartNode extends AbstractNode implements IndexedNode {

    use StringNameTrait;

    /**
     * Node name.
     *
     * @var string
     */
    const NODE_NAME = "wsdl:part";

    /**
     * Element.
     *
     * @var string|null
     */
    private $element;

    /**
     * Get the element.
     *
     * @return string|null Returns the element.
     */
    public function getElement(): ?string {
        return $this->element;
    }

    /**
     * {@inheritDoc}
     */
    public function getIndexName(): ?string {
        return $this->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function init(DOMNode $domNode): void {
        $this->setElement($this->getAttributeValue($domNode, "element"));
        $this->setName($this->getAttributeValue($domNode, "name"));
    }

    /**
     * Set the element.
     *
     * @param string|null $element The element.
     * @return WsdlPartNode Returns this wsdl:part node.
     */
    public function setElement(?string $element): WsdlPartNode {
        $this->element = $element;
        return $this;
    }
}
