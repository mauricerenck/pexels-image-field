<?php

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
     * @var string|null
     */
    protected $score;

    /**
     * Get the score.
     *
     * @return string|null Returns the score.
     */
    public function getScore(): ?string {
        return $this->score;
    }

    /**
     * Set the score.
     *
     * @param string|null $score The score.
     * @return self Returns this instance.
     */
    public function setScore(?string $score): self {
        $this->score = $score;
        return $this;
    }
}
