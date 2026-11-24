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
use WBW\Library\Wsdl2Php\Factory\ModelFactory;

/**
 * Abstract node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 * @abstract
 */
abstract class AbstractNode {

    /**
     * Children.
     *
     * @var AbstractNode[]|null
     */
    private $children;

    /**
     * Node name.
     *
     * @var string|null
     */
    private $nodeName;

    /**
     * Parent.
     *
     * @var AbstractNode|null
     */
    private $parent;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setChildren([]);
    }

    /**
     * Add a child.
     *
     * @param AbstractNode $child The child.
     * @return AbstractNode Returns this node.
     */
    public function addChild(AbstractNode $child): AbstractNode {
        $child->setParent($this);
        $this->children[] = $child;
        return $this;
    }

    /**
     * Counts.
     *
     * @return int Returns the count.
     */
    public function count(): int {
        return count($this->children);
    }

    /**
     * Get an attribute value.
     *
     * @param DOMNode $domNode The DOM node.
     * @param string $attributeName The attribute name.
     * @return string|null Returns the attribute value.
     */
    protected function getAttributeValue(DOMNode $domNode, string $attributeName): ?string {

        $domNamedNodeMap = $domNode->attributes;
        if (null === $domNamedNodeMap) {
            return null;
        }

        $domAttributeNode = $domNamedNodeMap->getNamedItem($attributeName);
        if (null === $domAttributeNode) {
            return null;
        }

        return $domAttributeNode->nodeValue;
    }

    /**
     * Get an attribute value.
     *
     * @param DOMNode $domNode The DOM node.
     * @param string $attributeName The attribute name.
     * @return bool|null Returns the attribute value.
     */
    protected function getAttributeValueBool(DOMNode $domNode, string $attributeName): ?bool {

        $attributeValue = $this->getAttributeValue($domNode, $attributeName);
        if (null === $attributeValue) {
            return null;
        }

        return "true" === $attributeValue;
    }

    /**
     * Get an attribute value.
     *
     * @param DOMNode $domNode The DOM node.
     * @param string $attributeName The attribute name.
     * @return int|null Returns the attribute value.
     */
    protected function getAttributeValueInt(DOMNode $domNode, string $attributeName): ?int {

        $attributeValue = $this->getAttributeValue($domNode, $attributeName);
        if (null === $attributeValue) {
            return null;
        }
        if (0 === preg_match("/^[0-9]{1,}$/", $attributeValue)) {
            return null;
        }

        return intval($attributeValue);
    }

    /**
     * Get the children.
     *
     * @return AbstractNode[] Returns the children.
     */
    public function getChildren(): array {
        return $this->children;
    }

    /**
     * Get children by node name.
     *
     * @param string $nodeName The node name.
     * @param bool $recursively Recursively ?
     * @return AbstractNode[] Returns the child nodes.
     */
    public function getChildrenByNodeName(string $nodeName, bool $recursively = false): array {

        $nodes = [];

        foreach ($this->children as $current) {

            if (true === $recursively) {
                $nodes = array_merge($nodes, $current->getChildrenByNodeName($nodeName, $recursively));
            }
            if ($nodeName !== $current->nodeName) {
                continue;
            }

            $nodes[] = $current;
        }

        return $nodes;
    }

    /**
     * Get the node name.
     *
     * @return string|null Returns the node name.
     */
    public function getNodeName(): ?string {
        return $this->nodeName;
    }

    /**
     * Get the parent node.
     *
     * @return AbstractNode|null Returns the parent node.
     */
    public function getParent(): ?AbstractNode {
        return $this->parent;
    }

    /**
     * Determine if the node contains children.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasChildren(): bool {
        return 0 < $this->count();
    }

    /**
     * Init.
     *
     * @param DOMNode $domNode The DOM node.
     * @return void
     */
    abstract protected function init(DOMNode $domNode): void;

    /**
     * Parse a DOM node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return AbstractNode|null Returns the node.
     */
    public static function parse(DOMNode $domNode): ?AbstractNode {

        $node = ModelFactory::newNode($domNode);
        if (null === $node) {
            return null;
        }

        $node->init($domNode);
        $node->setNodeName($domNode->nodeName);

        if (false === $domNode->hasChildNodes()) {
            return $node;
        }

        $domChildNodes = $domNode->childNodes;
        $domChildCount = $domChildNodes->length - 1;
        for ($i = 0; $i <= $domChildCount; ++$i) {

            $domChildNode = $domChildNodes->item($i);

            $child = static::parse($domChildNode);
            if (null === $child) {
                continue;
            }

            $node->addChild($child);
        }

        return $node;
    }

    /**
     * Set the child nodes.
     *
     * @param AbstractNode[] $nodes The child nodes.
     * @return AbstractNode Returns this abstract node.
     */
    protected function setChildren(array $nodes): AbstractNode {
        $this->children = $nodes;
        return $this;
    }

    /**
     * Set the node name.
     *
     * @param string|null $nodeName The node name.
     * @return AbstractNode Returns this node.
     */
    protected function setNodeName(?string $nodeName): AbstractNode {
        $this->nodeName = $nodeName;
        return $this;
    }

    /**
     * Set the parent.
     *
     * @param AbstractNode|null $parent The parent.
     * @return AbstractNode Returns this node.
     */
    protected function setParent(?AbstractNode $parent): AbstractNode {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Sort.
     *
     * @return AbstractNode Returns this node.
     */
    public function sort(): AbstractNode {

        array_walk($this->children, function(AbstractNode $node): void {
            $node->sort();
        });

        usort($this->children, function(AbstractNode $a, AbstractNode $b): int {

            if (false === ($a instanceof IndexedNode) || false === ($b instanceof IndexedNode)) {
                return 0;
            }

            if (null === $a->getIndexName() || null === $b->getIndexName()) {
                return 0;
            }

            return strcmp($a->getIndexName(), $b->getIndexName());
        });

        return $this;
    }
}
