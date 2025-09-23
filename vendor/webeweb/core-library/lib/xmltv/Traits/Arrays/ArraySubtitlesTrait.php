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

use WBW\Library\XmlTv\Model\Subtitles;

/**
 * Array subtitles trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Arrays
 */
trait ArraySubtitlesTrait {

    /**
     * Subtitles.
     *
     * @var Subtitles[]
     */
    protected $subtitles;

    /**
     * Add a subtitles.
     *
     * @param Subtitles $subtitles The subtitles.
     * @return self Returns this instance.
     */
    public function addSubtitles(Subtitles $subtitles): self {
        $this->subtitles[] = $subtitles;
        return $this;
    }

    /**
     * Get the number of subtitles.
     *
     * @return int Returns the number of subtitles.
     */
    public function getNumberSubtitles(): int {
        return count($this->getSubtitles());
    }

    /**
     * Get the subtitles.
     *
     * @return Subtitles[] Returns the subtitles.
     */
    public function getSubtitles(): array {
        return $this->subtitles;
    }

    /**
     * Determine if this instance has subtitles.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasSubtitles(): bool {
        return 1 <= $this->getNumberSubtitles();
    }

    /**
     * Set the subtitles.
     *
     * @param Subtitles[] $subtitles The subtitles.
     * @return self Returns this instance.
     */
    protected function setSubtitles(array $subtitles): self {
        $this->subtitles = $subtitles;
        return $this;
    }
}
