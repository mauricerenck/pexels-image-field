<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

use JsonSerializable;
use WBW\Library\Sorter\Model\AlphabeticalTreeNodeInterface;

/**
 * Abstract navigation node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 * @abstract
 */
interface NavigationNodeInterface extends AlphabeticalTreeNodeInterface, JsonSerializable {

    /**
     * Default HREF.
     *
     * @var string
     */
    const DEFAULT_HREF = "javascript: void(0);";

    /**
     * Matcher "regular expression".
     *
     * @var string
     */
    const MATCHER_REGEXP = "regexp";

    /**
     * Matcher "router".
     *
     * @var string
     */
    const MATCHER_ROUTER = "router";

    /**
     * Matcher "URL".
     *
     * @var string
     */
    const MATCHER_URL = "url";

    /**
     * Add a navigation node.
     *
     * @param NavigationNodeInterface $node The navigation node.
     * @return NavigationNodeInterface Returns this navigation node.
     */
    public function addNode(NavigationNodeInterface $node): NavigationNodeInterface;

    /**
     * Clear the navigation nodes.
     *
     * @return NavigationNodeInterface Returns this navigation node.
     */
    public function clearNodes(): NavigationNodeInterface;

    /**
     * Get the active.
     *
     * @return bool|null Returns the active.
     */
    public function getActive(): ?bool;

    /**
     * Get the enable.
     *
     * @return bool|null Returns the enable.
     */
    public function getEnable(): ?bool;

    /**
     * Get the first navigation node.
     *
     * @return NavigationNodeInterface|null Returns the first navigation node in case of success, null otherwise.
     */
    public function getFirstNode(): ?NavigationNodeInterface;

    /**
     * Get the icon.
     *
     * @return string|null Returns the icon.
     */
    public function getIcon(): ?string;

    /**
     * Get the id.
     *
     * @return string|null Returns the id.
     */
    public function getId(): ?string;

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getLabel(): ?string;

    /**
     * Get the last navigation node.
     *
     * @return NavigationNodeInterface|null Returns the last navigation node in case of success, null otherwise.
     */
    public function getLastNode(): ?NavigationNodeInterface;

    /**
     * Get the matcher.
     *
     * @return string|null Returns the matcher.
     */
    public function getMatcher(): ?string;

    /**
     * Get a navigation node at.
     *
     * @param int $position The position.
     * @return NavigationNodeInterface|null Returns the navigation node in case of success, null otherwise.
     */
    public function getNodeAt(int $position): ?NavigationNodeInterface;

    /**
     * Get a navigation node by id.
     *
     * @param string $id The id.
     * @param bool $recursively Recursively ?
     * @return NavigationNodeInterface|null Returns the navigation node in case of success, null otherwise.
     */
    public function getNodeById(string $id, bool $recursively = false): ?NavigationNodeInterface;

    /**
     * Get the navigation nodes.
     *
     * @return NavigationNodeInterface[] Returns the navigation nodes.
     */
    public function getNodes(): array;

    /**
     * Get the parent.
     *
     * @return NavigationNodeInterface|null Returns the parent.
     */
    public function getParent(): ?NavigationNodeInterface;

    /**
     * Get the target.
     *
     * @return string|null Returns the target.
     */
    public function getTarget(): ?string;

    /**
     * Get the URI.
     *
     * @return string|null Returns the URI.
     */
    public function getUri(): ?string;

    /**
     * Get the visible.
     *
     * @return bool|null Returns the visible.
     */
    public function getVisible(): ?bool;

    /**
     * Determines if this node is displayable.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function isDisplayable(): bool;

    /**
     * Remove a navigation node.
     *
     * @param NavigationNodeInterface $node The navigation node.
     * @return NavigationNodeInterface Returns this navigation node.
     */
    public function removeNode(NavigationNodeInterface $node): NavigationNodeInterface;

    /**
     * Set the active.
     *
     * @param bool|null $active Active ?
     * @return NavigationNodeInterface Returns this navigation node.
     */
    public function setActive(?bool $active);

    /**
     * Set the enable.
     *
     * @param bool|null $enable Enable ?
     * @return NavigationNodeInterface Returns this navigation node.
     */
    public function setEnable(?bool $enable);

    /**
     * Set the icon.
     *
     * @param string|null $icon The icon.
     * @return NavigationNodeInterface Returns this navigation node.
     */
    public function setIcon(?string $icon);

    /**
     * Set the label.
     *
     * @param string|null $label The label.
     * @return NavigationNodeInterface Returns this navigation node.
     */
    public function setLabel(?string $label);

    /**
     * Set the mather.
     *
     * @param string|null $matcher The matcher.
     * @return NavigationNodeInterface Returns this navigation node.
     */
    public function setMatcher(?string $matcher): NavigationNodeInterface;

    /**
     * Set the target.
     *
     * @param string|null $target The target.
     * @return NavigationNodeInterface Returns this navigation node.
     */
    public function setTarget(?string $target);

    /**
     * Set the URI.
     *
     * @param string|null $uri The URI.
     * @return NavigationNodeInterface Returns this navigation node.
     */
    public function setUri(?string $uri);

    /**
     * Size.
     *
     * @return int Returns the size.
     */
    public function size(): int;
}
