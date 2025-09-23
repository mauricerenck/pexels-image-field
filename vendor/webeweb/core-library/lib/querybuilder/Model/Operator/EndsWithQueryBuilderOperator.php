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

namespace WBW\Library\QueryBuilder\Model\Operator;

use WBW\Library\QueryBuilder\Factory\QueryBuilderFactory;
use WBW\Library\QueryBuilder\Model\AbstractQueryBuilderOperator;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleInterface;

/**
 * Ends with QueryBuilder operator.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model\Operator
 */
class EndsWithQueryBuilderOperator extends AbstractQueryBuilderOperator {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::OPERATOR_ENDS_WITH);
    }

    /**
     * {@inheritDoc}
     */
    public function toSql(QueryBuilderRuleInterface $rule, bool $wrap = false): string {

        $qbt = QueryBuilderFactory::newQueryBuilderType($rule->getType());

        $sql = [
            parent::toSql($rule, $wrap),
            sprintf("'%%%s'", $qbt->toSql($rule)),
        ];

        return implode(" ", $sql);
    }
}
