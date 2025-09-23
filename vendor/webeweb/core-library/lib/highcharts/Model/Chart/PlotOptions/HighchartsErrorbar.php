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
 * Highcharts errorbar.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\PlotOptions
 * @version 5.0.14
 */
class HighchartsErrorbar implements JsonSerializable {

    /**
     * Allow point select.
     *
     * @var bool|null
     * @since 1.2.0
     */
    private $allowPointSelect = false;

    /**
     * Animation limit.
     *
     * @var float|null
     */
    private $animationLimit;

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
     * @since 3.0
     */
    private $color = "#000000";

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
     * Cursor.
     *
     * @var string|null
     */
    private $cursor;

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
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsEvents|null
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
     * Group z padding.
     *
     * @var float|null
     * @since 4.0
     */
    private $groupZPadding = 1;

    /**
     * Keys.
     *
     * @var mixed[]|null
     * @since 4.1.6
     */
    private $keys;

    /**
     * Line width.
     *
     * @var float|null
     * @since 3.0
     */
    private $lineWidth = 1;

    /**
     * Linked to.
     *
     * @var string|null
     * @since 3.0
     */
    private $linkedTo = ":previous";

    /**
     * Max point width.
     *
     * @var float|null
     * @since 4.1.8
     */
    private $maxPointWidth;

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
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint|null
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
     * Skip keyboard navigation.
     *
     * @var bool|null
     * @since 5.0.12
     */
    private $skipKeyboardNavigation;

    /**
     * States.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsStates|null
     */
    private $states;

    /**
     * Stem color.
     *
     * @var string|null
     * @since 3.0
     */
    private $stemColor;

    /**
     * Stem dash style.
     *
     * @var string|null
     * @since 3.0
     */
    private $stemDashStyle = "Solid";

    /**
     * Stem width.
     *
     * @var float|null
     * @since 3.0
     */
    private $stemWidth;

    /**
     * Sticky tracking.
     *
     * @var bool|null
     * @since 2.0
     */
    private $stickyTracking = true;

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
     * Whisker color.
     *
     * @var string|null
     * @since 3.0
     */
    private $whiskerColor;

    /**
     * Whisker length.
     *
     * @var mixed|null
     * @since 3.0
     */
    private $whiskerLength = "50%";

