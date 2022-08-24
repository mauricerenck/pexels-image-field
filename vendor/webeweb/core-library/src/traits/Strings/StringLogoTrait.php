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
 * String logo trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringLogoTrait {

    /**
     * Logo.
     *
     * @var string|null
     */
    protected $logo;

    /**
     * Get the logo.
     *
     * @return string|null Returns the logo.
     */
    public function getLogo(): ?string {
        return $this->logo;
    }

    /**
     * Set the logo.
     *
     * @param string|null $logo The logo.
     * @return self Returns this instance.
     */
    public function setLogo(?string $logo): self {
        $this->logo = $logo;
        return $this;
    }
}
