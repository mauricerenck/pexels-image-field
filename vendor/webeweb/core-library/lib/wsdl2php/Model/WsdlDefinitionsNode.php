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

/**
 * wsdl:definitions node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class WsdlDefinitionsNode extends AbstractNode {

    use StringTargetNamespaceTrait;

    /**
     * Node name.
     *
     * @var string
     */
    const NODE_NAME = "wsdl:definitions";

    /**
     * HTTP.
     *
     * @var string|null
     */
    private $http;

    /**
     * Mime.
     *
     * @var string|null
     */
    private $mime;

    /**
     * S.
     *
     * @var string|null
     */
    private $s;

    /**
     * SOAP.
     *
     * @var string|null
     */
    private $soap;

    /**
     * SOAP 1.2.
     *
     * @var string|null
     */
    private $soap12;

    /**
     * SOAP enc.
     *
     * @var string|null
     */
    private $soapEnc;

    /**
     * TM.
     *
     * @var string|null
     */
    private $tm;

    /**
     * TNS.
     *
     * @var string|null
     */
    private $tns;

    /**
     * WSDL.
     *
     * @var string|null
     */
    private $wsdl;

    /**
     * Get the HTTP.
     *
     * @return string|null Returns the HTTP.
     */
    public function getHttp(): ?string {
        return $this->http;
    }

    /**
     * Get the mime.
     *
     * @return string|null Returns the mime.
     */
    public function getMime(): ?string {
        return $this->mime;
    }

    /**
     * Get the S.
     *
     * @return string|null Returns the s.
     */
    public function getS(): ?string {
        return $this->s;
    }

    /**
     * Get the SOAP.
     *
     * @return string|null Returns the SOAP.
     */
    public function getSoap(): ?string {
        return $this->soap;
    }

    /**
     * Get the SOAP 1.2.
     *
     * @return string|null Returns the SOAP 1.2.
     */
    public function getSoap12(): ?string {
        return $this->soap12;
    }

    /**
     * Get the SOAP enc.
     *
     * @return string|null Returns the SOAP enc.
     */
    public function getSoapEnc(): ?string {
        return $this->soapEnc;
    }

    /**
     * Get the TM.
     *
     * @return string|null Returns the TM.
     */
    public function getTm(): ?string {
        return $this->tm;
    }

    /**
     * Get the TNS.
     *
     * @return string|null Returns the TNS.
     */
    public function getTns(): ?string {
        return $this->tns;
    }

    /**
     * Get the WSDL.
     *
     * @return string|null Returns the WSDL.
     */
    public function getWsdl(): ?string {
        return $this->wsdl;
    }

    /**
     * {@inheritDoc}
     */
    public function init(DOMNode $domNode): void {
        $this->setTargetNamespace($this->getAttributeValue($domNode, "targetNamespace"));
    }

    /**
     * Set the HTTP.
     *
     * @param string|null $http The HTTP.
     * @return WsdlDefinitionsNode Returns this wsdl:definitions node.
     */
    public function setHttp(?string $http): WsdlDefinitionsNode {
        $this->http = $http;
        return $this;
    }

    /**
     * Set the mime.
     *
     * @param string|null $mime The mime.
     * @return WsdlDefinitionsNode Returns this wsdl:definitions node.
     */
    public function setMime(?string $mime): WsdlDefinitionsNode {
        $this->mime = $mime;
        return $this;
    }

    /**
     * Set the s.
     *
     * @param string|null $s The s.
     * @return WsdlDefinitionsNode
     */
    public function setS(?string $s): WsdlDefinitionsNode {
        $this->s = $s;
        return $this;
    }

    /**
     * Set the SOAP.
     *
     * @param string|null $soap The SOAP.
     * @return WsdlDefinitionsNode Returns this wsdl:definitions node.
     */
    public function setSoap(?string $soap): WsdlDefinitionsNode {
        $this->soap = $soap;
        return $this;
    }

    /**
     * Set the SOAP 1.2.
     *
     * @param string|null $soap12 The SOAP 1.2.
     * @return WsdlDefinitionsNode Returns this wsdl:definitions node.
     */
    public function setSoap12(?string $soap12): WsdlDefinitionsNode {
        $this->soap12 = $soap12;
        return $this;
    }

    /**
     * Get the SOAP enc.
     *
     * @param string|null $soapEnc The SOAP enc.
     * @return WsdlDefinitionsNode Returns this wsdl:definitions node.
     */
    public function setSoapEnc(?string $soapEnc): WsdlDefinitionsNode {
        $this->soapEnc = $soapEnc;
        return $this;
    }

    /**
     * Set the TM.
     *
     * @param string|null $tm The TM.
     * @return WsdlDefinitionsNode Returns this wsdl:definitions node.
     */
    public function setTm(?string $tm): WsdlDefinitionsNode {
        $this->tm = $tm;
        return $this;
    }

    /**
     * Set the TNS.
     *
     * @param string|null $tns The TNS.
     * @return WsdlDefinitionsNode Returns this wsdl:definitions node.
     */
    public function setTns(?string $tns): WsdlDefinitionsNode {
        $this->tns = $tns;
        return $this;
    }

    /**
     * Set the WSDL.
     *
     * @param string|null $wsdl The WSDL.
     * @return WsdlDefinitionsNode Returns this wsdl:definitions node.
     */
    public function setWsdl(?string $wsdl): WsdlDefinitionsNode {
        $this->wsdl = $wsdl;
        return $this;
    }

}
