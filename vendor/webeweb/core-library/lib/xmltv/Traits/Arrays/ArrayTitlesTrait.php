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

use WBW\Library\XmlTv\Model\Title;

/**
 * Array titles trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayTitlesTrait {

    /**
     * Titles.
     *
     * @var Title[]
     */
    protected $titles;

    /**
     * Add a title.
     *
     * @param Title $title The title.
     * @return self Returns this instance.
     */
    public function addTitle(Title $title): self {
        $this->titles[] = $title;
        return $this;
    }

    /**
     * Get the number of titles.
     *
     * @return int Returns the number of titles.
     */
    public function getNumberTitles(): int {
        return count($this->getTitles());
    }

    /**
     * Get the titles.
     *
     * @return Title[] Returns the titles.
     */
    public function getTitles(): array {
        return $this->titles;
    }

    /**
     * Determine if this instance has titles.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasTitles(): bool {
        return 1 <= $this->getNumberTitles();
    }

    /**
     * Set the titles.
     *
     * @param Title[] $titles The titles.
     * @return self Returns this instance.
     */
    protected function setTitles(array $titles): self {
        $this->titles = $titles;
        return $this;
    }
}
