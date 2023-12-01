<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Vehicle\Serializer;

use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\Vehicle\Model\RegistrationCertificateInterface;
use WBW\Library\Vehicle\Model\VehicleBrandInterface;

/**
 * JSON Serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Vehicle\Serializer
 */
class JsonSerializer {

    /**
     * Serialize a registration certificate.
     *
     * @param RegistrationCertificateInterface $model The model.
     * @return array Returns the serialized registration certificate.
     */
    public static function serializeRegistrationCertificate(RegistrationCertificateInterface $model): array {

        return [
            SerializerKeys::A     => $model->getA(),
            SerializerKeys::A1    => $model->getA1(),
            SerializerKeys::B     => $model->getB(),
            SerializerKeys::C1    => $model->getC1(),
            SerializerKeys::C3    => $model->getC3(),
            SerializerKeys::C4A   => $model->getC4a(),
            SerializerKeys::C41   => $model->getC41(),
            SerializerKeys::D1    => $model->getD1(),
            SerializerKeys::D2    => $model->getD2(),
            SerializerKeys::D21   => $model->getD21(),
            SerializerKeys::D3    => $model->getD3(),
            SerializerKeys::E     => $model->getE(),
            SerializerKeys::F1    => $model->getF1(),
            SerializerKeys::F2    => $model->getF2(),
            SerializerKeys::F3    => $model->getF3(),
            SerializerKeys::G     => $model->getG(),
            SerializerKeys::G1    => $model->getG1(),
            SerializerKeys::H     => $model->getH(),
            SerializerKeys::I     => $model->getI(),
            SerializerKeys::I1    => $model->getI1(),
            SerializerKeys::J     => $model->getJ(),
            SerializerKeys::J1    => $model->getJ1(),
            SerializerKeys::J2    => $model->getJ2(),
            SerializerKeys::J3    => $model->getJ3(),
            SerializerKeys::K     => $model->getK(),
            SerializerKeys::P1    => $model->getP1(),
            SerializerKeys::P2    => $model->getP2(),
            SerializerKeys::P3    => $model->getP3(),
            SerializerKeys::P6    => $model->getP6(),
            BaseSerializerKeys::Q => $model->getQ(),
            SerializerKeys::S1    => $model->getS1(),
            SerializerKeys::S2    => $model->getS2(),
            SerializerKeys::U1    => $model->getU1(),
            SerializerKeys::U2    => $model->getU2(),
            SerializerKeys::V7    => $model->getV7(),
            SerializerKeys::V9    => $model->getV9(),
            SerializerKeys::X1    => $model->getX1(),
            SerializerKeys::Y1    => $model->getY1(),
            SerializerKeys::Y2    => $model->getY2(),
            SerializerKeys::Y3    => $model->getY3(),
            SerializerKeys::Y4    => $model->getY4(),
            SerializerKeys::Y5    => $model->getY5(),
            SerializerKeys::Y6    => $model->getY6(),
            SerializerKeys::Z1    => $model->getZ1(),
            SerializerKeys::Z2    => $model->getZ2(),
            SerializerKeys::Z3    => $model->getZ3(),
            SerializerKeys::Z4    => $model->getZ4(),
        ];
    }

    /**
     * Serialize a vehicle brand.
     *
     * @param VehicleBrandInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeVehicleBrand(VehicleBrandInterface $model): array {

        return [
            BaseSerializerKeys::LABEL => $model->getLabel(),
        ];
    }
}
