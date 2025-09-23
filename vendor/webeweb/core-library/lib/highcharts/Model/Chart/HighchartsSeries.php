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

namespace WBW\Library\Highcharts\Model\Chart;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts series.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsSeries implements JsonSerializable {

    /**
     * Data.
     *
     * @var mixed[]|null
     */
    private $data;

    /**
     * Data parser.
     *
     * @var string|null
     * @deprecated
     */
    private $dataParser;

    /**
     * Data URL.
     *
     * @var string|null
     * @deprecated
     */
    private $dataURL;

    /**
     * Id.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $id;

    /**
     * Index.
     *
     * @var float|null
     * @since 2.3.0
     */
    private $index;

    /**
     * Legend index.
     *
     * @var float|null
     */
    private $legendIndex;

    /**
     * Name.
     *
     * @var string|null
     */
    private $name;

    /**
     * Stack.
     *
     * @var string|null
     * @since 2.1
     */
    private $stack;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * X axis.
     *
     * @var mixed|null
     */
    private $xAxis = "0";

    /**
     * Y axis.
     *
     * @var mixed|null
     */
    private $yAxis = "0";

    /**
     * Z index.
     *
     * @var float|null
     */
    private $zIndex;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the data.
     *
     * @return mixed[]|null Returns the data.
     */
    public function getData(): ?array {
        return $this->data;
    }

    /**
     * Get the data parser.
     *
     * @return string|null Returns the data parser.
     * @deprecated
     */
    public function getDataParser(): ?string {
        return $this->dataParser;
    }

    /**
     * Get the data URL.
     *
     * @return string|null Returns the data URL.
     * @deprecated
     */
    public function getDataURL(): ?string {
        return $this->dataURL;
    }

    /**
     * Get the id.
     *
     * @return string|null Returns the id.
     */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Get the index.
     *
     * @return float|null Returns the index.
     */
    public function getIndex(): ?float {
        return $this->index;
    }

    /**
     * Get the legend index.
     *
     * @return float|null Returns the legend index.
     */
    public function getLegendIndex(): ?float {
        return $this->legendIndex;
    }

    /**
     * Get the name.
     *
     * @return string|null Returns the name.
     */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Get the stack.
     *
     * @return string|null Returns the stack.
     */
    public function getStack(): ?string {
        return $this->stack;
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Get the x axis.
     *
     * @return mixed Returns the x axis.
     */
    public function getXAxis() {
        return $this->xAxis;
    }

    /**
     * Get the y axis.
     *
     * @return mixed Returns the y axis.
     */
    public function getYAxis() {
        return $this->yAxis;
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

        ArrayHelper::set($output, "data", $this->data, [null]);
        ArrayHelper::set($output, "dataParser", $this->dataParser, [null]);
        ArrayHelper::set($output, "dataURL", $this->dataURL, [null]);
        ArrayHelper::set($output, "id", $this->id, [null]);
        ArrayHelper::set($output, "index", $this->index, [null]);
        ArrayHelper::set($output, "legendIndex", $this->legendIndex, [null]);
        ArrayHelper::set($output, "name", $this->name, [null]);
        ArrayHelper::set($output, "stack", $this->stack, [null]);
        ArrayHelper::set($output, "type", $this->type, [null]);
        ArrayHelper::set($output, "xAxis", $this->xAxis, [null]);
        ArrayHelper::set($output, "yAxis", $this->yAxis, [null]);
        ArrayHelper::set($output, "zIndex", $this->zIndex, [null]);

        return $output;
    }

    /**
     * Set the data.
     *
     * @param mixed[]|null $data The data.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSeries Returns this highcharts series.
     */
    public function setData(?array $data): \WBW\Library\Highcharts\Model\Chart\HighchartsSeries {
        $this->data = $data;
        return $this;
    }

    /**
     * Set the data parser.
     *
     * @param string|null $dataParser The data parser.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSeries Returns this highcharts series.
     * @deprecated
     */
    public function setDataParser(?string $dataParser): \WBW\Library\Highcharts\Model\Chart\HighchartsSeries {
        $this->dataParser = $dataParser;
        return $this;
    }

    /**
     * Set the data URL.
     *
     * @param string|null $dataURL The data URL.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSeries Returns this highcharts series.
     * @deprecated
     */
    public function setDataURL(?string $dataURL): \WBW\Library\Highcharts\Model\Chart\HighchartsSeries {
        $this->dataURL = $dataURL;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSeries Returns this highcharts series.
     */
    public function setId(?string $id): \WBW\Library\Highcharts\Model\Chart\HighchartsSeries {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the index.
     *
     * @param float|null $index The index.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSeries Returns this highcharts series.
     */
    public function setIndex(?float $index): \WBW\Library\Highcharts\Model\Chart\HighchartsSeries {
        $this->index = $index;
        return $this;
    }

    /**
     * Set the legend index.
     *
     * @param float|null $legendIndex The legend index.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSeries Returns this highcharts series.
     */
    public function setLegendIndex(?float $legendIndex): \WBW\Library\Highcharts\Model\Chart\HighchartsSeries {
        $this->legendIndex = $legendIndex;
        return $this;
    }

    /**
     * Set the name.
     *
     * @param string|null $name The name.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSeries Returns this highcharts series.
     */
    public function setName(?string $name): \WBW\Library\Highcharts\Model\Chart\HighchartsSeries {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the stack.
     *
     * @param string|null $stack The stack.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSeries Returns this highcharts series.
     */
    public function setStack(?string $stack): \WBW\Library\Highcharts\Model\Chart\HighchartsSeries {
        $this->stack = $stack;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSeries Returns this highcharts series.
     */
    public function setType(?string $type): \WBW\Library\Highcharts\Model\Chart\HighchartsSeries {

        switch ($type) {

            case null:
            case "area":
            case "arearange":
            case "areaspline":
            case "areasplinerange":
            case "boxplot":
            case "bubble":
            case "column":
            case "columnrange":
            case "errorbar":
            case "funnel":
            case "gauge":
            case "line":
            case "pie":
            case "scatter":
            case "spline":
            case "waterfall":
                $this->type = $type;
                break;
        }

        return $this;
    }

    /**
     * Set the x axis.
     *
     * @param mixed $xAxis The x axis.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSeries Returns this highcharts series.
     */
    public function setXAxis($xAxis): \WBW\Library\Highcharts\Model\Chart\HighchartsSeries {
        $this->xAxis = $xAxis;
        return $this;
    }

    /**
     * Set the y axis.
     *
     * @param mixed $yAxis The y axis.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSeries Returns this highcharts series.
     */
    public function setYAxis($yAxis): \WBW\Library\Highcharts\Model\Chart\HighchartsSeries {
        $this->yAxis = $yAxis;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param float|null $zIndex The z index.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSeries Returns this highcharts series.
     */
    public function setZIndex(?float $zIndex): \WBW\Library\Highcharts\Model\Chart\HighchartsSeries {
        $this->zIndex = $zIndex;
        return $this;
    }
}
