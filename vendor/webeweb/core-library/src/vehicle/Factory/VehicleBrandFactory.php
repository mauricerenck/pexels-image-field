<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Vehicle\Factory;

use WBW\Library\Vehicle\Model\VehicleBrandInterface;

/**
 * Vehicle brand factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Vehicle\Factory
 */
class VehicleBrandFactory {

    /**
     * Copy.
     *
     * @param VehicleBrandInterface $src The vehicle brand source.
     * @param VehicleBrandInterface $dst The vehicle brand destination.
     * @return VehicleBrandInterface Returns the vehicle brand destination.
     */
    public static function copy(VehicleBrandInterface $src, VehicleBrandInterface $dst): VehicleBrandInterface {

        $dst->setLabel($src->getLabel());

        return $dst;
    }
}
