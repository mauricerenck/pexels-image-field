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

use InvalidArgumentException;

/**
 * QueryBuilder decorator interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model
 */
interface QueryBuilderDecoratorInterface {

    /**
     * Default separator.
     *
     * @var string
     */
    public const DEFAULT_SEPARATOR = "{{ separator }}";

    /**
     * Convert the rule into a SQL string representation.
     *
     * @param QueryBuilderRuleInterface $rule The rule.
     * @param bool $wrap Wrap ?
     * @return string Returns a SQL string representing the rule.
     * @throws InvalidArgumentException Throws an invalid argument exception if the type is invalid.
     */
    public function toSql(QueryBuilderRuleInterface $rule, bool $wrap = false): string;
}
