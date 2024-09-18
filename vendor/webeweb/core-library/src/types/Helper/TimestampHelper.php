<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Helper;

use WBW\Library\Types\Exception\TimestampArgumentException;

/**
 * Timestamp helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Helper
 */
class TimestampHelper {

    /**
     * Determine if a value is a timestamp.
     *
     * @param mixed $value The value.
     * @return void
     * @throws TimestampArgumentException Throws a timestamp argument exception if the value is not of expected type.
     */
    public static function isTimestamp($value): void {

        if (null === $value || false === strtotime($value)) {
            throw new TimestampArgumentException($value);
        }
    }
}
