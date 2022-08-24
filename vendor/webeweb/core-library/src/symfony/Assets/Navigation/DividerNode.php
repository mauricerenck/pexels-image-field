<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets\Navigation;

use WBW\Library\Symfony\Assets\AbstractNavigationNode;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;

/**
 * Divider node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Navigation
 */
class DividerNode extends AbstractNavigationNode {

    /**
     * Constructor.
     *
     * @param string $label The label.
     * @param string|null $icon The icon.
     */
    public function __construct(string $label, string $icon = null) {
        parent::__construct($label, $icon, null, null);

        $this->setEnable(true);
    }

    /**
     * {@inheritdoc}
     */
    public function addNode(NavigationNodeInterface $node): NavigationNodeInterface {
        return $this;
    }
}
