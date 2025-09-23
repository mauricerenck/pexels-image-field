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
 * Highcharts plot options.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsPlotOptions implements JsonSerializable {

    /**
     * Area.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArea|null
     */
    private $area;

    /**
     * Arearange.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArearange|null
     * @since 2.3.0
     */
    private $arearange;

    /**
     * Areaspline.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreaspline|null
     */
    private $areaspline;

    /**
     * Areasplinerange.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreasplinerange|null
     * @since 2.3.0
     */
    private $areasplinerange;

    /**
     * Bar.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBar|null
     */
    private $bar;

    /**
     * Boxplot.
     *
     * @var mixed[]|null
     * @since 3.0
     */
    private $boxplot;

    /**
     * Bubble.
     *
     * @var mixed[]|null
     * @since 3.0
     */
    private $bubble;

    /**
     * Column.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn|null
     */
    private $column;

    /**
     * Columnrange.
     *
     * @var mixed[]|null
     * @since 2.3.0
     */
    private $columnrange;

    /**
     * Errorbar.
     *
     * @var mixed[]|null
     * @since 3.0
     */
    private $errorbar;

    /**
     * Funnel.
     *
     * @var mixed[]|null
     * @since 3.0
     */
    private $funnel;

    /**
     * Gauge.
     *
     * @var mixed[]|null
     * @since 2.3.0
     */
    private $gauge;

    /**
     * Heatmap.
     *
     * @var mixed[]|null
     * @since 4.0
     */
    private $heatmap;

    /**
     * Line.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsLine|null
     */
    private $line;

    /**
     * Pie.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPie|null
     */
    private $pie;

    /**
     * Polygon.
     *
     * @var mixed[]|null
     * @since 4.1.0
     */
    private $polygon;

    /**
     * Pyramid.
     *
     * @var mixed[]|null
     * @since 3.0.10
     */
    private $pyramid;

    /**
     * Scatter.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter|null
     */
    private $scatter;

    /**
     * Series.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSeries|null
     */
    private $series;

    /**
     * Solidgauge.
     *
     * @var mixed[]|null
     * @since 4.0
     */
    private $solidgauge;

    /**
     * Spline.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSpline|null
     */
    private $spline;

    /**
     * Treemap.
     *
     * @var mixed[]|null
     * @since 4.1.0
     */
    private $treemap;

    /**
     * Waterfall.
     *
     * @var mixed[]|null
     * @since 3.0
     */
    private $waterfall;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the area.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArea|null Returns the area.
     */
    public function getArea(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArea {
        return $this->area;
    }

    /**
     * Get the arearange.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArearange|null Returns the arearange.
     */
    public function getArearange(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArearange {
        return $this->arearange;
    }

    /**
     * Get the areaspline.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreaspline|null Returns the areaspline.
     */
    public function getAreaspline(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreaspline {
        return $this->areaspline;
    }

    /**
     * Get the areasplinerange.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreasplinerange|null Returns the areasplinerange.
     */
    public function getAreasplinerange(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreasplinerange {
        return $this->areasplinerange;
    }

    /**
     * Get the bar.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBar|null Returns the bar.
     */
    public function getBar(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBar {
        return $this->bar;
    }

    /**
     * Get the boxplot.
     *
     * @return mixed[]|null Returns the boxplot.
     */
    public function getBoxplot(): ?array {
        return $this->boxplot;
    }

    /**
     * Get the bubble.
     *
     * @return mixed[]|null Returns the bubble.
     */
    public function getBubble(): ?array {
        return $this->bubble;
    }

    /**
     * Get the column.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn|null Returns the column.
     */
    public function getColumn(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        return $this->column;
    }

    /**
     * Get the columnrange.
     *
     * @return mixed[]|null Returns the columnrange.
     */
    public function getColumnrange(): ?array {
        return $this->columnrange;
    }

    /**
     * Get the errorbar.
     *
     * @return mixed[]|null Returns the errorbar.
     */
    public function getErrorbar(): ?array {
        return $this->errorbar;
    }

    /**
     * Get the funnel.
     *
     * @return mixed[]|null Returns the funnel.
     */
    public function getFunnel(): ?array {
        return $this->funnel;
    }

    /**
     * Get the gauge.
     *
     * @return mixed[]|null Returns the gauge.
     */
    public function getGauge(): ?array {
        return $this->gauge;
    }

    /**
     * Get the heatmap.
     *
     * @return mixed[]|null Returns the heatmap.
     */
    public function getHeatmap(): ?array {
        return $this->heatmap;
    }

    /**
     * Get the line.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsLine|null Returns the line.
     */
    public function getLine(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsLine {
        return $this->line;
    }

    /**
     * Get the pie.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPie|null Returns the pie.
     */
    public function getPie(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPie {
        return $this->pie;
    }

    /**
     * Get the polygon.
     *
     * @return mixed[]|null Returns the polygon.
     */
    public function getPolygon(): ?array {
        return $this->polygon;
    }

    /**
     * Get the pyramid.
     *
     * @return mixed[]|null Returns the pyramid.
     */
    public function getPyramid(): ?array {
        return $this->pyramid;
    }

    /**
     * Get the scatter.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter|null Returns the scatter.
     */
    public function getScatter(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter {
        return $this->scatter;
    }

    /**
     * Get the series.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSeries|null Returns the series.
     */
    public function getSeries(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSeries {
        return $this->series;
    }

    /**
     * Get the solidgauge.
     *
     * @return mixed[]|null Returns the solidgauge.
     */
    public function getSolidgauge(): ?array {
        return $this->solidgauge;
    }

    /**
     * Get the spline.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSpline|null Returns the spline.
     */
    public function getSpline(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSpline {
        return $this->spline;
    }

    /**
     * Get the treemap.
     *
     * @return mixed[]|null Returns the treemap.
     */
    public function getTreemap(): ?array {
        return $this->treemap;
    }

    /**
     * Get the waterfall.
     *
     * @return mixed[]|null Returns the waterfall.
     */
    public function getWaterfall(): ?array {
        return $this->waterfall;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        if (null !== $this->area) {
            ArrayHelper::set($output, "area", $this->area->jsonSerialize());
        }
        if (null !== $this->arearange) {
            ArrayHelper::set($output, "arearange", $this->arearange->jsonSerialize());
        }
        if (null !== $this->areaspline) {
            ArrayHelper::set($output, "areaspline", $this->areaspline->jsonSerialize());
        }
        if (null !== $this->areasplinerange) {
            ArrayHelper::set($output, "areasplinerange", $this->areasplinerange->jsonSerialize());
        }
        if (null !== $this->bar) {
            ArrayHelper::set($output, "bar", $this->bar->jsonSerialize());
        }
        ArrayHelper::set($output, "boxplot", $this->boxplot, [null]);
        ArrayHelper::set($output, "bubble", $this->bubble, [null]);
        if (null !== $this->column) {
            ArrayHelper::set($output, "column", $this->column->jsonSerialize());
        }
        ArrayHelper::set($output, "columnrange", $this->columnrange, [null]);
        ArrayHelper::set($output, "errorbar", $this->errorbar, [null]);
        ArrayHelper::set($output, "funnel", $this->funnel, [null]);
        ArrayHelper::set($output, "gauge", $this->gauge, [null]);
        ArrayHelper::set($output, "heatmap", $this->heatmap, [null]);
        if (null !== $this->line) {
            ArrayHelper::set($output, "line", $this->line->jsonSerialize());
        }
        if (null !== $this->pie) {
            ArrayHelper::set($output, "pie", $this->pie->jsonSerialize());
        }
        ArrayHelper::set($output, "polygon", $this->polygon, [null]);
        ArrayHelper::set($output, "pyramid", $this->pyramid, [null]);
        if (null !== $this->scatter) {
            ArrayHelper::set($output, "scatter", $this->scatter->jsonSerialize());
        }
        if (null !== $this->series) {
            ArrayHelper::set($output, "series", $this->series->jsonSerialize());
        }
        ArrayHelper::set($output, "solidgauge", $this->solidgauge, [null]);
        if (null !== $this->spline) {
            ArrayHelper::set($output, "spline", $this->spline->jsonSerialize());
        }
        ArrayHelper::set($output, "treemap", $this->treemap, [null]);
        ArrayHelper::set($output, "waterfall", $this->waterfall, [null]);

        return $output;
    }

    /**
     * Create a new area.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArea Returns the area.
     */
    public function newArea(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArea {
        $this->area = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArea();
        return $this->area;
    }

    /**
     * Create a new arearange.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArearange Returns the arearange.
     */
    public function newArearange(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArearange {
        $this->arearange = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArearange();
        return $this->arearange;
    }

    /**
     * Create a new areaspline.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreaspline Returns the areaspline.
     */
    public function newAreaspline(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreaspline {
        $this->areaspline = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreaspline();
        return $this->areaspline;
    }

    /**
     * Create a new areasplinerange.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreasplinerange Returns the areasplinerange.
     */
    public function newAreasplinerange(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreasplinerange {
        $this->areasplinerange = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreasplinerange();
        return $this->areasplinerange;
    }

    /**
     * Create a new bar.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBar Returns the bar.
     */
    public function newBar(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBar {
        $this->bar = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBar();
        return $this->bar;
    }

    /**
     * Create a new column.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns the column.
     */
    public function newColumn(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->column = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn();
        return $this->column;
    }

    /**
     * Create a new line.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsLine Returns the line.
     */
    public function newLine(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsLine {
        $this->line = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsLine();
        return $this->line;
    }

    /**
     * Create a new pie.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPie Returns the pie.
     */
    public function newPie(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPie {
        $this->pie = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPie();
        return $this->pie;
    }

    /**
     * Create a new scatter.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter Returns the scatter.
     */
    public function newScatter(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter {
        $this->scatter = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter();
        return $this->scatter;
    }

    /**
     * Create a new series.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSeries Returns the series.
     */
    public function newSeries(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSeries {
        $this->series = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSeries();
        return $this->series;
    }

    /**
     * Create a new spline.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSpline Returns the spline.
     */
    public function newSpline(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSpline {
        $this->spline = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSpline();
        return $this->spline;
    }

    /**
     * Set the area.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArea|null $area The area.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setArea(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArea $area): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->area = $area;
        return $this;
    }

    /**
     * Set the arearange.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArearange|null $arearange The arearange.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setArearange(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsArearange $arearange): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->arearange = $arearange;
        return $this;
    }

    /**
     * Set the areaspline.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreaspline|null $areaspline The areaspline.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setAreaspline(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreaspline $areaspline): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->areaspline = $areaspline;
        return $this;
    }

    /**
     * Set the areasplinerange.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreasplinerange|null $areasplinerange The areasplinerange.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setAreasplinerange(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsAreasplinerange $areasplinerange): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->areasplinerange = $areasplinerange;
        return $this;
    }

    /**
     * Set the bar.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBar|null $bar The bar.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setBar(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsBar $bar): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->bar = $bar;
        return $this;
    }

    /**
     * Set the boxplot.
     *
     * @param mixed[]|null $boxplot The boxplot.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setBoxplot(?array $boxplot): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->boxplot = $boxplot;
        return $this;
    }

    /**
     * Set the bubble.
     *
     * @param mixed[]|null $bubble The bubble.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setBubble(?array $bubble): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->bubble = $bubble;
        return $this;
    }

    /**
     * Set the column.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn|null $column The column.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setColumn(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn $column): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->column = $column;
        return $this;
    }

    /**
     * Set the columnrange.
     *
     * @param mixed[]|null $columnrange The columnrange.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setColumnrange(?array $columnrange): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->columnrange = $columnrange;
        return $this;
    }

    /**
     * Set the errorbar.
     *
     * @param mixed[]|null $errorbar The errorbar.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setErrorbar(?array $errorbar): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->errorbar = $errorbar;
        return $this;
    }

    /**
     * Set the funnel.
     *
     * @param mixed[]|null $funnel The funnel.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setFunnel(?array $funnel): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->funnel = $funnel;
        return $this;
    }

    /**
     * Set the gauge.
     *
     * @param mixed[]|null $gauge The gauge.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setGauge(?array $gauge): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->gauge = $gauge;
        return $this;
    }

    /**
     * Set the heatmap.
     *
     * @param mixed[]|null $heatmap The heatmap.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setHeatmap(?array $heatmap): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->heatmap = $heatmap;
        return $this;
    }

    /**
     * Set the line.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsLine|null $line The line.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setLine(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsLine $line): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->line = $line;
        return $this;
    }

    /**
     * Set the pie.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPie|null $pie The pie.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setPie(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsPie $pie): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->pie = $pie;
        return $this;
    }

    /**
     * Set the polygon.
     *
     * @param mixed[]|null $polygon The polygon.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setPolygon(?array $polygon): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->polygon = $polygon;
        return $this;
    }

    /**
     * Set the pyramid.
     *
     * @param mixed[]|null $pyramid The pyramid.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setPyramid(?array $pyramid): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->pyramid = $pyramid;
        return $this;
    }

    /**
     * Set the scatter.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter|null $scatter The scatter.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setScatter(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsScatter $scatter): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->scatter = $scatter;
        return $this;
    }

    /**
     * Set the series.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSeries|null $series The series.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setSeries(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSeries $series): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->series = $series;
        return $this;
    }

    /**
     * Set the solidgauge.
     *
     * @param mixed[]|null $solidgauge The solidgauge.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setSolidgauge(?array $solidgauge): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->solidgauge = $solidgauge;
        return $this;
    }

    /**
     * Set the spline.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSpline|null $spline The spline.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setSpline(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsSpline $spline): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->spline = $spline;
        return $this;
    }

    /**
     * Set the treemap.
     *
     * @param mixed[]|null $treemap The treemap.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setTreemap(?array $treemap): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->treemap = $treemap;
        return $this;
    }

    /**
     * Set the waterfall.
     *
     * @param mixed[]|null $waterfall The waterfall.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns this highcharts plot options.
     */
    public function setWaterfall(?array $waterfall): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->waterfall = $waterfall;
        return $this;
    }
}
