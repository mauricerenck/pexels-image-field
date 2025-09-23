<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\QueryBuilder\Factory;

use InvalidArgumentException;
use WBW\Library\Common\Helper\ArrayHelper;
use WBW\Library\QueryBuilder\Model\QueryBuilderDecoratorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderOperatorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;

/**
 * QueryBuilder factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Factory
 */
class QueryBuilderFactory {

    /**
     * Namespace.
     *
     * @var string
     */
    protected const NAMESPACE = "WBW\\Library\\QueryBuilder\\Model";

    /**
     * Enumerate the QueryBuilder operators.
     *
     * @return array<string,string> Returns the QueryBuilder operators.
     */
    protected static function enumQueryBuilderOperators(): array {

        return [
            QueryBuilderOperatorInterface::OPERATOR_BEGINS_WITH      => self::NAMESPACE . "\\Operator\\BeginsWithQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_BETWEEN          => self::NAMESPACE . "\\Operator\\BetweenQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_CONTAINS         => self::NAMESPACE . "\\Operator\\ContainsQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_ENDS_WITH        => self::NAMESPACE . "\\Operator\\EndsWithQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_EQUAL            => self::NAMESPACE . "\\Operator\\EqualQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_GREATER          => self::NAMESPACE . "\\Operator\\GreaterQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_GREATER_OR_EQUAL => self::NAMESPACE . "\\Operator\\GreaterOrEqualQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_IN               => self::NAMESPACE . "\\Operator\\InQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_IS_EMPTY         => self::NAMESPACE . "\\Operator\\IsEmptyQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_IS_NOT_EMPTY     => self::NAMESPACE . "\\Operator\\IsNotEmptyQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_IS_NOT_NULL      => self::NAMESPACE . "\\Operator\\IsNotNullQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_IS_NULL          => self::NAMESPACE . "\\Operator\\IsNullQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_LESS             => self::NAMESPACE . "\\Operator\\LessQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_LESS_OR_EQUAL    => self::NAMESPACE . "\\Operator\\LessOrEqualQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_NOT_BEGINS_WITH  => self::NAMESPACE . "\\Operator\\NotBeginsWithQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_NOT_BETWEEN      => self::NAMESPACE . "\\Operator\\NotBetweenQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_NOT_CONTAINS     => self::NAMESPACE . "\\Operator\\NotContainsQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_NOT_ENDS_WITH    => self::NAMESPACE . "\\Operator\\NotEndsWithQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_NOT_EQUAL        => self::NAMESPACE . "\\Operator\\NotEqualQueryBuilderOperator",
            QueryBuilderOperatorInterface::OPERATOR_NOT_IN           => self::NAMESPACE . "\\Operator\\NotInQueryBuilderOperator",
        ];
    }

    /**
     * Enumerate the QueryBuilder types.
     *
     * @return array<string,string> Returns the QueryBuilder types.
     */
    protected static function enumQueryBuilderTypes(): array {

        return [
            QueryBuilderTypeInterface::TYPE_BOOLEAN  => self::NAMESPACE . "\\Type\\BooleanQueryBuilderType",
            QueryBuilderTypeInterface::TYPE_DATE     => self::NAMESPACE . "\\Type\\DateQueryBuilderType",
            QueryBuilderTypeInterface::TYPE_DATETIME => self::NAMESPACE . "\\Type\\DateTimeQueryBuilderType",
            QueryBuilderTypeInterface::TYPE_DOUBLE   => self::NAMESPACE . "\\Type\\DoubleQueryBuilderType",
            QueryBuilderTypeInterface::TYPE_INTEGER  => self::NAMESPACE . "\\Type\\IntegerQueryBuilderType",
            QueryBuilderTypeInterface::TYPE_STRING   => self::NAMESPACE . "\\Type\\StringQueryBuilderType",
            QueryBuilderTypeInterface::TYPE_TIME     => self::NAMESPACE . "\\Type\\TimeQueryBuilderType",
        ];
    }

    /**
     * Create a QueryBuilder decorator.
     *
     * @param array<string,string> $enum The enumeration.
     * @param string $key The key.
     * @return QueryBuilderDecoratorInterface|null Returns the QueryBuilder decorator in case of success, null otherwise.
     * @throws InvalidArgumentException Throws an invalid argument exception if the argument is invalid.
     */
    protected static function newQueryBuilderDecorator(array $enum, string $key): ?QueryBuilderDecoratorInterface {

        $class = ArrayHelper::get($enum, $key);
        if (null === $class) {
            throw new InvalidArgumentException(sprintf('The decorator "%s" is invalid', $key));
        }

        return new $class();
    }

    /**
     * Create a QueryBuilder operator.
     *
     * @param string $operator The Operator.
     * @return QueryBuilderDecoratorInterface|null Returns the QueryBuilder operator in case of success, false otherwise.
     * @throws InvalidArgumentException Throws an invalid argument exception if the argument is invalid.
     */
    public static function newQueryBuilderOperator(string $operator): ?QueryBuilderDecoratorInterface {
        return static::newQueryBuilderDecorator(static::enumQueryBuilderOperators(), $operator);
    }

    /**
     * Create a QueryBuilder type.
     *
     * @param string $type The type.
     * @return QueryBuilderDecoratorInterface|null Returns the QueryBuilder type in case of success, false otherwise.
     * @throws InvalidArgumentException Throws an invalid argument exception if the argument is invalid.
     */
    public static function newQueryBuilderType(string $type): ?QueryBuilderDecoratorInterface {
        return static::newQueryBuilderDecorator(static::enumQueryBuilderTypes(), $type);
    }
}
