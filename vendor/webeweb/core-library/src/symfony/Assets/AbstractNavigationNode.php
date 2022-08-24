<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

use WBW\Library\Sorter\Model\AlphabeticalTreeNodeInterface;
use WBW\Library\Symfony\Serializer\JsonSerializer;
use WBW\Library\Traits\Booleans\BooleanActiveTrait;
use WBW\Library\Traits\Booleans\BooleanEnableTrait;
use WBW\Library\Traits\Booleans\BooleanVisibleTrait;
use WBW\Library\Traits\Strings\StringIconTrait;
use WBW\Library\Traits\Strings\StringIdTrait;
use WBW\Library\Traits\Strings\StringLabelTrait;
use WBW\Library\Traits\Strings\StringTargetTrait;
use WBW\Library\Traits\Strings\StringUriTrait;

/**
 * Abstract navigation node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 * @abstract
 */
abstract class AbstractNavigationNode implements NavigationNodeInterface {

    use BooleanActiveTrait;
    use BooleanEnableTrait;
    use BooleanVisibleTrait {
        setVisible as protected;
    }
    use StringIconTrait;
    use StringIdTrait {
        setId as protected;
    }
    use StringLabelTrait;
    use StringTargetTrait;
    use StringUriTrait;

    /**
     * Index.
     *
     * @var array
     */
    private $index;

    /**
     * Matcher.
     *
     * @var string|null
     */
    private $matcher;

    /**
     * Navigation nodes.
     *
     * @var AbstractNavigationNode[]
     */
    private $nodes;

    /**
     * Parent.
     *
     * @var AbstractNavigationNode|null
     */
    private $parent;

    /**
     * Constructor.
     *
     * @param string $label The label.
     * @param string|null $icon The icon.
     * @param string|null $uri The URI.
     * @param string|null $matcher The matcher.
     */
    protected function __construct(string $label, string $icon = null, string $uri = null, ?string $matcher = self::MATCHER_URL) {
        $this->setActive(false);
        $this->setEnable(false);
        $this->setIcon($icon);
        $this->setId(uniqid("nav"));
        $this->setIndex([]);
        $this->setLabel($label);
        $this->setMatcher($matcher);
        $this->setNodes([]);
        $this->setParent(null);
        $this->setTarget(null);
        $this->setUri($uri);
        $this->setVisible(true);
    }

    /**
     * {@inheritdoc}
     */
    public function addNode(NavigationNodeInterface $node): NavigationNodeInterface {
        $this->index[$node->getId()] = $this->size();
        $this->nodes[]               = $node->setParent($this);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function clearNodes(): NavigationNodeInterface {

        foreach ($this->getNodes() as $node) {
            $this->removeNode($node);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAlphabeticalTreeNodeLabel(): string {
        return $this->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getAlphabeticalTreeNodeParent(): ?AlphabeticalTreeNodeInterface {
        return $this->getParent();
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstNode(): ?NavigationNodeInterface {
        return $this->getNodeAt(0);
    }

    /**
     * {@inheritdoc}
     */
    public function getLastNode(): ?NavigationNodeInterface {
        return $this->getNodeAt($this->size() - 1);
    }

    /**
     * {@inheritdoc}
     */
    public function getMatcher(): ?string {
        return $this->matcher;
    }

    /**
     * {@inheritdoc}
     */
    public function getNodeAt(int $position): ?NavigationNodeInterface {

        if ($position < 0 || $this->size() <= $position) {
            return null;
        }

        return $this->getNodes()[$position];
    }

    /**
     * {@inheritdoc}
     */
    public function getNodeById(string $id, bool $recursively = false): ?NavigationNodeInterface {

        if (true === array_key_exists($id, $this->index)) {
            return $this->getNodeAt($this->index[$id]);
        }

        if (false === $recursively) {
            return null;
        }

        foreach ($this->getNodes() as $current) {

            $found = $current->getNodeById($id, true);
            if (null !== $found) {
                return $found;
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getNodes(): array {
        return $this->nodes;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent(): ?NavigationNodeInterface {
        return $this->parent;
    }

    /**
     * {@inheritdoc}
     */
    public function getTarget(): ?string {
        return $this->target;
    }

    /**
     * {@inheritdoc}
     */
    public function getUri(): ?string {
        return $this->uri;
    }

    /**
     * {@inheritdoc}
     */
    public function isDisplayable(): bool {

        if (true === $this->getEnable() && $this->getVisible()) {
            return true;
        }

        foreach ($this->getNodes() as $current) {

            if (true === $current->isDisplayable()) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeNavigationNode($this);
    }

    /**
     * {@inheritdoc}
     */
    public function removeNode(NavigationNodeInterface $node): NavigationNodeInterface {

        if (false === array_key_exists($node->getId(), $this->index)) {
            return $this;
        }

        unset($this->nodes[$this->index[$node->getId()]]);
        unset($this->index[$node->setParent(null)->getId()]);

        return $this;
    }

    /**
     * Set the index.
     *
     * @param array $index The index.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setIndex(array $index): AbstractNavigationNode {
        $this->index = $index;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setMatcher(?string $matcher): NavigationNodeInterface {
        $this->matcher = $matcher;
        return $this;
    }

    /**
     * Set the navigation nodes.
     *
     * @param AbstractNavigationNode[] $nodes The navigation nodes.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setNodes(array $nodes): AbstractNavigationNode {
        $this->nodes = $nodes;
        return $this;
    }

    /**
     * Set the parent.
     *
     * @param AbstractNavigationNode|null $parent The parent.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setParent(?AbstractNavigationNode $parent): AbstractNavigationNode {
        $this->parent = $parent;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setTarget(?string $target): NavigationNodeInterface {
        $this->target = $target;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setUri(?string $uri): NavigationNodeInterface {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param bool|null $visible Visible ?
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setVisible(?bool $visible): AbstractNavigationNode {
        $this->visible = $visible;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function size(): int {
        return count($this->getNodes());
    }
}
