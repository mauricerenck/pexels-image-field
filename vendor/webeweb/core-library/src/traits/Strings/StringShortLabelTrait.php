<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String short label trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringShortLabelTrait {

    /**
     * Short label.
     *
     * @var string|null
     */
    protected $shortLabel;

    /**
     * Get the short label.
     *
     * @return string|null Returns the short label.
     */
    public function getShortLabel(): ?string {
        return $this->shortLabel;
    }

    /**
     * Set the short label.
     *
     * @param string|null $shortLabel The short label.
     * @return self Returns this instance.
     */
    public function setShortLabel(?string $shortLabel): self {
        $this->shortLabel = $shortLabel;
        return $this;
    }
}
