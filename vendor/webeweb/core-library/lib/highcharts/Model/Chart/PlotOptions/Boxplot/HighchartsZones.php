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

namespace WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts zones.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot
 * @version 5.0.14
 */
class HighchartsZones implements JsonSerializable {

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
     * @since 4.1.0
     */
    private $color;

    /**
     * Dash style.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $dashStyle;

    /**
     * Fill color.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $fillColor;

    /**
     * Value.
     *
     * @var float|null
     * @since 4.1.0
     */
    private $value;

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
     * Get the fill color.
     *
     * @return string|null Returns the fill color.
     */
    public function getFillColor(): ?string {
        return $this->fillColor;
    }

    /**
     * Get the value.
     *
     * @return float|null Returns the value.
     */
    public function getValue(): ?float {
        return $this->value;
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
        ArrayHelper::set($output, "fillColor", $this->fillColor, [null]);
        ArrayHelper::set($output, "value", $this->value, [null]);

        return $output;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsZones Returns this highcharts zones.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsZones {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsZones Returns this highcharts zones.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsZones {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the dash style.
     *
     * @param string|null $dashStyle The dash style.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsZones Returns this highcharts zones.
     */
    public function setDashStyle(?string $dashStyle): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsZones {
        $this->dashStyle = $dashStyle;
        return $this;
    }

    /**
     * Set the fill color.
     *
     * @param string|null $fillColor The fill color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsZones Returns this highcharts zones.
     */
    public function setFillColor(?string $fillColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsZones {
        $this->fillColor = $fillColor;
        return $this;
    }

    /**
     * Set the value.
     *
     * @param float|null $value The value.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsZones Returns this highcharts zones.
     */
    public function setValue(?float $value): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsZones {
        $this->value = $value;
        return $this;
    }
}
