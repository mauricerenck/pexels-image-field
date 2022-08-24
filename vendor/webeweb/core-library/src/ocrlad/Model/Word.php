<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Model;

use WBW\Library\OcrLad\Geometry\Point;
use WBW\Library\Traits\Integers\IntegerPageTrait;
use WBW\Library\Traits\Strings\StringContentTrait;
use WBW\Library\Traits\Strings\StringTypeTrait;

/**
 * Word.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Model
 */
class Word {

    use IntegerPageTrait;
    use StringContentTrait;
    use StringTypeTrait;

    /**
     * Type "line break".
     *
     * @var string
     */
    const TYPE_LINE_BREAK = "LB";

    /**
     * Type "no line break".
     *
     * @var string
     */
    const TYPE_NO_LINE_BREAK = "NLB";

    /**
     * OCR confidence.
     *
     * @var float|null
     */
    private $ocrConfidence;

    /**
     * Parent.
     *
     * @var Page|null
     */
    private $parent;

    /**
     * Point 1.
     *
     * @var Point
     */
    private $point1;

    /**
     * Point 2.
     *
     * @var Point
     */
    private $point2;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setPoint1(new Point());
        $this->setPoint2(new Point());
    }

    /**
     * Get the OCR confidence.
     *
     * @return float|null Returns the OCR confidence.
     */
    public function getOcrConfidence(): ?float {
        return $this->ocrConfidence;
    }

    /**
     * Get the parent.
     *
     * @return Page|null Returns the parent.
     */
    public function getParent(): ?Page {
        return $this->parent;
    }

    /**
     * Get the point 1.
     *
     * @return Point Returns the point 1
     */
    public function getPoint1(): Point {
        return $this->point1;
    }

    /**
     * Get the point 2.
     *
     * @return Point Returns the point 2.
     */
    public function getPoint2(): Point {
        return $this->point2;
    }

    /**
     * Get the X1.
     *
     * @return float|null Returns the X1.
     */
    public function getX1(): ?float {
        return $this->getPoint1()->getX();
    }

    /**
     * Get the X2.
     *
     * @return float|null Returns the X2.
     */
    public function getX2(): ?float {
        return $this->getPoint2()->getX();
    }

    /**
     * Get the Y1.
     *
     * @return float|null Returns the Y1.
     */
    public function getY1(): ?float {
        return $this->getPoint1()->getY();
    }

    /**
     * Get the Y2.
     *
     * @return float|null Returns the Y2.
     */
    public function getY2(): ?float {
        return $this->getPoint2()->getY();
    }

    /**
     * Set the OCR confidence.
     *
     * @param float|null $ocrConfidence The OCR confidence.
     * @return Word Returns this word.
     */
    public function setOcrConfidence(?float $ocrConfidence): Word {
        $this->ocrConfidence = $ocrConfidence;
        return $this;
    }

    /**
     * Set the parent.
     *
     * @param Page|null $parent The parent.
     * @return Word Returns this word.
     */
    public function setParent(Page $parent = null): Word {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Set the point 1.
     *
     * @param Point $point1 The point 1.
     * @return Word Returns this word.
     */
    protected function setPoint1(Point $point1): Word {
        $this->point1 = $point1;
        return $this;
    }

    /**
     * Set the point 2.
     *
     * @param Point $point2 The point 2.
     * @return Word Returns this word.
     */
    protected function setPoint2(Point $point2): Word {
        $this->point2 = $point2;
        return $this;
    }

    /**
     * Set the X1.
     *
     * @param float|null $x1 The X1.
     * @return Word Returns this word.
     */
    public function setX1(?float $x1): Word {
        $this->getPoint1()->setX($x1);
        return $this;
    }

    /**
     * Set the X2.
     *
     * @param float|null $x2 The X2.
     * @return Word Returns this word.
     */
    public function setX2(?float $x2): Word {
        $this->getPoint2()->setX($x2);
        return $this;
    }

    /**
     * Set the Y1.
     *
     * @param float|null $y1 The Y1.
     * @return Word Returns this word.
     */
    public function setY1(?float $y1): Word {
        $this->getPoint1()->setY($y1);
        return $this;
    }

    /**
     * Set the Y2.
     *
     * @param float|null $y2 The Y2.
     * @return Word Returns this word.
     */
    public function setY2(?float $y2): Word {
        $this->getPoint2()->setY($y2);
        return $this;
    }
}
