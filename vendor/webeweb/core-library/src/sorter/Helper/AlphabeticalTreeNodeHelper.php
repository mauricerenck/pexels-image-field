<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Sorter\Helper;

use WBW\Library\Sorter\AlphabeticalTreeSort;
use WBW\Library\Sorter\Model\AlphabeticalTreeNodeInterface;

/**
 * Alphabetical tree node helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Sorter\Helper
 */
class AlphabeticalTreeNodeHelper {

    /**
     * Creates the choices.
     *
     * @param AlphabeticalTreeNodeInterface[] $choices The choices.
     * @return array Returns the choices.
     */
    public static function createChoices(array $choices): array {

        $output = [];

        $sorter = new AlphabeticalTreeSort($choices);
        $sorter->sort();

        foreach ($sorter->getNodes() as $current) {

            $path = static::getPath($current);

            if (false === array_key_exists($path[0]->getAlphabeticalTreeNodeLabel(), $output)) {
                $output[$current->getAlphabeticalTreeNodeLabel()] = [];
            }

            if (1 !== count($path)) {
                $output[$path[0]->getAlphabeticalTreeNodeLabel()][] = $current;
            }
        }

        return $output;
    }

    /**
     * Get the level.
     *
     * @param AlphabeticalTreeNodeInterface $node The node.
     * @return int Returns the level.
     */
    public static function getLevel(AlphabeticalTreeNodeInterface $node): int {
        return count(static::getPath($node)) - 1;
    }

    /**
     * Get the path.
     *
     * @param AlphabeticalTreeNodeInterface $node The node.
     * @return array Returns the path.
     */
    public static function getPath(AlphabeticalTreeNodeInterface $node): array {

        $path = [];

        $current = $node;

        do {
            array_unshift($path, $current);
            $current = $current->getAlphabeticalTreeNodeParent();
        } while (null !== $current);

        return $path;
    }

    /**
     * Remove orphan.
     *
     * @param AlphabeticalTreeNodeInterface[] $nodes The nodes.
     * @return void
     */
    public static function removeOrphan(array &$nodes = []): void {

        do {

            $found = false;

            foreach ($nodes as $k => $v) {

                if (true === ($v instanceof AlphabeticalTreeNodeInterface) && null !== $v->getAlphabeticalTreeNodeParent() && false === in_array($v->getAlphabeticalTreeNodeParent(), $nodes)) {
                    unset($nodes[$k]);
                    $found = true;
                }
            }
        } while (true === $found);
    }

    /**
     * Sort.
     *
     * @param array $nodes The nodes.
     * @return array Returns the sorted nodes.
     */
    public static function sort(array $nodes): array {

        $sorter = new AlphabeticalTreeSort($nodes);
        $sorter->sort();

        return $sorter->getNodes();
    }
}
