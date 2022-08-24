<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Renderer\Strings;

/**
 * String wrapper trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Renderer\Strings
 */
trait StringWrapperTrait {

    /**
     * Wrap a string.
     *
     * @param string|null $str The string.
     * @param string|null $prefix The prefix.
     * @param string|null $suffix The suffix.
     * @return string|null Returns the wrapped string.
     */
    protected function wrapString(?string $str, ?string $prefix, ?string $suffix): ?string {

        if (null === $str) {
            return null;
        }

        $output = [
            $str,
        ];

        if (null !== $prefix) {
            array_unshift($output, $prefix);
        }
        if (null !== $suffix) {
            $output[] = $suffix;
        }

        return implode("", $output);
    }
}
