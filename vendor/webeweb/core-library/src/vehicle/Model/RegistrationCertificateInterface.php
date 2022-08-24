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

use DateTime;
use JsonSerializable;

/**
 * Registration certificate interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Vehicle\Model
 */
interface RegistrationCertificateInterface extends JsonSerializable {

    /**
     * Get the A.
     *
     * @return string|null Returns the A.
     */
    public function getA(): ?string;

    /**
     * Get the A.1.
     *
     * @return string|null Returns the A.1.
     */
    public function getA1(): ?string;

    /**
     * Get the B.
     *
     * @return DateTime|null Returns the B.
     */
    public function getB(): ?DateTime;

    /**
     * Get the C.1.
     *
     * @return string|null Returns the C.1.
     */
    public function getC1(): ?string;

    /**
     * Get the C.3.
     *
     * @return string|null Returns the C.3.
     */
    public function getC3(): ?string;

    /**
     * Get the C.4.1.
     *
     * @return string|null Returns the C.4.1.
     */
    public function getC41(): ?string;

    /**
     * Get the C.4a.
     *
     * @return string|null Returns the C.4a.
     */
    public function getC4a(): ?string;

    /**
     * Get the D.1.
     *
     * @return string|null Returns the D.1.
     */
    public function getD1(): ?string;

    /**
     * Get the D.2.
     *
     * @return string|null Returns the D.2.
     */
    public function getD2(): ?string;

    /**
     * Get the D.2.1.
     *
     * @return string|null Returns the D.2.1.
     */
    public function getD21(): ?string;

    /**
     * Get the D.3.
     *
     * @return string|null Returns the D.3.
     */
    public function getD3(): ?string;

    /**
     * Get the E.
     *
     * @return string|null Returns the E.
     */
    public function getE(): ?string;

    /**
     * Get the F.1.
     *
     * @return int|null Returns the F.1.
     */
    public function getF1(): ?int;

    /**
     * Get the F.2.
     *
     * @return int|null Returns the F.2.
     */
    public function getF2(): ?int;

    /**
     * Get the F.3.
     *
     * @return int|null Returns the F.3.
     */
    public function getF3(): ?int;

    /**
     * Get the G.
     *
     * @return int|null Returns the G.
     */
    public function getG(): ?int;

    /**
     * Get the G.1.
     *
     * @return int|null Returns the G.1.
     */
    public function getG1(): ?int;

    /**
     * Get the H.
     *
     * @return string|null Returns the H.
     */
    public function getH(): ?string;

    /**
     * Get the I.
     *
     * @return DateTime|null Returns the I.
     */
    public function getI(): ?DateTime;

    /**
     * Get the I.1.
     *
     * @return DateTime|null Returns the I.1.
     */
    public function getI1(): ?DateTime;

    /**
     * Get the J.
     *
     * @return string|null Returns the J.
     */
    public function getJ(): ?string;

    /**
     * Get the J.1.
     *
     * @return string|null Returns the J.1.
     */
    public function getJ1(): ?string;

    /**
     * Get the J.2.
     *
     * @return string|null Returns the J.2.
     */
    public function getJ2(): ?string;

    /**
     * Get the J.3.
     *
     * @return string|null Returns the J.3.
     */
    public function getJ3(): ?string;

    /**
     * Get the K.
     *
     * @return string|null Returns the K.
     */
    public function getK(): ?string;

    /**
     * Get the P.1.
     *
     * @return int|null Returns the P.1.
     */
    public function getP1(): ?int;

    /**
     * Get the P.2.
     *
     * @return int|null Returns the P.2.
     */
    public function getP2(): ?int;

    /**
     * Get the P.3.
     *
     * @return string|null Returns the P.3.
     */
    public function getP3(): ?string;

    /**
     * Get the P.6.
     *
     * @return int|null Returns the P.6.
     */
    public function getP6(): ?int;

    /**
     * Get the Q.
     *
     * @return float|null Returns the Q.
     */
    public function getQ(): ?float;

    /**
     * Get the S.1.
     *
     * @return int|null Returns the S.1.
     */
    public function getS1(): ?int;

    /**
     * Get the S.2.
     *
     * @return int|null Returns the S.2.
     */
    public function getS2(): ?int;

    /**
     * Get the U.1.
     *
     * @return int|null Returns the U.1.
     */
    public function getU1(): ?int;

