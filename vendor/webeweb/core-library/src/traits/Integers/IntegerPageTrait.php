<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Integers;

/**
 * Integer page trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerPageTrait {

    /**
     * Page.
     *
     * @var int|null
     */
    protected $page;

    /**
     * Get the page.
     *
     * @return int|null Returns the page.
     */
    public function getPage(): ?int {
        return $this->page;
    }

    /**
     * Set the page.
     *
     * @param int|null $page The page.
     * @return self Returns this instance.
     */
    public function setPage(?int $page): self {
        $this->page = $page;
        return $this;
    }
}
