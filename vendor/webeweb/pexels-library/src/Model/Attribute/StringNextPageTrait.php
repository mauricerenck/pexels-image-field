<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Model\Attribute;

/**
 * String next page trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pexels\Model\Attribute
 */
trait StringNextPageTrait {

    /**
     * Next page.
     *
     * @var string|null
     */
    private $nextPage;

    /**
     * Get the next page.
     *
     * @return string|null Returns the next page.
     */
    public function getNextPage(): ?string {
        return $this->nextPage;
    }

    /**
     * Set the next page.
     *
     * @param string|null $nextPage The next page.
     * @return self Returns this instance.
     */
    public function setNextPage(?string $nextPage): self {
        $this->nextPage = $nextPage;
        return $this;
    }
}
