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

namespace WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts dial.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge
 * @version 5.0.14
 */
class HighchartsDial implements JsonSerializable {

    /**
     * Background color.
     *
     * @var string|null
     * @since 2.3.0
     */
    private $backgroundColor = "#000000";

    /**
     * Base length.
     *
     * @var string|null
     * @since 2.3.0
     */
    private $baseLength = "70%";

    /**
     * Base width.
     *
     * @var float|null
     * @since 2.3.0
     */
    private $baseWidth = 3;

    /**
     * Border color.
     *
     * @var string|null
     * @since 2.3.0
     */
    private $borderColor = "#cccccc";

    /**
     * Border width.
     *
     * @var float|null
     * @since 2.3.0
     */
    private $borderWidth = 0;

    /**
     * Radius.
     *
     * @var string|null
     * @since 2.3.0
     */
    private $radius = "80%";

    /**
     * Rear length.
     *
     * @var string|null
     * @since 2.3.0
     */
    private $rearLength = "10%";

    /**
     * Top width.
     *
     * @var float|null
     * @since 2.3.0
     */
    private $topWidth = 1;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the background color.
     *
     * @return string|null Returns the background color.
     */
    public function getBackgroundColor(): ?string {
        return $this->backgroundColor;
    }

    /**
     * Get the base length.
     *
     * @return string|null Returns the base length.
     */
    public function getBaseLength(): ?string {
        return $this->baseLength;
    }

    /**
     * Get the base width.
     *
     * @return float|null Returns the base width.
     */
    public function getBaseWidth(): ?float {
        return $this->baseWidth;
    }

    /**
     * Get the border color.
     *
     * @return string|null Returns the border color.
     */
    public function getBorderColor(): ?string {
        return $this->borderColor;
    }

    /**
     * Get the border width.
     *
     * @return float|null Returns the border width.
     */
    public function getBorderWidth(): ?float {
        return $this->borderWidth;
    }

    /**
     * Get the radius.
     *
     * @return string|null Returns the radius.
     */
    public function getRadius(): ?string {
        return $this->radius;
    }

    /**
     * Get the rear length.
     *
     * @return string|null Returns the rear length.
     */
    public function getRearLength(): ?string {
        return $this->rearLength;
    }

    /**
     * Get the top width.
     *
     * @return float|null Returns the top width.
     */
    public function getTopWidth(): ?float {
        return $this->topWidth;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "backgroundColor", $this->backgroundColor, [null]);
        ArrayHelper::set($output, "baseLength", $this->baseLength, [null]);
        ArrayHelper::set($output, "baseWidth", $this->baseWidth, [null]);
        ArrayHelper::set($output, "borderColor", $this->borderColor, [null]);
        ArrayHelper::set($output, "borderWidth", $this->borderWidth, [null]);
        ArrayHelper::set($output, "radius", $this->radius, [null]);
        ArrayHelper::set($output, "rearLength", $this->rearLength, [null]);
        ArrayHelper::set($output, "topWidth", $this->topWidth, [null]);

        return $output;
    }

    /**
     * Set the background color.
     *
     * @param string|null $backgroundColor The background color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial Returns this highcharts dial.
     */
    public function setBackgroundColor(?string $backgroundColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * Set the base length.
     *
     * @param string|null $baseLength The base length.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial Returns this highcharts dial.
     */
    public function setBaseLength(?string $baseLength): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial {
        $this->baseLength = $baseLength;
        return $this;
    }

    /**
     * Set the base width.
     *
     * @param float|null $baseWidth The base width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial Returns this highcharts dial.
     */
    public function setBaseWidth(?float $baseWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial {
        $this->baseWidth = $baseWidth;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial Returns this highcharts dial.
     */
    public function setBorderColor(?string $borderColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param float|null $borderWidth The border width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial Returns this highcharts dial.
     */
    public function setBorderWidth(?float $borderWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the radius.
     *
     * @param string|null $radius The radius.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial Returns this highcharts dial.
     */
    public function setRadius(?string $radius): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial {
        $this->radius = $radius;
        return $this;
    }

    /**
     * Set the rear length.
     *
     * @param string|null $rearLength The rear length.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial Returns this highcharts dial.
     */
    public function setRearLength(?string $rearLength): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial {
        $this->rearLength = $rearLength;
        return $this;
    }

    /**
     * Set the top width.
     *
     * @param float|null $topWidth The top width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial Returns this highcharts dial.
     */
    public function setTopWidth(?float $topWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsDial {
        $this->topWidth = $topWidth;
        return $this;
    }
}
