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

/**
 * Abstract QueryBuilder.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model
 * @abstract
 */
abstract class AbstractQueryBuilder {

    /**
     * Field.
     *
     * @var string|null
     */
    private $field;

    /**
     * Id.
     *
     * @var string|null
     */
    private $id;

    /**
     * Input.
     *
     * @var string|null
     */
    private $input;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     */
    protected function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the field.
     *
     * @return string|null Returns the field.
     */
    public function getField(): ?string {
        return $this->field;
    }

    /**
     * Get the id.
     *
     * @return string|null Returns the id.
     */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Get the input.
     *
     * @return string|null Returns the input.
     */
    public function getInput(): ?string {
        return $this->input;
    }

    /**
     * Get the label.
     *
     * @return string Returns the label.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the field.
     *
     * @param string|null $field The field.
     * @return AbstractQueryBuilder Returns this QueryBuilder.
     */
    public function setField(?string $field): AbstractQueryBuilder {
        $this->field = $field;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return AbstractQueryBuilder Returns this QueryBuilder.
     */
    public function setId(?string $id): AbstractQueryBuilder {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the input.
     *
     * @param string|null $input The input.
     * @return AbstractQueryBuilder Returns this QueryBuilder.
     * @throws InvalidArgumentException Throws an invalid argument exception if the input is invalid.
     */
    public function setInput(?string $input): AbstractQueryBuilder {

        if (false === in_array($input, QueryBuilderHelper::enumInputs())) {
            throw new InvalidArgumentException(sprintf('The input "%s" is invalid', $input));
        }

        $this->input = $input;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return AbstractQueryBuilder Returns this QueryBuilder.
     * @throws InvalidArgumentException Throws an invalid argument exception if the type is invalid.
     */
    public function setType(?string $type): AbstractQueryBuilder {

        if (null !== $type && false === in_array($type, QueryBuilderHelper::enumTypes())) {
            throw new InvalidArgumentException(sprintf('The type "%s" is invalid', $type));
        }

        $this->type = $type;
        return $this;
    }
}
