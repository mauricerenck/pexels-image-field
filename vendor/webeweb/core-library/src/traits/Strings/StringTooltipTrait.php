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
 * String tooltip trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringTooltipTrait {

    /**
     * Tooltip.
     *
     * @var string|null
     */
    protected $tooltip;

    /**
     * Get the tooltip.
     *
     * @return string|null Returns the tooltip.
     */
    public function getTooltip(): ?string {
        return $this->tooltip;
    }

    /**
     * Set the tooltip.
     *
     * @param string|null $tooltip The tooltip.
     * @return self Returns this instance.
     */
    public function setTooltip(?string $tooltip): self {
        $this->tooltip = $tooltip;
        return $this;
    }
}
