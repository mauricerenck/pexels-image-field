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
 * Integer id site trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Strings
 */
trait IntegerIdSiteTrait {

    /**
     * Id site.
     *
     * @var int|null
     */
    protected $idSite;

    /**
     * Get the id site.
     *
     * @return int|null Returns the id site.
     */
    public function getIdSite(): ?int {
        return $this->idSite;
    }

    /**
     * Set the id site.
     *
     * @param int|null $idSite The id site.
     * @return self Returns this instance.
     */
    public function setIdSite(?int $idSite): self {
        $this->idSite = $idSite;
        return $this;
    }
}
