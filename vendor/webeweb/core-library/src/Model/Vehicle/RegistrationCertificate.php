<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Model\Vehicle;

use DateTime;
use WBW\Library\Common\Serializer\Vehicle\JsonSerializer;

/**
 * Registration certificate.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Vehicle
 */
class RegistrationCertificate implements RegistrationCertificateInterface {

    /**
     * A.
     *
     * @var string|null
     */
    private $a;

    /**
     * A.1.
     *
     * @var string|null
     */
    private $a1;

    /**
     * B.
     *
     * @var DateTime
     */
    private $b;

    /**
     * C.1.
     *
     * @var string|null
     */
    private $c1;

    /**
     * C.3.
     *
     * @var string|null
     */
    private $c3;

    /**
     * C.4.1.
     *
     * @var string|null
     */
    private $c41;

    /**
     * C.4a.
     *
     * @var string|null
     */
    private $c4a;

    /**
     * D.1.
     *
     * @var string|null
     */
    private $d1;

    /**
     * D.2.
     *
     * @var string|null
     */
    private $d2;

    /**
     * D.2.1.
     *
     * @var string|null
     */
    private $d21;

    /**
     * D.3.
     *
     * @var string|null
     */
    private $d3;

    /**
     * E.
     *
     * @var string|null
     */
    private $e;

    /**
     * F.1.
     *
     * @var int|null
     */
    private $f1;

    /**
     * F.2.
     *
     * @var int|null
     */
    private $f2;

    /**
     * F.3.
     *
     * @var int|null
     */
    private $f3;

    /**
     * G.
     *
     * @var int|null
     */
    private $g;

    /**
     * G.1.
     *
     * @var int|null
     */
    private $g1;

    /**
     * H.
     *
     * @var string|null
     */
    private $h;

    /**
     * I.
     *
     * @var DateTime|null
     */
    private $i;

    /**
     * I.1.
     *
     * @var DateTime|null
     */
    private $i1;

    /**
     * J.
     *
     * @var string|null
     */
    private $j;

    /**
     * J.1.
     *
     * @var string|null
     */
    private $j1;

    /**
     * J.2.
     *
     * @var string|null
     */
    private $j2;

    /**
     * J.3.
     *
     * @var string|null
     */
    private $j3;

    /**
     * K.
     *
     * @var string|null
     */
    private $k;

    /**
     * P.1.
     *
     * @var int|null
     */
    private $p1;

    /**
     * P.2.
     *
     * @var int|null
     */
    private $p2;

    /**
     * P.3.
     *
     * @var string|null
     */
    private $p3;

    /**
     * P.6.
     *
     * @var int|null
     */
    private $p6;

    /**
     * Q.
     *
     * @var float|null
     */
    private $q;

    /**
     * S.1.
     *
     * @var int|null
     */
    private $s1;

    /**
     * S.2.
     *
     * @var int|null
     */
    private $s2;

    /**
     * U.1.
     *
     * @var int|null
     */
    private $u1;

    /**
     * U.2.
     *
     * @var int|null
     */
    private $u2;

    /**
     * V.7.
     *
     * @var int|null
     */
    private $v7;

    /**
     * V.9.
     *
     * @var string|null
     */
    private $v9;

    /**
     * X.1.
     *
     * @var DateTime|null
     */
    private $x1;

    /**
     * Y.1.
     *
     * @var float|null
     */
    private $y1;

    /**
     * Y.2.
     *
     * @var float|null
     */
    private $y2;

    /**
     * Y.3.
     *
     * @var float|null
     */
    private $y3;

    /**
     * Y.4.
     *
     * @var float|null
     */
    private $y4;

    /**
     * Y.5.
     *
     * @var float|null
     */
    private $y5;

    /**
     * Y.6.
     *
     * @var float|null
     */
    private $y6;

    /**
     * Z.1.
     *
     * @var string|null
     */
    private $z1;

    /**
     * Z.2.
     *
     * @var string|null
     */
    private $z2;

    /**
     * Z.3.
     *
     * @var string|null
     */
    private $z3;

