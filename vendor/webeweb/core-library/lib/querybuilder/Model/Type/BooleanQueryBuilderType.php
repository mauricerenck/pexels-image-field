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

use WBW\Library\Common\Helper\IntegerHelper;
use WBW\Library\QueryBuilder\Model\AbstractQueryBuilderType;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleInterface;

/**
 * Boolean QueryBuilder type.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model\Type
 */
class BooleanQueryBuilderType extends AbstractQueryBuilderType {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::TYPE_BOOLEAN);
    }

    /**
     * {@inheritDoc}
     */
    public function toSql(QueryBuilderRuleInterface $rule, bool $wrap = false): string {
        return sprintf("%d", IntegerHelper::parseBoolean($rule->getValue()));
    }
}
