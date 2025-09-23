<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Traits\Arrays;

use WBW\Library\XmlTv\Model\Category;

/**
 * Array categories trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayCategoriesTrait {

    /**
     * Categories.
     *
     * @var Category[]
     */
    protected $categories;

    /**
     * Add a category.
     *
     * @param Category $category The category.
     * @return self Returns this instance.
     */
    public function addCategory(Category $category): self {
        $this->categories[] = $category;
        return $this;
    }

    /**
     * Get the categories.
     *
     * @return Category[] Returns the categories.
     */
    public function getCategories(): array {
        return $this->categories;
    }

    /**
     * Get the number of categories.
     *
     * @return int Returns the number of categories.
     */
    public function getNumberCategories(): int {
        return count($this->getCategories());
    }

    /**
     * Determine if this programme has categories.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasCategories(): bool {
        return 1 <= $this->getNumberCategories();
    }

    /**
     * Set the categories.
     *
     * @param Category[] $categories The categories.
     * @return self Returns this instance.
     */
    protected function setCategories(array $categories): self {
        $this->categories = $categories;
        return $this;
    }
}
