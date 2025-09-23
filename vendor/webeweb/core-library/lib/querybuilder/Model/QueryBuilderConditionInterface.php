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
 * QueryBuilder condition interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model
 */
interface QueryBuilderConditionInterface {

    /**
     * Condition "AND".
     *
     * @var string
     */
    public const CONDITION_AND = "AND";

    /**
     * Condition "OR".
     *
     * @var string
     */
    public const CONDITION_OR = "OR";
}
