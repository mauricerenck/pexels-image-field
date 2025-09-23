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

namespace WBW\Library\Widget\Component\Navigation;

use WBW\Library\Widget\Component\AbstractNavigationNode;
use WBW\Library\Widget\Component\NavigationNodeInterface;

/**
 * Divider node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Navigation
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
     * {@inheritDoc}
     */
    public function addNode(NavigationNodeInterface $node): NavigationNodeInterface {
        return $this;
    }
}