    /**
     * Get the U.2.
     *
     * @return int|null Returns the U.2.
     */
    public function getU2(): ?int;

    /**
     * Get the V.7.
     *
     * @return int|null Returns the V.7.
     */
    public function getV7(): ?int;

    /**
     * Get the V.9.
     *
     * @return string|null Returns the V.9.
     */
    public function getV9(): ?string;

    /**
     * Get the X.1.
     *
     * @return DateTime|null Returns the X.1.
     */
    public function getX1(): ?DateTime;

    /**
     * Get the Y.1.
     *
     * @return float|null Returns the Y.1.
     */
    public function getY1(): ?float;

    /**
     * Get the Y.2.
     *
     * @return float|null Returns the Y.2.
     */
    public function getY2(): ?float;

    /**
     * Get the Y.3.
     *
     * @return float|null Returns the Y.3.
     */
    public function getY3(): ?float;

    /**
     * Get the Y.4.
     *
     * @return float|null Returns the Y.4.
     */
    public function getY4(): ?float;

    /**
     * Get the Y.5.
     *
     * @return float|null Returns the Y.5.
     */
    public function getY5(): ?float;

    /**
     * Get the Y.6.
     *
     * @return float|null Returns the Y.6.
     */
    public function getY6(): ?float;

    /**
     * Get the Z.1.
     *
     * @return string|null Returns the Z.1.
     */
    public function getZ1(): ?string;

    /**
     * Get the Z.2.
     *
     * @return string|null Returns the Z.2.
     */
    public function getZ2(): ?string;

    /**
     * Get the Z.3.
     *
     * @return string|null Returns the Z.3.
     */
    public function getZ3(): ?string;

    /**
     * Get the Z.4.
     *
     * @return string|null Returns the Z.4.
     */
    public function getZ4(): ?string;

