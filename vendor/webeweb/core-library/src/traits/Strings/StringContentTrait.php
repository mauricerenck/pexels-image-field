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
 * String content trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringContentTrait {

    /**
     * Content.
     *
     * @var string|null
     */
    protected $content;

    /**
     * Get the content.
     *
     * @return string|null Returns the content.
     */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * Set the content.
     *
     * @param string|null $content The content.
     * @return self Returns this instance.
     */
    public function setContent(?string $content): self {
        $this->content = $content;
        return $this;
    }
}
