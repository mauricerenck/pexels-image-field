<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Highcharts\Model\Chart\YAxis;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts crosshair.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\YAxis
 * @version 5.0.14
 */
class HighchartsCrosshair implements JsonSerializable {

    /**
     * Class name.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $className;

    /**
     * Color.
     *
     * @var string|null
     * @since 4.1
     */
    private $color;

    /**
     * Dash style.
     *
     * @var string|null
     * @since 4.1
     */
    private $dashStyle = "Solid";

    /**
     * Snap.
     *
     * @var bool|null
     * @since 4.1
     */
    private $snap = true;

    /**
     * Width.
     *
     * @var float|null
     * @since 4.1
     */
    private $width;

    /**
     * Z index.
     *
     * @var float|null
     * @since 4.1
     */
    private $zIndex = 2;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the class name.
     *
     * @return string|null Returns the class name.
     */
    public function getClassName(): ?string {
        return $this->className;
    }

    /**
     * Get the color.
     *
     * @return string|null Returns the color.
     */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * Get the dash style.
     *
     * @return string|null Returns the dash style.
     */
    public function getDashStyle(): ?string {
        return $this->dashStyle;
    }

    /**
     * Get the snap.
     *
     * @return bool|null Returns the snap.
     */
    public function getSnap(): ?bool {
        return $this->snap;
    }

    /**
     * Get the width.
     *
     * @return float|null Returns the width.
     */
    public function getWidth(): ?float {
        return $this->width;
    }

    /**
     * Get the z index.
     *
     * @return float|null Returns the z index.
     */
    public function getZIndex(): ?float {
        return $this->zIndex;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "color", $this->color, [null]);
        ArrayHelper::set($output, "dashStyle", $this->dashStyle, [null]);
        ArrayHelper::set($output, "snap", $this->snap, [null]);
        ArrayHelper::set($output, "width", $this->width, [null]);
        ArrayHelper::set($output, "zIndex", $this->zIndex, [null]);

        return $output;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair Returns this highcharts crosshair.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair Returns this highcharts crosshair.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the dash style.
     *
     * @param string|null $dashStyle The dash style.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair Returns this highcharts crosshair.
     */
    public function setDashStyle(?string $dashStyle): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair {

        switch ($dashStyle) {

            case "Dash":
            case "DashDot":
            case "Dot":
            case "LongDash":
            case "LongDashDot":
            case "LongDashDotDot":
            case "ShortDash":
            case "ShortDashDot":
            case "ShortDashDotDot":
            case "ShortDot":
            case "Solid":
                $this->dashStyle = $dashStyle;
                break;
        }

        return $this;
    }

    /**
     * Set the snap.
     *
     * @param bool|null $snap The snap.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair Returns this highcharts crosshair.
     */
    public function setSnap(?bool $snap): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair {
        $this->snap = $snap;
        return $this;
    }

    /**
     * Set the width.
     *
     * @param float|null $width The width.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair Returns this highcharts crosshair.
     */
    public function setWidth(?float $width): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair {
        $this->width = $width;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param float|null $zIndex The z index.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair Returns this highcharts crosshair.
     */
    public function setZIndex(?float $zIndex): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsCrosshair {
        $this->zIndex = $zIndex;
        return $this;
    }
}
