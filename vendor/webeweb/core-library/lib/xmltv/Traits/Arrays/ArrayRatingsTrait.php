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

use WBW\Library\XmlTv\Model\Rating;

/**
 * Array ratings trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayRatingsTrait {

    /**
     * Ratings.
     *
     * @var Rating[]
     */
    protected $ratings;

    /**
     * Add a rating.
     *
     * @param Rating $rating The rating.
     * @return self Returns this instance.
     */
    public function addRating(Rating $rating): self {
        $this->ratings[] = $rating;
        return $this;
    }

    /**
     * Get the number of ratings.
     *
     * @return int Returns the number of ratings.
     */
    public function getNumberRatings(): int {
        return count($this->getRatings());
    }

    /**
     * Get the ratings.
     *
     * @return Rating[] Returns the ratings.
     */
    public function getRatings(): array {
        return $this->ratings;
    }

    /**
     * Determine if this instance has ratings.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasRatings(): bool {
        return 1 <= $this->getNumberRatings();
    }

    /**
     * Set the ratings.
     *
     * @param Rating[] $ratings The ratings.
     * @return self Returns this instance.
     */
    protected function setRatings(array $ratings): self {
        $this->ratings = $ratings;
        return $this;
    }
}
