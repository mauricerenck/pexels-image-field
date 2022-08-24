<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types;

/**
 * Type interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types
 */
interface TypeInterface {

    /**
     * Type "array".
     *
     * @var int
     */
    const TYPE_ARRAY = 220;

    /**
     * Type "boolean".
     *
     * @var int
     */
    const TYPE_BOOLEAN = 254;

    /**
     * Type "date".
     *
     * @var int
     */
    const TYPE_DATE = 86;

    /**
     * Type "double".
     *
     * @var int
     */
    const TYPE_DOUBLE = 195;

    /**
     * Type "float".
     *
     * @var int
     */
    const TYPE_FLOAT = 179;

    /**
     * Type "integer".
     *
     * @var int
     */
    const TYPE_INTEGER = 308;

    /**
     * Type "number".
     *
     * @var int
     */
    const TYPE_NUMBER = 236;

    /**
     * Type "object".
     *
     * @var int
     */
    const TYPE_OBJECT = 204;

    /**
     * Type "resource".
     *
     * @var int
     */
    const TYPE_RESOURCE = 419;

    /**
     * Type "string".
     *
     * @var int
     */
    const TYPE_STRING = 261;

    /**
     * Type "timestamp".
     *
     * @var int
     */
    const TYPE_TIMESTAMP = 567;
}
