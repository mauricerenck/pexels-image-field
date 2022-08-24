<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String text trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringTextTrait {

    /**
     * Text.
     *
     * @var string|null
     */
    protected $text;

    /**
     * Get the text.
     *
     * @return string|null Returns the text.
     */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Set the text.
     *
     * @param string|null $text The text.
     * @return self Returns this instance.
     */
    public function setText(?string $text): self {
        $this->text = $text;
        return $this;
    }
}
