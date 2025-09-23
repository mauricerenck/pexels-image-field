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
 * Integer id site owner trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Strings
 */
trait IntegerIdSiteOwnerTrait {

    /**
     * Id site owner.
     *
     * @var int|null
     */
    protected $idSiteOwner;

    /**
     * Get the id site owner.
     *
     * @return int|null Returns the id site owner.
     */
    public function getIdSiteOwner(): ?int {
        return $this->idSiteOwner;
    }

    /**
     * Set the id site owner.
     *
     * @param int|null $idSiteOwner The id site owner.
     * @return self Returns this instance.
     */
    public function setIdSiteOwner(?int $idSiteOwner): self {
        $this->idSiteOwner = $idSiteOwner;
        return $this;
    }
}
