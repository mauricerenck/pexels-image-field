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

namespace WBW\Library\Highcharts\Model;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts chart.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model
 * @version 5.0.14
 */
class HighchartsChart implements JsonSerializable {

    /**
     * Accessibility.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility|null
     * @since 5.0.0
     */
    private $accessibility;

    /**
     * Chart.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsChart|null
     */
    private $chart;

    /**
     * Colors.
     *
     * @var mixed[]|null
     */
    private $colors = ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"];

    /**
     * Credits.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsCredits|null
     */
    private $credits;

    /**
     * Data.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsData|null
     * @since 4.0
     */
    private $data;

    /**
     * Defs.
     *
     * @var mixed[]|null
     * @since 5.0.0
     */
    private $defs;

    /**
     * Drilldown.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown|null
     * @since 3.0.8
     */
    private $drilldown;

    /**
     * Exporting.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsExporting|null
     */
    private $exporting;

    /**
     * Labels.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsLabels|null
     */
    private $labels;

    /**
     * Legend.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsLegend|null
     */
    private $legend;

    /**
     * Loading.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsLoading|null
     */
    private $loading;

    /**
     * Navigation.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation|null
     */
    private $navigation;

    /**
     * No data.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsNoData|null
     * @since 3.0.8
     */
    private $noData;

    /**
     * Pane.
     *
     * @var mixed[]|null
     * @since 2.3.0
     */
    private $pane;

    /**
     * Plot options.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions|null
     */
    private $plotOptions;

    /**
     * Responsive.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive|null
     * @since 5.0.0
     */
    private $responsive;

    /**
     * Series.
     *
     * @var mixed[]|null
     */
    private $series;

    /**
     * Subtitle.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle|null
     */
    private $subtitle;

    /**
     * Title.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsTitle|null
     */
    private $title;

    /**
     * Tooltip.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip|null
     */
    private $tooltip;

    /**
     * X axis.
     *
     * @var mixed[]|null
     */
    private $xAxis;

    /**
     * Y axis.
     *
     * @var mixed[]|null
     */
    private $yAxis;

