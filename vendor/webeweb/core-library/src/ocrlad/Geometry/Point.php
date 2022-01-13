<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Geometry;

use WBW\Library\Traits\Floats\FloatXTrait;
use WBW\Library\Traits\Floats\FloatYTrait;

/**
 * Point.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Geometry
 */
class Point {

    use FloatXTrait;
    use FloatYTrait;

    /**
     * Constructor.
     *
     * @param float|null $x The x.
     * @param float|null $y The y.
     */
    public function __construct(float $x = null, float $y = null) {
        $this->setX($x);
        $this->setY($y);
    }

    /**
     * Distance d = sqrt(a² + b²).
     *
     * @param Point $p The point.
     * @return float Returns the distance.
     */
    public function d(Point $p): float {

        $x = $this->getX() - $p->getX();
        $y = $this->getY() - $p->getY();

        $x2 = $x * $x;
        $y2 = $y * $y;

        return sqrt($x2 + $y2);
    }

    /**
     * Degree.
     *
     * @param Point $p The point.
     * @return Angle Returns the degree.
     */
    public function deg(Point $p): Angle {

        $rad = $this->rad($p);

        return new Angle($rad->deg(), Angle::UNIT_DEGREE);
    }

    /**
     * Slope m = (y2 - y1) / (x2 - x1).
     *
     * @param Point $p The point.
     * @return float Returns the slope.
     */
    public function m(Point $p): float {

        $x = $this->getX() - $p->getX();
        $y = $this->getY() - $p->getY();

        if (0 == $x) {
            return INF;
        }

        return $y / $x;
    }

    /**
     * Radian.
     *
     * @param Point $p The point.
     * @return Angle Returns the radian.
     */
    public function rad(Point $p): Angle {

        $m = $this->m($p);
        if (INF !== $m) {
            return new Angle(atan($m));
        }

        $rad = pi() / 2;

        return new Angle($p->getY() < $this->getY() ? $rad : -$rad);
    }

    /**
     * Rotate.
     *
     * @param Point $o The point.
     * @param Angle $a The angle.
     * @return Point Returns the rotated point.
     */
    public function rotate(Point $o, Angle $a): Point {

        $rad = $a->rad();

        $dX = $this->getX() - $o->getX();
        $dY = $this->getY() - $o->getY();

        $x = $dX * cos($rad) + $dY * sin($rad) + $o->getX();
        $y = -$dX * sin($rad) + $dY * cos($rad) + $o->getY();

        return new Point($x, $y);
    }
}
