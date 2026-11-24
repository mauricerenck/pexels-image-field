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

namespace WBW\Library\Wsdl2Php\Provider;

use DOMDocument;
use WBW\Library\Wsdl2Php\Model\AbstractNode;
use WBW\Library\Wsdl2Php\Model\IndexedNode;
use WBW\Library\Wsdl2Php\Model\SSchemaNode;
use WBW\Library\Wsdl2Php\Model\WsdlDefinitionsNode;
use WBW\Library\Wsdl2Php\Model\WsdlInputNode;
use WBW\Library\Wsdl2Php\Model\WsdlMessageNode;
use WBW\Library\Wsdl2Php\Model\WsdlOperationNode;
use WBW\Library\Wsdl2Php\Model\WsdlOutputNode;
use WBW\Library\Wsdl2Php\Model\WsdlPartNode;
use WBW\Library\Wsdl2Php\Model\WsdlPortTypeNode;
use WBW\Library\Wsdl2Php\Model\WsdlServiceNode;

/**
 * WSDL provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Provider
 */
class WsdlProvider {

    /**
     * wsdl:definitions node.
     *
     * @var WsdlDefinitionsNode|null
     */
    private $definitions;

    /**
     * wsdl:input nodes.
     *
     * @var WsdlInputNode[]
     */
    private $inputs;

    /**
     * wsdl:message nodes.
     *
     * @var WsdlMessageNode[]
     */
    private $messages;

    /**
     * wsdl:operation nodes.
     *
     * @var WsdlOperationNode[]
     */
    private $operations;

    /**
     * wsdl:output nodes.
     *
     * @var WsdlOutputNode[]
     */
    private $outputs;

    /**
     * wsdl:part nodes.
     *
     * @var WsdlPartNode[]
     */
    private $parts;

    /**
     * wsdl:service node.
     *
     * @var WsdlServiceNode|null
     */
    private $service;

    /**
     * Type nodes.
     *
     * @var AbstractNode[]
     */
    private $types;

    /**
     * WSDL.
     *
     * @var string
     */
    private $wsdl;

    /**
     * Constructor.
     *
     * @param string $wsdl The WSDL.
     */
    public function __construct(string $wsdl) {
        $this->setInputs([]);
        $this->setMessages([]);
        $this->setOperations([]);
        $this->setOutputs([]);
        $this->setParts([]);
        $this->setTypes([]);
        $this->setWsdl($wsdl);
    }

    /**
     * Get the wsdl:definitions node.
     *
     * @return WsdlDefinitionsNode|null Returns the wsdl:definitions node.
     */
    public function getDefinitions(): ?WsdlDefinitionsNode {
        return $this->definitions;
    }

    /**
     * Get the input nodes.
     *
     * @return WsdlInputNode[] Returns the input nodes.
     */
    public function getInputs(): array {
        return $this->inputs;
    }

    /**
     * Get the wsdl:message nodes.
     *
     * @return WsdlMessageNode[] Returns the wsdl:message nodes.
     */
    public function getMessages(): array {
        return $this->messages;
    }

    /**
     * Get the wsdl:operation nodes.
     *
     * @return WsdlOperationNode[] Returns the wsdl:operation nodes.
     */
    public function getOperations(): array {
        return $this->operations;
    }

    /**
     * Get the output nodes.
     *
     * @return WsdlOutputNode[] Returns the output nodes.
     */
    public function getOutputs(): array {
        return $this->outputs;
    }

    /**
     * Get the part nodes.
     *
     * @return WsdlPartNode[] Returns the part nodes.
     */
    public function getParts(): array {
        return $this->parts;
    }

    /**
     * Get the wsdl:service node.
     *
     * @return WsdlServiceNode|null Returns the wsdl:service node.
     */
    public function getService(): ?WsdlServiceNode {
        return $this->service;
    }

