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
 * String link trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringLinkTrait {

    /**
     * Link.
     *
     * @var string|null
     */
    protected $link;

    /**
     * Get the link.
     *
     * @return string|null Returns the link.
     */
    public function getLink(): ?string {
        return $this->link;
    }

    /**
     * Set the link.
     *
     * @param string|null $link The link.
     * @return self Returns this instance.
     */
    public function setLink(?string $link): self {
        $this->link = $link;
        return $this;
    }
}
