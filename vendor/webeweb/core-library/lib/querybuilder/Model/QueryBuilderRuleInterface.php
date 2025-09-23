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
 * QueryBuilder rule interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model
 */
interface QueryBuilderRuleInterface {

    /**
     * Get the decorator.
     *
     * @return QueryBuilderDecoratorInterface|null Returns the decorator.
     */
    public function getDecorator(): ?QueryBuilderDecoratorInterface;

    /**
     * Get the field.
     *
     * @return string|null Returns the field.
     */
    public function getField(): ?string;

    /**
     * Get the id.
     *
     * @return string|null Returns the id.
     */
    public function getId(): ?string;

    /**
     * Get the input.
     *
     * @return string|null Returns the input.
     */
    public function getInput(): ?string;

    /**
     * Get the operator.
     *
     * @return string|null Returns the operator.
     */
    public function getOperator(): ?string;

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string;

    /**
     * Get the value.
     *
     * @return mixed Returns the value.
     */
    public function getValue();
}
