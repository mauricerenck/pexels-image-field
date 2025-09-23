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
use WBW\Library\QueryBuilder\Helper\QueryBuilderHelper;
use WBW\Library\QueryBuilder\Serializer\JsonSerializer;

/**
 * QueryBuilder filter.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model
 */
class QueryBuilderFilter extends AbstractQueryBuilder implements QueryBuilderFilterInterface {

    /**
     * Decorator.
     *
     * @var QueryBuilderDecoratorInterface|null
     */
    private $decorator;

    /**
     * Label.
     *
     * @var string|null
     */
    private $label;

    /**
     * Multiple.
     *
     * @var bool|null
     */
    private $multiple;

    /**
     * Operators.
     *
     * @var string[]|null
     */
    private $operators;

    /**
     * Validation.
     *
     * @var QueryBuilderValidationInterface|null
     */
    private $validation;

    /**
     * Values.
     *
     * @var mixed[]|null
     */
    private $values;

    /**
     * Constructor.
     *
     * @param string $id The id.
     * @param string $type The type.
     * @param string[] $operators The operators.
     * @throws InvalidArgumentException Throws an invalid argument exception if an argument is invalid.
     */
    public function __construct(string $id, string $type, array $operators) {
        parent::__construct();

        $this->setId($id);
        $this->setLabel("");
        $this->setMultiple(false);
        $this->setOperators($operators);
        $this->setType($type);
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
    public function getLabel(): string {
        return $this->label;
    }

    /**
     * {@inheritDoc}
     */
    public function getMultiple(): bool {
        return $this->multiple;
    }

    /**
     * {@inheritDoc}
     */
    public function getOperators(): array {
        return $this->operators;
    }

    /**
     * {@inheritDoc}
     */
    public function getValidation(): ?QueryBuilderValidationInterface {
        return $this->validation;
    }

    /**
     * {@inheritDoc}
     */
    public function getValues(): ?array {
        return $this->values;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeQueryBuilderFilter($this);
    }

    /**
     * Set the decorator.
     *
     * @param QueryBuilderDecoratorInterface|null $decorator The decorator.
     * @return QueryBuilderFilterInterface Returns this filter.
     */
    public function setDecorator(?QueryBuilderDecoratorInterface $decorator): QueryBuilderFilterInterface {
        $this->decorator = $decorator;
        return $this;
    }

    /**
     * Set the label.
     *
     * @param string $label The label.
     * @return QueryBuilderFilterInterface Returns this filter.
     */
    public function setLabel(string $label): QueryBuilderFilterInterface {
        $this->label = $label;
        return $this;
    }

    /**
     * Set the multiple.
     *
     * @param bool $multiple The multiple.
     * @return QueryBuilderFilterInterface Returns this filter.
     */
    public function setMultiple(bool $multiple): QueryBuilderFilterInterface {
        $this->multiple = $multiple;
        return $this;
    }

    /**
     * Set the operators.
     *
     * @param string[] $operators The operators.
     * @return QueryBuilderFilterInterface Returns this filter.
     * @throws InvalidArgumentException Throws an invalid argument exception if an operator is invalid.
     */
    public function setOperators(array $operators): QueryBuilderFilterInterface {

        $enum = QueryBuilderHelper::enumOperators();

        foreach ($operators as $current) {

            if (null !== $current && false === array_key_exists($current, $enum)) {
                throw new InvalidArgumentException(sprintf('The operator "%s" is invalid', $current));
            }
        }

        $this->operators = $operators;

        return $this;
    }

    /**
     * Set the validation.
     *
     * @param QueryBuilderValidationInterface|null $validation The validation.
     * @return QueryBuilderFilterInterface Returns this filter.
     */
    public function setValidation(?QueryBuilderValidationInterface $validation): QueryBuilderFilterInterface {
        $this->validation = $validation;
        return $this;
    }

    /**
     * Set the values.
     *
     * @param mixed[]|null $values The values.
     * @return QueryBuilderFilterInterface Returns this filter.
     */
    public function setValues(?array $values): QueryBuilderFilterInterface {
        $this->values = $values;
        return $this;
    }
}
