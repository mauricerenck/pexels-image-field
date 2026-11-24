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
 * soap:body node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class SoapBodyNode extends AbstractNode {

    /**
     * Node name.
     *
     * @var string
     */
    const NODE_NAME = "soap:body";

    /**
     * Use.
     *
     * @var string|null
     */
    private $use;

    /**
     * Get the node.
     *
     * @return string|null Returns the node.
     */
    public function getUse(): ?string {
        return $this->use;
    }

    /**
     * {@inheritDoc}
     */
    public function init(DOMNode $domNode): void {
        $this->setUse($this->getAttributeValue($domNode, "use"));
    }

    /**
     * Set the use.
     *
     * @param string|null $use The use.
     * @return SoapBodyNode Returns this soap:body node.
     */
    public function setUse(?string $use): SoapBodyNode {
        $this->use = $use;
        return $this;
    }
}
