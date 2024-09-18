<?php

declare(strict_types = 1);

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Traits\Strings;

/**
 * String prev page trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Traits\Strings
 */
trait StringPrevPageTrait {

    /**
     * Prev page.
     *
     * @var string|null
     */
    private $prevPage;

    /**
     * Get the prev page.
     *
     * @return string|null Returns the prev page.
     */
    public function getPrevPage(): ?string {
        return $this->prevPage;
    }

    /**
     * Set the prev page.
     *
     * @param string|null $prevPage The prev page.
     * @return self Returns this instance.
     */
    public function setPrevPage(?string $prevPage): self {
        $this->prevPage = $prevPage;
        return $this;
    }
}
