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

use WBW\Library\XmlTv\Model\StarRating;

/**
 * Array star tatings trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayStarRatingsTrait {

    /**
     * Star ratings.
     *
     * @var StarRating[]
     */
    protected $starRatings;

    /**
     * Add a star rating.
     *
     * @param StarRating $starRating The star rating.
     * @return self Returns this instance.
     */
    public function addStarRating(StarRating $starRating): self {
        $this->starRatings[] = $starRating;
        return $this;
    }

    /**
     * Get the number of star ratings.
     *
     * @return int Returns the number of star ratings.
     */
    public function getNumberStarRatings(): int {
        return count($this->getStarRatings());
    }

    /**
     * Get the star ratings.
     *
     * @return StarRating[] Returns the star ratings.
     */
    public function getStarRatings(): array {
        return $this->starRatings;
    }

    /**
     * Determine if this instance has star ratings.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasStarRatings(): bool {
        return 1 <= $this->getNumberStarRatings();
    }

    /**
     * Set the star ratings.
     *
     * @param StarRating[] $starRatings The star ratings.
     * @return self Returns this instance.
     */
    protected function setStarRatings(array $starRatings): self {
        $this->starRatings = $starRatings;
        return $this;
    }
}
