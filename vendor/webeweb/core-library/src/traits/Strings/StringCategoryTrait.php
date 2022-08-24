<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String category trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringCategoryTrait {

    /**
     * Category.
     *
     * @var string|null
     */
    protected $category;

    /**
     * Get the category.
     *
     * @return string|null Returns the category.
     */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Set the category.
     *
     * @param string|null $category The category.
     * @return self Returns this instance.
     */
    public function setCategory(?string $category): self {
        $this->category = $category;
        return $this;
    }
}
