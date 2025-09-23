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

namespace WBW\Library\QueryBuilder\Model\Type;

use WBW\Library\QueryBuilder\Factory\QueryBuilderFactory;
use WBW\Library\QueryBuilder\Model\AbstractQueryBuilderType;
use WBW\Library\QueryBuilder\Model\QueryBuilderRule;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleInterface;

/**
 * Array QueryBuilder type.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model\Type
 */
class ArrayQueryBuilderType extends AbstractQueryBuilderType {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(null);
    }

    /**
     * {@inheritDoc}
     */
    public function toSql(QueryBuilderRuleInterface $rule, bool $wrap = false): string {

        /** @var string[] $sql */
        $sql = [];

        foreach ($rule->getValue() as $current) {

            $qbd = QueryBuilderFactory::newQueryBuilderType($rule->getType());

            $qbr = new QueryBuilderRule();
            $qbr->setType($rule->getType());
            $qbr->setValue($current);

            $sql[] = $qbd->toSql($qbr, $wrap);
        }

        return implode(self::DEFAULT_SEPARATOR, $sql);
    }
}
