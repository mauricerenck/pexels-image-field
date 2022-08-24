<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String column trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringColumnTrait {

    /**
     * Column.
     *
     * @var string|null
     */
    protected $column;

    /**
     * Get the column.
     *
     * @return string|null Returns the column.
     */
    public function getColumn(): ?string {
        return $this->column;
    }

    /**
     * Set the column.
     *
     * @param string|null $column The column.
     * @return self Returns this instance.
     */
    public function setColumn(?string $column): self {
        $this->column = $column;
        return $this;
    }
}
