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

namespace WBW\Library\Highcharts\Model\Chart\PlotOptions;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts column.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\PlotOptions
 * @version 5.0.14
 */
class HighchartsColumn implements JsonSerializable {

    /**
     * Allow point select.
     *
     * @var bool|null
     * @since 1.2.0
     */
    private $allowPointSelect = false;

    /**
     * Animation.
     *
     * @var bool|null
     */
    private $animation = true;

    /**
     * Animation limit.
     *
     * @var float|null
     */
    private $animationLimit;

    /**
     * Border color.
     *
     * @var string|null
     */
    private $borderColor = "#ffffff";

    /**
     * Border radius.
     *
     * @var float|null
     */
    private $borderRadius = 0;

    /**
     * Border width.
     *
     * @var float|null
     */
    private $borderWidth = 1;

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
     */
    private $color;

    /**
     * Color by point.
     *
     * @var bool|null
     * @since 2.0
     */
    private $colorByPoint = false;

    /**
     * Color index.
     *
     * @var float|null
     * @since 5.0.0
     */
    private $colorIndex;

    /**
     * Colors.
     *
     * @var mixed[]|null
     * @since 3.0
     */
    private $colors;

    /**
     * Crisp.
     *
     * @var bool|null
     * @since 5.0.10
     */
    private $crisp = true;

    /**
     * Crop threshold.
     *
     * @var float|null
     */
    private $cropThreshold = 50;

    /**
     * Cursor.
     *
     * @var string|null
     */
    private $cursor;

    /**
     * Data labels.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsDataLabels|null
     */
    private $dataLabels;

    /**
     * Depth.
     *
     * @var float|null
     * @since 4.0
     */
    private $depth = 25;

    /**
     * Description.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $description;

    /**
     * Edge color.
     *
     * @var string|null
     */
    private $edgeColor;

    /**
     * Edge width.
     *
     * @var float|null
     */
    private $edgeWidth = 1;

    /**
     * Enable mouse tracking.
     *
     * @var bool|null
     */
    private $enableMouseTracking = true;

    /**
     * Events.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsEvents|null
     */
    private $events;

    /**
     * Expose element to a11y.
     *
     * @var bool|null
     * @since 5.0.12
     */
    private $exposeElementToA11y;

    /**
     * Find nearest point by.
     *
     * @var string|null
     * @since 5.0.10
     */
    private $findNearestPointBy;

    /**
     * Get extremes from all.
     *
     * @var bool|null
     * @since 4.1.6
     */
    private $getExtremesFromAll = false;

    /**
     * Group padding.
     *
     * @var float|null
     */
    private $groupPadding = 0.2;

    /**
     * Group z padding.
     *
     * @var float|null
     * @since 4.0
     */
    private $groupZPadding = 1;

    /**
     * Grouping.
     *
     * @var bool|null
     * @since 2.3.0
     */
    private $grouping = true;

    /**
     * Keys.
     *
     * @var mixed[]|null
     * @since 4.1.6
     */
    private $keys;

    /**
     * Linked to.
     *
     * @var string|null
     * @since 3.0
     */
    private $linkedTo;

    /**
     * Max point width.
     *
     * @var float|null
     * @since 4.1.8
     */
    private $maxPointWidth;

    /**
     * Min point length.
     *
     * @var float|null
     */
    private $minPointLength = 0;

    /**
     * Negative color.
     *
     * @var string|null
     * @since 3.0
     */
    private $negativeColor;

    /**
     * Point.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsPoint|null
     */
    private $point;

    /**
     * Point description formatter.
     *
     * @var string|null
     * @since 5.0.12
     */
    private $pointDescriptionFormatter;

    /**
     * Point interval.
     *
     * @var float|null
     */
    private $pointInterval = 1;

    /**
     * Point interval unit.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $pointIntervalUnit;

    /**
     * Point padding.
     *
     * @var float|null
     */
    private $pointPadding = 0.1;

    /**
     * Point placement.
     *
     * @var mixed|null
     * @since 2.3.0
     */
    private $pointPlacement;

    /**
     * Point range.
     *
     * @var float|null
     * @since 2.3
     */
    private $pointRange;

    /**
     * Point start.
     *
     * @var float|null
     */
    private $pointStart = 0;

