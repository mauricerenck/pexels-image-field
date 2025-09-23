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
 * Integer id parent trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Strings
 */
trait IntegerIdParentTrait {

    /**
     * Id parent.
     *
     * @var int|null
     */
    protected $idParent;

    /**
     * Get the id parent.
     *
     * @return int|null Returns the id parent.
     */
    public function getIdParent(): ?int {
        return $this->idParent;
    }

    /**
     * Set the id parent.
     *
     * @param int|null $idParent The id parent.
     * @return self Returns this instance.
     */
    public function setIdParent(?int $idParent): self {
        $this->idParent = $idParent;
        return $this;
    }
}
