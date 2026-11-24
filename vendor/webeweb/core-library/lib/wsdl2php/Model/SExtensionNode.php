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

/**
 * s:extension node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class SExtensionNode extends AbstractNode {

    /**
     * Node name.
     *
     * @var string
     */
    const NODE_NAME = "s:extension";

    /**
     * Base.
     *
     * @var string|null
     */
    private $base;

    /**
     * Get the base.
     *
     * @return string|null Returns the base.
     */
    public function getBase(): ?string {
        return $this->base;
    }

    /**
     * {@inheritDoc}
     */
    public function init(DOMNode $domNode): void {
        $this->setBase($this->getAttributeValue($domNode, "base"));
    }

    /**
     * Set the base.
     *
     * @param string|null $base The base.
     * @return SExtensionNode Returns this s:extension node.
     */
    public function setBase(?string $base): SExtensionNode {
        $this->base = $base;
        return $this;
    }

}
