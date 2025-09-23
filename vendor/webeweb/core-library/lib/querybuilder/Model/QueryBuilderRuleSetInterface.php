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

/**
 * QueryBuilder rule set interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model
 */
interface QueryBuilderRuleSetInterface {

    /**
     * Get the condition.
     *
     * @return string|null Returns the condition.
     */
    public function getCondition(): ?string;

    /**
     * Get the rules.
     *
     * @return array<QueryBuilderRuleInterface|QueryBuilderRuleSetInterface> Returns the rules.
     */
    public function getRules(): array;

    /**
     * Get the valid.
     *
     * @return bool Returns the valid.
     */
    public function getValid(): bool;
}
