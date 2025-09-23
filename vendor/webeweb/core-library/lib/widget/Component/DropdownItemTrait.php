<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Component;

/**
 * DropdownItem trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component
 */
trait DropdownItemTrait {

    /**
     * Dropdown item.
     *
     * @var DropdownItemInterface|null
     */
    protected $dropdownItem;

    /**
     * Get the dropdown item.
     *
     * @return DropdownItemInterface|null Returns the dropdown item.
     */
    public function getDropdownItem(): ?DropdownItemInterface {
        return $this->dropdownItem;
    }

    /**
     * Set the dropdown item.
     *
     * @param DropdownItemInterface|null $dropdownItem The dropdown item.
     * @return self Returns this instance.
     */
    protected function setDropdownItem(?DropdownItemInterface $dropdownItem): self {
        $this->dropdownItem = $dropdownItem;
        return $this;
    }
}
