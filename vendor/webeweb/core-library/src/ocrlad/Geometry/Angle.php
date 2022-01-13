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

use WBW\Library\Traits\Floats\FloatValueTrait;

/**
 * Angle.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Geometry
 */
class Angle {

    use FloatValueTrait;

    /**
     * Unit "degree".
     *
     * @var string
     */
    const UNIT_DEGREE = "degree";

    /**
     * Unit "radian".
     *
     * @var string
     */
    const UNIT_RADIAN = "radian";

    /**
     * Units.
     *
     * @var string
     */
    private $units;

    /**
     * Constructor.
     *
     * @param float $value The value.
     * @param string $units The units.
     */
    public function __construct(float $value, string $units = self::UNIT_RADIAN) {
        $this->setUnits($units);
        $this->setValue($value);
    }

    /**
     * Degree.
     *
     * @return float Returns the degree.
     */
    public function deg(): float {

        if (true === $this->isDegree()) {
            return $this->getValue();
        }

        return $this->getValue() * 180 / pi();
    }

    /**
     * Get the unit.
     *
     * @return string Returns the unit.
     */
    public function getUnits(): string {
        return $this->units;
    }

    /**
     * Determines if this angle is in degree.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function isDegree(): bool {
        return self::UNIT_DEGREE === $this->getUnits();
    }

    /**
     * Determines if this angle is in radian.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function isRadian(): bool {
        return self::UNIT_RADIAN === $this->getUnits();
    }

    /**
     * Radian.
     *
     * @return float Returns the radian.
     */
    public function rad(): float {

        if (true === $this->isRadian()) {
            return $this->getValue();
        }

        return $this->getValue() * pi() / 180;
    }

    /**
     * Set the unit.
     *
     * @param string $units The unit.
     * @return Angle Returns this angle.
     */
    protected function setUnits(string $units): Angle {
        $this->units = $units;
        return $this;
    }
}
