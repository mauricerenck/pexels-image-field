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
 * Float maximum trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Floats
 */
trait FloatMaximumTrait {

    /**
     * Maximum.
     *
     * @var string|null
     */
    protected $maximum;

    /**
     * Get the maximum.
     *
     * @return string|null Returns the maximum.
     */
    public function getMaximum(): ?string {
        return $this->maximum;
    }

    /**
     * Set the maximum.
     *
     * @param string|null $maximum The maximum.
     * @return self Returns this instance.
     */
    public function setMaximum(?string $maximum): self {
        $this->maximum = $maximum;
        return $this;
    }
}
