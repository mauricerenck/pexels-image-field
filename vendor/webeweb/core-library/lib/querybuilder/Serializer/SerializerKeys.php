<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\QueryBuilder\Serializer;

/**
 * Serializer keys.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Serializer
 */
interface SerializerKeys {

    /**
     * Serializer key "allow_empty_value".
     *
     * @var string
     */
    public const ALLOW_EMPTY_VALUE = "allow_empty_value";

    /**
     * Serializer key "callback".
     *
     * @var string
     */
    public const CALLBACK = "callback";

    /**
     * Serializer key "condition".
     *
     * @var string
     */
    public const CONDITION = "condition";

    /**
     * Serializer key "field".
     *
     * @var string
     */
    public const FIELD = "field";

    /**
     * Serializer key "format".
     *
     * @var string
     */
    public const FORMAT = "format";

    /**
     * Serializer key "id".
     *
     * @var string
     */
    public const ID = "id";

    /**
     * Serializer key "input".
     *
     * @var string
     */
    public const INPUT = "input";

    /**
     * Serializer key "label".
     *
     * @var string
     */
    public const LABEL = "label";

    /**
     * Serializer key "max".
     *
     * @var string
     */
    public const MAX = "max";

    /**
     * Serializer key "messages".
     *
     * @var string
     */
    public const MESSAGES = "messages";

    /**
     * Serializer key "min".
     *
     * @var string
     */
    public const MIN = "min";

    /**
     * Serializer key "multiple".
     *
     * @var string
     */
    public const MULTIPLE = "multiple";

    /**
     * Serializer key "operator".
     *
     * @var string
     */
    public const OPERATOR = "operator";

    /**
     * Serializer key "operators".
     *
     * @var string
     */
    public const OPERATORS = "operators";

    /**
     * Serializer key "rules".
     *
     * @var string
     */
    public const RULES = "rules";

    /**
     * Serializer key "step".
     *
     * @var string
     */
    public const STEP = "step";

    /**
     * Serializer key "type".
     *
     * @var string
     */
    public const TYPE = "type";

    /**
     * Serializer key "valid".
     *
     * @var string
     */
    public const VALID = "valid";

    /**
     * Serializer key "validation".
     *
     * @var string
     */
    public const VALIDATION = "validation";

    /**
     * Serializer key "value".
     *
     * @var string
     */
    public const VALUE = "value";

    /**
     * Serializer key "values".
     *
     * @var string
     */
    public const VALUES = "values";
}