    /**
     * Point width.
     *
     * @var float|null
     * @since 1.2.5
     */
    private $pointWidth;

    /**
     * Selected.
     *
     * @var bool|null
     * @since 1.2.0
     */
    private $selected = false;

    /**
     * Shadow.
     *
     * @var mixed|null
     */
    private $shadow = "false";

    /**
     * Show checkbox.
     *
     * @var bool|null
     * @since 1.2.0
     */
    private $showCheckbox = false;

    /**
     * Show in legend.
     *
     * @var bool|null
     */
    private $showInLegend = true;

    /**
     * Skip keyboard navigation.
     *
     * @var bool|null
     * @since 5.0.12
     */
    private $skipKeyboardNavigation;

    /**
     * Soft threshold.
     *
     * @var bool|null
     * @since 4.1.9
     */
    private $softThreshold = true;

    /**
     * Stacking.
     *
     * @var string|null
     */
    private $stacking;

    /**
     * States.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsStates|null
     */
    private $states;

    /**
     * Sticky tracking.
     *
     * @var bool|null
     * @since 2.0
     */
    private $stickyTracking = true;

    /**
     * Threshold.
     *
     * @var float|null
     * @since 2.0
     */
    private $threshold = 0;

    /**
     * Tooltip.
     *
     * @var mixed[]|null
     * @since 2.3
     */
    private $tooltip;

    /**
     * Turbo threshold.
     *
     * @var float|null
     * @since 2.2
     */
    private $turboThreshold = 1000;

    /**
     * Visible.
     *
     * @var bool|null
     */
    private $visible = true;

    /**
     * Zone axis.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $zoneAxis = "y";

    /**
     * Zones.
     *
     * @var mixed[]|null
     * @since 4.1.0
     */
    private $zones;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the allow point select.
     *
     * @return bool|null Returns the allow point select.
     */
    public function getAllowPointSelect(): ?bool {
        return $this->allowPointSelect;
    }

    /**
     * Get the animation.
     *
     * @return bool|null Returns the animation.
     */
    public function getAnimation(): ?bool {
        return $this->animation;
    }

