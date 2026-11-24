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
use WBW\Library\Wsdl2Php\Traits\Strings\StringTargetNamespaceTrait;

/***
 * s:schema node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class SSchemaNode extends AbstractNode {

    use StringTargetNamespaceTrait;

    /**
     * Node name.
     *
     * @var string|null
     */
    const NODE_NAME = "s:schema";

    /**
     * Element form default.
     *
     * @var string|null
     */
    private $elementFormDefault;

    /**
     * Get the element form default.
     *
     * @return string|null Returns the element form default.
     */
    public function getElementFormDefault(): ?string {
        return $this->elementFormDefault;
    }

    /**
     * {@inheritDoc}
     */
    public function init(DOMNode $domNode): void {
        $this->setElementFormDefault($this->getAttributeValue($domNode, "elementFormDefault"));
    }

    /**
     * Set the element form default.
     *
     * @param string|null $elementFormDefault The element form default.
     * @return SSchemaNode Returns this s:schema node.
     */
    public function setElementFormDefault(?string $elementFormDefault): SSchemaNode {
        $this->elementFormDefault = $elementFormDefault;
        return $this;
    }

}
