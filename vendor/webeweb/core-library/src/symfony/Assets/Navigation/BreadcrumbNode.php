<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets\Navigation;

use WBW\Library\Symfony\Assets\AbstractNavigationNode;

/**
 * Breadcrumb node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Navigation
 */
class BreadcrumbNode extends AbstractNavigationNode {

    /**
     * Constructor.
     *
     * @param string $label The label.
     * @param string|null $icon The icon.
     * @param string|null $uri The URI.
     * @param string $matcher The matcher.
     */
    public function __construct(string $label, string $icon = null, string $uri = null, string $matcher = self::MATCHER_URL) {
        parent::__construct($label, $icon, $uri, $matcher);

        $this->setVisible(false);
    }
}