    /**
     * Z axis.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis|null
     * @since 5.0.0
     */
    private $zAxis;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the accessibility.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility|null Returns the accessibility.
     */
    public function getAccessibility(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility {
        return $this->accessibility;
    }

    /**
     * Get the chart.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart|null Returns the chart.
     */
    public function getChart(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        return $this->chart;
    }

    /**
     * Get the colors.
     *
     * @return mixed[]|null Returns the colors.
     */
    public function getColors(): ?array {
        return $this->colors;
    }

    /**
     * Get the credits.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsCredits|null Returns the credits.
     */
    public function getCredits(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsCredits {
        return $this->credits;
    }

    /**
     * Get the data.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData|null Returns the data.
     */
    public function getData(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsData {
        return $this->data;
    }

    /**
     * Get the defs.
     *
     * @return mixed[]|null Returns the defs.
     */
    public function getDefs(): ?array {
        return $this->defs;
    }

    /**
     * Get the drilldown.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown|null Returns the drilldown.
     */
    public function getDrilldown(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown {
        return $this->drilldown;
    }

    /**
     * Get the exporting.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting|null Returns the exporting.
     */
    public function getExporting(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        return $this->exporting;
    }

    /**
     * Get the labels.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLabels|null Returns the labels.
     */
    public function getLabels(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsLabels {
        return $this->labels;
    }

    /**
     * Get the legend.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend|null Returns the legend.
     */
    public function getLegend(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        return $this->legend;
    }

    /**
     * Get the loading.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLoading|null Returns the loading.
     */
    public function getLoading(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsLoading {
        return $this->loading;
    }

    /**
     * Get the navigation.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation|null Returns the navigation.
     */
    public function getNavigation(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsNavigation {
        return $this->navigation;
    }

    /**
     * Get the no data.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsNoData|null Returns the no data.
     */
    public function getNoData(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsNoData {
        return $this->noData;
    }

    /**
     * Get the pane.
     *
     * @return mixed[]|null Returns the pane.
     */
    public function getPane(): ?array {
        return $this->pane;
    }

    /**
     * Get the plot options.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions|null Returns the plot options.
     */
    public function getPlotOptions(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        return $this->plotOptions;
    }

    /**
     * Get the responsive.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive|null Returns the responsive.
     */
    public function getResponsive(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsResponsive {
        return $this->responsive;
    }

    /**
     * Get the series.
     *
     * @return mixed[]|null Returns the series.
     */
    public function getSeries(): ?array {
        return $this->series;
    }

    /**
     * Get the subtitle.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle|null Returns the subtitle.
     */
    public function getSubtitle(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle {
        return $this->subtitle;
    }

    /**
     * Get the title.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTitle|null Returns the title.
     */
    public function getTitle(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsTitle {
        return $this->title;
    }

    /**
     * Get the tooltip.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip|null Returns the tooltip.
     */
    public function getTooltip(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        return $this->tooltip;
    }

    /**
     * Get the x axis.
     *
     * @return mixed[]|null Returns the x axis.
     */
    public function getXAxis(): ?array {
        return $this->xAxis;
    }

    /**
     * Get the y axis.
     *
     * @return mixed[]|null Returns the y axis.
     */
    public function getYAxis(): ?array {
        return $this->yAxis;
    }

    /**
     * Get the z axis.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis|null Returns the z axis.
     */
    public function getZAxis(): ?\WBW\Library\Highcharts\Model\Chart\HighchartsZAxis {
        return $this->zAxis;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        if (null !== $this->accessibility) {
            ArrayHelper::set($output, "accessibility", $this->accessibility->jsonSerialize());
        }
        if (null !== $this->chart) {
            ArrayHelper::set($output, "chart", $this->chart->jsonSerialize());
        }
        ArrayHelper::set($output, "colors", $this->colors, [null]);
        if (null !== $this->credits) {
            ArrayHelper::set($output, "credits", $this->credits->jsonSerialize());
        }
        if (null !== $this->data) {
            ArrayHelper::set($output, "data", $this->data->jsonSerialize());
        }
        ArrayHelper::set($output, "defs", $this->defs, [null]);
        if (null !== $this->drilldown) {
            ArrayHelper::set($output, "drilldown", $this->drilldown->jsonSerialize());
        }
        if (null !== $this->exporting) {
            ArrayHelper::set($output, "exporting", $this->exporting->jsonSerialize());
        }
        if (null !== $this->labels) {
            ArrayHelper::set($output, "labels", $this->labels->jsonSerialize());
        }
        if (null !== $this->legend) {
            ArrayHelper::set($output, "legend", $this->legend->jsonSerialize());
        }
        if (null !== $this->loading) {
            ArrayHelper::set($output, "loading", $this->loading->jsonSerialize());
        }
        if (null !== $this->navigation) {
            ArrayHelper::set($output, "navigation", $this->navigation->jsonSerialize());
        }
        if (null !== $this->noData) {
            ArrayHelper::set($output, "noData", $this->noData->jsonSerialize());
        }
        ArrayHelper::set($output, "pane", $this->pane, [null]);
        if (null !== $this->plotOptions) {
            ArrayHelper::set($output, "plotOptions", $this->plotOptions->jsonSerialize());
        }
        if (null !== $this->responsive) {
            ArrayHelper::set($output, "responsive", $this->responsive->jsonSerialize());
        }
        ArrayHelper::set($output, "series", $this->series, [null]);
        if (null !== $this->subtitle) {
            ArrayHelper::set($output, "subtitle", $this->subtitle->jsonSerialize());
        }
        if (null !== $this->title) {
            ArrayHelper::set($output, "title", $this->title->jsonSerialize());
        }
        if (null !== $this->tooltip) {
            ArrayHelper::set($output, "tooltip", $this->tooltip->jsonSerialize());
        }
        ArrayHelper::set($output, "xAxis", $this->xAxis, [null]);
        ArrayHelper::set($output, "yAxis", $this->yAxis, [null]);
        if (null !== $this->zAxis) {
            ArrayHelper::set($output, "zAxis", $this->zAxis->jsonSerialize());
        }

        return $output;
    }

    /**
     * Create a new accessibility.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility Returns the accessibility.
     */
    public function newAccessibility(): \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility {
        $this->accessibility = new \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility();
        return $this->accessibility;
    }

    /**
     * Create a new chart.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns the chart.
     */
    public function newChart(): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->chart = new \WBW\Library\Highcharts\Model\Chart\HighchartsChart();
        return $this->chart;
    }

    /**
     * Create a new credits.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsCredits Returns the credits.
     */
    public function newCredits(): \WBW\Library\Highcharts\Model\Chart\HighchartsCredits {
        $this->credits = new \WBW\Library\Highcharts\Model\Chart\HighchartsCredits();
        return $this->credits;
    }

    /**
     * Create a new data.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns the data.
     */
    public function newData(): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->data = new \WBW\Library\Highcharts\Model\Chart\HighchartsData();
        return $this->data;
    }

    /**
     * Create a new drilldown.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown Returns the drilldown.
     */
    public function newDrilldown(): \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown {
        $this->drilldown = new \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown();
        return $this->drilldown;
    }

    /**
     * Create a new exporting.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns the exporting.
     */
    public function newExporting(): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->exporting = new \WBW\Library\Highcharts\Model\Chart\HighchartsExporting();
        return $this->exporting;
    }

    /**
     * Create a new labels.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLabels Returns the labels.
     */
    public function newLabels(): \WBW\Library\Highcharts\Model\Chart\HighchartsLabels {
        $this->labels = new \WBW\Library\Highcharts\Model\Chart\HighchartsLabels();
        return $this->labels;
    }

    /**
     * Create a new legend.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns the legend.
     */
    public function newLegend(): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->legend = new \WBW\Library\Highcharts\Model\Chart\HighchartsLegend();
        return $this->legend;
    }

    /**
     * Create a new loading.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLoading Returns the loading.
     */
    public function newLoading(): \WBW\Library\Highcharts\Model\Chart\HighchartsLoading {
        $this->loading = new \WBW\Library\Highcharts\Model\Chart\HighchartsLoading();
        return $this->loading;
    }

    /**
     * Create a new navigation.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation Returns the navigation.
     */
    public function newNavigation(): \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation {
        $this->navigation = new \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation();
        return $this->navigation;
    }

    /**
     * Create a new no data.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsNoData Returns the no data.
     */
    public function newNoData(): \WBW\Library\Highcharts\Model\Chart\HighchartsNoData {
        $this->noData = new \WBW\Library\Highcharts\Model\Chart\HighchartsNoData();
        return $this->noData;
    }

    /**
     * Create a new plot options.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions Returns the plot options.
     */
    public function newPlotOptions(): \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions {
        $this->plotOptions = new \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions();
        return $this->plotOptions;
    }

    /**
     * Create a new responsive.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive Returns the responsive.
     */
    public function newResponsive(): \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive {
        $this->responsive = new \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive();
        return $this->responsive;
    }

    /**
     * Create a new subtitle.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle Returns the subtitle.
     */
    public function newSubtitle(): \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle {
        $this->subtitle = new \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle();
        return $this->subtitle;
    }

    /**
     * Create a new title.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTitle Returns the title.
     */
    public function newTitle(): \WBW\Library\Highcharts\Model\Chart\HighchartsTitle {
        $this->title = new \WBW\Library\Highcharts\Model\Chart\HighchartsTitle();
        return $this->title;
    }

    /**
     * Create a new tooltip.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns the tooltip.
     */
    public function newTooltip(): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->tooltip = new \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip();
        return $this->tooltip;
    }

    /**
     * Create a new z axis.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis Returns the z axis.
     */
    public function newZAxis(): \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis {
        $this->zAxis = new \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis();
        return $this->zAxis;
    }

    /**
     * Set the accessibility.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility|null $accessibility The accessibility.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setAccessibility(?\WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility $accessibility): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->accessibility = $accessibility;
        return $this;
    }

    /**
     * Set the chart.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsChart|null $chart The chart.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setChart(?\WBW\Library\Highcharts\Model\Chart\HighchartsChart $chart): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->chart = $chart;
        return $this;
    }

    /**
     * Set the colors.
     *
     * @param mixed[]|null $colors The colors.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setColors(?array $colors): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->colors = $colors;
        return $this;
    }

    /**
     * Set the credits.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsCredits|null $credits The credits.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setCredits(?\WBW\Library\Highcharts\Model\Chart\HighchartsCredits $credits): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->credits = $credits;
        return $this;
    }

    /**
     * Set the data.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsData|null $data The data.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setData(?\WBW\Library\Highcharts\Model\Chart\HighchartsData $data): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->data = $data;
        return $this;
    }

    /**
     * Set the defs.
     *
     * @param mixed[]|null $defs The defs.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setDefs(?array $defs): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->defs = $defs;
        return $this;
    }

    /**
     * Set the drilldown.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown|null $drilldown The drilldown.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setDrilldown(?\WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown $drilldown): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->drilldown = $drilldown;
        return $this;
    }

    /**
     * Set the exporting.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsExporting|null $exporting The exporting.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setExporting(?\WBW\Library\Highcharts\Model\Chart\HighchartsExporting $exporting): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->exporting = $exporting;
        return $this;
    }

    /**
     * Set the labels.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsLabels|null $labels The labels.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setLabels(?\WBW\Library\Highcharts\Model\Chart\HighchartsLabels $labels): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->labels = $labels;
        return $this;
    }

    /**
     * Set the legend.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsLegend|null $legend The legend.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setLegend(?\WBW\Library\Highcharts\Model\Chart\HighchartsLegend $legend): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->legend = $legend;
        return $this;
    }

    /**
     * Set the loading.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsLoading|null $loading The loading.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setLoading(?\WBW\Library\Highcharts\Model\Chart\HighchartsLoading $loading): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->loading = $loading;
        return $this;
    }

    /**
     * Set the navigation.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation|null $navigation The navigation.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setNavigation(?\WBW\Library\Highcharts\Model\Chart\HighchartsNavigation $navigation): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->navigation = $navigation;
        return $this;
    }

    /**
     * Set the no data.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsNoData|null $noData The no data.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setNoData(?\WBW\Library\Highcharts\Model\Chart\HighchartsNoData $noData): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->noData = $noData;
        return $this;
    }

    /**
     * Set the pane.
     *
     * @param mixed[]|null $pane The pane.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setPane(?array $pane): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->pane = $pane;
        return $this;
    }

    /**
     * Set the plot options.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions|null $plotOptions The plot options.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setPlotOptions(?\WBW\Library\Highcharts\Model\Chart\HighchartsPlotOptions $plotOptions): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->plotOptions = $plotOptions;
        return $this;
    }

    /**
     * Set the responsive.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive|null $responsive The responsive.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setResponsive(?\WBW\Library\Highcharts\Model\Chart\HighchartsResponsive $responsive): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->responsive = $responsive;
        return $this;
    }

    /**
     * Set the series.
     *
     * @param mixed[]|null $series The series.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setSeries(?array $series): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->series = $series;
        return $this;
    }

    /**
     * Set the subtitle.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle|null $subtitle The subtitle.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setSubtitle(?\WBW\Library\Highcharts\Model\Chart\HighchartsSubtitle $subtitle): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Set the title.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsTitle|null $title The title.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setTitle(?\WBW\Library\Highcharts\Model\Chart\HighchartsTitle $title): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->title = $title;
        return $this;
    }

    /**
     * Set the tooltip.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip|null $tooltip The tooltip.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setTooltip(?\WBW\Library\Highcharts\Model\Chart\HighchartsTooltip $tooltip): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * Set the x axis.
     *
     * @param mixed[]|null $xAxis The x axis.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setXAxis(?array $xAxis): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->xAxis = $xAxis;
        return $this;
    }

    /**
     * Set the y axis.
     *
     * @param mixed[]|null $yAxis The y axis.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setYAxis(?array $yAxis): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->yAxis = $yAxis;
        return $this;
    }

    /**
     * Set the z axis.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\HighchartsZAxis|null $zAxis The z axis.
     * @return \WBW\Library\Highcharts\Model\HighchartsChart Returns this highcharts chart.
     */
    public function setZAxis(?\WBW\Library\Highcharts\Model\Chart\HighchartsZAxis $zAxis): \WBW\Library\Highcharts\Model\HighchartsChart {
        $this->zAxis = $zAxis;
        return $this;
    }
}
