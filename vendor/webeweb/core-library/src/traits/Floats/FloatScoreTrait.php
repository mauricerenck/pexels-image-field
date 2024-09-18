<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Floats;

/**
 * Float score trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatScoreTrait {

    /**
     * Score.
     *
     * @var float|null
     */
    protected $score;

    /**
     * Get the score.
     *
     * @return float|null Returns the score.
     */
    public function getScore(): ?float {
        return $this->score;
    }

    /**
     * Set the score.
     *
     * @param float|null $score The score.
     * @return self Returns this instance.
     */
    public function setScore(?float $score): self {
        $this->score = $score;
        return $this;
    }
}
