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
 * Abstract QueryBuilder type.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model
 * @abstract
 */
abstract class AbstractQueryBuilderType implements QueryBuilderTypeInterface, QueryBuilderDecoratorInterface {

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     *
     * @param string|null $type The type.
     */
    protected function __construct(?string $type) {
        $this->setType($type);
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type
     * @return AbstractQueryBuilderType Returns this type.
     */
    protected function setType(?string $type): AbstractQueryBuilderType {
        $this->type = $type;
        return $this;
    }
}
