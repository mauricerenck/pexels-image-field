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

namespace WBW\Library\QueryBuilder\Helper;

use WBW\Library\QueryBuilder\Factory\QueryBuilderFactory;
use WBW\Library\QueryBuilder\Model\QueryBuilderConditionInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderInputInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderOperatorInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleSetInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderTypeInterface;

/**
 * QueryBuilder helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Helper
 */
class QueryBuilderHelper {

    /**
     * Enumerate the conditions.
     *
     * @return string[] Returns the conditions enumeration.
     */
    public static function enumConditions(): array {

        return [
            QueryBuilderConditionInterface::CONDITION_AND,
            QueryBuilderConditionInterface::CONDITION_OR,
        ];
    }

    /**
     * Enumerate the inputs.
     *
     * @return string[] Returns the inputs enumeration.
     */
    public static function enumInputs(): array {

        return [
            QueryBuilderInputInterface::INPUT_CHECKBOX,
            QueryBuilderInputInterface::INPUT_NUMBER,
            QueryBuilderInputInterface::INPUT_RADIO,
            QueryBuilderInputInterface::INPUT_SELECT,
            QueryBuilderInputInterface::INPUT_TEXT,
            QueryBuilderInputInterface::INPUT_TEXTAREA,
        ];
    }

    /**
     * List the operators.
     *
     * @return array<string,string> Returns the operators enumeration.
     */
    public static function enumOperators(): array {

        return [
            QueryBuilderOperatorInterface::OPERATOR_BEGINS_WITH      => "LIKE",
            QueryBuilderOperatorInterface::OPERATOR_BETWEEN          => "BETWEEN",
            QueryBuilderOperatorInterface::OPERATOR_CONTAINS         => "LIKE",
            QueryBuilderOperatorInterface::OPERATOR_ENDS_WITH        => "LIKE",
            QueryBuilderOperatorInterface::OPERATOR_EQUAL            => "=",
            QueryBuilderOperatorInterface::OPERATOR_GREATER          => ">",
            QueryBuilderOperatorInterface::OPERATOR_GREATER_OR_EQUAL => ">=",
            QueryBuilderOperatorInterface::OPERATOR_IN               => "IN",
            QueryBuilderOperatorInterface::OPERATOR_IS_EMPTY         => "IS NULL",
            QueryBuilderOperatorInterface::OPERATOR_IS_NOT_EMPTY     => "IS NOT NULL",
            QueryBuilderOperatorInterface::OPERATOR_IS_NOT_NULL      => "IS NOT NULL",
            QueryBuilderOperatorInterface::OPERATOR_IS_NULL          => "IS NULL",
            QueryBuilderOperatorInterface::OPERATOR_LESS             => "<",
            QueryBuilderOperatorInterface::OPERATOR_LESS_OR_EQUAL    => "<=",
            QueryBuilderOperatorInterface::OPERATOR_NOT_BEGINS_WITH  => "NOT LIKE",
            QueryBuilderOperatorInterface::OPERATOR_NOT_BETWEEN      => "NOT BETWEEN",
            QueryBuilderOperatorInterface::OPERATOR_NOT_CONTAINS     => "NOT LIKE",
            QueryBuilderOperatorInterface::OPERATOR_NOT_ENDS_WITH    => "NOT LIKE",
            QueryBuilderOperatorInterface::OPERATOR_NOT_EQUAL        => "<>",
            QueryBuilderOperatorInterface::OPERATOR_NOT_IN           => "NOT IN",
        ];
    }

    /**
     * Enumerate the types.
     *
     * @return string[] Returns the types enumeration.
     */
    public static function enumTypes(): array {

        return [
            QueryBuilderTypeInterface::TYPE_BOOLEAN,
            QueryBuilderTypeInterface::TYPE_DATE,
            QueryBuilderTypeInterface::TYPE_DATETIME,
            QueryBuilderTypeInterface::TYPE_DOUBLE,
            QueryBuilderTypeInterface::TYPE_INTEGER,
            QueryBuilderTypeInterface::TYPE_STRING,
            QueryBuilderTypeInterface::TYPE_TIME,
        ];
    }

    /**
     * Convert a rule into a SQL string representation.
     *
     * @param QueryBuilderRuleInterface $rule The rule.
     * @return string|null Returns the SQL string representing the rule.
     */
    public static function queryBuilderRule2Sql(QueryBuilderRuleInterface $rule): ?string {

        if (null !== $rule->getDecorator()) {
            return $rule->getDecorator()->toSql($rule);
        }

        $qbo = QueryBuilderFactory::newQueryBuilderOperator($rule->getOperator());

        return $qbo->toSql($rule);
    }

    /**
     * Convert a rule set into a SQL string representation.
     *
     * @param QueryBuilderRuleSetInterface $ruleSet The rule set.
     * @return string Returns the SQL string representing the rule set.
     */
    public static function queryBuilderRuleSet2Sql(QueryBuilderRuleSetInterface $ruleSet): string {

        if (0 === count($ruleSet->getRules())) {
            return "";
        }

        $sql = [];

        foreach ($ruleSet->getRules() as $current) {

            if (true === ($current instanceof QueryBuilderRuleSetInterface)) {

                $sql[] = static::queryBuilderRuleSet2Sql($current);
                continue;
            }

            /** @var QueryBuilderRuleInterface $current */
            $sql[] = static::queryBuilderRule2Sql($current);
        }

        return "(" . implode(" {$ruleSet->getCondition()} ", $sql) . ")";
    }
}
