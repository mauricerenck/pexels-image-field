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

namespace WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\States;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts select.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\States
 * @version 5.0.14
 */
class HighchartsSelect implements JsonSerializable {

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
    private $lineColor = "#000000";

    /**
     * Line width.
     *
     * @var float|null
     */
    private $lineWidth = 0;

    /**
     * Radius.
     *
     * @var float|null
     */
    private $radius;

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
     * Get the radius.
     *
     * @return float|null Returns the radius.
     */
    public function getRadius(): ?float {
        return $this->radius;
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
        ArrayHelper::set($output, "radius", $this->radius, [null]);

        return $output;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\States\HighchartsSelect Returns this highcharts select.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\States\HighchartsSelect {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the fill color.
     *
     * @param string|null $fillColor The fill color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\States\HighchartsSelect Returns this highcharts select.
     */
    public function setFillColor(?string $fillColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\States\HighchartsSelect {
        $this->fillColor = $fillColor;
        return $this;
    }

    /**
     * Set the line color.
     *
     * @param string|null $lineColor The line color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\States\HighchartsSelect Returns this highcharts select.
     */
    public function setLineColor(?string $lineColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\States\HighchartsSelect {
        $this->lineColor = $lineColor;
        return $this;
    }

    /**
     * Set the line width.
     *
     * @param float|null $lineWidth The line width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\States\HighchartsSelect Returns this highcharts select.
     */
    public function setLineWidth(?float $lineWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\States\HighchartsSelect {
        $this->lineWidth = $lineWidth;
        return $this;
    }

    /**
     * Set the radius.
     *
     * @param float|null $radius The radius.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\States\HighchartsSelect Returns this highcharts select.
     */
    public function setRadius(?float $radius): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\Marker\States\HighchartsSelect {
        $this->radius = $radius;
        return $this;
    }
}
