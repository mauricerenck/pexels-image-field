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

namespace WBW\Library\XmlTv\Traits\Objects;

use WBW\Library\XmlTv\Model\Language;

/**
 * Language language trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Traits\Objects
 */
trait LanguageLanguageTrait {

    /**
     * Language.
     *
     * @var Language|null
     */
    protected $language;

    /**
     * Get the language.
     *
     * @return Language|null Returns the language.
     */
    public function getLanguage(): ?Language {
        return $this->language;
    }

    /**
     * Set the language.
     *
     * @param Language|null $language The language.
     * @return self Returns this instance.
     */
    public function setLanguage(?Language $language): self {
        $this->language = $language;
        return $this;
    }
}
