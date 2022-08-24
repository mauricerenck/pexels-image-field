<?php

/*
 * This file is part of the core-library package.
 *
 * (* ()EB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Vehicle\Factory;

use WBW\Library\Vehicle\Model\RegistrationCertificateInterface;

/**
 * Registration certificate factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Vehicle\Factory
 */
class RegistrationCertificateFactory {

    /**
     * Copy.
     *
     * @param RegistrationCertificateInterface $src The registration certificate source.
     * @param RegistrationCertificateInterface $dst The registration certificate destination.
     * @return RegistrationCertificateInterface Returns the registration certificate destination.
     */
    public static function copy(RegistrationCertificateInterface $src, RegistrationCertificateInterface $dst): RegistrationCertificateInterface {

        $dst->setA($src->getA());
        $dst->setA1($src->getA1());
        $dst->setB(null !== $src->getB() ? clone $src->getB() : null);
        $dst->setC1($src->getC1());
        $dst->setC3($src->getC3());
        $dst->setC41($src->getC41());
        $dst->setC4a($src->getC4a());
        $dst->setD1($src->getD1());
        $dst->setD2($src->getD2());
        $dst->setD21($src->getD21());
        $dst->setD3($src->getD3());
        $dst->setE($src->getE());
        $dst->setF1($src->getF1());
        $dst->setF2($src->getF2());
        $dst->setF3($src->getF3());
        $dst->setG($src->getG());
        $dst->setG1($src->getG1());
        $dst->setH($src->getH());
        $dst->setI(null !== $src->getI() ? clone $src->getI() : null);
        $dst->setI1(null !== $src->getI1() ? clone $src->getI1() : null);
        $dst->setJ($src->getJ());
        $dst->setJ1($src->getJ1());
        $dst->setJ2($src->getJ2());
        $dst->setJ3($src->getJ3());
        $dst->setK($src->getK());
        $dst->setP1($src->getP1());
        $dst->setP2($src->getP2());
        $dst->setP3($src->getP3());
        $dst->setP6($src->getP6());
        $dst->setQ($src->getQ());
        $dst->setS1($src->getS1());
        $dst->setS2($src->getS2());
        $dst->setU1($src->getU1());
        $dst->setU2($src->getU2());
        $dst->setV7($src->getV7());
        $dst->setV9($src->getV9());
        $dst->setX1(null !== $src->getX1() ? clone $src->getX1() : null);
        $dst->setY1($src->getY1());
        $dst->setY2($src->getY2());
        $dst->setY3($src->getY3());
        $dst->setY4($src->getY4());
        $dst->setY5($src->getY5());
        $dst->setY6($src->getY6());
        $dst->setZ1($src->getZ1());
        $dst->setZ2($src->getZ2());
        $dst->setZ3($src->getZ3());
        $dst->setZ4($src->getZ4());

        return $dst;
    }
}
