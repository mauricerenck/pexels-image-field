<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Wsdl2Php\Builder;

use WBW\Library\Wsdl2Php\Model\AbstractNode;

/**
 * Abstract builder.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Builder
 * @abstract
 */
abstract class AbstractBuilder {

    /**
     * Node.
     *
     * @var AbstractNode|null
     */
    private $node;

    /**
     * Constructor.
     *
     * @param AbstractNode $node The node.
     */
    public function __construct(AbstractNode $node) {
        $this->setNode($node);
    }

    /**
     * Get the node.
     *
     * @return AbstractNode Returns the node.
     */
    public function getNode(): AbstractNode {
        return $this->node;
    }

    /**
     * Determine if a type is a PHP array.
     *
     * @param string $type The type.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function isPhpArray(string $type): bool {
        return 1 === preg_match("/\[\]$/", $type);
    }

    /**
     * Convert a PHP type into PHP use.
     *
     * @param string|null $type The type.
     * @return string|null Returns the type.
     */
    protected function php2use(?string $type): ?string {

        if (null === $type) {
            return null;
        }

        $type = preg_replace("/\[\]/", "", $type);
        switch ($type) {

            case "bool":
            case "float":
            case "mixed":
            case "int":
            case "string":
                return null;

            case "DateTime":
                return "DateTime";

            default:
                return $type;
        }
    }

    /**
     * Set the node.
     *
     * @param AbstractNode $node The node.
     * @return AbstractBuilder Returns this builder.
     */
    protected function setNode(AbstractNode $node): AbstractBuilder {
        $this->node = $node;
        return $this;
    }

    /**
     * Convert an XML type into PHP type.
     *
     * @param string|null $type The type.
     * @return string|null Returns the type.
     */
    protected function type2php(?string $type): ?string {

        if (null === $type) {
            return "mixed";
        }

        $types = explode(":", $type);
        if (2 !== count($types)) {
            return null;
        }

        switch ($types[1]) {

            case "base64Binary":
            case "unsignedByte":
                return "string";

            case "boolean":
                return "bool";

            case "dateTime":
                return "DateTime";

            case "double":
                return "float";

            case "int":
            case "string":
            default:
                return $types[1];
        }
    }
}
