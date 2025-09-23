<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Component;

/**
 * Navigation node trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component
 */
trait NavigationNodeTrait {

    /**
     * Navigation node.
     *
     * @var NavigationNodeInterface|null
     */
    protected $navigationNode;

    /**
     * Get the navigation node.
     *
     * @return NavigationNodeInterface|null Returns the navigation node.
     */
    public function getNavigationNode(): ?NavigationNodeInterface {
        return $this->navigationNode;
    }

    /**
     * Set the navigation node.
     *
     * @param NavigationNodeInterface|null $navigationNode The navigation node.
     * @return self Returns this instance.
     */
    protected function setNavigationNode(?NavigationNodeInterface $navigationNode): self {
        $this->navigationNode = $navigationNode;
        return $this;
    }
}
