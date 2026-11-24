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
use WBW\Library\Common\Traits\Strings\StringNameTrait;

/**
 * wsdl:message node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class WsdlMessageNode extends AbstractNode implements IndexedNode {

    use StringNameTrait;

    /**
     * Node name.
     *
     * @var string
     */
    const NODE_NAME = "wsdl:message";

    /**
     * {@inheritDoc}
     */
    public function getIndexName(): ?string {
        return $this->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function init(DOMNode $domNode): void {
        $this->setName($this->getAttributeValue($domNode, "name"));
    }
}
