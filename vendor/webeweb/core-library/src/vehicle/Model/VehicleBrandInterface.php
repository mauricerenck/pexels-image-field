<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Vehicle\Model;

use JsonSerializable;

/**
 * Vehicle brand interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Vehicle\Model
 */
interface VehicleBrandInterface extends JsonSerializable {

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getLabel(): ?string;

    /**
     * Set the label.
     *
     * @param string|null $label The label.
     * @return VehicleBrandInterface Returns this vehicle brand.
     */
    public function setLabel(?string $label);
}
