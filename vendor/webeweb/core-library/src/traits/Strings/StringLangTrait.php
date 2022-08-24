<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String lang trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringLangTrait {

    /**
     * Lang.
     *
     * @var string|null
     */
    protected $lang;

    /**
     * Get the lang.
     *
     * @return string|null Returns the lang.
     */
    public function getLang(): ?string {
        return $this->lang;
    }

    /**
     * Set the lang.
     *
     * @param string|null $lang The lang.
     * @return self Returns this instance.
     */
    public function setLang(?string $lang): self {
        $this->lang = $lang;
        return $this;
    }
}
