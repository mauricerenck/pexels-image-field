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

namespace WBW\Library\Common\Helper;

use DateTime;
use InvalidArgumentException;
use WBW\Library\Common\Exception\DateArgumentException;
use WBW\Library\Common\Exception\TimestampArgumentException;

/**
 * Type helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Helper
 */
class TypeHelper {

    /**
     * Type "array".
     *
     * @var int
     */
    public const TYPE_ARRAY = 220;

    /**
     * Type "boolean".
     *
     * @var int
     */
    public const TYPE_BOOLEAN = 254;

    /**
     * Type "date".
     *
     * @var int
     */
    public const TYPE_DATE = 86;

    /**
     * Type "double".
     *
     * @var int
     */
    public const TYPE_DOUBLE = 195;

    /**
     * Type "float".
     *
     * @var int
     */
    public const TYPE_FLOAT = 179;

    /**
     * Type "integer".
     *
     * @var int
     */
    public const TYPE_INTEGER = 308;

    /**
     * Type "number".
     *
     * @var int
     */
    public const TYPE_NUMBER = 236;

    /**
     * Type "object".
     *
     * @var int
     */
    public const TYPE_OBJECT = 204;

    /**
     * Type "resource".
     *
     * @var int
     */
    public const TYPE_RESOURCE = 419;

    /**
     * Type "string".
     *
     * @var int
     */
    public const TYPE_STRING = 261;

    /**
     * Type "timestamp".
     *
     * @var int
     */
    public const TYPE_TIMESTAMP = 567;

    /**
     * Determine if the $value is of type $type.
     *
     * @param mixed $value The value.
     * @param int $type The type.
     * @return bool Returns true.
     * @throws InvalidArgumentException Throws an invalid type exception.
     */
    public static function isTypeOf($value, int $type): bool {

        switch ($type) {

            case self::TYPE_ARRAY:
                ArrayHelper::isArray($value);
                return true;

            case self::TYPE_BOOLEAN:
                BooleanHelper::isBoolean($value);
                return true;

            case self::TYPE_DATE:
                DateTimeHelper::isDate($value);
                return true;

            case self::TYPE_DOUBLE:
                DoubleHelper::isDouble($value);
                return true;

            case self::TYPE_FLOAT:
                FloatHelper::isFloat($value);
                return true;

            case self::TYPE_INTEGER:
                IntegerHelper::isInteger($value);
                return true;

            case self::TYPE_NUMBER:
                NumberHelper::isNumber($value);
                return true;

            case self::TYPE_OBJECT:
                ObjectHelper::isObject($value);
                return true;

            case self::TYPE_RESOURCE:
                ResourceHelper::isResource($value);
                return true;

            case self::TYPE_STRING:
                StringHelper::isString($value);
                return true;

            case self::TYPE_TIMESTAMP:
                TimestampHelper::isTimestamp($value);
                return true;
        }

        throw new InvalidArgumentException("The type \"$type\" is not implemented");
    }

    /**
     * Transform a string value into type $type.
     *
     * @param string|null $value The string value.
     * @param int $type The type.
     * @param string|null $dateFormat The date format.
     * @return mixed Returns the value.
     * @throws InvalidArgumentException Throws an invalid type exception.
     */
    public static function transform(?string $value, int $type, string $dateFormat = null) {

        switch ($type) {

            case self::TYPE_BOOLEAN:
                return BooleanHelper::parseString($value);

            case self::TYPE_DATE:
            case self::TYPE_TIMESTAMP:

                if (null === $dateFormat) {
                    throw new InvalidArgumentException("The date/time format is null");
                }

                $datetime = DateTime::createFromFormat($dateFormat, $value);

                if (false === $datetime) {

                    if (self::TYPE_DATE === $type) {
                        throw new DateArgumentException($value);
                    }

                    if (self::TYPE_TIMESTAMP === $type) {
                        throw new TimestampArgumentException($value);
                    }
                }

                return $datetime;

            case self::TYPE_DOUBLE:
                return DoubleHelper::parseString($value);

            case self::TYPE_FLOAT:
                return FloatHelper::parseString($value);

            case self::TYPE_INTEGER:
                return IntegerHelper::parseString($value);

            case self::TYPE_STRING:
                return $value;
        }

        throw new InvalidArgumentException("The type \"$type\" is not implemented");
    }
}
