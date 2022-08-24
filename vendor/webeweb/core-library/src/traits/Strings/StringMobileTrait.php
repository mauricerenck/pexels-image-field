<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String mobile trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringMobileTrait {

    /**
     * Mobile.
     *
     * @var string|null
     */
    protected $mobile;

    /**
     * Get the mobile.
     *
     * @return string|null Returns the mobile.
     */
    public function getMobile(): ?string {
        return $this->mobile;
    }

    /**
     * Set the mobile.
     *
     * @param string|null $mobile The mobile.
     * @return self Returns this instance.
     */
    public function setMobile(?string $mobile): self {
        $this->mobile = $mobile;
        return $this;
    }
}
