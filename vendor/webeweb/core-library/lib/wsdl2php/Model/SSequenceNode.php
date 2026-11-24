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

/**
 * s:sequence node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class SSequenceNode extends AbstractNode {

    /**
     * Node name.
     *
     * @var string
     */
    const NODE_NAME = "s:sequence";

    /**
     * {@inheritDoc}
     */
    public function init(DOMNode $domNode): void {
        // NOTHING TO DO
    }
}
