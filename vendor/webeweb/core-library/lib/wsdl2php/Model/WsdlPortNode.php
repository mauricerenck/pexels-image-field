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
 * wsdl:port node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class WsdlPortNode extends AbstractNode implements IndexedNode {

    use StringNameTrait;

    /**
     * Node name.
     *
     * @var string
     */
    const NODE_NAME = "wsdl:port";

    /**
     * Binding.
     *
     * @var string|null
     */
    private $binding;

    /**
     * Get the binding.
     *
     * @return string|null Returns the binding.
     */
    public function getBinding(): ?string {
        return $this->binding;
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
        $this->setBinding($this->getAttributeValue($domNode, "binding"));
        $this->setName($this->getAttributeValue($domNode, "name"));
    }

    /**
     * Set the binding.
     *
     * @param string|null $binding The binding.
     * @return WsdlPortNode Returns this wsdl:port node.
     */
    public function setBinding(?string $binding): WsdlPortNode {
        $this->binding = $binding;
        return $this;
    }
}