    /**
     * Set the A.
     *
     * @param string|null $a The A.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setA(?string $a): RegistrationCertificateInterface;

    /**
     * Set the A.1.
     *
     * @param string|null $a1 The A.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setA1(?string $a1): RegistrationCertificateInterface;

    /**
     * Set the B.
     *
     * @param DateTime|null $b The B.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setB(?DateTime $b): RegistrationCertificateInterface;

    /**
     * Set the C.1.
     *
     * @param string|null $c1 The C.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setC1(?string $c1): RegistrationCertificateInterface;

    /**
     * Set the C.3.
     *
     * @param string|null $c3 The C.3.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setC3(?string $c3): RegistrationCertificateInterface;

    /**
     * Set the C.4.1.
     *
     * @param string|null $c41 The C.4.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setC41(?string $c41): RegistrationCertificateInterface;

    /**
     * Set the C.4a.
     *
     * @param string|null $c4a The C.4a.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setC4a(?string $c4a): RegistrationCertificateInterface;

    /**
     * Set the D.1.
     *
     * @param string|null $d1 The D.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setD1(?string $d1): RegistrationCertificateInterface;

    /**
     * Set the D.2.
     *
     * @param string|null $d2 The D.2.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setD2(?string $d2): RegistrationCertificateInterface;

    /**
     * Set the D.2.1.
     *
     * @param string|null $d21 The D.2.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setD21(?string $d21): RegistrationCertificateInterface;

    /**
     * Set the D.3.
     *
     * @param string|null $d3 The D.3.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setD3(?string $d3): RegistrationCertificateInterface;

    /**
     * Set the E.
     *
     * @param string|null $e The E.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setE(?string $e): RegistrationCertificateInterface;

    /**
     * Set the F.1.
     *
     * @param int|null $f1 The F.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setF1(?int $f1): RegistrationCertificateInterface;

    /**
     * Set the F.2.
     *
     * @param int|null $f2 The F.2.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setF2(?int $f2): RegistrationCertificateInterface;

    /**
     * Set the F.3.
     *
     * @param int|null $f3 The F.3.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setF3(?int $f3): RegistrationCertificateInterface;

    /**
     * Set the G.
     *
     * @param int|null $g The G.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setG(?int $g): RegistrationCertificateInterface;

    /**
     * Set the G.1.
     *
     * @param int|null $g1 The G.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setG1(?int $g1): RegistrationCertificateInterface;

    /**
     * Set the H.
     *
     * @param string|null $h The H.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setH(?string $h): RegistrationCertificateInterface;

    /**
     * Set the I.
     *
     * @param DateTime|null $i The I.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setI(?DateTime $i): RegistrationCertificateInterface;

    /**
     * Set the I.1.
     *
     * @param DateTime|null $i1 The I.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setI1(?DateTime $i1): RegistrationCertificateInterface;

    /**
     * Set the J.
     *
     * @param string|null $j The J.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setJ(?string $j): RegistrationCertificateInterface;

    /**
     * Set the J.1.
     *
     * @param string|null $j1 The J.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setJ1(?string $j1): RegistrationCertificateInterface;

    /**
     * Set the J.2.
     *
     * @param string|null $j2 The J.2.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setJ2(?string $j2): RegistrationCertificateInterface;

    /**
     * Set the J.3.
     *
     * @param string|null $j3 The J.3.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setJ3(?string $j3): RegistrationCertificateInterface;

    /**
     * Set the K.
     *
     * @param string|null $k The K.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setK(?string $k): RegistrationCertificateInterface;

    /**
     * Set the P.1.
     *
     * @param int|null $p1 The P.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setP1(?int $p1): RegistrationCertificateInterface;

    /**
     * Set the P.2.
     *
     * @param int|null $p2 The P.2.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setP2(?int $p2): RegistrationCertificateInterface;

    /**
     * Set the P.3.
     *
     * @param string|null $p3 The P.3.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setP3(?string $p3): RegistrationCertificateInterface;

    /**
     * Set the P.6.
     *
     * @param int|null $p6 The P.6.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setP6(?int $p6): RegistrationCertificateInterface;

    /**
     * Set the Q.
     *
     * @param float|null $q The Q.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setQ(?float $q): RegistrationCertificateInterface;

    /**
     * Set the S.1.
     *
     * @param int|null $s1 The S.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setS1(?int $s1): RegistrationCertificateInterface;

    /**
     * Set the S.2.
     *
     * @param int|null $s2 The S.2.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setS2(?int $s2): RegistrationCertificateInterface;

    /**
     * Set the U.1.
     *
     * @param int|null $u1 The U.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setU1(?int $u1): RegistrationCertificateInterface;

    /**
     * Set the U.2.
     *
     * @param int|null $u2 The U.2.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setU2(?int $u2): RegistrationCertificateInterface;

    /**
     * Set the V.7.
     *
     * @param int|null $v7 The V.7.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setV7(?int $v7): RegistrationCertificateInterface;

    /**
     * Set the V.9.
     *
     * @param string|null $v9 The V.9.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setV9(?string $v9): RegistrationCertificateInterface;

    /**
     * Set the X.1.
     *
     * @param DateTime|null $x1 The X.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setX1(?DateTime $x1): RegistrationCertificateInterface;

    /**
     * Set the Y.1.
     *
     * @param float|null $y1 The Y.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setY1(?float $y1): RegistrationCertificateInterface;

    /**
     * Set the Y.2.
     *
     * @param float|null $y2 The Y.2.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setY2(?float $y2): RegistrationCertificateInterface;

    /**
     * Set the Y.3.
     *
     * @param float|null $y3 The Y.3.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setY3(?float $y3): RegistrationCertificateInterface;

    /**
     * Set the Y.4.
     *
     * @param float|null $y4 The Y.4.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setY4(?float $y4): RegistrationCertificateInterface;

    /**
     * Set the Y.5.
     *
     * @param float|null $y5 The Y.5.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setY5(?float $y5): RegistrationCertificateInterface;

    /**
     * Set the Y.6.
     *
     * @param float|null $y6 The Y.6.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setY6(?float $y6): RegistrationCertificateInterface;

    /**
     * Set the Z.1.
     *
     * @param string|null $z1 The Z.1.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setZ1(?string $z1): RegistrationCertificateInterface;

    /**
     * Set the Z.2.
     *
     * @param string|null $z2 The Z.2.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setZ2(?string $z2): RegistrationCertificateInterface;

    /**
     * Set the Z.3.
     *
     * @param string|null $z3 The Z.3.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setZ3(?string $z3): RegistrationCertificateInterface;

    /**
     * Set the Z.4.
     *
     * @param string|null $z4 The Z.4.
     * @return RegistrationCertificateInterface Returns this registration certificate.
     */
    public function setZ4(?string $z4): RegistrationCertificateInterface;
}
