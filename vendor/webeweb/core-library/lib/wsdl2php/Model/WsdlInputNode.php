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
use WBW\Library\Common\Traits\Strings\StringMessageTrait;

/**
 * wsdl:input node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class WsdlInputNode extends AbstractNode implements IndexedNode {

    use StringMessageTrait;

    /**
     * Node name.
     *
     * @var string|null
     */
    const NODE_NAME = "wsdl:input";

    /**
     * {@inheritDoc}
     */
    public function getIndexName(): ?string {

        if (null === $this->getMessage()) {
            return null;
        }

        return explode(":", $this->getMessage())[1];
    }

    /**
     * {@inheritDoc}
     */
    public function init(DOMNode $domNode): void {
        $this->setMessage($this->getAttributeValue($domNode, "message"));
    }
}
