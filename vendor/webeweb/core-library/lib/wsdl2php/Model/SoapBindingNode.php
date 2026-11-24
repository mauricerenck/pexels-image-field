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
 * soap:binding node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class SoapBindingNode extends AbstractNode {

    /**
     * Node name.
     *
     * @var string
     */
    const NODE_NAME = "soap:binding";

    /**
     * Transport.
     *
     * @var string|null
     */
    private $transport;

    /**
     * Get the transport.
     *
     * @return string|null Returns the transport.
     */
    public function getTransport(): ?string {
        return $this->transport;
    }

    /**
     * {@inheritDoc}
     */
    public function init(DOMNode $domNode): void {
        $this->setTransport($this->getAttributeValue($domNode, "transport"));
    }

    /**
     * Set the transport.
     *
     * @param string|null $transport The transport.
     * @return SoapBindingNode Returns this soap:binding node.
     */
    public function setTransport(?string $transport): SoapBindingNode {
        $this->transport = $transport;
        return $this;
    }

}
