<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Wsdl2Php\Builder;

use WBW\Library\Wsdl2Php\Model\AbstractNode;
use WBW\Library\Wsdl2Php\Model\IndexedNode;
use WBW\Library\Wsdl2Php\Model\SElementNode;
use WBW\Library\Wsdl2Php\Model\SExtensionNode;
use WBW\Library\Wsdl2Php\Provider\WsdlProviderTrait;
use WBW\Library\Wsdl2Php\Traits\Strings\StringNamespaceTrait;

/**
 * Class builder.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Builder
 */
class ClassBuilder extends AbstractBuilder {

    use StringNamespaceTrait;
    use WsdlProviderTrait;

    /**
     * Attributes.
     *
     * @var string[]|null
     */
    private $attributes;

    /**
     * Classname.
     *
     * @var string|null
     */
    private $classname;

    /**
     * Extends.
     *
     * @var string|null
     */
    private $extends;

    /**
     * Header.
     *
     * @var string|null
     */
    private $header;

    /**
     * Implements.
     *
     * @var string[]|null
     */
    private $implements;

    /**
     * Types.
     *
     * @var array<string,string>|null
     */
    private $types;

    /**
     * Uses.
     *
     * @var string[]|null
     */
    private $uses;

    /**
     * Constructor.
     *
     * @param AbstractNode $node The node.
     */
    public function __construct(AbstractNode $node) {
        parent::__construct($node);

        $this->setAttributes([]);
        $this->setImplements([]);
        $this->setTypes([]);
        $this->setUses([]);
    }

    /**
     * Add an attribute.
     *
     * @param string $attribute The attribute.
     * @return ClassBuilder Returns this class builder.
     */
    public function addAttribute(string $attribute): ClassBuilder {
        $this->attributes[] = $attribute;
        return $this;
    }

    /**
     * Add an implement.
     *
     * @param string $implement The implement.
     * @return ClassBuilder Returns this class builder.
     */
    public function addImplement(string $implement): ClassBuilder {

        if (false === in_array($implement, $this->implements)) {
            $this->implements[] = $implement;
        }

        return $this;
    }

    /**
     * Add a type.
     *
     * @param string $type The type.
     * @return ClassBuilder Returns this class builder.
     */
    public function addType(string $attribute, string $type): ClassBuilder {

        if (true === in_array($attribute, $this->attributes)) {
            $this->types[$attribute] = $type;
        }

        return $this;
    }

    /**
     * Add a use.
     *
     * @param string $use The use.
     * @return ClassBuilder Returns this class builder.
     */
    public function addUse(string $use): ClassBuilder {

        if (false === in_array($use, $this->uses)) {
            $this->uses[] = $use;
        }

        return $this;
    }

    /**
     * Get the attributes.
     *
     * @return string[] Returns the attributes.
     */
    public function getAttributes(): array {
        return $this->attributes;
    }

    /**
     * Get the classname.
     *
     * @return string|null Returns the classname.
     */
    public function getClassname(): ?string {
        return $this->classname;
    }

    /**
     * Get the extends.
     *
     * @return string|null Returns the extends.
     */
    public function getExtends(): ?string {
        return $this->extends;
    }

    /**
     * Get the header.
     *
     * @return string|null Returns the header.
     */
    public function getHeader(): ?string {
        return $this->header;
    }

    /**
     * Get the implements.
     *
     * @return string[] Returns the implements.
     */
    public function getImplements(): array {
        return $this->implements;
    }

    /**
     * Get the types.
     *
     * @return array<string,string> Returns the types.
     */
    public function getTypes(): array {
        return $this->types;
    }

    /**
     * Get the uses.
     *
     * @return string[] Returns the uses.
     */
    public function getUses(): array {
        return $this->uses;
    }

    /**
     * Load.
     *
     * @return ClassBuilder Returns this class builder.
     */
    public function load(): ClassBuilder {

        /** @var IndexedNode $node */
        $node = $this->getNode();

        $this->setClassname($node->getIndexName());
        $this->loadExtends();

        /** @var SElementNode[] $nodes */
        $nodes = $this->getNode()->getChildrenByNodeName(SElementNode::NODE_NAME, true);
        $this->loadAttributes($nodes);

        return $this;
    }

    /**
     * Load the attributes.
     *
     * @param SElementNode[] $nodes The nodes.
     * @return ClassBuilder Returns this class builder.
     */
    protected function loadAttributes(array $nodes): ClassBuilder {

        foreach ($nodes as $current) {

            $name = $current->getName();
            $type = $this->type2php($current->getType());

            if (null === $current->getMaxOccurs()) {
                $type .= "[]";
            }

            $this->addAttribute($name);
            $this->addType($name, $type);

            $use = $this->php2use($type);
            if (null !== $use) {
                $this->addUse($use);
            }
        }

        return $this;
    }

    /**
     * Load the extends.
     *
     * @return ClassBuilder Returns this class builder.
     */
    protected function loadExtends(): ClassBuilder {

        /** @var SExtensionNode[] $nodes */
        $nodes = $this->getNode()->getChildrenByNodeName(SExtensionNode::NODE_NAME, true);
        if (1 === count($nodes)) {

            $type = $this->type2php($nodes[0]->getBase());

            $this->setExtends($type);
        }

        return $this;
    }

    /**
     * Set the attributes.
     *
     * @param string[] $attributes The attributes.
     * @return ClassBuilder Returns this class builder.
     */
    protected function setAttributes(array $attributes): ClassBuilder {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * Set the classname.
     *
     * @param string|null $classname The classname.
     * @return ClassBuilder Returns this class builder.
     */
    public function setClassname(?string $classname): ClassBuilder {
        $this->classname = $classname;
        return $this;
    }

    /**
     * Set the extends.
     *
     * @param string|null $extends The extends.
     * @return ClassBuilder Returns this class builder.
     */
    public function setExtends(?string $extends): ClassBuilder {
        $this->extends = $extends;
        return $this;
    }

    /**
     * Set the header.
     *
     * @param string|null $header The header.
     * @return ClassBuilder Returns this class builder.
     */
    public function setHeader(?string $header): ClassBuilder {
        $this->header = $header;
        return $this;
    }

    /**
     * Set the implements.
     *
     * @param string[] $implements The implements.
     * @return ClassBuilder Returns this class builder.
     */
    protected function setImplements(array $implements): ClassBuilder {
        $this->implements = $implements;
        return $this;
    }

    /**
     * Set the types.
     *
     * @param array<string,string> $types The types.
     * @return ClassBuilder Returns this class builder.
     */
    protected function setTypes(array $types): ClassBuilder {
        $this->types = $types;
        return $this;
    }

    /**
     * Set the uses.
     *
     * @param string[] $uses The uses.
     * @return ClassBuilder Returns this class builder.
     */
    protected function setUses(array $uses): ClassBuilder {
        $this->uses = $uses;
        return $this;
    }

    /**
     * Sort.
     *
     * @return ClassBuilder Returns this class builder.
     */
    public function sort(): ClassBuilder {

        sort($this->uses);
        sort($this->implements);
        sort($this->attributes);

        return $this;
    }
}
