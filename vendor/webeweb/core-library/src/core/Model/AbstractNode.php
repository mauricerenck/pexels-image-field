<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model;

/**
 * Abstract node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Model
 * @abstract
 */
abstract class AbstractNode {

    /**
     * Id.
     *
     * @var string
     */
    private $id;

    /**
     * Index.
     *
     * @var array
     */
    private $index;

    /**
     * Children nodes.
     *
     * @var AbstractNode[]
     */
    private $nodes;

    /**
     * Parent node.
     *
     * @var AbstractNode
     */
    private $parent;

    /**
     * Constructor.
     *
     * @param string $id The id.
     */
    protected function __construct(string $id) {
        $this->setId($id);
        $this->setIndex([]);
        $this->setNodes([]);
    }

    /**
     * Add a children node.
     *
     * @param AbstractNode $node The children node.
     * @return AbstractNode Returns this node.
     */
    public function addNode(AbstractNode $node): AbstractNode {
        $node->parent           = $this;
        $this->index[$node->id] = count($this->nodes);
        $this->nodes[]          = $node;
        return $this;
    }

    /**
     * Clear the nodes.
     *
     * @return AbstractNode Returns this node.
     */
    public function clearNodes(): AbstractNode {

        foreach ($this->nodes as $node) {
            $this->removeNode($node);
        }

        return $this;
    }

    /**
     * Get the first children node.
     *
     * @return AbstractNode|null Returns the first node in case of success, null otherwise.
     */
    public function getFirstNode(): ?AbstractNode {
        return $this->getNodeAt(0);
    }

    /**
     * Get the id.
     *
     * @return string Returns the id.
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * Get the last children node.
     *
     * @return AbstractNode|null Returns the last node in case of success, null otherwise.
     */
    public function getLastNode(): ?AbstractNode {
        return $this->getNodeAt(count($this->nodes) - 1);
    }

    /**
     * Get a node at position.
     *
     * @param int $position The position.
     * @return AbstractNode|null Returns the node in case of success, null otherwise.
     */
    public function getNodeAt(int $position): ?AbstractNode {

        if (0 <= $position && $position <= count($this->nodes) - 1) {
            return $this->nodes[$position];
        }

        return null;
    }

    /**
     * Get a node by id.
     *
     * @param string $id The id.
     * @param bool $recursively Recursively ?
     * @return AbstractNode|null Returns a node in case of success, null otherwise.
     */
    public function getNodeById(string $id, bool $recursively = false): ?AbstractNode {

        $found = null;

        if (true === array_key_exists($id, $this->index)) {
            $found = $this->getNodeAt($this->index[$id]);
        }

        if (null === $found && true === $recursively) {

            foreach ($this->nodes as $current) {

                $found = $current->getNodeById($id, true);
                if (null !== $found) {
                    break;
                }
            }
        }

        return $found;
    }

    /**
     * Get the nodes.
     *
     * @return AbstractNode[] Returns the nodes.
     */
    public function getNodes(): array {
        return $this->nodes;
    }

    /**
     * Get the parent.
     *
     * @return AbstractNode Returns the parent.
     */
    public function getParent(): ?AbstractNode {
        return $this->parent;
    }

    /**
     * Remove a node.
     *
     * @param AbstractNode $node The children node.
     * @return AbstractNode Returns this node.
     */
    public function removeNode(AbstractNode $node): AbstractNode {

        if (true === array_key_exists($node->id, $this->index)) {
            unset($this->nodes[$this->index[$node->id]]);
            unset($this->index[$node->id]);
            $node->parent = null;
        }

        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return AbstractNode Returns this node.
     */
    protected function setId(string $id): AbstractNode {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the index.
     *
     * @param array $index The index.
     * @return AbstractNode Returns this node.
     */
    protected function setIndex(array $index): AbstractNode {
        $this->index = $index;
        return $this;
    }

    /**
     * Set the nodes.
     *
     * @param AbstractNode[] $nodes The nodes.
     * @return AbstractNode Returns this node.
     */
    protected function setNodes(array $nodes): AbstractNode {
        $this->nodes = $nodes;
        return $this;
    }

    /**
     * Set the parent.
     *
     * @param AbstractNode|null $parent The parent.
     * @return AbstractNode Returns this node.
     */
    protected function setParent(AbstractNode $parent = null): AbstractNode {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Size.
     *
     * @return int Returns the size.
     */
    public function size(): int {
        return count($this->nodes);
    }
}
