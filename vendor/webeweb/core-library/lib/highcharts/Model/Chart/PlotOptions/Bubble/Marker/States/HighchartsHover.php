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

namespace WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts hover.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States
 * @version 5.0.14
 */
class HighchartsHover implements JsonSerializable {

    /**
     * Enabled.
     *
     * @var bool|null
     */
    private $enabled = true;

    /**
     * Fill color.
     *
     * @var string|null
     */
    private $fillColor;

    /**
     * Line color.
     *
     * @var string|null
     */
    private $lineColor = "#ffffff";

    /**
     * Line width.
     *
     * @var float|null
     */
    private $lineWidth = 0;

    /**
     * Line width plus.
     *
     * @var float|null
     * @since 4.0.3
     */
    private $lineWidthPlus = 1;

    /**
     * Radius.
     *
     * @var float|null
     */
    private $radius;

    /**
     * Radius plus.
     *
     * @var float|null
     * @since 4.0.3
     */
    private $radiusPlus = 2;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the enabled.
     *
     * @return bool|null Returns the enabled.
     */
    public function getEnabled(): ?bool {
        return $this->enabled;
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
     * Get the line color.
     *
     * @return string|null Returns the line color.
     */
    public function getLineColor(): ?string {
        return $this->lineColor;
    }

    /**
     * Get the line width.
     *
     * @return float|null Returns the line width.
     */
    public function getLineWidth(): ?float {
        return $this->lineWidth;
    }

    /**
     * Get the line width plus.
     *
     * @return float|null Returns the line width plus.
     */
    public function getLineWidthPlus(): ?float {
        return $this->lineWidthPlus;
    }

    /**
     * Get the radius.
     *
     * @return float|null Returns the radius.
     */
    public function getRadius(): ?float {
        return $this->radius;
    }

    /**
     * Get the radius plus.
     *
     * @return float|null Returns the radius plus.
     */
    public function getRadiusPlus(): ?float {
        return $this->radiusPlus;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "fillColor", $this->fillColor, [null]);
        ArrayHelper::set($output, "lineColor", $this->lineColor, [null]);
        ArrayHelper::set($output, "lineWidth", $this->lineWidth, [null]);
        ArrayHelper::set($output, "lineWidthPlus", $this->lineWidthPlus, [null]);
        ArrayHelper::set($output, "radius", $this->radius, [null]);
        ArrayHelper::set($output, "radiusPlus", $this->radiusPlus, [null]);

        return $output;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover Returns this highcharts hover.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the fill color.
     *
     * @param string|null $fillColor The fill color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover Returns this highcharts hover.
     */
    public function setFillColor(?string $fillColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover {
        $this->fillColor = $fillColor;
        return $this;
    }

    /**
     * Set the line color.
     *
     * @param string|null $lineColor The line color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover Returns this highcharts hover.
     */
    public function setLineColor(?string $lineColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover {
        $this->lineColor = $lineColor;
        return $this;
    }

    /**
     * Set the line width.
     *
     * @param float|null $lineWidth The line width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover Returns this highcharts hover.
     */
    public function setLineWidth(?float $lineWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover {
        $this->lineWidth = $lineWidth;
        return $this;
    }

    /**
     * Set the line width plus.
     *
     * @param float|null $lineWidthPlus The line width plus.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover Returns this highcharts hover.
     */
    public function setLineWidthPlus(?float $lineWidthPlus): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover {
        $this->lineWidthPlus = $lineWidthPlus;
        return $this;
    }

    /**
     * Set the radius.
     *
     * @param float|null $radius The radius.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover Returns this highcharts hover.
     */
    public function setRadius(?float $radius): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover {
        $this->radius = $radius;
        return $this;
    }

    /**
     * Set the radius plus.
     *
     * @param float|null $radiusPlus The radius plus.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover Returns this highcharts hover.
     */
    public function setRadiusPlus(?float $radiusPlus): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Bubble\Marker\States\HighchartsHover {
        $this->radiusPlus = $radiusPlus;
        return $this;
    }
}
