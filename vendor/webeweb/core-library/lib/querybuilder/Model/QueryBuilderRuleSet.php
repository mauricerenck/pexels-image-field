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

use InvalidArgumentException;
use WBW\Library\QueryBuilder\Helper\QueryBuilderHelper;

/**
 * QueryBuilder rule set.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model
 */
class QueryBuilderRuleSet implements QueryBuilderRuleSetInterface {

    /**
     * Condition.
     *
     * @var string|null
     */
    private $condition;

    /**
     * Rules.
     *
     * @var array<QueryBuilderRuleInterface|QueryBuilderRuleSetInterface>|null
     */
    private $rules;

    /**
     * Valid.
     *
     * @var bool|null
     */
    private $valid;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setRules([]);
        $this->setValid(false);
    }

    /**
     * Add a rule.
     *
     * @param QueryBuilderRuleInterface $rule The rule.
     * @return QueryBuilderRuleSetInterface Returns this rule set.
     */
    public function addRule(QueryBuilderRuleInterface $rule): QueryBuilderRuleSetInterface {
        $this->rules[] = $rule;
        return $this;
    }

    /**
     * Add a rule set.
     *
     * @param QueryBuilderRuleSetInterface $rule The rule.
     * @return QueryBuilderRuleSetInterface Returns this rule set.
     */
    public function addRuleSet(QueryBuilderRuleSetInterface $rule): QueryBuilderRuleSetInterface {
        $this->rules[] = $rule;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getCondition(): ?string {
        return $this->condition;
    }

    /**
     * {@inheritDoc}
     */
    public function getRules(): array {
        return $this->rules;
    }

    /**
     * {@inheritDoc}
     */
    public function getValid(): bool {
        return $this->valid;
    }

    /**
     * Set the condition.
     *
     * @param string|null $condition The condition.
     * @return QueryBuilderRuleSetInterface Returns this rule set.
     * @throws InvalidArgumentException Throws an invalid argument exception if the condition is invalid.
     */
    public function setCondition(?string $condition): QueryBuilderRuleSetInterface {

        if (null !== $condition && false === in_array($condition, QueryBuilderHelper::enumConditions())) {
            throw new InvalidArgumentException(sprintf('The condition "%s" is invalid', $condition));
        }

        $this->condition = $condition;

        return $this;
    }

    /**
     * Set the rules.
     *
     * @param array<QueryBuilderRuleInterface|QueryBuilderRuleSetInterface> $rules The rules.
     * @return QueryBuilderRuleSet Returns this rule set.
     */
    protected function setRules(array $rules): QueryBuilderRuleSetInterface {
        $this->rules = $rules;
        return $this;
    }

    /**
     * Set the valid.
     *
     * @param bool $valid The valid.
     * @return QueryBuilderRuleSetInterface Returns this rule set.
     */
    public function setValid(bool $valid): QueryBuilderRuleSetInterface {
        $this->valid = $valid;
        return $this;
    }
}
