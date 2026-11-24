<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Sorter;

/**
 * Alphabetical node helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Sorter
 */
class AlphabeticalNodeHelper {

    /**
     * Create the choices.
     *
     * @param AlphabeticalNodeInterface[] $choices The choices.
     * @return array<string,AlphabeticalNodeInterface[]> Returns the choices.
     */
    public static function createChoices(array $choices): array {

        $output = [];

        $sorter = new AlphabeticalTreeSort($choices);
        $sorter->sort();

        foreach ($sorter->getNodes() as $current) {

            $path = static::getPath($current);

            if (false === array_key_exists($path[0]->getAlphabeticalNodeLabel(), $output)) {
                $output[$current->getAlphabeticalNodeLabel()] = [];
            }

            if (1 !== count($path)) {
                $output[$path[0]->getAlphabeticalNodeLabel()][] = $current;
            }
        }

        return $output;
    }

    /**
     * Get the level.
     *
     * @param AlphabeticalNodeInterface $node The node.
     * @return int Returns the level.
     */
    public static function getLevel(AlphabeticalNodeInterface $node): int {
        return count(static::getPath($node)) - 1;
    }

    /**
     * Get the path.
     *
     * @param AlphabeticalNodeInterface $node The node.
     * @return AlphabeticalNodeInterface[] Returns the path.
     */
    public static function getPath(AlphabeticalNodeInterface $node): array {

        $path = [];

        $current = $node;

        do {
            array_unshift($path, $current);
            $current = $current->getAlphabeticalNodeParent();
        } while (null !== $current);

        return $path;
    }

    /**
     * Remove orphan.
     *
     * @param AlphabeticalNodeInterface[] $nodes The nodes.
     * @return void
     */
    public static function removeOrphan(array &$nodes = []): void {

        do {

            $found = false;

            foreach ($nodes as $k => $v) {

                if (true === ($v instanceof AlphabeticalNodeInterface) && null !== $v->getAlphabeticalNodeParent() && false === in_array($v->getAlphabeticalNodeParent(), $nodes)) {
                    unset($nodes[$k]);
                    $found = true;
                }
            }
        } while (true === $found);
    }

    /**
     * Sort.
     *
     * @param AlphabeticalNodeInterface[] $nodes The nodes.
     * @return AlphabeticalNodeInterface[] Returns the sorted nodes.
     */
    public static function sort(array $nodes): array {

        $sorter = new AlphabeticalTreeSort($nodes);
        $sorter->sort();

        return $sorter->getNodes();
    }
}
