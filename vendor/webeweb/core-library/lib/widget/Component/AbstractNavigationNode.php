<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Component;

use WBW\Library\Common\Sorter\AlphabeticalNodeInterface;
use WBW\Library\Common\Traits\Booleans\BooleanActiveTrait;
use WBW\Library\Common\Traits\Booleans\BooleanEnableTrait;
use WBW\Library\Common\Traits\Booleans\BooleanVisibleTrait;
use WBW\Library\Common\Traits\Strings\StringIconTrait;
use WBW\Library\Common\Traits\Strings\StringIdTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;
use WBW\Library\Common\Traits\Strings\StringTargetTrait;
use WBW\Library\Common\Traits\Strings\StringUriTrait;
use WBW\Library\Widget\Serializer\Component\JsonSerializer;

/**
 * Abstract navigation node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component
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
     * @var array<string,int>
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
     * @var NavigationNodeInterface[]|null
     */
    private $nodes;

    /**
     * Parent.
     *
     * @var NavigationNodeInterface|null
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
     * {@inheritDoc}
     */
    public function addNode(NavigationNodeInterface $node): NavigationNodeInterface {

        $this->index[$node->getId()] = $this->size();

        $this->nodes[] = $node->setParent($this);
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function clearNodes(): NavigationNodeInterface {

        foreach ($this->getNodes() as $node) {
            $this->removeNode($node);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getAlphabeticalNodeLabel(): string {
        return $this->getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getAlphabeticalNodeParent(): ?AlphabeticalNodeInterface {
        return $this->getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstNode(): ?NavigationNodeInterface {
        return $this->getNodeAt(0);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastNode(): ?NavigationNodeInterface {
        return $this->getNodeAt($this->size() - 1);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatcher(): ?string {
        return $this->matcher;
    }

    /**
     * {@inheritDoc}
     */
    public function getNodeAt(int $position): ?NavigationNodeInterface {

        if ($position < 0 || $this->size() <= $position) {
            return null;
        }

        return $this->getNodes()[$position];
    }

    /**
     * {@inheritDoc}
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
     * {@inheritDoc}
     */
    public function getNodes(): array {
        return $this->nodes;
    }

    /**
     * {@inheritDoc}
     */
    public function getParent(): ?NavigationNodeInterface {
        return $this->parent;
    }

    /**
     * {@inheritDoc}
     */
    public function getTarget(): ?string {
        return $this->target;
    }

    /**
     * {@inheritDoc}
     */
    public function getUri(): ?string {
        return $this->uri;
    }

    /**
     * {@inheritDoc}
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
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeNavigationNode($this);
    }

    /**
     * {@inheritDoc}
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
     * @param array<string,int> $index The index.
     * @return NavigationNodeInterface Returns this navigation node.
     */
    protected function setIndex(array $index): NavigationNodeInterface {
        $this->index = $index;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setMatcher(?string $matcher): NavigationNodeInterface {
        $this->matcher = $matcher;
        return $this;
    }

    /**
     * Set the navigation nodes.
     *
     * @param NavigationNodeInterface[] $nodes The navigation nodes.
     * @return NavigationNodeInterface Returns this navigation node.
     */
    protected function setNodes(array $nodes): NavigationNodeInterface {
        $this->nodes = $nodes;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(?NavigationNodeInterface $parent): NavigationNodeInterface {
        $this->parent = $parent;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setTarget(?string $target): NavigationNodeInterface {
        $this->target = $target;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setUri(?string $uri): NavigationNodeInterface {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param bool|null $visible Visible ?
     * @return NavigationNodeInterface Returns this navigation node.
     */
    protected function setVisible(?bool $visible): NavigationNodeInterface {
        $this->visible = $visible;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function size(): int {
        return count($this->getNodes());
    }
}
