<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Strings;

/**
 * String duration trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringDurationTrait {

    /**
     * Duration.
     *
     * @var string|null
     */
    protected $duration;

    /**
     * Get the duration.
     *
     * @return string|null Returns the duration.
     */
    public function getDuration(): ?string {
        return $this->duration;
    }

    /**
     * Set the duration.
     *
     * @param string|null $duration The duration.
     * @return self Returns this instance.
     */
    public function setDuration(?string $duration): self {
        $this->duration = $duration;
        return $this;
    }
}
