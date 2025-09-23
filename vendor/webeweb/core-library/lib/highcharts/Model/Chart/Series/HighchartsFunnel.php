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

namespace WBW\Library\Highcharts\Model\Chart\Series;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts funnel.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Series
 * @version 5.0.14
 */
class HighchartsFunnel implements JsonSerializable {

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
     * Border color.
     *
     * @var string|null
     */
    private $borderColor = "#ffffff";

    /**
     * Border width.
     *
     * @var float|null
     */
    private $borderWidth = 1;

    /**
     * Center.
     *
     * @var mixed[]|null
     * @since 3.0
     */
    private $center = ["50%", "50%"];

    /**
     * Class name.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $className;

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
     * Cursor.
     *
     * @var string|null
     */
    private $cursor;

    /**
     * Data.
     *
     * @var mixed[]|null
     */
    private $data;

    /**
     * Data labels.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsDataLabels|null
     */
    private $dataLabels;

    /**
     * Depth.
     *
     * @var float|null
     * @since 4.0
     */
    private $depth = 0;

    /**
     * Description.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $description;

    /**
     * Enable mouse tracking.
     *
     * @var bool|null
     */
    private $enableMouseTracking = true;

    /**
     * Events.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsEvents|null
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
     * Height.
     *
     * @var mixed|null
     * @since 3.0
     */
    private $height;

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
     * Keys.
     *
     * @var mixed[]|null
     * @since 4.1.6
     */
    private $keys;

    /**
     * Legend index.
     *
     * @var float|null
     */
    private $legendIndex;

    /**
     * Linked to.
     *
     * @var string|null
     * @since 3.0
     */
    private $linkedTo;

    /**
     * Min size.
     *
     * @var float|null
     * @since 3.0
     */
    private $minSize = 80;

    /**
     * Name.
     *
     * @var string|null
     */
    private $name;

    /**
     * Neck height.
     *
     * @var mixed|null
     */
    private $neckHeight = "25%";

    /**
     * Neck width.
     *
     * @var mixed|null
     * @since 3.0
     */
    private $neckWidth = "30%";

    /**
     * Point.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsPoint|null
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
     * Reversed.
     *
     * @var bool|null
     * @since 3.0.10
     */
    private $reversed = false;

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
     * Show in legend.
     *
     * @var bool|null
     */
    private $showInLegend = false;

    /**
     * Skip keyboard navigation.
     *
     * @var bool|null
     * @since 5.0.12
     */
    private $skipKeyboardNavigation;

    /**
     * Sliced offset.
     *
     * @var float|null
     */
    private $slicedOffset = 10;

    /**
     * States.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsStates|null
     */
    private $states;

    /**
     * Sticky tracking.
     *
     * @var bool|null
     */
    private $stickyTracking = false;

    /**
     * Tooltip.
     *
     * @var mixed[]|null
     * @since 2.3
     */
    private $tooltip;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Visible.
     *
     * @var bool|null
     */
    private $visible = true;

    /**
     * Width.
     *
     * @var mixed|null
     * @since 3.0
     */
    private $width = "90%";