    /**
     * Get the type nodes.
     *
     * @return AbstractNode[] Returns the type nodes.
     */
    public function getTypes(): array {
        return $this->types;
    }

    /**
     * Get the WSDL.
     *
     * @return string Returns the WSDL.
     */
    public function getWsdl(): string {
        return $this->wsdl;
    }

    /**
     * Determine if an index contains a node.
     *
     * @param array<string,IndexedNode> $index The index.
     * @param IndexedNode $node The node.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected function hasNode(array $index, IndexedNode $node): bool {

        /** @var WsdlPartNode[] $nodes */
        $nodes = $this->getDefinitions()->getChildrenByNodeName(WsdlPartNode::NODE_NAME, true);
        foreach ($nodes as $current) {

            $classname = explode(":", $current->getElement())[1];
            if ($node->getIndexName() !== $classname) {
                continue;
            }

            /** @var IndexedNode $parent */
            $parent = $current->getParent();

            return array_key_exists($parent->getIndexName(), $index);
        }

        return false;
    }

    /**
     * Index.
     *
     * @return WsdlProvider Returns this WSDL provider.
     */
    public function index(): WsdlProvider {

        $root = $this->getDefinitions();

        /** @var WsdlPortTypeNode $portType */
        $portType = $root->getChildrenByNodeName(WsdlPortTypeNode::NODE_NAME)[0];

        /** @var SSchemaNode $schema */
        $schema = $root->getChildrenByNodeName(SSchemaNode::NODE_NAME, true)[0];

        /** @var WsdlServiceNode $service */
        $service = $root->getChildrenByNodeName(WsdlServiceNode::NODE_NAME)[0];

        $this->indexNodes($root, WsdlMessageNode::NODE_NAME, $this->messages);
        $this->indexNodes($portType, WsdlOperationNode::NODE_NAME, $this->operations);
        //$this->indexNodes($root, WSDLPartNode::NODE_NAME, $this->parts, true);
        $this->indexTypes($schema, $this->types);

        $this->indexNodes($portType, WsdlInputNode::NODE_NAME, $this->inputs, true);
        $this->indexNodes($portType, WsdlOutputNode::NODE_NAME, $this->outputs, true);

        $this->setService($service);

        return $this;
    }

    /**
     * Index by name.
     *
     * @param IndexedNode[] $nodes The nodes.
     * @param array<string,IndexedNode> $index The index.
     * @return void
     */
    protected function indexByName(array $nodes, array &$index): void {

        foreach ($nodes as $current) {

            $name = $current->getIndexName();
            if (true === array_key_exists($name, $index)) {
                continue;
            }

            $index[$name] = $current;
        }
    }

    /**
     * Index nodes.
     *
     * @param AbstractNode $root The root node.
     * @param string $nodeName The node name.
     * @param array<string,IndexedNode> $index The index.
     * @param bool $recursively Recursively ?
     * @return void
     */
    protected function indexNodes(AbstractNode $root, string $nodeName, array &$index, bool $recursively = false): void {

        /** @var IndexedNode[] $nodes */
        $nodes = $root->getChildrenByNodeName($nodeName, $recursively);
        if (0 === count($nodes)) {
            return;
        }

        $this->indexByName($nodes, $index);
    }

    /**
     * Index the types.
     *
     * @param SSchemaNode $root The root node.
     * @param array<string,IndexedNode> $index The index.
     * @return void
     */
    protected function indexTypes(SSchemaNode $root, array &$index): void {

        /** @var IndexedNode[] $nodes */
        $nodes = $root->getChildren();
        if (0 === count($nodes)) {
            return;
        }

        $this->indexByName($nodes, $index);
    }

    /**
     * Determine if an indexed node is a model.
     *
     * @param IndexedNode $node The node.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function isModel(IndexedNode $node): bool {

        $request  = $this->hasNode($this->getInputs(), $node);
        $response = $this->hasNode($this->getOutputs(), $node);

        return false === $request && false === $response;
    }

    /**
     * Determine if an indexed node is a request.
     *
     * @param IndexedNode $node The node.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function isRequest(IndexedNode $node): bool {
        return $this->hasNode($this->getInputs(), $node);
    }

    /**
     * Determine if an indexed node is a response.
     *
     * @param IndexedNode $node The node.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function isResponse(IndexedNode $node): bool {
        return $this->hasNode($this->getOutputs(), $node);
    }

    /**
     * Load.
     *
     * @return WsdlProvider Returns this WSDL provider.
     */
    public function load(): WsdlProvider {

        $document = new DOMDocument();
        $document->load($this->getWsdl());

        /** @var WsdlDefinitionsNode|null $node */
        $node = AbstractNode::parse($document->childNodes->item(0));
        if (null !== $node) {
            $this->setDefinitions($node);
        }

        return $this;
    }

    /**
     * Set the wsdl:definitions node.
     *
     * @param WsdlDefinitionsNode|null $definitions The wsdl:definitions node.
     * @return WsdlProvider Returns this WSDL provider.
     */
    protected function setDefinitions(?WsdlDefinitionsNode $definitions): WsdlProvider {
        $this->definitions = $definitions;
        return $this;
    }

    /**
     * Set the input nodes.
     *
     * @param WsdlInputNode[] $inputs The input nodes.
     * @return WsdlProvider Returns this WSDL provider.
     */
    protected function setInputs(array $inputs): WsdlProvider {
        $this->inputs = $inputs;
        return $this;
    }

    /**
     * Set the wsdl:message nodes.
     *
     * @param WsdlMessageNode[] $messages The wsdl:message nodes.
     * @return WsdlProvider Returns this WSDL provider.
     */
    protected function setMessages(array $messages): WsdlProvider {
        $this->messages = $messages;
        return $this;
    }

    /**
     * Set the wsdl:operation nodes.
     *
     * @param WsdlOperationNode[] $operations The wsdl:operation nodes.
     * @return WsdlProvider Returns this WSDL provider.
     */
    protected function setOperations(array $operations): WsdlProvider {
        $this->operations = $operations;
        return $this;
    }

    /**
     * Set the output nodes.
     *
     * @param WsdlOutputNode[] $outputs The output nodes.
     * @return WsdlProvider Returns this WSDL provider.
     */
    protected function setOutputs(array $outputs): WsdlProvider {
        $this->outputs = $outputs;
        return $this;
    }

    /**
     * Set the part nodes.
     *
     * @param WsdlPartNode[] $parts The part nodes.
     * @return WsdlProvider Returns this WSDL provider.
     */
    protected function setParts(array $parts): WsdlProvider {
        $this->parts = $parts;
        return $this;
    }

    /**
     * Set the wsdl:service node.
     *
     * @param WsdlServiceNode|null $service The wsdl:service node.
     * @return WsdlProvider Returns this WSDL provider.
     */
    protected function setService(?WsdlServiceNode $service): WsdlProvider {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the type nodes.
     *
     * @param AbstractNode[] $types The type nodes.
     * @return WsdlProvider Returns this WSDL provider.
     */
    protected function setTypes(array $types): WsdlProvider {
        $this->types = $types;
        return $this;
    }

    /**
     * Set the WSDL.
     *
     * @param string $wsdl The WSDL.
     * @return WsdlProvider Returns this WSDL provider.
     */
    protected function setWsdl(string $wsdl): WsdlProvider {
        $this->wsdl = $wsdl;
        return $this;
    }

    /**
     * Sort.
     *
     * @return WsdlProvider Returns this WSDL provider.
     */
    public function sort(): WsdlProvider {

        $this->getDefinitions()->sort();

        ksort($this->types);

        ksort($this->messages);
        ksort($this->parts);

        ksort($this->operations);
        ksort($this->inputs);
        ksort($this->outputs);

        return $this;
    }
}
