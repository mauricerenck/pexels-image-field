<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Sorter;

/**
 * Functor interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Sorter
 */
interface FunctorInterface {

    /**
     * Compare two values.
     *
     * @param mixed $a The first value to compare.
     * @param mixed $b The second value to compare.
     * @return bool Returns true if first value is less than second value.
     */
    public function compare($a, $b): bool;
}
