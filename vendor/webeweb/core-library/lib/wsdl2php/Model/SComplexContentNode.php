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
 * s:complexContent node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class SComplexContentNode extends AbstractNode {

    /**
     * Node name.
     *
     * @var string
     */
    const NODE_NAME = "s:complexContent";

    /**
     * Mixed.
     *
     * @var bool|null
     */
    private $mixed;

    /**
     * Get the mixed.
     *
     * @return bool|null Returns the mixed.
     */
    public function getMixed(): ?bool {
        return $this->mixed;
    }

    /**
     * {@inheritDoc}
     */
    public function init(DOMNode $domNode): void {
        $this->setMixed($this->getAttributeValueBool($domNode, "mixed"));
    }

    /**
     * Set the mixed.
     *
     * @param bool|null $mixed The mixed.
     * @return SComplexContentNode Returns this s:complexContent node.
     */
    public function setMixed(?bool $mixed): SComplexContentNode {
        $this->mixed = $mixed;
        return $this;
    }

}
