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
 * Highcharts x axis.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsXAxis implements JsonSerializable {

    /**
     * Allow decimals.
     *
     * @var bool|null
     * @since 2.0
     */
    private $allowDecimals = true;

    /**
     * Alternate grid color.
     *
     * @var string|null
     */
    private $alternateGridColor;

    /**
     * Breaks.
     *
     * @var mixed[]|null
     * @since 4.1.0
     */
    private $breaks;

    /**
     * Categories.
     *
     * @var mixed[]|null
     */
    private $categories;

    /**
     * Ceiling.
     *
     * @var float|null
     * @since 4.0
     */
    private $ceiling;

    /**
     * Class name.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $className;

    /**
     * Crosshair.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair|null
     * @since 4.1
     */
    private $crosshair;

    /**
     * Date time label formats.
     *
     * @var mixed[]|null
     */
    private $dateTimeLabelFormats;

    /**
     * Description.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $description;

    /**
     * End on tick.
     *
     * @var bool|null
     * @since 1.2.0
     */
    private $endOnTick = false;

    /**
     * Events.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents|null
     */
    private $events;

    /**
     * Floor.
     *
     * @var float|null
     * @since 4.0
     */
    private $floor;

    /**
     * Grid line color.
     *
     * @var string|null
     */
    private $gridLineColor = "#e6e6e6";

    /**
     * Grid line dash style.
     *
     * @var string|null
     * @since 1.2
     */
    private $gridLineDashStyle = "Solid";

    /**
     * Grid line width.
     *
     * @var float|null
     */
    private $gridLineWidth = 0;

    /**
     * Grid z index.
     *
     * @var float|null
     */
    private $gridZIndex = 1;

    /**
     * Id.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $id;

    /**
     * Labels.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels|null
     */
    private $labels;

    /**
     * Line color.
     *
     * @var string|null
     */
    private $lineColor = "#ccd6eb";

    /**
     * Line width.
     *
     * @var float|null
     */
    private $lineWidth = 1;

    /**
     * Linked to.
     *
     * @var float|null
     * @since 2.0.2
     */
    private $linkedTo;

    /**
     * Max.
     *
     * @var float|null
     */
    private $max;

    /**
     * Max padding.
     *
     * @var float|null
     * @since 1.2.0
     */
    private $maxPadding = 0.01;

    /**
     * Max zoom.
     *
     * @var float|null
     * @deprecated
     */
    private $maxZoom;

    /**
     * Min.
     *
     * @var float|null
     */
    private $min;

    /**
     * Min padding.
     *
     * @var float|null
     * @since 1.2.0
     */
    private $minPadding = 0.01;

    /**
     * Min range.
     *
     * @var float|null
     */
    private $minRange;

    /**
     * Min tick interval.
     *
     * @var float|null
     * @since 2.3.0
     */
    private $minTickInterval;

    /**
     * Minor grid line color.
     *
     * @var string|null
     */
    private $minorGridLineColor = "#f2f2f2";

    /**
     * Minor grid line dash style.
     *
     * @var string|null
     * @since 1.2
     */
    private $minorGridLineDashStyle = "Solid";

    /**
     * Minor grid line width.
     *
     * @var float|null
     */
    private $minorGridLineWidth = 1;

    /**
     * Minor tick color.
     *
     * @var string|null
     */
    private $minorTickColor = "#999999";

    /**
     * Minor tick interval.
     *
     * @var mixed|null
     */
    private $minorTickInterval;

    /**
     * Minor tick length.
     *
     * @var float|null
     */
    private $minorTickLength = 2;

    /**
     * Minor tick position.
     *
     * @var string|null
     */
    private $minorTickPosition = "outside";

    /**
     * Minor tick width.
     *
     * @var float|null
     */
    private $minorTickWidth = 0;

    /**
     * Offset.
     *
     * @var float|null
     */
    private $offset = 0;

    /**
     * Opposite.
     *
     * @var bool|null
     */
    private $opposite = false;

    /**
     * Plot bands.
     *
     * @var mixed[]|null
     */
    private $plotBands;

    /**
     * Plot lines.
     *
     * @var mixed[]|null
     */
    private $plotLines;

    /**
     * Reversed.
     *
     * @var bool|null
     */
    private $reversed = false;

    /**
     * Show empty.
     *
     * @var bool|null
     * @since 1.1
     */
    private $showEmpty = true;

    /**
     * Show first label.
     *
     * @var bool|null
     */
    private $showFirstLabel = true;

    /**
     * Show last label.
     *
     * @var bool|null
     */
    private $showLastLabel = true;

    /**
     * Soft max.
     *
     * @var float|null
     * @since 5.0.1
     */
    private $softMax;

    /**
     * Soft min.
     *
     * @var float|null
     * @since 5.0.1
     */
    private $softMin;

    /**
     * Start of week.
     *
     * @var float|null
     */
    private $startOfWeek = 1;

    /**
     * Start on tick.
     *
     * @var bool|null
     * @since 1.2.0
     */
    private $startOnTick = false;

    /**
     * Tick amount.
     *
     * @var float|null
     * @since 4.1.0
     */
    private $tickAmount;

    /**
     * Tick color.
     *
     * @var string|null
     */
    private $tickColor = "#ccd6eb";

    /**
     * Tick interval.
     *
     * @var float|null
     */
    private $tickInterval;

    /**
     * Tick length.
     *
     * @var float|null
     */
    private $tickLength = 10;

    /**
     * Tick pixel interval.
     *
     * @var float|null
     */
    private $tickPixelInterval;

    /**
     * Tick position.
     *
     * @var string|null
     */
    private $tickPosition = "outside";

    /**
     * Tick positioner.
     *
     * @var string|null
     */
    private $tickPositioner;

    /**
     * Tick positions.
     *
     * @var mixed[]|null
     */
    private $tickPositions;

    /**
     * Tick width.
     *
     * @var float|null
     */
    private $tickWidth = 1;

    /**
     * Tickmark placement.
     *
     * @var string|null
     */
    private $tickmarkPlacement;

    /**
     * Title.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle|null
     */
    private $title;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type = "linear";

    /**
     * Unique names.
     *
     * @var bool|null
     * @since 4.2.7
     */
    private $uniqueNames = true;

    /**
     * Units.
     *
     * @var mixed[]|null
     */
    private $units;

    /**
     * Visible.
     *
     * @var bool|null
     * @since 4.1.9
     */
    private $visible = true;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the allow decimals.
     *
     * @return bool|null Returns the allow decimals.
     */
    public function getAllowDecimals(): ?bool {
        return $this->allowDecimals;
    }

    /**
     * Get the alternate grid color.
     *
     * @return string|null Returns the alternate grid color.
     */
    public function getAlternateGridColor(): ?string {
        return $this->alternateGridColor;
    }

    /**
     * Get the breaks.
     *
     * @return mixed[]|null Returns the breaks.
     */
    public function getBreaks(): ?array {
        return $this->breaks;
    }

    /**
     * Get the categories.
     *
     * @return mixed[]|null Returns the categories.
     */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * Get the ceiling.
     *
     * @return float|null Returns the ceiling.
     */
    public function getCeiling(): ?float {
        return $this->ceiling;
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
     * Get the crosshair.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair|null Returns the crosshair.
     */
    public function getCrosshair(): ?\WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair {
        return $this->crosshair;
    }

    /**
     * Get the date time label formats.
     *
     * @return mixed[]|null Returns the date time label formats.
     */
    public function getDateTimeLabelFormats(): ?array {
        return $this->dateTimeLabelFormats;
    }

    /**
     * Get the description.
     *
     * @return string|null Returns the description.
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Get the end on tick.
     *
     * @return bool|null Returns the end on tick.
     */
    public function getEndOnTick(): ?bool {
        return $this->endOnTick;
    }

    /**
     * Get the events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents|null Returns the events.
     */
    public function getEvents(): ?\WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents {
        return $this->events;
    }

    /**
     * Get the floor.
     *
     * @return float|null Returns the floor.
     */
    public function getFloor(): ?float {
        return $this->floor;
    }

    /**
     * Get the grid line color.
     *
     * @return string|null Returns the grid line color.
     */
    public function getGridLineColor(): ?string {
        return $this->gridLineColor;
    }

    /**
     * Get the grid line dash style.
     *
     * @return string|null Returns the grid line dash style.
     */
    public function getGridLineDashStyle(): ?string {
        return $this->gridLineDashStyle;
    }

    /**
     * Get the grid line width.
     *
     * @return float|null Returns the grid line width.
     */
    public function getGridLineWidth(): ?float {
        return $this->gridLineWidth;
    }

    /**
     * Get the grid z index.
     *
     * @return float|null Returns the grid z index.
     */
    public function getGridZIndex(): ?float {
        return $this->gridZIndex;
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
     * Get the labels.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels|null Returns the labels.
     */
    public function getLabels(): ?\WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        return $this->labels;
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
     * Get the linked to.
     *
     * @return float|null Returns the linked to.
     */
    public function getLinkedTo(): ?float {
        return $this->linkedTo;
    }

    /**
     * Get the max.
     *
     * @return float|null Returns the max.
     */
    public function getMax(): ?float {
        return $this->max;
    }

    /**
     * Get the max padding.
     *
     * @return float|null Returns the max padding.
     */
    public function getMaxPadding(): ?float {
        return $this->maxPadding;
    }

    /**
     * Get the max zoom.
     *
     * @return float|null Returns the max zoom.
     * @deprecated
     */
    public function getMaxZoom(): ?float {
        return $this->maxZoom;
    }

    /**
     * Get the min.
     *
     * @return float|null Returns the min.
     */
    public function getMin(): ?float {
        return $this->min;
    }

    /**
     * Get the min padding.
     *
     * @return float|null Returns the min padding.
     */
    public function getMinPadding(): ?float {
        return $this->minPadding;
    }

    /**
     * Get the min range.
     *
     * @return float|null Returns the min range.
     */
    public function getMinRange(): ?float {
        return $this->minRange;
    }

    /**
     * Get the min tick interval.
     *
     * @return float|null Returns the min tick interval.
     */
    public function getMinTickInterval(): ?float {
        return $this->minTickInterval;
    }

    /**
     * Get the minor grid line color.
     *
     * @return string|null Returns the minor grid line color.
     */
    public function getMinorGridLineColor(): ?string {
        return $this->minorGridLineColor;
    }

    /**
     * Get the minor grid line dash style.
     *
     * @return string|null Returns the minor grid line dash style.
     */
    public function getMinorGridLineDashStyle(): ?string {
        return $this->minorGridLineDashStyle;
    }

    /**
     * Get the minor grid line width.
     *
     * @return float|null Returns the minor grid line width.
     */
    public function getMinorGridLineWidth(): ?float {
        return $this->minorGridLineWidth;
    }

    /**
     * Get the minor tick color.
     *
     * @return string|null Returns the minor tick color.
     */
    public function getMinorTickColor(): ?string {
        return $this->minorTickColor;
    }

    /**
     * Get the minor tick interval.
     *
     * @return mixed Returns the minor tick interval.
     */
    public function getMinorTickInterval() {
        return $this->minorTickInterval;
    }

    /**
     * Get the minor tick length.
     *
     * @return float|null Returns the minor tick length.
     */
    public function getMinorTickLength(): ?float {
        return $this->minorTickLength;
    }

    /**
     * Get the minor tick position.
     *
     * @return string|null Returns the minor tick position.
     */
    public function getMinorTickPosition(): ?string {
        return $this->minorTickPosition;
    }

    /**
     * Get the minor tick width.
     *
     * @return float|null Returns the minor tick width.
     */
    public function getMinorTickWidth(): ?float {
        return $this->minorTickWidth;
    }

    /**
     * Get the offset.
     *
     * @return float|null Returns the offset.
     */
    public function getOffset(): ?float {
        return $this->offset;
    }

    /**
     * Get the opposite.
     *
     * @return bool|null Returns the opposite.
     */
    public function getOpposite(): ?bool {
        return $this->opposite;
    }

    /**
     * Get the plot bands.
     *
     * @return mixed[]|null Returns the plot bands.
     */
    public function getPlotBands(): ?array {
        return $this->plotBands;
    }

    /**
     * Get the plot lines.
     *
     * @return mixed[]|null Returns the plot lines.
     */
    public function getPlotLines(): ?array {
        return $this->plotLines;
    }

    /**
     * Get the reversed.
     *
     * @return bool|null Returns the reversed.
     */
    public function getReversed(): ?bool {
        return $this->reversed;
    }

    /**
     * Get the show empty.
     *
     * @return bool|null Returns the show empty.
     */
    public function getShowEmpty(): ?bool {
        return $this->showEmpty;
    }

    /**
     * Get the show first label.
     *
     * @return bool|null Returns the show first label.
     */
    public function getShowFirstLabel(): ?bool {
        return $this->showFirstLabel;
    }

    /**
     * Get the show last label.
     *
     * @return bool|null Returns the show last label.
     */
    public function getShowLastLabel(): ?bool {
        return $this->showLastLabel;
    }

    /**
     * Get the soft max.
     *
     * @return float|null Returns the soft max.
     */
    public function getSoftMax(): ?float {
        return $this->softMax;
    }

    /**
     * Get the soft min.
     *
     * @return float|null Returns the soft min.
     */
    public function getSoftMin(): ?float {
        return $this->softMin;
    }

    /**
     * Get the start of week.
     *
     * @return float|null Returns the start of week.
     */
    public function getStartOfWeek(): ?float {
        return $this->startOfWeek;
    }

    /**
     * Get the start on tick.
     *
     * @return bool|null Returns the start on tick.
     */
    public function getStartOnTick(): ?bool {
        return $this->startOnTick;
    }

    /**
     * Get the tick amount.
     *
     * @return float|null Returns the tick amount.
     */
    public function getTickAmount(): ?float {
        return $this->tickAmount;
    }

    /**
     * Get the tick color.
     *
     * @return string|null Returns the tick color.
     */
    public function getTickColor(): ?string {
        return $this->tickColor;
    }

    /**
     * Get the tick interval.
     *
     * @return float|null Returns the tick interval.
     */
    public function getTickInterval(): ?float {
        return $this->tickInterval;
    }

    /**
     * Get the tick length.
     *
     * @return float|null Returns the tick length.
     */
    public function getTickLength(): ?float {
        return $this->tickLength;
    }

    /**
     * Get the tick pixel interval.
     *
     * @return float|null Returns the tick pixel interval.
     */
    public function getTickPixelInterval(): ?float {
        return $this->tickPixelInterval;
    }

    /**
     * Get the tick position.
     *
     * @return string|null Returns the tick position.
     */
    public function getTickPosition(): ?string {
        return $this->tickPosition;
    }

    /**
     * Get the tick positioner.
     *
     * @return string|null Returns the tick positioner.
     */
    public function getTickPositioner(): ?string {
        return $this->tickPositioner;
    }

    /**
     * Get the tick positions.
     *
     * @return mixed[]|null Returns the tick positions.
     */
    public function getTickPositions(): ?array {
        return $this->tickPositions;
    }

    /**
     * Get the tick width.
     *
     * @return float|null Returns the tick width.
     */
    public function getTickWidth(): ?float {
        return $this->tickWidth;
    }

    /**
     * Get the tickmark placement.
     *
     * @return string|null Returns the tickmark placement.
     */
    public function getTickmarkPlacement(): ?string {
        return $this->tickmarkPlacement;
    }

    /**
     * Get the title.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle|null Returns the title.
     */
    public function getTitle(): ?\WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle {
        return $this->title;
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
     * Get the unique names.
     *
     * @return bool|null Returns the unique names.
     */
    public function getUniqueNames(): ?bool {
        return $this->uniqueNames;
    }

    /**
     * Get the units.
     *
     * @return mixed[]|null Returns the units.
     */
    public function getUnits(): ?array {
        return $this->units;
    }

    /**
     * Get the visible.
     *
     * @return bool|null Returns the visible.
     */
    public function getVisible(): ?bool {
        return $this->visible;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "allowDecimals", $this->allowDecimals, [null]);
        ArrayHelper::set($output, "alternateGridColor", $this->alternateGridColor, [null]);
        ArrayHelper::set($output, "breaks", $this->breaks, [null]);
        ArrayHelper::set($output, "categories", $this->categories, [null]);
        ArrayHelper::set($output, "ceiling", $this->ceiling, [null]);
        ArrayHelper::set($output, "className", $this->className, [null]);
        if (null !== $this->crosshair) {
            ArrayHelper::set($output, "crosshair", $this->crosshair->jsonSerialize());
        }
        ArrayHelper::set($output, "dateTimeLabelFormats", $this->dateTimeLabelFormats, [null]);
        ArrayHelper::set($output, "description", $this->description, [null]);
        ArrayHelper::set($output, "endOnTick", $this->endOnTick, [null]);
        if (null !== $this->events) {
            ArrayHelper::set($output, "events", $this->events->jsonSerialize());
        }
        ArrayHelper::set($output, "floor", $this->floor, [null]);
        ArrayHelper::set($output, "gridLineColor", $this->gridLineColor, [null]);
        ArrayHelper::set($output, "gridLineDashStyle", $this->gridLineDashStyle, [null]);
        ArrayHelper::set($output, "gridLineWidth", $this->gridLineWidth, [null]);
        ArrayHelper::set($output, "gridZIndex", $this->gridZIndex, [null]);
        ArrayHelper::set($output, "id", $this->id, [null]);
        if (null !== $this->labels) {
            ArrayHelper::set($output, "labels", $this->labels->jsonSerialize());
        }
        ArrayHelper::set($output, "lineColor", $this->lineColor, [null]);
        ArrayHelper::set($output, "lineWidth", $this->lineWidth, [null]);
        ArrayHelper::set($output, "linkedTo", $this->linkedTo, [null]);
        ArrayHelper::set($output, "max", $this->max, [null]);
        ArrayHelper::set($output, "maxPadding", $this->maxPadding, [null]);
        ArrayHelper::set($output, "maxZoom", $this->maxZoom, [null]);
        ArrayHelper::set($output, "min", $this->min, [null]);
        ArrayHelper::set($output, "minPadding", $this->minPadding, [null]);
        ArrayHelper::set($output, "minRange", $this->minRange, [null]);
        ArrayHelper::set($output, "minTickInterval", $this->minTickInterval, [null]);
        ArrayHelper::set($output, "minorGridLineColor", $this->minorGridLineColor, [null]);
        ArrayHelper::set($output, "minorGridLineDashStyle", $this->minorGridLineDashStyle, [null]);
        ArrayHelper::set($output, "minorGridLineWidth", $this->minorGridLineWidth, [null]);
        ArrayHelper::set($output, "minorTickColor", $this->minorTickColor, [null]);
        ArrayHelper::set($output, "minorTickInterval", $this->minorTickInterval, [null]);
        ArrayHelper::set($output, "minorTickLength", $this->minorTickLength, [null]);
        ArrayHelper::set($output, "minorTickPosition", $this->minorTickPosition, [null]);
        ArrayHelper::set($output, "minorTickWidth", $this->minorTickWidth, [null]);
        ArrayHelper::set($output, "offset", $this->offset, [null]);
        ArrayHelper::set($output, "opposite", $this->opposite, [null]);
        ArrayHelper::set($output, "plotBands", $this->plotBands, [null]);
        ArrayHelper::set($output, "plotLines", $this->plotLines, [null]);
        ArrayHelper::set($output, "reversed", $this->reversed, [null]);
        ArrayHelper::set($output, "showEmpty", $this->showEmpty, [null]);
        ArrayHelper::set($output, "showFirstLabel", $this->showFirstLabel, [null]);
        ArrayHelper::set($output, "showLastLabel", $this->showLastLabel, [null]);
        ArrayHelper::set($output, "softMax", $this->softMax, [null]);
        ArrayHelper::set($output, "softMin", $this->softMin, [null]);
        ArrayHelper::set($output, "startOfWeek", $this->startOfWeek, [null]);
        ArrayHelper::set($output, "startOnTick", $this->startOnTick, [null]);
        ArrayHelper::set($output, "tickAmount", $this->tickAmount, [null]);
        ArrayHelper::set($output, "tickColor", $this->tickColor, [null]);
        ArrayHelper::set($output, "tickInterval", $this->tickInterval, [null]);
        ArrayHelper::set($output, "tickLength", $this->tickLength, [null]);
        ArrayHelper::set($output, "tickPixelInterval", $this->tickPixelInterval, [null]);
        ArrayHelper::set($output, "tickPosition", $this->tickPosition, [null]);
        ArrayHelper::set($output, "tickPositioner", $this->tickPositioner, [null]);
        ArrayHelper::set($output, "tickPositions", $this->tickPositions, [null]);
        ArrayHelper::set($output, "tickWidth", $this->tickWidth, [null]);
        ArrayHelper::set($output, "tickmarkPlacement", $this->tickmarkPlacement, [null]);
        if (null !== $this->title) {
            ArrayHelper::set($output, "title", $this->title->jsonSerialize());
        }
        ArrayHelper::set($output, "type", $this->type, [null]);
        ArrayHelper::set($output, "uniqueNames", $this->uniqueNames, [null]);
        ArrayHelper::set($output, "units", $this->units, [null]);
        ArrayHelper::set($output, "visible", $this->visible, [null]);

        return $output;
    }

    /**
     * Create a new crosshair.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair Returns the crosshair.
     */
    public function newCrosshair(): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair {
        $this->crosshair = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair();
        return $this->crosshair;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents Returns the events.
     */
    public function newEvents(): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents {
        $this->events = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new labels.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns the labels.
     */
    public function newLabels(): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->labels = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels();
        return $this->labels;
    }

    /**
     * Create a new title.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle Returns the title.
     */
    public function newTitle(): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle {
        $this->title = new \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle();
        return $this->title;
    }

    /**
     * Set the allow decimals.
     *
     * @param bool|null $allowDecimals The allow decimals.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setAllowDecimals(?bool $allowDecimals): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->allowDecimals = $allowDecimals;
        return $this;
    }

    /**
     * Set the alternate grid color.
     *
     * @param string|null $alternateGridColor The alternate grid color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setAlternateGridColor(?string $alternateGridColor): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->alternateGridColor = $alternateGridColor;
        return $this;
    }

    /**
     * Set the breaks.
     *
     * @param mixed[]|null $breaks The breaks.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setBreaks(?array $breaks): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->breaks = $breaks;
        return $this;
    }

    /**
     * Set the categories.
     *
     * @param mixed[]|null $categories The categories.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setCategories(?array $categories): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->categories = $categories;
        return $this;
    }

    /**
     * Set the ceiling.
     *
     * @param float|null $ceiling The ceiling.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setCeiling(?float $ceiling): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->ceiling = $ceiling;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the crosshair.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair|null $crosshair The crosshair.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setCrosshair(?\WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsCrosshair $crosshair): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->crosshair = $crosshair;
        return $this;
    }

    /**
     * Set the date time label formats.
     *
     * @param mixed[]|null $dateTimeLabelFormats The date time label formats.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setDateTimeLabelFormats(?array $dateTimeLabelFormats): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->dateTimeLabelFormats = $dateTimeLabelFormats;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setDescription(?string $description): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the end on tick.
     *
     * @param bool|null $endOnTick The end on tick.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setEndOnTick(?bool $endOnTick): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->endOnTick = $endOnTick;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setEvents(?\WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsEvents $events): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the floor.
     *
     * @param float|null $floor The floor.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setFloor(?float $floor): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->floor = $floor;
        return $this;
    }

    /**
     * Set the grid line color.
     *
     * @param string|null $gridLineColor The grid line color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setGridLineColor(?string $gridLineColor): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->gridLineColor = $gridLineColor;
        return $this;
    }

    /**
     * Set the grid line dash style.
     *
     * @param string|null $gridLineDashStyle The grid line dash style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setGridLineDashStyle(?string $gridLineDashStyle): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {

        switch ($gridLineDashStyle) {

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
                $this->gridLineDashStyle = $gridLineDashStyle;
                break;
        }

        return $this;
    }

    /**
     * Set the grid line width.
     *
     * @param float|null $gridLineWidth The grid line width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setGridLineWidth(?float $gridLineWidth): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->gridLineWidth = $gridLineWidth;
        return $this;
    }

    /**
     * Set the grid z index.
     *
     * @param float|null $gridZIndex The grid z index.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setGridZIndex(?float $gridZIndex): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->gridZIndex = $gridZIndex;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setId(?string $id): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the labels.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels|null $labels The labels.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setLabels(?\WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels $labels): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->labels = $labels;
        return $this;
    }

    /**
     * Set the line color.
     *
     * @param string|null $lineColor The line color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setLineColor(?string $lineColor): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->lineColor = $lineColor;
        return $this;
    }

    /**
     * Set the line width.
     *
     * @param float|null $lineWidth The line width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setLineWidth(?float $lineWidth): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->lineWidth = $lineWidth;
        return $this;
    }

    /**
     * Set the linked to.
     *
     * @param float|null $linkedTo The linked to.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setLinkedTo(?float $linkedTo): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->linkedTo = $linkedTo;
        return $this;
    }

    /**
     * Set the max.
     *
     * @param float|null $max The max.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMax(?float $max): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->max = $max;
        return $this;
    }

    /**
     * Set the max padding.
     *
     * @param float|null $maxPadding The max padding.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMaxPadding(?float $maxPadding): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->maxPadding = $maxPadding;
        return $this;
    }

    /**
     * Set the max zoom.
     *
     * @param float|null $maxZoom The max zoom.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     * @deprecated
     */
    public function setMaxZoom(?float $maxZoom): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->maxZoom = $maxZoom;
        return $this;
    }

    /**
     * Set the min.
     *
     * @param float|null $min The min.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMin(?float $min): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->min = $min;
        return $this;
    }

    /**
     * Set the min padding.
     *
     * @param float|null $minPadding The min padding.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMinPadding(?float $minPadding): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->minPadding = $minPadding;
        return $this;
    }

    /**
     * Set the min range.
     *
     * @param float|null $minRange The min range.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMinRange(?float $minRange): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->minRange = $minRange;
        return $this;
    }

    /**
     * Set the min tick interval.
     *
     * @param float|null $minTickInterval The min tick interval.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMinTickInterval(?float $minTickInterval): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->minTickInterval = $minTickInterval;
        return $this;
    }

    /**
     * Set the minor grid line color.
     *
     * @param string|null $minorGridLineColor The minor grid line color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMinorGridLineColor(?string $minorGridLineColor): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->minorGridLineColor = $minorGridLineColor;
        return $this;
    }

    /**
     * Set the minor grid line dash style.
     *
     * @param string|null $minorGridLineDashStyle The minor grid line dash style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMinorGridLineDashStyle(?string $minorGridLineDashStyle): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {

        switch ($minorGridLineDashStyle) {

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
                $this->minorGridLineDashStyle = $minorGridLineDashStyle;
                break;
        }

        return $this;
    }

    /**
     * Set the minor grid line width.
     *
     * @param float|null $minorGridLineWidth The minor grid line width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMinorGridLineWidth(?float $minorGridLineWidth): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->minorGridLineWidth = $minorGridLineWidth;
        return $this;
    }

    /**
     * Set the minor tick color.
     *
     * @param string|null $minorTickColor The minor tick color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMinorTickColor(?string $minorTickColor): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->minorTickColor = $minorTickColor;
        return $this;
    }

    /**
     * Set the minor tick interval.
     *
     * @param mixed $minorTickInterval The minor tick interval.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMinorTickInterval($minorTickInterval): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->minorTickInterval = $minorTickInterval;
        return $this;
    }

    /**
     * Set the minor tick length.
     *
     * @param float|null $minorTickLength The minor tick length.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMinorTickLength(?float $minorTickLength): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->minorTickLength = $minorTickLength;
        return $this;
    }

    /**
     * Set the minor tick position.
     *
     * @param string|null $minorTickPosition The minor tick position.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMinorTickPosition(?string $minorTickPosition): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {

        switch ($minorTickPosition) {

            case "inside":
            case "outside":
                $this->minorTickPosition = $minorTickPosition;
                break;
        }

        return $this;
    }

    /**
     * Set the minor tick width.
     *
     * @param float|null $minorTickWidth The minor tick width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setMinorTickWidth(?float $minorTickWidth): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->minorTickWidth = $minorTickWidth;
        return $this;
    }

    /**
     * Set the offset.
     *
     * @param float|null $offset The offset.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setOffset(?float $offset): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->offset = $offset;
        return $this;
    }

    /**
     * Set the opposite.
     *
     * @param bool|null $opposite The opposite.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setOpposite(?bool $opposite): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->opposite = $opposite;
        return $this;
    }

    /**
     * Set the plot bands.
     *
     * @param mixed[]|null $plotBands The plot bands.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setPlotBands(?array $plotBands): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->plotBands = $plotBands;
        return $this;
    }

    /**
     * Set the plot lines.
     *
     * @param mixed[]|null $plotLines The plot lines.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setPlotLines(?array $plotLines): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->plotLines = $plotLines;
        return $this;
    }

    /**
     * Set the reversed.
     *
     * @param bool|null $reversed The reversed.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setReversed(?bool $reversed): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->reversed = $reversed;
        return $this;
    }

    /**
     * Set the show empty.
     *
     * @param bool|null $showEmpty The show empty.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setShowEmpty(?bool $showEmpty): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->showEmpty = $showEmpty;
        return $this;
    }

    /**
     * Set the show first label.
     *
     * @param bool|null $showFirstLabel The show first label.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setShowFirstLabel(?bool $showFirstLabel): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->showFirstLabel = $showFirstLabel;
        return $this;
    }

    /**
     * Set the show last label.
     *
     * @param bool|null $showLastLabel The show last label.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setShowLastLabel(?bool $showLastLabel): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->showLastLabel = $showLastLabel;
        return $this;
    }

    /**
     * Set the soft max.
     *
     * @param float|null $softMax The soft max.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setSoftMax(?float $softMax): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->softMax = $softMax;
        return $this;
    }

    /**
     * Set the soft min.
     *
     * @param float|null $softMin The soft min.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setSoftMin(?float $softMin): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->softMin = $softMin;
        return $this;
    }

    /**
     * Set the start of week.
     *
     * @param float|null $startOfWeek The start of week.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setStartOfWeek(?float $startOfWeek): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->startOfWeek = $startOfWeek;
        return $this;
    }

    /**
     * Set the start on tick.
     *
     * @param bool|null $startOnTick The start on tick.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setStartOnTick(?bool $startOnTick): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->startOnTick = $startOnTick;
        return $this;
    }

    /**
     * Set the tick amount.
     *
     * @param float|null $tickAmount The tick amount.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setTickAmount(?float $tickAmount): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->tickAmount = $tickAmount;
        return $this;
    }

    /**
     * Set the tick color.
     *
     * @param string|null $tickColor The tick color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setTickColor(?string $tickColor): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->tickColor = $tickColor;
        return $this;
    }

    /**
     * Set the tick interval.
     *
     * @param float|null $tickInterval The tick interval.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setTickInterval(?float $tickInterval): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->tickInterval = $tickInterval;
        return $this;
    }

    /**
     * Set the tick length.
     *
     * @param float|null $tickLength The tick length.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setTickLength(?float $tickLength): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->tickLength = $tickLength;
        return $this;
    }

    /**
     * Set the tick pixel interval.
     *
     * @param float|null $tickPixelInterval The tick pixel interval.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setTickPixelInterval(?float $tickPixelInterval): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->tickPixelInterval = $tickPixelInterval;
        return $this;
    }

    /**
     * Set the tick position.
     *
     * @param string|null $tickPosition The tick position.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setTickPosition(?string $tickPosition): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {

        switch ($tickPosition) {

            case "inside":
            case "outside":
                $this->tickPosition = $tickPosition;
                break;
        }

        return $this;
    }

    /**
     * Set the tick positioner.
     *
     * @param string|null $tickPositioner The tick positioner.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setTickPositioner(?string $tickPositioner): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->tickPositioner = $tickPositioner;
        return $this;
    }

    /**
     * Set the tick positions.
     *
     * @param mixed[]|null $tickPositions The tick positions.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setTickPositions(?array $tickPositions): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->tickPositions = $tickPositions;
        return $this;
    }

    /**
     * Set the tick width.
     *
     * @param float|null $tickWidth The tick width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setTickWidth(?float $tickWidth): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->tickWidth = $tickWidth;
        return $this;
    }

    /**
     * Set the tickmark placement.
     *
     * @param string|null $tickmarkPlacement The tickmark placement.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setTickmarkPlacement(?string $tickmarkPlacement): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {

        switch ($tickmarkPlacement) {

            case null:
            case "between":
            case "on":
                $this->tickmarkPlacement = $tickmarkPlacement;
                break;
        }

        return $this;
    }

    /**
     * Set the title.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle|null $title The title.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setTitle(?\WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsTitle $title): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->title = $title;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setType(?string $type): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {

        switch ($type) {

            case "category":
            case "datetime":
            case "linear":
            case "logarithmic":
                $this->type = $type;
                break;
        }

        return $this;
    }

    /**
     * Set the unique names.
     *
     * @param bool|null $uniqueNames The unique names.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setUniqueNames(?bool $uniqueNames): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->uniqueNames = $uniqueNames;
        return $this;
    }

    /**
     * Set the units.
     *
     * @param mixed[]|null $units The units.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setUnits(?array $units): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->units = $units;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param bool|null $visible The visible.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis Returns this highcharts x axis.
     */
    public function setVisible(?bool $visible): \WBW\Library\Highcharts\Model\Chart\HighchartsXAxis {
        $this->visible = $visible;
        return $this;
    }
}
