<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\QueryBuilder\Model;

/**
 * QueryBuilder type interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model
 */
interface QueryBuilderTypeInterface {

    /**
     * Type "boolean".
     *
     * @var string
     */
    public const TYPE_BOOLEAN = "boolean";

    /**
     * Type "date".
     *
     * @var string
     */
    public const TYPE_DATE = "date";

    /**
     * Type "datetime".
     *
     * @var string
     */
    public const TYPE_DATETIME = "datetime";

    /**
     * Type "double".
     *
     * @var string
     */
    public const TYPE_DOUBLE = "double";

    /**
     * Type "integer".
     *
     * @var string
     */
    public const TYPE_INTEGER = "integer";

    /**
     * Type "string".
     *
     * @var string
     */
    public const TYPE_STRING = "string";

    /**
     * Type "time".
     *
     * @var string
     */
    public const TYPE_TIME = "time";
}
