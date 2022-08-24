<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String style trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringStyleTrait {

    /**
     * Style.
     *
     * @var string|null
     */
    protected $style;

    /**
     * Get the style.
     *
     * @return string|null Returns the style.
     */
    public function getStyle(): ?string {
        return $this->style;
    }

    /**
     * Set the style.
     *
     * @param string|null $style The style.
     * @return self Returns this instance.
     */
    public function setStyle(?string $style): self {
        $this->style = $style;
        return $this;
    }
}