    /**
     * Z.4.
     *
     * @var string|null
     */
    private $z4;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritDoc}
     */
    public function getA(): ?string {
        return $this->a;
    }

    /**
     * {@inheritDoc}
     */
    public function getA1(): ?string {
        return $this->a1;
    }

    /**
     * {@inheritDoc}
     */
    public function getB(): ?DateTime {
        return $this->b;
    }

    /**
     * {@inheritDoc}
     */
    public function getC1(): ?string {
        return $this->c1;
    }

    /**
     * {@inheritDoc}
     */
    public function getC3(): ?string {
        return $this->c3;
    }

    /**
     * {@inheritDoc}
     */
    public function getC41(): ?string {
        return $this->c41;
    }

    /**
     * {@inheritDoc}
     */
    public function getC4a(): ?string {
        return $this->c4a;
    }

    /**
     * {@inheritDoc}
     */
    public function getD1(): ?string {
        return $this->d1;
    }

    /**
     * {@inheritDoc}
     */
    public function getD2(): ?string {
        return $this->d2;
    }

    /**
     * {@inheritDoc}
     */
    public function getD21(): ?string {
        return $this->d21;
    }

    /**
     * {@inheritDoc}
     */
    public function getD3(): ?string {
        return $this->d3;
    }

    /**
     * {@inheritDoc}
     */
    public function getE(): ?string {
        return $this->e;
    }

    /**
     * {@inheritDoc}
     */
    public function getF1(): ?int {
        return $this->f1;
    }

    /**
     * {@inheritDoc}
     */
    public function getF2(): ?int {
        return $this->f2;
    }

    /**
     * {@inheritDoc}
     */
    public function getF3(): ?int {
        return $this->f3;
    }

    /**
     * {@inheritDoc}
     */
    public function getG(): ?int {
        return $this->g;
    }

    /**
     * {@inheritDoc}
     */
    public function getG1(): ?int {
        return $this->g1;
    }

    /**
     * {@inheritDoc}
     */
    public function getH(): ?string {
        return $this->h;
    }

    /**
     * {@inheritDoc}
     */
    public function getI(): ?DateTime {
        return $this->i;
    }

    /**
     * {@inheritDoc}
     */
    public function getI1(): ?DateTime {
        return $this->i1;
    }

    /**
     * {@inheritDoc}
     */
    public function getJ(): ?string {
        return $this->j;
    }

    /**
     * {@inheritDoc}
     */
    public function getJ1(): ?string {
        return $this->j1;
    }

    /**
     * {@inheritDoc}
     */
    public function getJ2(): ?string {
        return $this->j2;
    }

    /**
     * {@inheritDoc}
     */
    public function getJ3(): ?string {
        return $this->j3;
    }

    /**
     * {@inheritDoc}
     */
    public function getK(): ?string {
        return $this->k;
    }

    /**
     * {@inheritDoc}
     */
    public function getP1(): ?int {
        return $this->p1;
    }

    /**
     * {@inheritDoc}
     */
    public function getP2(): ?int {
        return $this->p2;
    }

    /**
     * {@inheritDoc}
     */
    public function getP3(): ?string {
        return $this->p3;
    }

    /**
     * {@inheritDoc}
     */
    public function getP6(): ?int {
        return $this->p6;
    }

    /**
     * {@inheritDoc}
     */
    public function getQ(): ?float {
        return $this->q;
    }

    /**
     * {@inheritDoc}
     */
    public function getS1(): ?int {
        return $this->s1;
    }

    /**
     * {@inheritDoc}
     */
    public function getS2(): ?int {
        return $this->s2;
    }

    /**
     * {@inheritDoc}
     */
    public function getU1(): ?int {
        return $this->u1;
    }

    /**
     * {@inheritDoc}
     */
    public function getU2(): ?int {
        return $this->u2;
    }

    /**
     * {@inheritDoc}
     */
    public function getV7(): ?int {
        return $this->v7;
    }

    /**
     * {@inheritDoc}
     */
    public function getV9(): ?string {
        return $this->v9;
    }

    /**
     * {@inheritDoc}
     */
    public function getX1(): ?DateTime {
        return $this->x1;
    }

    /**
     * {@inheritDoc}
     */
    public function getY1(): ?float {
        return $this->y1;
    }

    /**
     * {@inheritDoc}
     */
    public function getY2(): ?float {
        return $this->y2;
    }

    /**
     * {@inheritDoc}
     */
    public function getY3(): ?float {
        return $this->y3;
    }

    /**
     * {@inheritDoc}
     */
    public function getY4(): ?float {
        return $this->y4;
    }

    /**
     * {@inheritDoc}
     */
    public function getY5(): ?float {
        return $this->y5;
    }

    /**
     * {@inheritDoc}
     */
    public function getY6(): ?float {
        return $this->y6;
    }

    /**
     * {@inheritDoc}
     */
    public function getZ1(): ?string {
        return $this->z1;
    }

    /**
     * {@inheritDoc}
     */
    public function getZ2(): ?string {
        return $this->z2;
    }

    /**
     * {@inheritDoc}
     */
    public function getZ3(): ?string {
        return $this->z3;
    }

    /**
     * {@inheritDoc}
     */
    public function getZ4(): ?string {
        return $this->z4;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeRegistrationCertificate($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setA(?string $a): RegistrationCertificateInterface {
        $this->a = $a;
        return $this;
    }

    public function setA1(?string $a1): RegistrationCertificateInterface {
        $this->a1 = $a1;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setB(?DateTime $b): RegistrationCertificateInterface {
        $this->b = $b;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setC1(?string $c1): RegistrationCertificateInterface {
        $this->c1 = $c1;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setC3(?string $c3): RegistrationCertificateInterface {
        $this->c3 = $c3;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setC41(?string $c41): RegistrationCertificateInterface {
        $this->c41 = $c41;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setC4a(?string $c4a): RegistrationCertificateInterface {
        $this->c4a = $c4a;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setD1(?string $d1): RegistrationCertificateInterface {
        $this->d1 = $d1;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setD2(?string $d2): RegistrationCertificateInterface {
        $this->d2 = $d2;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setD21(?string $d21): RegistrationCertificateInterface {
        $this->d21 = $d21;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setD3(?string $d3): RegistrationCertificateInterface {
        $this->d3 = $d3;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setE(?string $e): RegistrationCertificateInterface {
        $this->e = $e;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setF1(?int $f1): RegistrationCertificateInterface {
        $this->f1 = $f1;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setF2(?int $f2): RegistrationCertificateInterface {
        $this->f2 = $f2;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setF3(?int $f3): RegistrationCertificateInterface {
        $this->f3 = $f3;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setG(?int $g): RegistrationCertificateInterface {
        $this->g = $g;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setG1(?int $g1): RegistrationCertificateInterface {
        $this->g1 = $g1;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setH(?string $h): RegistrationCertificateInterface {
        $this->h = $h;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setI(?DateTime $i): RegistrationCertificateInterface {
        $this->i = $i;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setI1(?DateTime $i1): RegistrationCertificateInterface {
        $this->i1 = $i1;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setJ(?string $j): RegistrationCertificateInterface {
        $this->j = $j;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setJ1(?string $j1): RegistrationCertificateInterface {
        $this->j1 = $j1;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setJ2(?string $j2): RegistrationCertificateInterface {
        $this->j2 = $j2;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setJ3(?string $j3): RegistrationCertificateInterface {
        $this->j3 = $j3;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setK(?string $k): RegistrationCertificateInterface {
        $this->k = $k;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setP1(?int $p1): RegistrationCertificateInterface {
        $this->p1 = $p1;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setP2(?int $p2): RegistrationCertificateInterface {
        $this->p2 = $p2;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setP3(?string $p3): RegistrationCertificateInterface {
        $this->p3 = $p3;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setP6(?int $p6): RegistrationCertificateInterface {
        $this->p6 = $p6;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setQ(?float $q): RegistrationCertificateInterface {
        $this->q = $q;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setS1(?int $s1): RegistrationCertificateInterface {
        $this->s1 = $s1;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setS2(?int $s2): RegistrationCertificateInterface {
        $this->s2 = $s2;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setU1(?int $u1): RegistrationCertificateInterface {
        $this->u1 = $u1;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setU2(?int $u2): RegistrationCertificateInterface {
        $this->u2 = $u2;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setV7(?int $v7): RegistrationCertificateInterface {
        $this->v7 = $v7;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setV9(?string $v9): RegistrationCertificateInterface {
        $this->v9 = $v9;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setX1(?DateTime $x1): RegistrationCertificateInterface {
        $this->x1 = $x1;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setY1(?float $y1): RegistrationCertificateInterface {
        $this->y1 = $y1;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setY2(?float $y2): RegistrationCertificateInterface {
        $this->y2 = $y2;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setY3(?float $y3): RegistrationCertificateInterface {
        $this->y3 = $y3;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setY4(?float $y4): RegistrationCertificateInterface {
        $this->y4 = $y4;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setY5(?float $y5): RegistrationCertificateInterface {
        $this->y5 = $y5;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setY6(?float $y6): RegistrationCertificateInterface {
        $this->y6 = $y6;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setZ1(?string $z1): RegistrationCertificateInterface {
        $this->z1 = $z1;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setZ2(?string $z2): RegistrationCertificateInterface {
        $this->z2 = $z2;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setZ3(?string $z3): RegistrationCertificateInterface {
        $this->z3 = $z3;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setZ4(?string $z4): RegistrationCertificateInterface {
        $this->z4 = $z4;
        return $this;
    }
}
