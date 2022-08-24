<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Dropdown\Model;

use JsonSerializable;

/**
 * Dropdown item interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Dropdown\Model
 */
interface DropdownItemInterface extends JsonSerializable {

    /**
     * Get the by default.
     *
     * @return bool|null Returns the by default.
     */
    public function getByDefault(): ?bool;

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getLabel(): ?string;

    /**
     * Get the position.
     *
     * @return int|null Returns the position.
     */
    public function getPosition(): ?int;

    /**
     * Set the by default.
     *
     * @param bool|null $byDefault The by default.
     * @return DropdownItemInterface Returns this dropdown item.
     */
    public function setByDefault(?bool $byDefault): DropdownItemInterface;

    /**
     * Set the label.
     *
     * @param string|null $label The label.
     * @return DropdownItemInterface Returns this dropdown item.
     */
    public function setLabel(?string $label);

    /**
     * Set the position.
     *
     * @param int|null $position The position.
     * @return DropdownItemInterface Returns this dropdown item.
     */
    public function setPosition(?int $position);
}
