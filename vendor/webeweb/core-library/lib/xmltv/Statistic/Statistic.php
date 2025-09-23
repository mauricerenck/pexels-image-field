<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Statistic;

/**
 * Statistic.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Statistic
 */
class Statistic {

    /**
     * Content format
     *
     * @var string
     */
    public const CONTENT_FORMAT = " %-' 16s   %-' 19s   % 6d   % 6d   % 6d   %' 9.2f";

    /**
     * Header format.
     *
     * @var string
     */
    public const HEADER_FORMAT = "------------------ --------------------- -------- -------- -------- -----------";

    /**
     * Titles format.
     *
     * @var string
     */
    public const TITLES_FORMAT = " Node               Attribute             Count    Min      Max      Avg";

    /**
     * Attribute name.
     *
     * @var string
     */
    private $attrName;

    /**
     * Average.
     *
     * @var float|null
     */
    private $avg;

    /**
     * Count.
     *
     * @var int|null
     */
    private $count;

    /**
     * Max.
     *
     * @var int|null
     */
    private $max;

    /**
     * Min.
     *
     * @var int|null
     */
    private $min;

    /**
     * Node name.
     *
     * @var string|null
     */
    private $nodeName;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setAvg(0.0);
        $this->setCount(0);
        $this->setMax(0);
    }

    /**
     * Convert this statistic into a string representation.
     *
     * @return string Returns a string representation of this statistic.
     */
    public function __toString(): string {

        $args = [
            $this->getNodeName(),
            $this->getAttrName(),
            $this->getCount(),
            $this->getMin(),
            $this->getMax(),
            $this->getAvg(),
        ];

        return vsprintf(self::CONTENT_FORMAT, $args);
    }

    /**
     * Add.
     *
     * @param string|null $str The string.
     * @return Statistic Returns this statistic.
     */
    public function add(?string $str): Statistic {

        ++$this->count;

        $len = null !== $str ? mb_strlen($str) : 0;

        if ($len < $this->getMin() || null === $this->getMin()) {
            $this->setMin($len);
        }

        if ($this->getMax() < $len) {
            $this->setMax($len);
        }

        if (1 === $this->getCount()) {
            $this->setAvg((float) $len);
            return $this;
        }

        $avg = ($this->getAvg() + $len) / 2;
        $this->setAvg($avg);

        return $this;
    }

    /**
     * Get the attribute name.
     *
     * @return string|null Returns the attribute name.
     */
    public function getAttrName(): ?string {
        return $this->attrName;
    }

    /**
     * Get the average.
     *
     * @return float|null Returns the average.
     */
    public function getAvg(): ?float {
        return $this->avg;
    }

    /**
     * Get the count.
     *
     * @return int|null Returns the count.
     */
    public function getCount(): ?int {
        return $this->count;
    }

    /**
     * Get the max.
     *
     * @return int|null Returns the max.
     */
    public function getMax(): ?int {
        return $this->max;
    }

    /**
     * Get the min.
     *
     * @return int|null Returns the min.
     */
    public function getMin(): ?int {
        return $this->min;
    }

    /**
     * Get the node name.
     *
     * @return string|null Returns the node name.
     */
    public function getNodeName(): ?string {
        return $this->nodeName;
    }

    /**
     * Set the attribute name.
     *
     * @param string|null $attrName The attribute name.
     * @return Statistic Returns this statistic.
     */
    public function setAttrName(?string $attrName): Statistic {
        $this->attrName = $attrName;
        return $this;
    }

    /**
     * Set the average.
     *
     * @param float|null $avg The average.
     * @return Statistic Returns this statistic.
     */
    public function setAvg(?float $avg): Statistic {
        $this->avg = $avg;
        return $this;
    }

    /**
     * Set the count.
     *
     * @param int|null $count The count.
     * @return Statistic Returns this statistic.
     */
    public function setCount(?int $count): Statistic {
        $this->count = $count;
        return $this;
    }

    /**
     * Set the max.
     *
     * @param int|null $max The max.
     * @return Statistic Returns this statistic.
     */
    public function setMax(?int $max): Statistic {
        $this->max = $max;
        return $this;
    }

    /**
     * Set the min.
     *
     * @param int|null $min The min.
     * @return Statistic Returns this statistic.
     */
    public function setMin(?int $min): Statistic {
        $this->min = $min;
        return $this;
    }

    /**
     * Set the node name.
     *
     * @param string|null $nodeName The node name.
     * @return Statistic Returns this statistic.
     */
    public function setNodeName(?string $nodeName): Statistic {
        $this->nodeName = $nodeName;
        return $this;
    }
}
