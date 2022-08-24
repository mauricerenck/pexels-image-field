<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Maths\Helper;

/**
 * NIR helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Helper
 */
class NirHelper {

    /**
     * Check.
     *
     * @param string|null $nir The NIR.
     * @return bool|null Returns true in case of success, false otherwise.
     */
    public static function check(?string $nir): ?bool {

        if (null === $nir || 15 !== strlen($nir)) {
            return null;
        }

        $sex = intval(substr($nir, 0, 1));
        $mth = intval(substr($nir, 3, 2));

        if (false === in_array($sex, [1, 2]) || $mth < 1 || 12 < $mth) {
            return null;
        }

        $nbr = substr($nir, 0, 13);
        $key = substr($nir, 13, 2);

        return $key === static::key($nbr);
    }

    /**
     * Key.
     *
     * @param string|null $nbr The number.
     * @return string|null Returns the key in case of success, null otherwise.
     */
    public static function key(?string $nbr): ?string {

        if (13 !== strlen($nbr)) {
            return null;
        }

        return 97 - intval($nbr) % 97;
    }
}
