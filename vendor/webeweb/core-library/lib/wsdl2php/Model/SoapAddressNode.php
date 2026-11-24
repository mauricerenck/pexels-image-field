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
 * soap:address node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Model
 */
class SoapAddressNode extends AbstractNode {

    /**
     * Node name.
     *
     * @var string
     */
    const NODE_NAME = "soap:address";

    /**
     * Location.
     *
     * @var string|null
     */
    private $location;

    /**
     * Get the location.
     *
     * @return string|null Returns the location.
     */
    public function getLocation(): ?string {
        return $this->location;
    }

    /**
     * {@inheritDoc}
     */
    public function init(DOMNode $domNode): void {
        $this->setLocation($this->getAttributeValue($domNode, "location"));
    }

    /**
     * Set the location.
     *
     * @param string|null $location The location.
     * @return SoapAddressNode Returns this soap:address node.
     */
    public function setLocation(?string $location): SoapAddressNode {
        $this->location = $location;
        return $this;
    }
}
