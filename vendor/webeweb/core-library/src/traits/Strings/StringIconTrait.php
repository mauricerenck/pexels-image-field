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
 * String icon trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringIconTrait {

    /**
     * Icon.
     *
     * @var string|null
     */
    protected $icon;

    /**
     * Get the icon.
     *
     * @return string|null Returns the icon.
     */
    public function getIcon(): ?string {
        return $this->icon;
    }

    /**
     * Set the icon.
     *
     * @param string|null $icon The icon.
     * @return self Returns this instance.
     */
    public function setIcon(?string $icon): self {
        $this->icon = $icon;
        return $this;
    }
}
