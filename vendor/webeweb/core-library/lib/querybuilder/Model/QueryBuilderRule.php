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
 * QueryBuilder rule.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model
 */
class QueryBuilderRule extends AbstractQueryBuilder implements QueryBuilderRuleInterface {

    /**
     * Decorator.
     *
     * @var QueryBuilderDecoratorInterface|null
     */
    private $decorator;

    /**
     * Operator.
     *
     * @var string|null
     */
    private $operator;

    /**
     * Value.
     *
     * @var mixed|null
     */
    private $value;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * {@inheritDoc}
     */
    public function getDecorator(): ?QueryBuilderDecoratorInterface {
        return $this->decorator;
    }

    /**
     * {@inheritDoc}
     */
    public function getOperator(): ?string {
        return $this->operator;
    }

    /**
     * {@inheritDoc}
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * Set the decorator.
     *
     * @param QueryBuilderDecoratorInterface|null $decorator The decorator.
     * @return QueryBuilderRuleInterface Returns this rule.
     */
    public function setDecorator(?QueryBuilderDecoratorInterface $decorator): QueryBuilderRuleInterface {
        $this->decorator = $decorator;
        return $this;
    }

    /**
     * Set the operator.
     *
     * @param string|null $operator The operator.
     * @return QueryBuilderRuleInterface Returns this rule.
     * @throws InvalidArgumentException Throws an invalid argument exception if the operator is invalid.
     */
    public function setOperator(?string $operator): QueryBuilderRuleInterface {

        if (null !== $operator && false === array_key_exists($operator, QueryBuilderHelper::enumOperators())) {
            throw new InvalidArgumentException(sprintf('The operator "%s" is invalid', $operator));
        }

        $this->operator = $operator;

        return $this;
    }

    /**
     * Set the value.
     *
     * @param mixed $value The value.
     * @return QueryBuilderRuleInterface Returns this rule.
     */
    public function setValue($value): QueryBuilderRuleInterface {
        $this->value = $value;
        return $this;
    }
}
