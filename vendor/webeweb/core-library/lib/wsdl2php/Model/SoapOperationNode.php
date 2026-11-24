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
 * soap:operation node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class SoapOperationNode extends AbstractNode {

    /**
     * Node name.
     *
     * @var string
     */
    const NODE_NAME = "soap:operation";

    /**
     * SOAP action.
     *
     * @var string|null
     */
    private $soapAction;

    /**
     * Style.
     *
     * @var string|null
     */
    private $style;

    /**
     * Get the SOAP action.
     *
     * @return string|null Returns the SOAP action.
     */
    public function getSoapAction(): ?string {
        return $this->soapAction;
    }

    /**
     * Get the style.
     *
     * @return string|null Returns the style.
     */
    public function getStyle(): ?string {
        return $this->style;
    }

    /**
     * {@inheritDoc}
     */
    public function init(DOMNode $domNode): void {
        $this->setSoapAction($this->getAttributeValue($domNode, "soapAction"));
        $this->setStyle($this->getAttributeValue($domNode, "style"));
    }

    /**
     * Set the SOAP action.
     *
     * @param string|null $soapAction The SOAP action.
     * @return SoapOperationNode Returns this soap:operation node.
     */
    public function setSoapAction(?string $soapAction): SoapOperationNode {
        $this->soapAction = $soapAction;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param string|null $style The style.
     * @return SoapOperationNode Returns this soap:operation node.
     */
    public function setStyle(?string $style): SoapOperationNode {
        $this->style = $style;
        return $this;
    }
}
