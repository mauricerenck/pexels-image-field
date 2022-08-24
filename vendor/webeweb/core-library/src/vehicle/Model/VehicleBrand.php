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

use WBW\Library\Traits\Strings\StringLabelTrait;
use WBW\Library\Vehicle\Serializer\JsonSerializer;

/**
 * Vehicle brand.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Vehicle\Model
 */
class VehicleBrand implements VehicleBrandInterface {

    use StringLabelTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeVehicleBrand($this);
    }
}
