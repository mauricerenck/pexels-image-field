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

namespace WBW\Library\Highcharts\Model\Chart\Series\Gauge;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts pivot.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Series\Gauge
 * @version 5.0.14
 */
class HighchartsPivot implements JsonSerializable {

    /**
     * Background color.
     *
     * @var string|null
     * @since 2.3.0
     */
    private $backgroundColor = "#000000";

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
     * @var float|null
     * @since 2.3.0
     */
    private $radius = 5;

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

        ArrayHelper::set($output, "backgroundColor", $this->backgroundColor, [null]);
        ArrayHelper::set($output, "borderColor", $this->borderColor, [null]);
        ArrayHelper::set($output, "borderWidth", $this->borderWidth, [null]);
        ArrayHelper::set($output, "radius", $this->radius, [null]);

        return $output;
    }

    /**
     * Set the background color.
     *
     * @param string|null $backgroundColor The background color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot Returns this highcharts pivot.
     */
    public function setBackgroundColor(?string $backgroundColor): \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot Returns this highcharts pivot.
     */
    public function setBorderColor(?string $borderColor): \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param float|null $borderWidth The border width.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot Returns this highcharts pivot.
     */
    public function setBorderWidth(?float $borderWidth): \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the radius.
     *
     * @param float|null $radius The radius.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot Returns this highcharts pivot.
     */
    public function setRadius(?float $radius): \WBW\Library\Highcharts\Model\Chart\Series\Gauge\HighchartsPivot {
        $this->radius = $radius;
        return $this;
    }
}
