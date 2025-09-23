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

namespace WBW\Library\QueryBuilder\Model;

use WBW\Library\QueryBuilder\Helper\QueryBuilderHelper;

/**
 * Abstract QueryBuilder operator.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model
 * @abstract
 */
abstract class AbstractQueryBuilderOperator implements QueryBuilderOperatorInterface, QueryBuilderDecoratorInterface {

    /**
     * Operator.
     *
     * @var string|null
     */
    private $operator;

    /**
     * Constructor.
     *
     * @param string $operator The operator.
     */
    protected function __construct(string $operator) {
        $this->setOperator($operator);
    }

    /**
     * Get the operator.
     *
     * @return string Returns the operator.
     */
    public function getOperator(): string {
        return $this->operator;
    }

    /**
     * Set the operator.
     *
     * @param string $operator The operator
     * @return AbstractQueryBuilderOperator Returns this operator.
     */
    protected function setOperator(string $operator): AbstractQueryBuilderOperator {
        $this->operator = $operator;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function toSql(QueryBuilderRuleInterface $rule, bool $wrap = false): string {

        $sql = [
            $rule->getField(),
            QueryBuilderHelper::enumOperators()[$this->getOperator()],
        ];

        return implode(" ", $sql);
    }
}