    /**
     * Z index.
     *
     * @var float|null
     */
    private $zIndex;

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
     * Get the center.
     *
     * @return mixed[]|null Returns the center.
     */
    public function getCenter(): ?array {
        return $this->center;
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
     * Get the cursor.
     *
     * @return string|null Returns the cursor.
     */
    public function getCursor(): ?string {
        return $this->cursor;
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
     * Get the data labels.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsDataLabels|null Returns the data labels.
     */
    public function getDataLabels(): ?\WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsDataLabels {
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
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsEvents|null Returns the events.
     */
    public function getEvents(): ?\WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsEvents {
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
     * Get the height.
     *
     * @return mixed Returns the height.
     */
    public function getHeight() {
        return $this->height;
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
     * Get the keys.
     *
     * @return mixed[]|null Returns the keys.
     */
    public function getKeys(): ?array {
        return $this->keys;
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
     * Get the linked to.
     *
     * @return string|null Returns the linked to.
     */
    public function getLinkedTo(): ?string {
        return $this->linkedTo;
    }

    /**
     * Get the min size.
     *
     * @return float|null Returns the min size.
     */
    public function getMinSize(): ?float {
        return $this->minSize;
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
     * Get the neck height.
     *
     * @return mixed Returns the neck height.
     */
    public function getNeckHeight() {
        return $this->neckHeight;
    }

    /**
     * Get the neck width.
     *
     * @return mixed Returns the neck width.
     */
    public function getNeckWidth() {
        return $this->neckWidth;
    }

    /**
     * Get the point.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsPoint|null Returns the point.
     */
    public function getPoint(): ?\WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsPoint {
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
     * Get the reversed.
     *
     * @return bool|null Returns the reversed.
     */
    public function getReversed(): ?bool {
        return $this->reversed;
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
     * Get the sliced offset.
     *
     * @return float|null Returns the sliced offset.
     */
    public function getSlicedOffset(): ?float {
        return $this->slicedOffset;
    }

    /**
     * Get the states.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsStates|null Returns the states.
     */
    public function getStates(): ?\WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsStates {
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
     * Get the tooltip.
     *
     * @return mixed[]|null Returns the tooltip.
     */
    public function getTooltip(): ?array {
        return $this->tooltip;
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
     * Get the visible.
     *
     * @return bool|null Returns the visible.
     */
    public function getVisible(): ?bool {
        return $this->visible;
    }

    /**
     * Get the width.
     *
     * @return mixed Returns the width.
     */
    public function getWidth() {
        return $this->width;
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
        ArrayHelper::set($output, "borderColor", $this->borderColor, [null]);
        ArrayHelper::set($output, "borderWidth", $this->borderWidth, [null]);
        ArrayHelper::set($output, "center", $this->center, [null]);
        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "colorIndex", $this->colorIndex, [null]);
        ArrayHelper::set($output, "colors", $this->colors, [null]);
        ArrayHelper::set($output, "cursor", $this->cursor, [null]);
        ArrayHelper::set($output, "data", $this->data, [null]);
        if (null !== $this->dataLabels) {
            ArrayHelper::set($output, "dataLabels", $this->dataLabels->jsonSerialize());
        }
        ArrayHelper::set($output, "depth", $this->depth, [null]);
        ArrayHelper::set($output, "description", $this->description, [null]);
        ArrayHelper::set($output, "enableMouseTracking", $this->enableMouseTracking, [null]);
        if (null !== $this->events) {
            ArrayHelper::set($output, "events", $this->events->jsonSerialize());
        }
        ArrayHelper::set($output, "exposeElementToA11y", $this->exposeElementToA11y, [null]);
        ArrayHelper::set($output, "findNearestPointBy", $this->findNearestPointBy, [null]);
        ArrayHelper::set($output, "getExtremesFromAll", $this->getExtremesFromAll, [null]);
        ArrayHelper::set($output, "height", $this->height, [null]);
        ArrayHelper::set($output, "id", $this->id, [null]);
        ArrayHelper::set($output, "index", $this->index, [null]);
        ArrayHelper::set($output, "keys", $this->keys, [null]);
        ArrayHelper::set($output, "legendIndex", $this->legendIndex, [null]);
        ArrayHelper::set($output, "linkedTo", $this->linkedTo, [null]);
        ArrayHelper::set($output, "minSize", $this->minSize, [null]);
        ArrayHelper::set($output, "name", $this->name, [null]);
        ArrayHelper::set($output, "neckHeight", $this->neckHeight, [null]);
        ArrayHelper::set($output, "neckWidth", $this->neckWidth, [null]);
        if (null !== $this->point) {
            ArrayHelper::set($output, "point", $this->point->jsonSerialize());
        }
        ArrayHelper::set($output, "pointDescriptionFormatter", $this->pointDescriptionFormatter, [null]);
        ArrayHelper::set($output, "reversed", $this->reversed, [null]);
        ArrayHelper::set($output, "selected", $this->selected, [null]);
        ArrayHelper::set($output, "shadow", $this->shadow, [null]);
        ArrayHelper::set($output, "showInLegend", $this->showInLegend, [null]);
        ArrayHelper::set($output, "skipKeyboardNavigation", $this->skipKeyboardNavigation, [null]);
        ArrayHelper::set($output, "slicedOffset", $this->slicedOffset, [null]);
        if (null !== $this->states) {
            ArrayHelper::set($output, "states", $this->states->jsonSerialize());
        }
        ArrayHelper::set($output, "stickyTracking", $this->stickyTracking, [null]);
        ArrayHelper::set($output, "tooltip", $this->tooltip, [null]);
        ArrayHelper::set($output, "type", $this->type, [null]);
        ArrayHelper::set($output, "visible", $this->visible, [null]);
        ArrayHelper::set($output, "width", $this->width, [null]);
        ArrayHelper::set($output, "zIndex", $this->zIndex, [null]);
        ArrayHelper::set($output, "zoneAxis", $this->zoneAxis, [null]);
        ArrayHelper::set($output, "zones", $this->zones, [null]);

        return $output;
    }

    /**
     * Create a new data labels.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsDataLabels Returns the data labels.
     */
    public function newDataLabels(): \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsDataLabels {
        $this->dataLabels = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsDataLabels();
        return $this->dataLabels;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsEvents Returns the events.
     */
    public function newEvents(): \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsEvents {
        $this->events = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new point.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsPoint Returns the point.
     */
    public function newPoint(): \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsPoint {
        $this->point = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsPoint();
        return $this->point;
    }

    /**
     * Create a new states.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsStates Returns the states.
     */
    public function newStates(): \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsStates {
        $this->states = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsStates();
        return $this->states;
    }

    /**
     * Set the allow point select.
     *
     * @param bool|null $allowPointSelect The allow point select.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setAllowPointSelect(?bool $allowPointSelect): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->allowPointSelect = $allowPointSelect;
        return $this;
    }

    /**
     * Set the animation limit.
     *
     * @param float|null $animationLimit The animation limit.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setAnimationLimit(?float $animationLimit): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->animationLimit = $animationLimit;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setBorderColor(?string $borderColor): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param float|null $borderWidth The border width.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setBorderWidth(?float $borderWidth): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the center.
     *
     * @param mixed[]|null $center The center.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setCenter(?array $center): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->center = $center;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param float|null $colorIndex The color index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setColorIndex(?float $colorIndex): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the colors.
     *
     * @param mixed[]|null $colors The colors.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setColors(?array $colors): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->colors = $colors;
        return $this;
    }

    /**
     * Set the cursor.
     *
     * @param string|null $cursor The cursor.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setCursor(?string $cursor): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {

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
     * Set the data.
     *
     * @param mixed[]|null $data The data.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setData(?array $data): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->data = $data;
        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsDataLabels|null $dataLabels The data labels.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setDataLabels(?\WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsDataLabels $dataLabels): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the depth.
     *
     * @param float|null $depth The depth.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setDepth(?float $depth): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->depth = $depth;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setDescription(?string $description): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the enable mouse tracking.
     *
     * @param bool|null $enableMouseTracking The enable mouse tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setEnableMouseTracking(?bool $enableMouseTracking): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->enableMouseTracking = $enableMouseTracking;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsEvents|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setEvents(?\WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsEvents $events): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the expose element to a11y.
     *
     * @param bool|null $exposeElementToA11y The expose element to a11y.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setExposeElementToA11y(?bool $exposeElementToA11y): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->exposeElementToA11y = $exposeElementToA11y;
        return $this;
    }

    /**
     * Set the find nearest point by.
     *
     * @param string|null $findNearestPointBy The find nearest point by.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setFindNearestPointBy(?string $findNearestPointBy): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {

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
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setGetExtremesFromAll(?bool $getExtremesFromAll): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->getExtremesFromAll = $getExtremesFromAll;
        return $this;
    }

    /**
     * Set the height.
     *
     * @param mixed $height The height.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setHeight($height): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->height = $height;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setId(?string $id): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the index.
     *
     * @param float|null $index The index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setIndex(?float $index): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->index = $index;
        return $this;
    }

    /**
     * Set the keys.
     *
     * @param mixed[]|null $keys The keys.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setKeys(?array $keys): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->keys = $keys;
        return $this;
    }

    /**
     * Set the legend index.
     *
     * @param float|null $legendIndex The legend index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setLegendIndex(?float $legendIndex): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->legendIndex = $legendIndex;
        return $this;
    }

    /**
     * Set the linked to.
     *
     * @param string|null $linkedTo The linked to.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setLinkedTo(?string $linkedTo): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->linkedTo = $linkedTo;
        return $this;
    }

    /**
     * Set the min size.
     *
     * @param float|null $minSize The min size.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setMinSize(?float $minSize): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->minSize = $minSize;
        return $this;
    }

    /**
     * Set the name.
     *
     * @param string|null $name The name.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setName(?string $name): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the neck height.
     *
     * @param mixed $neckHeight The neck height.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setNeckHeight($neckHeight): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->neckHeight = $neckHeight;
        return $this;
    }

    /**
     * Set the neck width.
     *
     * @param mixed $neckWidth The neck width.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setNeckWidth($neckWidth): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->neckWidth = $neckWidth;
        return $this;
    }

    /**
     * Set the point.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsPoint|null $point The point.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setPoint(?\WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsPoint $point): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->point = $point;
        return $this;
    }

    /**
     * Set the point description formatter.
     *
     * @param string|null $pointDescriptionFormatter The point description formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setPointDescriptionFormatter(?string $pointDescriptionFormatter): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->pointDescriptionFormatter = $pointDescriptionFormatter;
        return $this;
    }

    /**
     * Set the reversed.
     *
     * @param bool|null $reversed The reversed.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setReversed(?bool $reversed): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->reversed = $reversed;
        return $this;
    }

    /**
     * Set the selected.
     *
     * @param bool|null $selected The selected.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setSelected(?bool $selected): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the shadow.
     *
     * @param mixed $shadow The shadow.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setShadow($shadow): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * Set the show in legend.
     *
     * @param bool|null $showInLegend The show in legend.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setShowInLegend(?bool $showInLegend): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->showInLegend = $showInLegend;
        return $this;
    }

    /**
     * Set the skip keyboard navigation.
     *
     * @param bool|null $skipKeyboardNavigation The skip keyboard navigation.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setSkipKeyboardNavigation(?bool $skipKeyboardNavigation): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->skipKeyboardNavigation = $skipKeyboardNavigation;
        return $this;
    }

    /**
     * Set the sliced offset.
     *
     * @param float|null $slicedOffset The sliced offset.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setSlicedOffset(?float $slicedOffset): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->slicedOffset = $slicedOffset;
        return $this;
    }

    /**
     * Set the states.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsStates|null $states The states.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setStates(?\WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsStates $states): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->states = $states;
        return $this;
    }

    /**
     * Set the sticky tracking.
     *
     * @param bool|null $stickyTracking The sticky tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setStickyTracking(?bool $stickyTracking): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->stickyTracking = $stickyTracking;
        return $this;
    }

    /**
     * Set the tooltip.
     *
     * @param mixed[]|null $tooltip The tooltip.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setTooltip(?array $tooltip): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setType(?string $type): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {

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
     * Set the visible.
     *
     * @param bool|null $visible The visible.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setVisible(?bool $visible): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Set the width.
     *
     * @param mixed $width The width.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setWidth($width): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->width = $width;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param float|null $zIndex The z index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setZIndex(?float $zIndex): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->zIndex = $zIndex;
        return $this;
    }

    /**
     * Set the zone axis.
     *
     * @param string|null $zoneAxis The zone axis.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setZoneAxis(?string $zoneAxis): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->zoneAxis = $zoneAxis;
        return $this;
    }

    /**
     * Set the zones.
     *
     * @param mixed[]|null $zones The zones.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel Returns this highcharts funnel.
     */
    public function setZones(?array $zones): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsFunnel {
        $this->zones = $zones;
        return $this;
    }
}