    /**
     * Whisker width.
     *
     * @var float|null
     * @since 3.0
     */
    private $whiskerWidth;

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
     * Get the animation limit.
     *
     * @return float|null Returns the animation limit.
     */
    public function getAnimationLimit(): ?float {
        return $this->animationLimit;
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
     * Get the cursor.
     *
     * @return string|null Returns the cursor.
     */
    public function getCursor(): ?string {
        return $this->cursor;
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
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsEvents|null Returns the events.
     */
    public function getEvents(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsEvents {
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
     * Get the group z padding.
     *
     * @return float|null Returns the group z padding.
     */
    public function getGroupZPadding(): ?float {
        return $this->groupZPadding;
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
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint|null Returns the point.
     */
    public function getPoint(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint {
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
     * Get the skip keyboard navigation.
     *
     * @return bool|null Returns the skip keyboard navigation.
     */
    public function getSkipKeyboardNavigation(): ?bool {
        return $this->skipKeyboardNavigation;
    }

    /**
     * Get the states.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsStates|null Returns the states.
     */
    public function getStates(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsStates {
        return $this->states;
    }

    /**
     * Get the stem color.
     *
     * @return string|null Returns the stem color.
     */
    public function getStemColor(): ?string {
        return $this->stemColor;
    }

    /**
     * Get the stem dash style.
     *
     * @return string|null Returns the stem dash style.
     */
    public function getStemDashStyle(): ?string {
        return $this->stemDashStyle;
    }

    /**
     * Get the stem width.
     *
     * @return float|null Returns the stem width.
     */
    public function getStemWidth(): ?float {
        return $this->stemWidth;
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
     * Get the whisker color.
     *
     * @return string|null Returns the whisker color.
     */
    public function getWhiskerColor(): ?string {
        return $this->whiskerColor;
    }

    /**
     * Get the whisker length.
     *
     * @return mixed Returns the whisker length.
     */
    public function getWhiskerLength() {
        return $this->whiskerLength;
    }

    /**
     * Get the whisker width.
     *
     * @return float|null Returns the whisker width.
     */
    public function getWhiskerWidth(): ?float {
        return $this->whiskerWidth;
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
        ArrayHelper::set($output, "animationLimit", $this->animationLimit, [null]);
        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "color", $this->color, [null]);
        ArrayHelper::set($output, "colorByPoint", $this->colorByPoint, [null]);
        ArrayHelper::set($output, "colorIndex", $this->colorIndex, [null]);
        ArrayHelper::set($output, "colors", $this->colors, [null]);
        ArrayHelper::set($output, "crisp", $this->crisp, [null]);
        ArrayHelper::set($output, "cursor", $this->cursor, [null]);
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
        ArrayHelper::set($output, "groupZPadding", $this->groupZPadding, [null]);
        ArrayHelper::set($output, "keys", $this->keys, [null]);
        ArrayHelper::set($output, "lineWidth", $this->lineWidth, [null]);
        ArrayHelper::set($output, "linkedTo", $this->linkedTo, [null]);
        ArrayHelper::set($output, "maxPointWidth", $this->maxPointWidth, [null]);
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
        ArrayHelper::set($output, "skipKeyboardNavigation", $this->skipKeyboardNavigation, [null]);
        if (null !== $this->states) {
            ArrayHelper::set($output, "states", $this->states->jsonSerialize());
        }
        ArrayHelper::set($output, "stemColor", $this->stemColor, [null]);
        ArrayHelper::set($output, "stemDashStyle", $this->stemDashStyle, [null]);
        ArrayHelper::set($output, "stemWidth", $this->stemWidth, [null]);
        ArrayHelper::set($output, "stickyTracking", $this->stickyTracking, [null]);
        ArrayHelper::set($output, "tooltip", $this->tooltip, [null]);
        ArrayHelper::set($output, "turboThreshold", $this->turboThreshold, [null]);
        ArrayHelper::set($output, "visible", $this->visible, [null]);
        ArrayHelper::set($output, "whiskerColor", $this->whiskerColor, [null]);
        ArrayHelper::set($output, "whiskerLength", $this->whiskerLength, [null]);
        ArrayHelper::set($output, "whiskerWidth", $this->whiskerWidth, [null]);
        ArrayHelper::set($output, "zoneAxis", $this->zoneAxis, [null]);
        ArrayHelper::set($output, "zones", $this->zones, [null]);

        return $output;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsEvents Returns the events.
     */
    public function newEvents(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsEvents {
        $this->events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new point.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint Returns the point.
     */
    public function newPoint(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint {
        $this->point = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint();
        return $this->point;
    }

    /**
     * Create a new states.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsStates Returns the states.
     */
    public function newStates(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsStates {
        $this->states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsStates();
        return $this->states;
    }

    /**
     * Set the allow point select.
     *
     * @param bool|null $allowPointSelect The allow point select.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setAllowPointSelect(?bool $allowPointSelect): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->allowPointSelect = $allowPointSelect;
        return $this;
    }

    /**
     * Set the animation limit.
     *
     * @param float|null $animationLimit The animation limit.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setAnimationLimit(?float $animationLimit): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->animationLimit = $animationLimit;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the color by point.
     *
     * @param bool|null $colorByPoint The color by point.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setColorByPoint(?bool $colorByPoint): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->colorByPoint = $colorByPoint;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param float|null $colorIndex The color index.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setColorIndex(?float $colorIndex): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the colors.
     *
     * @param mixed[]|null $colors The colors.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setColors(?array $colors): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->colors = $colors;
        return $this;
    }

    /**
     * Set the crisp.
     *
     * @param bool|null $crisp The crisp.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setCrisp(?bool $crisp): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->crisp = $crisp;
        return $this;
    }

    /**
     * Set the cursor.
     *
     * @param string|null $cursor The cursor.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setCursor(?string $cursor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {

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
     * Set the depth.
     *
     * @param float|null $depth The depth.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setDepth(?float $depth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->depth = $depth;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setDescription(?string $description): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the edge color.
     *
     * @param string|null $edgeColor The edge color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setEdgeColor(?string $edgeColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->edgeColor = $edgeColor;
        return $this;
    }

    /**
     * Set the edge width.
     *
     * @param float|null $edgeWidth The edge width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setEdgeWidth(?float $edgeWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->edgeWidth = $edgeWidth;
        return $this;
    }

    /**
     * Set the enable mouse tracking.
     *
     * @param bool|null $enableMouseTracking The enable mouse tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setEnableMouseTracking(?bool $enableMouseTracking): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->enableMouseTracking = $enableMouseTracking;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsEvents|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setEvents(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsEvents $events): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the expose element to a11y.
     *
     * @param bool|null $exposeElementToA11y The expose element to a11y.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setExposeElementToA11y(?bool $exposeElementToA11y): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->exposeElementToA11y = $exposeElementToA11y;
        return $this;
    }

    /**
     * Set the find nearest point by.
     *
     * @param string|null $findNearestPointBy The find nearest point by.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setFindNearestPointBy(?string $findNearestPointBy): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {

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
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setGetExtremesFromAll(?bool $getExtremesFromAll): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->getExtremesFromAll = $getExtremesFromAll;
        return $this;
    }

    /**
     * Set the group z padding.
     *
     * @param float|null $groupZPadding The group z padding.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setGroupZPadding(?float $groupZPadding): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->groupZPadding = $groupZPadding;
        return $this;
    }

    /**
     * Set the keys.
     *
     * @param mixed[]|null $keys The keys.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setKeys(?array $keys): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->keys = $keys;
        return $this;
    }

    /**
     * Set the line width.
     *
     * @param float|null $lineWidth The line width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setLineWidth(?float $lineWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->lineWidth = $lineWidth;
        return $this;
    }

    /**
     * Set the linked to.
     *
     * @param string|null $linkedTo The linked to.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setLinkedTo(?string $linkedTo): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->linkedTo = $linkedTo;
        return $this;
    }

    /**
     * Set the max point width.
     *
     * @param float|null $maxPointWidth The max point width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setMaxPointWidth(?float $maxPointWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->maxPointWidth = $maxPointWidth;
        return $this;
    }

    /**
     * Set the negative color.
     *
     * @param string|null $negativeColor The negative color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setNegativeColor(?string $negativeColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->negativeColor = $negativeColor;
        return $this;
    }

    /**
     * Set the point.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint|null $point The point.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setPoint(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsPoint $point): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->point = $point;
        return $this;
    }

    /**
     * Set the point description formatter.
     *
     * @param string|null $pointDescriptionFormatter The point description formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setPointDescriptionFormatter(?string $pointDescriptionFormatter): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->pointDescriptionFormatter = $pointDescriptionFormatter;
        return $this;
    }

    /**
     * Set the point interval.
     *
     * @param float|null $pointInterval The point interval.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setPointInterval(?float $pointInterval): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->pointInterval = $pointInterval;
        return $this;
    }

    /**
     * Set the point interval unit.
     *
     * @param string|null $pointIntervalUnit The point interval unit.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setPointIntervalUnit(?string $pointIntervalUnit): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {

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
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setPointPadding(?float $pointPadding): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->pointPadding = $pointPadding;
        return $this;
    }

    /**
     * Set the point placement.
     *
     * @param mixed $pointPlacement The point placement.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setPointPlacement($pointPlacement): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {

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
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setPointRange(?float $pointRange): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->pointRange = $pointRange;
        return $this;
    }

    /**
     * Set the point start.
     *
     * @param float|null $pointStart The point start.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setPointStart(?float $pointStart): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->pointStart = $pointStart;
        return $this;
    }

    /**
     * Set the point width.
     *
     * @param float|null $pointWidth The point width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setPointWidth(?float $pointWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->pointWidth = $pointWidth;
        return $this;
    }

    /**
     * Set the selected.
     *
     * @param bool|null $selected The selected.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setSelected(?bool $selected): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the skip keyboard navigation.
     *
     * @param bool|null $skipKeyboardNavigation The skip keyboard navigation.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setSkipKeyboardNavigation(?bool $skipKeyboardNavigation): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->skipKeyboardNavigation = $skipKeyboardNavigation;
        return $this;
    }

    /**
     * Set the states.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsStates|null $states The states.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setStates(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Errorbar\HighchartsStates $states): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->states = $states;
        return $this;
    }

    /**
     * Set the stem color.
     *
     * @param string|null $stemColor The stem color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setStemColor(?string $stemColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->stemColor = $stemColor;
        return $this;
    }

    /**
     * Set the stem dash style.
     *
     * @param string|null $stemDashStyle The stem dash style.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setStemDashStyle(?string $stemDashStyle): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {

        switch ($stemDashStyle) {

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
                $this->stemDashStyle = $stemDashStyle;
                break;
        }

        return $this;
    }

    /**
     * Set the stem width.
     *
     * @param float|null $stemWidth The stem width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setStemWidth(?float $stemWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->stemWidth = $stemWidth;
        return $this;
    }

    /**
     * Set the sticky tracking.
     *
     * @param bool|null $stickyTracking The sticky tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setStickyTracking(?bool $stickyTracking): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->stickyTracking = $stickyTracking;
        return $this;
    }

    /**
     * Set the tooltip.
     *
     * @param mixed[]|null $tooltip The tooltip.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setTooltip(?array $tooltip): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * Set the turbo threshold.
     *
     * @param float|null $turboThreshold The turbo threshold.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setTurboThreshold(?float $turboThreshold): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->turboThreshold = $turboThreshold;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param bool|null $visible The visible.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setVisible(?bool $visible): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Set the whisker color.
     *
     * @param string|null $whiskerColor The whisker color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setWhiskerColor(?string $whiskerColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->whiskerColor = $whiskerColor;
        return $this;
    }

    /**
     * Set the whisker length.
     *
     * @param mixed $whiskerLength The whisker length.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setWhiskerLength($whiskerLength): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->whiskerLength = $whiskerLength;
        return $this;
    }

    /**
     * Set the whisker width.
     *
     * @param float|null $whiskerWidth The whisker width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setWhiskerWidth(?float $whiskerWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->whiskerWidth = $whiskerWidth;
        return $this;
    }

    /**
     * Set the zone axis.
     *
     * @param string|null $zoneAxis The zone axis.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setZoneAxis(?string $zoneAxis): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->zoneAxis = $zoneAxis;
        return $this;
    }

    /**
     * Set the zones.
     *
     * @param mixed[]|null $zones The zones.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar Returns this highcharts errorbar.
     */
    public function setZones(?array $zones): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsErrorbar {
        $this->zones = $zones;
        return $this;
    }
}
