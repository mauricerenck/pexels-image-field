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

namespace WBW\Library\Wsdl2Php\Factory;

use DOMNode;
use WBW\Library\Wsdl2Php\Model\AbstractNode;
use WBW\Library\Wsdl2Php\Model\SComplexContentNode;
use WBW\Library\Wsdl2Php\Model\SComplexTypeNode;
use WBW\Library\Wsdl2Php\Model\SElementNode;
use WBW\Library\Wsdl2Php\Model\SExtensionNode;
use WBW\Library\Wsdl2Php\Model\Soap12AddressNode;
use WBW\Library\Wsdl2Php\Model\Soap12BodyNode;
use WBW\Library\Wsdl2Php\Model\Soap12OperationNode;
use WBW\Library\Wsdl2Php\Model\SoapAddressNode;
use WBW\Library\Wsdl2Php\Model\SoapBindingNode;
use WBW\Library\Wsdl2Php\Model\SoapBodyNode;
use WBW\Library\Wsdl2Php\Model\SoapOperationNode;
use WBW\Library\Wsdl2Php\Model\SSchemaNode;
use WBW\Library\Wsdl2Php\Model\SSequenceNode;
use WBW\Library\Wsdl2Php\Model\WsdlBindingNode;
use WBW\Library\Wsdl2Php\Model\WsdlDefinitionsNode;
use WBW\Library\Wsdl2Php\Model\WsdlInputNode;
use WBW\Library\Wsdl2Php\Model\WsdlMessageNode;
use WBW\Library\Wsdl2Php\Model\WsdlOperationNode;
use WBW\Library\Wsdl2Php\Model\WsdlOutputNode;
use WBW\Library\Wsdl2Php\Model\WsdlPartNode;
use WBW\Library\Wsdl2Php\Model\WsdlPortNode;
use WBW\Library\Wsdl2Php\Model\WsdlPortTypeNode;
use WBW\Library\Wsdl2Php\Model\WsdlServiceNode;
use WBW\Library\Wsdl2Php\Model\WsdlTypesNode;

/**
 * Model factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Factory
 */
class ModelFactory {

    /**
     * Create a node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return AbstractNode|null Returns the created node.
     */
    public static function newNode(DOMNode $domNode): ?AbstractNode {

        switch ($domNode->nodeName) {

            case SComplexContentNode::NODE_NAME:
                return new SComplexContentNode();

            case SComplexTypeNode::NODE_NAME:
                return new SComplexTypeNode();

            case SElementNode::NODE_NAME:
                return new SElementNode();

            case SExtensionNode::NODE_NAME:
                return new SExtensionNode();

            case Soap12AddressNode::NODE_NAME:
                return new Soap12AddressNode();

            case SoapAddressNode::NODE_NAME:
                return new SoapAddressNode();

            case SoapBindingNode::NODE_NAME:
                return new SoapBindingNode();

            case Soap12BodyNode::NODE_NAME:
                return new Soap12BodyNode();

            case SoapBodyNode::NODE_NAME:
                return new SoapBodyNode();

            case Soap12OperationNode::NODE_NAME:
                return new Soap12OperationNode();

            case SoapOperationNode::NODE_NAME:
                return new SoapOperationNode();

            case SSchemaNode::NODE_NAME:
                return new SSchemaNode();

            case SSequenceNode::NODE_NAME:
                return new SSequenceNode();

            case WsdlBindingNode::NODE_NAME:
                return new WsdlBindingNode();

            case WsdlDefinitionsNode::NODE_NAME:
                return new WsdlDefinitionsNode();

            case WsdlInputNode::NODE_NAME:
                return new WsdlInputNode();

            case WsdlMessageNode::NODE_NAME:
                return new WsdlMessageNode();

            case WsdlOperationNode::NODE_NAME:
                return new WsdlOperationNode();

            case WsdlOutputNode::NODE_NAME:
                return new WsdlOutputNode();

            case WsdlPartNode::NODE_NAME:
                return new WsdlPartNode();

            case WsdlPortNode::NODE_NAME:
                return new WsdlPortNode();

            case WsdlPortTypeNode::NODE_NAME:
                return new WsdlPortTypeNode();

            case WsdlServiceNode::NODE_NAME:
                return new WsdlServiceNode();

            case WsdlTypesNode::NODE_NAME:
                return new WsdlTypesNode();
        }

        return null;
    }
}
