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
 * String locale trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringLocaleTrait {

    /**
     * Locale.
     *
     * @var string|null
     */
    protected $locale;

    /**
     * Get the locale.
     *
     * @return string|null Returns the locale.
     */
    public function getLocale(): ?string {
        return $this->locale;
    }

    /**
     * Set the locale.
     *
     * @param string|null $locale The locale.
     * @return self Returns this instance.
     */
    public function setLocale(?string $locale): self {
        $this->locale = $locale;
        return $this;
    }
}
