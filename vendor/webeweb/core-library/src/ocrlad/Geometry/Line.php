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

/**
 * Line.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Geometry
 */
class Line {

    /**
     * Point "A".
     *
     * @var Point
     */
    private $a;

    /**
     * Point "B".
     *
     * @var Point
     */
    private $b;

    /**
     * Constructor.
     *
     * @param Point|null $a The point "A".
     * @param Point|null $b The point "B".
     */
    public function __construct(Point $a = null, Point $b = null) {
        $this->setA($a);
        $this->setB($b);
    }

    /**
     * Distance d = sqrt(a² + b²).
     *
     * @return float Returns the distance.
     */
    public function d(): float {
        return $this->getB()->d($this->getA());
    }

    /**
     * Degree.
     *
     * @return Angle Returns the degree.
     */
    public function deg(): Angle {
        return $this->getB()->deg($this->getA());
    }

    /**
     * Get the point "A".
     *
     * @return Point Returns the point "A".
     */
    public function getA(): ?Point {
        return $this->a;
    }

    /**
     * Get the point "B".
     *
     * @return Point Returns the point "B".
     */
    public function getB(): ?Point {
        return $this->b;
    }

    /**
     * Slope m = (y2 - y1) / (x2 - x1).
     *
     * @return float Returns the slope.
     */
    public function m(): float {
        return $this->getB()->m($this->getA());
    }

    /**
     * Originally abscissa y = mx + b.
     *
     * @return Point Returns the originally abscissa.
     */
    public function originallyAbscissa(): Point {

        $m = $this->getB()->m($this->getA());
        $b = $this->originallyOrdered()->getY();

        // x = (y - b) / m
        $x = (0 - $b) / $m;

        return new Point($x, 0);
    }

    /**
     * Originally ordered y = mx + b.
     *
     * @return Point Returns the originally ordered.
     */
    public function originallyOrdered(): Point {

        $m  = $this->getB()->m($this->getA());
        $mx = $m * $this->getB()->getX();

        // b = y - mx
        $b = $this->getB()->getY() - $mx;

        return new Point(0, $b);
    }

    /**
     * Radian.
     *
     * @return Angle Returns the radian.
     */
    public function rad(): Angle {
        return $this->getB()->rad($this->getA());
    }

    /**
     * Rotate.
     *
     * @param Point $o The point.
     * @param Angle $a The angle.
     * @return Line Returns the rotated line.
     */
    public function rotate(Point $o, Angle $a): Line {

        $a2 = $this->getA()->rotate($o, $a);
        $b2 = $this->getB()->rotate($o, $a);

        return new Line($a2, $b2);
    }

    /**
     * Set the point "A".
     *
     * @param Point|null $a The point "A".
     * @return Line Returns this line.
     */
    public function setA(Point $a = null): Line {
        $this->a = $a;
        return $this;
    }

    /**
     * Set the point "B".
     *
     * @param Point|null $b The point "B".
     * @return Line Returns this line.
     */
    public function setB(Point $b = null): Line {
        $this->b = $b;
        return $this;
    }
}
