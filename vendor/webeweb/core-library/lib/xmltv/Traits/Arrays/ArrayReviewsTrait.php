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

use WBW\Library\XmlTv\Model\Review;

/**
 * Array reviews trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArrayReviewsTrait {

    /**
     * Reviews.
     *
     * @var Review[]
     */
    protected $reviews;

    /**
     * Add a review.
     *
     * @param Review $review The review.
     * @return self Returns this instance.
     */
    public function addReview(Review $review): self {
        $this->reviews[] = $review;
        return $this;
    }

    /**
     * Get the number of reviews.
     *
     * @return int Returns the number of reviews.
     */
    public function getNumberReviews(): int {
        return count($this->getReviews());
    }

    /**
     * Get the reviews.
     *
     * @return Review[] Returns the reviews.
     */
    public function getReviews(): array {
        return $this->reviews;
    }

    /**
     * Determine if this instance has reviews.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasReviews(): bool {
        return 1 <= $this->getNumberReviews();
    }

    /**
     * Set the reviews.
     *
     * @param Review[] $reviews The reviews.
     * @return self Returns this instance.
     */
    protected function setReviews(array $reviews): self {
        $this->reviews = $reviews;
        return $this;
    }
}
