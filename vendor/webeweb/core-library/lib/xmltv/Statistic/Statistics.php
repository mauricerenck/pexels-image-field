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

namespace WBW\Library\XmlTv\Statistic;

use DOMNode;

/**
 * Statistics.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Statistic
 */
class Statistics {

    /**
     * Statistics.
     *
     * @var Statistic[]
     */
    private $statistics;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setStatistics([]);
    }

    /**
     * Convert this statistics into a string representation.
     *
     * @return string Returns a string representation of this statistics.
     */
    public function __toString(): string {

        $output = [
            Statistic::HEADER_FORMAT,
            Statistic::TITLES_FORMAT,
            Statistic::HEADER_FORMAT,
        ];

        foreach ($this->getStatistics() as $current) {
            $output[] = $current->__toString();
        }

        $output[] = Statistic::HEADER_FORMAT;

        return implode("\n", $output);
    }

    /**
     * Get a statistic.
     *
     * @param string $key The key.
     * @return Statistic Returns the statistic.
     */
    protected function getStatistic(string $key): Statistic {
        if (false === array_key_exists($key, $this->statistics)) {
            $this->statistics[$key] = new Statistic();
        }
        return $this->statistics[$key];
    }

    /**
     * Get the statistics.
     *
     * @return Statistic[] Returns the statistics.
     */
    public function getStatistics(): array {
        return $this->statistics;
    }

    /**
     * Parse.
     *
     * @param DOMNode $domNode The DOM node.
     * @param DOMNode|null $parent The parent DOM node.
     * @return Statistics Returns this statistics.
     */
    public function parse(DOMNode $domNode, ?DOMNode $parent = null): Statistics {

        $key = null === $parent ? $domNode->nodeName : implode(">", [$parent->nodeName, $domNode->nodeName]);

        $statistic = $this->getStatistic($key);
        $statistic->add(trim($domNode->nodeValue));

        if (null === $parent) {
            $statistic->setNodeName($domNode->nodeName);
        } else {
            $statistic->setNodeName($parent->nodeName);
            $statistic->setAttrName($domNode->nodeName);
        }

        $this->parseAttributes($domNode);
        $this->parseChildNodes($domNode);

        return $this;
    }

    /**
     * Parse the attributes.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Statistics Returns this statistics.
     */
    protected function parseAttributes(DOMNode $domNode): Statistics {

        if (null === $domNode->attributes) {
            return $this;
        }

        /** @var DOMNode $current */
        foreach ($domNode->attributes as $current) {
            $this->parse($current, $domNode);
        }

        return $this;
    }

    /**
     * Parse the attributes.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Statistics Returns this statistics.
     */
    protected function parseChildNodes(DOMNode $domNode): Statistics {

        if (null === $domNode->childNodes) {
            return $this;
        }

        /** @var DOMNode $current */
        foreach ($domNode->childNodes as $current) {
            $this->parse($current);
        }

        return $this;
    }

    /**
     * Set the statistics.
     *
     * @param Statistic[] $statistics The statistics.
     * @return Statistics Returns this statistic.
     */
    protected function setStatistics(array $statistics): Statistics {
        $this->statistics = $statistics;
        return $this;
    }
}
