<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Integers;

/**
 * Integer inserted rows trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerInsertedRowsTrait {

    /**
     * Inserted rows.
     *
     * @var int|null
     */
    protected $insertedRows;

    /**
     * Get the inserted rows.
     *
     * @return int|null Returns the inserted rows.
     */
    public function getInsertedRows(): ?int {
        return $this->insertedRows;
    }

    /**
     * Set the inserted rows.
     *
     * @param int|null $insertedRows The inserted rows.
     * @return self Returns this instance.
     */
    public function setInsertedRows(?int $insertedRows): self {
        $this->insertedRows = $insertedRows;
        return $this;
    }
}
