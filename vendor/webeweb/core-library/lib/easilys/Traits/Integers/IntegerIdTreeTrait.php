<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Traits\Integers;

/**
 * Integer id tree trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Strings
 */
trait IntegerIdTreeTrait {

    /**
     * Id tree.
     *
     * @var int|null
     */
    protected $idTree;

    /**
     * Get the id tree.
     *
     * @return int|null Returns the id tree.
     */
    public function getIdTree(): ?int {
        return $this->idTree;
    }

    /**
     * Set the id tree.
     *
     * @param int|null $idTree The id tree.
     * @return self Returns this instance.
     */
    public function setIdTree(?int $idTree): self {
        $this->idTree = $idTree;
        return $this;
    }
}
