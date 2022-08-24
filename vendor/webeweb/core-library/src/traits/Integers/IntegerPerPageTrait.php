<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Integers;

/**
 * Integer per page trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerPerPageTrait {

    /**
     * Per page.
     *
     * @var int|null
     */
    protected $perPage;

    /**
     * Get the per page.
     *
     * @return int|null Returns the per page.
     */
    public function getPerPage(): ?int {
        return $this->perPage;
    }

    /**
     * Set the per page.
     *
     * @param int|null $perPage The per page.
     * @return self Returns this instance.
     */
    public function setPerPage(?int $perPage): self {
        $this->perPage = $perPage;
        return $this;
    }
}