    /**
     * Get the animation limit.
     *
     * @return float|null Returns the animation limit.
     */
    public function getAnimationLimit(): ?float {
        return $this->animationLimit;
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
     * Get the border radius.
     *
     * @return float|null Returns the border radius.
     */
    public function getBorderRadius(): ?float {
        return $this->borderRadius;
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
     * Get the color by point.
     *
     * @return bool|null Returns the color by point.
     */
    public function getColorByPoint(): ?bool {
        return $this->colorByPoint;
    }

    /**
     * Get the color index.
     *
     * @return float|null Returns the color index.
     */
    public function getColorIndex(): ?float {
        return $this->colorIndex;
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
     * Get the crisp.
     *
     * @return bool|null Returns the crisp.
     */
    public function getCrisp(): ?bool {
        return $this->crisp;
    }

    /**
     * Get the crop threshold.
     *
     * @return float|null Returns the crop threshold.
     */
    public function getCropThreshold(): ?float {
        return $this->cropThreshold;
    }

    /**
     * Get the cursor.
     *
     * @return string|null Returns the cursor.
     */
    public function getCursor(): ?string {
        return $this->cursor;
    }

    /**
     * Get the data labels.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsDataLabels|null Returns the data labels.
     */
    public function getDataLabels(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsDataLabels {
        return $this->dataLabels;
    }

    /**
     * Get the depth.
     *
     * @return float|null Returns the depth.
     */
    public function getDepth(): ?float {
        return $this->depth;
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
     * Get the edge color.
     *
     * @return string|null Returns the edge color.
     */
    public function getEdgeColor(): ?string {
        return $this->edgeColor;
    }

    /**
     * Get the edge width.
     *
     * @return float|null Returns the edge width.
     */
    public function getEdgeWidth(): ?float {
        return $this->edgeWidth;
    }

    /**
     * Get the enable mouse tracking.
     *
     * @return bool|null Returns the enable mouse tracking.
     */
    public function getEnableMouseTracking(): ?bool {
        return $this->enableMouseTracking;
    }

    /**
     * Get the events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsEvents|null Returns the events.
     */
    public function getEvents(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsEvents {
        return $this->events;
    }

    /**
     * Get the expose element to a11y.
     *
     * @return bool|null Returns the expose element to a11y.
     */
    public function getExposeElementToA11y(): ?bool {
        return $this->exposeElementToA11y;
    }

    /**
     * Get the find nearest point by.
     *
     * @return string|null Returns the find nearest point by.
     */
    public function getFindNearestPointBy(): ?string {
        return $this->findNearestPointBy;
    }

    /**
     * Get the get extremes from all.
     *
     * @return bool|null Returns the get extremes from all.
     */
    public function getGetExtremesFromAll(): ?bool {
        return $this->getExtremesFromAll;
    }

    /**
     * Get the group padding.
     *
     * @return float|null Returns the group padding.
     */
    public function getGroupPadding(): ?float {
        return $this->groupPadding;
    }

    /**
     * Get the group z padding.
     *
     * @return float|null Returns the group z padding.
     */
    public function getGroupZPadding(): ?float {
        return $this->groupZPadding;
    }

    /**
     * Get the grouping.
     *
     * @return bool|null Returns the grouping.
     */
    public function getGrouping(): ?bool {
        return $this->grouping;
    }

    /**
     * Get the keys.
     *
     * @return mixed[]|null Returns the keys.
     */
    public function getKeys(): ?array {
        return $this->keys;
    }

    /**
     * Get the linked to.
     *
     * @return string|null Returns the linked to.
     */
    public function getLinkedTo(): ?string {
        return $this->linkedTo;
    }

    /**
     * Get the max point width.
     *
     * @return float|null Returns the max point width.
     */
    public function getMaxPointWidth(): ?float {
        return $this->maxPointWidth;
    }

    /**
     * Get the min point length.
     *
     * @return float|null Returns the min point length.
     */
    public function getMinPointLength(): ?float {
        return $this->minPointLength;
    }

    /**
     * Get the negative color.
     *
     * @return string|null Returns the negative color.
     */
    public function getNegativeColor(): ?string {
        return $this->negativeColor;
    }

    /**
     * Get the point.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsPoint|null Returns the point.
     */
    public function getPoint(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsPoint {
        return $this->point;
    }

    /**
     * Get the point description formatter.
     *
     * @return string|null Returns the point description formatter.
     */
    public function getPointDescriptionFormatter(): ?string {
        return $this->pointDescriptionFormatter;
    }

    /**
     * Get the point interval.
     *
     * @return float|null Returns the point interval.
     */
    public function getPointInterval(): ?float {
        return $this->pointInterval;
    }

    /**
     * Get the point interval unit.
     *
     * @return string|null Returns the point interval unit.
     */
    public function getPointIntervalUnit(): ?string {
        return $this->pointIntervalUnit;
    }

    /**
     * Get the point padding.
     *
     * @return float|null Returns the point padding.
     */
    public function getPointPadding(): ?float {
        return $this->pointPadding;
    }

    /**
     * Get the point placement.
     *
     * @return mixed Returns the point placement.
     */
    public function getPointPlacement() {
        return $this->pointPlacement;
    }

    /**
     * Get the point range.
     *
     * @return float|null Returns the point range.
     */
    public function getPointRange(): ?float {
        return $this->pointRange;
    }

    /**
     * Get the point start.
     *
     * @return float|null Returns the point start.
     */
    public function getPointStart(): ?float {
        return $this->pointStart;
    }

    /**
     * Get the point width.
     *
     * @return float|null Returns the point width.
     */
    public function getPointWidth(): ?float {
        return $this->pointWidth;
    }

    /**
     * Get the selected.
     *
     * @return bool|null Returns the selected.
     */
    public function getSelected(): ?bool {
        return $this->selected;
    }

    /**
     * Get the shadow.
     *
     * @return mixed Returns the shadow.
     */
    public function getShadow() {
        return $this->shadow;
    }

    /**
     * Get the show checkbox.
     *
     * @return bool|null Returns the show checkbox.
     */
    public function getShowCheckbox(): ?bool {
        return $this->showCheckbox;
    }

    /**
     * Get the show in legend.
     *
     * @return bool|null Returns the show in legend.
     */
    public function getShowInLegend(): ?bool {
        return $this->showInLegend;
    }

    /**
     * Get the skip keyboard navigation.
     *
     * @return bool|null Returns the skip keyboard navigation.
     */
    public function getSkipKeyboardNavigation(): ?bool {
        return $this->skipKeyboardNavigation;
    }

    /**
     * Get the soft threshold.
     *
     * @return bool|null Returns the soft threshold.
     */
    public function getSoftThreshold(): ?bool {
        return $this->softThreshold;
    }

    /**
     * Get the stacking.
     *
     * @return string|null Returns the stacking.
     */
    public function getStacking(): ?string {
        return $this->stacking;
    }

    /**
     * Get the states.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsStates|null Returns the states.
     */
    public function getStates(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsStates {
        return $this->states;
    }

    /**
     * Get the sticky tracking.
     *
     * @return bool|null Returns the sticky tracking.
     */
    public function getStickyTracking(): ?bool {
        return $this->stickyTracking;
    }

    /**
     * Get the threshold.
     *
     * @return float|null Returns the threshold.
     */
    public function getThreshold(): ?float {
        return $this->threshold;
    }

    /**
     * Get the tooltip.
     *
     * @return mixed[]|null Returns the tooltip.
     */
    public function getTooltip(): ?array {
        return $this->tooltip;
    }

    /**
     * Get the turbo threshold.
     *
     * @return float|null Returns the turbo threshold.
     */
    public function getTurboThreshold(): ?float {
        return $this->turboThreshold;
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
     * Get the zone axis.
     *
     * @return string|null Returns the zone axis.
     */
    public function getZoneAxis(): ?string {
        return $this->zoneAxis;
    }

    /**
     * Get the zones.
     *
     * @return mixed[]|null Returns the zones.
     */
    public function getZones(): ?array {
        return $this->zones;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "allowPointSelect", $this->allowPointSelect, [null]);
        ArrayHelper::set($output, "animation", $this->animation, [null]);
        ArrayHelper::set($output, "animationLimit", $this->animationLimit, [null]);
        ArrayHelper::set($output, "borderColor", $this->borderColor, [null]);
        ArrayHelper::set($output, "borderRadius", $this->borderRadius, [null]);
        ArrayHelper::set($output, "borderWidth", $this->borderWidth, [null]);
        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "color", $this->color, [null]);
        ArrayHelper::set($output, "colorByPoint", $this->colorByPoint, [null]);
        ArrayHelper::set($output, "colorIndex", $this->colorIndex, [null]);
        ArrayHelper::set($output, "colors", $this->colors, [null]);
        ArrayHelper::set($output, "crisp", $this->crisp, [null]);
        ArrayHelper::set($output, "cropThreshold", $this->cropThreshold, [null]);
        ArrayHelper::set($output, "cursor", $this->cursor, [null]);
        if (null !== $this->dataLabels) {
            ArrayHelper::set($output, "dataLabels", $this->dataLabels->jsonSerialize());
        }
        ArrayHelper::set($output, "depth", $this->depth, [null]);
        ArrayHelper::set($output, "description", $this->description, [null]);
        ArrayHelper::set($output, "edgeColor", $this->edgeColor, [null]);
        ArrayHelper::set($output, "edgeWidth", $this->edgeWidth, [null]);
        ArrayHelper::set($output, "enableMouseTracking", $this->enableMouseTracking, [null]);
        if (null !== $this->events) {
            ArrayHelper::set($output, "events", $this->events->jsonSerialize());
        }
        ArrayHelper::set($output, "exposeElementToA11y", $this->exposeElementToA11y, [null]);
        ArrayHelper::set($output, "findNearestPointBy", $this->findNearestPointBy, [null]);
        ArrayHelper::set($output, "getExtremesFromAll", $this->getExtremesFromAll, [null]);
        ArrayHelper::set($output, "groupPadding", $this->groupPadding, [null]);
        ArrayHelper::set($output, "groupZPadding", $this->groupZPadding, [null]);
        ArrayHelper::set($output, "grouping", $this->grouping, [null]);
        ArrayHelper::set($output, "keys", $this->keys, [null]);
        ArrayHelper::set($output, "linkedTo", $this->linkedTo, [null]);
        ArrayHelper::set($output, "maxPointWidth", $this->maxPointWidth, [null]);
        ArrayHelper::set($output, "minPointLength", $this->minPointLength, [null]);
        ArrayHelper::set($output, "negativeColor", $this->negativeColor, [null]);
        if (null !== $this->point) {
            ArrayHelper::set($output, "point", $this->point->jsonSerialize());
        }
        ArrayHelper::set($output, "pointDescriptionFormatter", $this->pointDescriptionFormatter, [null]);
        ArrayHelper::set($output, "pointInterval", $this->pointInterval, [null]);
        ArrayHelper::set($output, "pointIntervalUnit", $this->pointIntervalUnit, [null]);
        ArrayHelper::set($output, "pointPadding", $this->pointPadding, [null]);
        ArrayHelper::set($output, "pointPlacement", $this->pointPlacement, [null]);
        ArrayHelper::set($output, "pointRange", $this->pointRange, [null]);
        ArrayHelper::set($output, "pointStart", $this->pointStart, [null]);
        ArrayHelper::set($output, "pointWidth", $this->pointWidth, [null]);
        ArrayHelper::set($output, "selected", $this->selected, [null]);
        ArrayHelper::set($output, "shadow", $this->shadow, [null]);
        ArrayHelper::set($output, "showCheckbox", $this->showCheckbox, [null]);
        ArrayHelper::set($output, "showInLegend", $this->showInLegend, [null]);
        ArrayHelper::set($output, "skipKeyboardNavigation", $this->skipKeyboardNavigation, [null]);
        ArrayHelper::set($output, "softThreshold", $this->softThreshold, [null]);
        ArrayHelper::set($output, "stacking", $this->stacking, [null]);
        if (null !== $this->states) {
            ArrayHelper::set($output, "states", $this->states->jsonSerialize());
        }
        ArrayHelper::set($output, "stickyTracking", $this->stickyTracking, [null]);
        ArrayHelper::set($output, "threshold", $this->threshold, [null]);
        ArrayHelper::set($output, "tooltip", $this->tooltip, [null]);
        ArrayHelper::set($output, "turboThreshold", $this->turboThreshold, [null]);
        ArrayHelper::set($output, "visible", $this->visible, [null]);
        ArrayHelper::set($output, "zoneAxis", $this->zoneAxis, [null]);
        ArrayHelper::set($output, "zones", $this->zones, [null]);

        return $output;
    }

    /**
     * Create a new data labels.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsDataLabels Returns the data labels.
     */
    public function newDataLabels(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsDataLabels {
        $this->dataLabels = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsDataLabels();
        return $this->dataLabels;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsEvents Returns the events.
     */
    public function newEvents(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsEvents {
        $this->events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new point.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsPoint Returns the point.
     */
    public function newPoint(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsPoint {
        $this->point = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsPoint();
        return $this->point;
    }

    /**
     * Create a new states.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsStates Returns the states.
     */
    public function newStates(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsStates {
        $this->states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsStates();
        return $this->states;
    }

    /**
     * Set the allow point select.
     *
     * @param bool|null $allowPointSelect The allow point select.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setAllowPointSelect(?bool $allowPointSelect): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->allowPointSelect = $allowPointSelect;
        return $this;
    }

    /**
     * Set the animation.
     *
     * @param bool|null $animation The animation.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setAnimation(?bool $animation): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the animation limit.
     *
     * @param float|null $animationLimit The animation limit.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setAnimationLimit(?float $animationLimit): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->animationLimit = $animationLimit;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setBorderColor(?string $borderColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border radius.
     *
     * @param float|null $borderRadius The border radius.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setBorderRadius(?float $borderRadius): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param float|null $borderWidth The border width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setBorderWidth(?float $borderWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the color by point.
     *
     * @param bool|null $colorByPoint The color by point.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setColorByPoint(?bool $colorByPoint): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->colorByPoint = $colorByPoint;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param float|null $colorIndex The color index.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setColorIndex(?float $colorIndex): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the colors.
     *
     * @param mixed[]|null $colors The colors.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setColors(?array $colors): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->colors = $colors;
        return $this;
    }

    /**
     * Set the crisp.
     *
     * @param bool|null $crisp The crisp.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setCrisp(?bool $crisp): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->crisp = $crisp;
        return $this;
    }

    /**
     * Set the crop threshold.
     *
     * @param float|null $cropThreshold The crop threshold.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setCropThreshold(?float $cropThreshold): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->cropThreshold = $cropThreshold;
        return $this;
    }

    /**
     * Set the cursor.
     *
     * @param string|null $cursor The cursor.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setCursor(?string $cursor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {

        switch ($cursor) {

            case null:
            case "crosshair":
            case "default":
            case "help":
            case "none":
            case "pointer":
                $this->cursor = $cursor;
                break;
        }

        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsDataLabels|null $dataLabels The data labels.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setDataLabels(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsDataLabels $dataLabels): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the depth.
     *
     * @param float|null $depth The depth.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setDepth(?float $depth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->depth = $depth;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setDescription(?string $description): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the edge color.
     *
     * @param string|null $edgeColor The edge color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setEdgeColor(?string $edgeColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->edgeColor = $edgeColor;
        return $this;
    }

    /**
     * Set the edge width.
     *
     * @param float|null $edgeWidth The edge width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setEdgeWidth(?float $edgeWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->edgeWidth = $edgeWidth;
        return $this;
    }

    /**
     * Set the enable mouse tracking.
     *
     * @param bool|null $enableMouseTracking The enable mouse tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setEnableMouseTracking(?bool $enableMouseTracking): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->enableMouseTracking = $enableMouseTracking;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsEvents|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setEvents(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsEvents $events): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the expose element to a11y.
     *
     * @param bool|null $exposeElementToA11y The expose element to a11y.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setExposeElementToA11y(?bool $exposeElementToA11y): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->exposeElementToA11y = $exposeElementToA11y;
        return $this;
    }

    /**
     * Set the find nearest point by.
     *
     * @param string|null $findNearestPointBy The find nearest point by.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setFindNearestPointBy(?string $findNearestPointBy): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {

        switch ($findNearestPointBy) {

            case "x":
            case "xy":
                $this->findNearestPointBy = $findNearestPointBy;
                break;
        }

        return $this;
    }

    /**
     * Set the get extremes from all.
     *
     * @param bool|null $getExtremesFromAll The get extremes from all.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setGetExtremesFromAll(?bool $getExtremesFromAll): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->getExtremesFromAll = $getExtremesFromAll;
        return $this;
    }

    /**
     * Set the group padding.
     *
     * @param float|null $groupPadding The group padding.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setGroupPadding(?float $groupPadding): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->groupPadding = $groupPadding;
        return $this;
    }

    /**
     * Set the group z padding.
     *
     * @param float|null $groupZPadding The group z padding.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setGroupZPadding(?float $groupZPadding): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->groupZPadding = $groupZPadding;
        return $this;
    }

    /**
     * Set the grouping.
     *
     * @param bool|null $grouping The grouping.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setGrouping(?bool $grouping): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->grouping = $grouping;
        return $this;
    }

    /**
     * Set the keys.
     *
     * @param mixed[]|null $keys The keys.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setKeys(?array $keys): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->keys = $keys;
        return $this;
    }

    /**
     * Set the linked to.
     *
     * @param string|null $linkedTo The linked to.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setLinkedTo(?string $linkedTo): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->linkedTo = $linkedTo;
        return $this;
    }

    /**
     * Set the max point width.
     *
     * @param float|null $maxPointWidth The max point width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setMaxPointWidth(?float $maxPointWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->maxPointWidth = $maxPointWidth;
        return $this;
    }

    /**
     * Set the min point length.
     *
     * @param float|null $minPointLength The min point length.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setMinPointLength(?float $minPointLength): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->minPointLength = $minPointLength;
        return $this;
    }

    /**
     * Set the negative color.
     *
     * @param string|null $negativeColor The negative color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setNegativeColor(?string $negativeColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->negativeColor = $negativeColor;
        return $this;
    }

    /**
     * Set the point.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsPoint|null $point The point.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setPoint(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsPoint $point): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->point = $point;
        return $this;
    }

    /**
     * Set the point description formatter.
     *
     * @param string|null $pointDescriptionFormatter The point description formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setPointDescriptionFormatter(?string $pointDescriptionFormatter): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->pointDescriptionFormatter = $pointDescriptionFormatter;
        return $this;
    }

    /**
     * Set the point interval.
     *
     * @param float|null $pointInterval The point interval.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setPointInterval(?float $pointInterval): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->pointInterval = $pointInterval;
        return $this;
    }

    /**
     * Set the point interval unit.
     *
     * @param string|null $pointIntervalUnit The point interval unit.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setPointIntervalUnit(?string $pointIntervalUnit): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {

        switch ($pointIntervalUnit) {

            case null:
            case "day":
            case "month":
            case "year":
                $this->pointIntervalUnit = $pointIntervalUnit;
                break;
        }

        return $this;
    }

    /**
     * Set the point padding.
     *
     * @param float|null $pointPadding The point padding.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setPointPadding(?float $pointPadding): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->pointPadding = $pointPadding;
        return $this;
    }

    /**
     * Set the point placement.
     *
     * @param mixed $pointPlacement The point placement.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setPointPlacement($pointPlacement): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {

        switch ($pointPlacement) {

            case null:
            case "between":
            case "on":
                $this->pointPlacement = $pointPlacement;
                break;
        }

        return $this;
    }

    /**
     * Set the point range.
     *
     * @param float|null $pointRange The point range.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setPointRange(?float $pointRange): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->pointRange = $pointRange;
        return $this;
    }

    /**
     * Set the point start.
     *
     * @param float|null $pointStart The point start.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setPointStart(?float $pointStart): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->pointStart = $pointStart;
        return $this;
    }

    /**
     * Set the point width.
     *
     * @param float|null $pointWidth The point width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setPointWidth(?float $pointWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->pointWidth = $pointWidth;
        return $this;
    }

    /**
     * Set the selected.
     *
     * @param bool|null $selected The selected.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setSelected(?bool $selected): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the shadow.
     *
     * @param mixed $shadow The shadow.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setShadow($shadow): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * Set the show checkbox.
     *
     * @param bool|null $showCheckbox The show checkbox.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setShowCheckbox(?bool $showCheckbox): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->showCheckbox = $showCheckbox;
        return $this;
    }

    /**
     * Set the show in legend.
     *
     * @param bool|null $showInLegend The show in legend.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setShowInLegend(?bool $showInLegend): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->showInLegend = $showInLegend;
        return $this;
    }

    /**
     * Set the skip keyboard navigation.
     *
     * @param bool|null $skipKeyboardNavigation The skip keyboard navigation.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setSkipKeyboardNavigation(?bool $skipKeyboardNavigation): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->skipKeyboardNavigation = $skipKeyboardNavigation;
        return $this;
    }

    /**
     * Set the soft threshold.
     *
     * @param bool|null $softThreshold The soft threshold.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setSoftThreshold(?bool $softThreshold): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->softThreshold = $softThreshold;
        return $this;
    }

    /**
     * Set the stacking.
     *
     * @param string|null $stacking The stacking.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setStacking(?string $stacking): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {

        switch ($stacking) {

            case null:
            case "normal":
            case "percent":
                $this->stacking = $stacking;
                break;
        }

        return $this;
    }

    /**
     * Set the states.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsStates|null $states The states.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setStates(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Column\HighchartsStates $states): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->states = $states;
        return $this;
    }

    /**
     * Set the sticky tracking.
     *
     * @param bool|null $stickyTracking The sticky tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setStickyTracking(?bool $stickyTracking): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->stickyTracking = $stickyTracking;
        return $this;
    }

    /**
     * Set the threshold.
     *
     * @param float|null $threshold The threshold.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setThreshold(?float $threshold): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->threshold = $threshold;
        return $this;
    }

    /**
     * Set the tooltip.
     *
     * @param mixed[]|null $tooltip The tooltip.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setTooltip(?array $tooltip): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * Set the turbo threshold.
     *
     * @param float|null $turboThreshold The turbo threshold.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setTurboThreshold(?float $turboThreshold): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->turboThreshold = $turboThreshold;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param bool|null $visible The visible.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setVisible(?bool $visible): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Set the zone axis.
     *
     * @param string|null $zoneAxis The zone axis.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setZoneAxis(?string $zoneAxis): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->zoneAxis = $zoneAxis;
        return $this;
    }

    /**
     * Set the zones.
     *
     * @param mixed[]|null $zones The zones.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn Returns this highcharts column.
     */
    public function setZones(?array $zones): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsColumn {
        $this->zones = $zones;
        return $this;
    }
}
