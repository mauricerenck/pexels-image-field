<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Helper;

use DOMNode;
use DOMNodeList;

/**
 * XML deserializer helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Helper
 */
class XmlDeserializerHelper extends SerializerHelper {

    /**
     * Get a child DOM node text content.
     *
     * @param DOMNode $domNode The DOM node.
     * @param string $nodeName The node name.
     * @return string|null Returns the text content in case of success, null otherwise.
     */
    public static function getChildDomNodeTextContent(DOMNode $domNode, string $nodeName): ?string {

        $domNode = static::getDOMNodeByName($nodeName, $domNode->childNodes);
        if (null === $domNode) {
            return null;
        }

        return trim($domNode->textContent);
    }

    /**
     * Get a DOM node attribute value.
     *
     * @param DOMNode $domNode The DOM node.
     * @param string $attributeName The attribute name.
     * @return string|null Returns the attribute value in case of success, null otherwise.
     */
    public static function getDomNodeAttributeValue(DOMNode $domNode, string $attributeName): ?string {

        if (null === $domNode->attributes || null === $domNode->attributes->getNamedItem($attributeName)) {
            return null;
        }

        $attribute = $domNode->attributes->getNamedItem($attributeName);

        return trim($attribute->nodeValue);
    }

    /**
     * Get a DOM node by name.
     *
     * @param string $nodeName The node name.
     * @param DOMNodeList|null $domNodeList The DOM node list.
     * @return DOMNode|null Returns the DOM node in case of success, null otherwise.
     */
    public static function getDomNodeByName(string $nodeName, DOMNodeList $domNodeList = null): ?DOMNode {

        $domNodes = static::getDomNodesByName($nodeName, $domNodeList);
        if (1 !== count($domNodes)) {
            return null;
        }

        return $domNodes[0];
    }

    /**
     * Get the DOM nodes by name.
     *
     * @param string $nodeName The node name.
     * @param DOMNodeList|null $domNodeList The DOM node list.
     * @return DOMNode[] Returns the DOM nodes.
     */
    public static function getDomNodesByName(string $nodeName, DOMNodeList $domNodeList = null): array {

        if (null === $domNodeList) {
            return [];
        }

        $domNodes = [];

        /** @var DOMNode $current */
        foreach ($domNodeList as $current) {

            if ($nodeName === $current->nodeName) {
                $domNodes[] = $current;
            }
        }

        return $domNodes;
    }

    /**
     * Log.
     *
     * @param DOMNode $domNode The DOM node.
     * @return void
     */
    public static function log(DOMNode $domNode): void {

        if (null === static::getLogger()) {
            return;
        }

        $context = [];

        /** @var DOMNode $current */
        foreach ($domNode->attributes as $current) {
            $context["_attributes"][] = [$current->nodeName => $current->nodeValue];
        }

        /** @var DOMNode $current */
        foreach ($domNode->childNodes as $current) {
            $context["_childNodes"][] = $current->nodeName;
        }

        static::$logger->debug(sprintf('Deserialize a DOM node with name "%s"', $domNode->nodeName), $context);
    }

    /**
     * Convert XML entities.
     *
     * @param string $filename The filename.
     * @param string $encoding The encoding.
     * @return string Returns the converted XML entities.
     */
    public static function xmlEntities(string $filename, string $encoding = "utf-8"): string {

        $pattern  = "/(<[A-Za-z_]*>)(.*)(<\/[A-Za-z_]*>)/";
        $content  = file_get_contents($filename);
        $callback = function($matches) use ($encoding): string {

            $output = [
                $matches[1],
                htmlentities($matches[2], ENT_XML1 | ENT_QUOTES, $encoding),
                $matches[3],
            ];

            return implode("", $output);
        };

        return preg_replace_callback($pattern, $callback, $content);
    }
}
