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
 * Highcharts areasplinerange.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Series
 * @version 5.0.14
 */
class HighchartsAreasplinerange implements JsonSerializable {

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
     * Color index.
     *
     * @var float|null
     * @since 5.0.0
     */
    private $colorIndex;

    /**
     * Connect nulls.
     *
     * @var bool|null
     */
    private $connectNulls = false;

    /**
     * Crop threshold.
     *
     * @var float|null
     * @since 2.2
     */
    private $cropThreshold = 300;

    /**
     * Cursor.
     *
     * @var string|null
     */
    private $cursor;

    /**
     * Dash style.
     *
     * @var string|null
     * @since 2.1
     */
    private $dashStyle = "Solid";

    /**
     * Data.
     *
     * @var mixed[]|null
     */
    private $data;

    /**
     * Data labels.
     *
     * @var mixed[]|null
     * @since 2.3.0
     */
    private $dataLabels;

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
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsEvents|null
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
     * Fill color.
     *
     * @var string|null
     */
    private $fillColor;

    /**
     * Fill opacity.
     *
     * @var float|null
     */
    private $fillOpacity = 0.75;

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
     * Line color.
     *
     * @var string|null
     */
    private $lineColor;

    /**
     * Line width.
     *
     * @var float|null
     * @since 2.3.0
     */
    private $lineWidth = 1;

    /**
     * Linecap.
     *
     * @var string|null
     */
    private $linecap = "round";

    /**
     * Linked to.
     *
     * @var string|null
     * @since 3.0
     */
    private $linkedTo;

    /**
     * Name.
     *
     * @var string|null
     */
    private $name;

    /**
     * Negative color.
     *
     * @var string|null
     * @since 3.0
     */
    private $negativeColor;

    /**
     * Negative fill color.
     *
     * @var string|null
     * @since 3.0
     */
    private $negativeFillColor;

    /**
     * Point.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsPoint|null
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
     * Point placement.
     *
     * @var mixed|null
     * @since 2.3.0
     */
    private $pointPlacement;

    /**
     * Point start.
     *
     * @var float|null
     */
    private $pointStart = 0;

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
     * States.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsStates|null
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
     * Tooltip.
     *
     * @var mixed[]|null
     * @since 2.3
     */
    private $tooltip;

    /**
     * Track by area.
     *
     * @var bool|null
     * @since 2.3.0
     */
    private $trackByArea = true;

    /**
     * Turbo threshold.
     *
     * @var float|null
     * @since 2.2
     */
    private $turboThreshold = 1000;

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
     * Get the color index.
     *
     * @return float|null Returns the color index.
     */
    public function getColorIndex(): ?float {
        return $this->colorIndex;
    }

    /**
     * Get the connect nulls.
     *
     * @return bool|null Returns the connect nulls.
     */
    public function getConnectNulls(): ?bool {
        return $this->connectNulls;
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
     * Get the dash style.
     *
     * @return string|null Returns the dash style.
     */
    public function getDashStyle(): ?string {
        return $this->dashStyle;
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
     * @return mixed[]|null Returns the data labels.
     */
    public function getDataLabels(): ?array {
        return $this->dataLabels;
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
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsEvents|null Returns the events.
     */
    public function getEvents(): ?\WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsEvents {
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
     * Get the fill color.
     *
     * @return string|null Returns the fill color.
     */
    public function getFillColor(): ?string {
        return $this->fillColor;
    }

    /**
     * Get the fill opacity.
     *
     * @return float|null Returns the fill opacity.
     */
    public function getFillOpacity(): ?float {
        return $this->fillOpacity;
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
     * Get the linecap.
     *
     * @return string|null Returns the linecap.
     */
    public function getLinecap(): ?string {
        return $this->linecap;
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
     * Get the name.
     *
     * @return string|null Returns the name.
     */
    public function getName(): ?string {
        return $this->name;
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
     * Get the negative fill color.
     *
     * @return string|null Returns the negative fill color.
     */
    public function getNegativeFillColor(): ?string {
        return $this->negativeFillColor;
    }

    /**
     * Get the point.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsPoint|null Returns the point.
     */
    public function getPoint(): ?\WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsPoint {
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
     * Get the point placement.
     *
     * @return mixed Returns the point placement.
     */
    public function getPointPlacement() {
        return $this->pointPlacement;
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
     * Get the states.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsStates|null Returns the states.
     */
    public function getStates(): ?\WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsStates {
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
     * Get the track by area.
     *
     * @return bool|null Returns the track by area.
     */
    public function getTrackByArea(): ?bool {
        return $this->trackByArea;
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
        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "color", $this->color, [null]);
        ArrayHelper::set($output, "colorIndex", $this->colorIndex, [null]);
        ArrayHelper::set($output, "connectNulls", $this->connectNulls, [null]);
        ArrayHelper::set($output, "cropThreshold", $this->cropThreshold, [null]);
        ArrayHelper::set($output, "cursor", $this->cursor, [null]);
        ArrayHelper::set($output, "dashStyle", $this->dashStyle, [null]);
        ArrayHelper::set($output, "data", $this->data, [null]);
        ArrayHelper::set($output, "dataLabels", $this->dataLabels, [null]);
        ArrayHelper::set($output, "description", $this->description, [null]);
        ArrayHelper::set($output, "enableMouseTracking", $this->enableMouseTracking, [null]);
        if (null !== $this->events) {
            ArrayHelper::set($output, "events", $this->events->jsonSerialize());
        }
        ArrayHelper::set($output, "exposeElementToA11y", $this->exposeElementToA11y, [null]);
        ArrayHelper::set($output, "fillColor", $this->fillColor, [null]);
        ArrayHelper::set($output, "fillOpacity", $this->fillOpacity, [null]);
        ArrayHelper::set($output, "findNearestPointBy", $this->findNearestPointBy, [null]);
        ArrayHelper::set($output, "getExtremesFromAll", $this->getExtremesFromAll, [null]);
        ArrayHelper::set($output, "id", $this->id, [null]);
        ArrayHelper::set($output, "index", $this->index, [null]);
        ArrayHelper::set($output, "keys", $this->keys, [null]);
        ArrayHelper::set($output, "legendIndex", $this->legendIndex, [null]);
        ArrayHelper::set($output, "lineColor", $this->lineColor, [null]);
        ArrayHelper::set($output, "lineWidth", $this->lineWidth, [null]);
        ArrayHelper::set($output, "linecap", $this->linecap, [null]);
        ArrayHelper::set($output, "linkedTo", $this->linkedTo, [null]);
        ArrayHelper::set($output, "name", $this->name, [null]);
        ArrayHelper::set($output, "negativeColor", $this->negativeColor, [null]);
        ArrayHelper::set($output, "negativeFillColor", $this->negativeFillColor, [null]);
        if (null !== $this->point) {
            ArrayHelper::set($output, "point", $this->point->jsonSerialize());
        }
        ArrayHelper::set($output, "pointDescriptionFormatter", $this->pointDescriptionFormatter, [null]);
        ArrayHelper::set($output, "pointInterval", $this->pointInterval, [null]);
        ArrayHelper::set($output, "pointIntervalUnit", $this->pointIntervalUnit, [null]);
        ArrayHelper::set($output, "pointPlacement", $this->pointPlacement, [null]);
        ArrayHelper::set($output, "pointStart", $this->pointStart, [null]);
        ArrayHelper::set($output, "selected", $this->selected, [null]);
        ArrayHelper::set($output, "shadow", $this->shadow, [null]);
        ArrayHelper::set($output, "showCheckbox", $this->showCheckbox, [null]);
        ArrayHelper::set($output, "showInLegend", $this->showInLegend, [null]);
        ArrayHelper::set($output, "skipKeyboardNavigation", $this->skipKeyboardNavigation, [null]);
        if (null !== $this->states) {
            ArrayHelper::set($output, "states", $this->states->jsonSerialize());
        }
        ArrayHelper::set($output, "stickyTracking", $this->stickyTracking, [null]);
        ArrayHelper::set($output, "tooltip", $this->tooltip, [null]);
        ArrayHelper::set($output, "trackByArea", $this->trackByArea, [null]);
        ArrayHelper::set($output, "turboThreshold", $this->turboThreshold, [null]);
        ArrayHelper::set($output, "type", $this->type, [null]);
        ArrayHelper::set($output, "visible", $this->visible, [null]);
        ArrayHelper::set($output, "xAxis", $this->xAxis, [null]);
        ArrayHelper::set($output, "yAxis", $this->yAxis, [null]);
        ArrayHelper::set($output, "zIndex", $this->zIndex, [null]);
        ArrayHelper::set($output, "zoneAxis", $this->zoneAxis, [null]);
        ArrayHelper::set($output, "zones", $this->zones, [null]);

        return $output;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsEvents Returns the events.
     */
    public function newEvents(): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsEvents {
        $this->events = new \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new point.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsPoint Returns the point.
     */
    public function newPoint(): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsPoint {
        $this->point = new \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsPoint();
        return $this->point;
    }

    /**
     * Create a new states.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsStates Returns the states.
     */
    public function newStates(): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsStates {
        $this->states = new \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsStates();
        return $this->states;
    }

    /**
     * Set the allow point select.
     *
     * @param bool|null $allowPointSelect The allow point select.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setAllowPointSelect(?bool $allowPointSelect): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->allowPointSelect = $allowPointSelect;
        return $this;
    }

    /**
     * Set the animation.
     *
     * @param bool|null $animation The animation.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setAnimation(?bool $animation): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the animation limit.
     *
     * @param float|null $animationLimit The animation limit.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setAnimationLimit(?float $animationLimit): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->animationLimit = $animationLimit;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param float|null $colorIndex The color index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setColorIndex(?float $colorIndex): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the connect nulls.
     *
     * @param bool|null $connectNulls The connect nulls.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setConnectNulls(?bool $connectNulls): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->connectNulls = $connectNulls;
        return $this;
    }

    /**
     * Set the crop threshold.
     *
     * @param float|null $cropThreshold The crop threshold.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setCropThreshold(?float $cropThreshold): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->cropThreshold = $cropThreshold;
        return $this;
    }

    /**
     * Set the cursor.
     *
     * @param string|null $cursor The cursor.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setCursor(?string $cursor): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {

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
     * Set the dash style.
     *
     * @param string|null $dashStyle The dash style.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setDashStyle(?string $dashStyle): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {

        switch ($dashStyle) {

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
                $this->dashStyle = $dashStyle;
                break;
        }

        return $this;
    }

    /**
     * Set the data.
     *
     * @param mixed[]|null $data The data.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setData(?array $data): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->data = $data;
        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param mixed[]|null $dataLabels The data labels.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setDataLabels(?array $dataLabels): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setDescription(?string $description): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the enable mouse tracking.
     *
     * @param bool|null $enableMouseTracking The enable mouse tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setEnableMouseTracking(?bool $enableMouseTracking): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->enableMouseTracking = $enableMouseTracking;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsEvents|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setEvents(?\WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsEvents $events): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the expose element to a11y.
     *
     * @param bool|null $exposeElementToA11y The expose element to a11y.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setExposeElementToA11y(?bool $exposeElementToA11y): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->exposeElementToA11y = $exposeElementToA11y;
        return $this;
    }

    /**
     * Set the fill color.
     *
     * @param string|null $fillColor The fill color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setFillColor(?string $fillColor): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->fillColor = $fillColor;
        return $this;
    }

    /**
     * Set the fill opacity.
     *
     * @param float|null $fillOpacity The fill opacity.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setFillOpacity(?float $fillOpacity): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->fillOpacity = $fillOpacity;
        return $this;
    }

    /**
     * Set the find nearest point by.
     *
     * @param string|null $findNearestPointBy The find nearest point by.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setFindNearestPointBy(?string $findNearestPointBy): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {

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
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setGetExtremesFromAll(?bool $getExtremesFromAll): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->getExtremesFromAll = $getExtremesFromAll;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setId(?string $id): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the index.
     *
     * @param float|null $index The index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setIndex(?float $index): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->index = $index;
        return $this;
    }

    /**
     * Set the keys.
     *
     * @param mixed[]|null $keys The keys.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setKeys(?array $keys): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->keys = $keys;
        return $this;
    }

    /**
     * Set the legend index.
     *
     * @param float|null $legendIndex The legend index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setLegendIndex(?float $legendIndex): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->legendIndex = $legendIndex;
        return $this;
    }

    /**
     * Set the line color.
     *
     * @param string|null $lineColor The line color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setLineColor(?string $lineColor): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->lineColor = $lineColor;
        return $this;
    }

    /**
     * Set the line width.
     *
     * @param float|null $lineWidth The line width.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setLineWidth(?float $lineWidth): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->lineWidth = $lineWidth;
        return $this;
    }

    /**
     * Set the linecap.
     *
     * @param string|null $linecap The linecap.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setLinecap(?string $linecap): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {

        switch ($linecap) {

            case "round":
            case "square":
                $this->linecap = $linecap;
                break;
        }

        return $this;
    }

    /**
     * Set the linked to.
     *
     * @param string|null $linkedTo The linked to.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setLinkedTo(?string $linkedTo): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->linkedTo = $linkedTo;
        return $this;
    }

    /**
     * Set the name.
     *
     * @param string|null $name The name.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setName(?string $name): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the negative color.
     *
     * @param string|null $negativeColor The negative color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setNegativeColor(?string $negativeColor): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->negativeColor = $negativeColor;
        return $this;
    }

    /**
     * Set the negative fill color.
     *
     * @param string|null $negativeFillColor The negative fill color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setNegativeFillColor(?string $negativeFillColor): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->negativeFillColor = $negativeFillColor;
        return $this;
    }

    /**
     * Set the point.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsPoint|null $point The point.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setPoint(?\WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsPoint $point): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->point = $point;
        return $this;
    }

    /**
     * Set the point description formatter.
     *
     * @param string|null $pointDescriptionFormatter The point description formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setPointDescriptionFormatter(?string $pointDescriptionFormatter): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->pointDescriptionFormatter = $pointDescriptionFormatter;
        return $this;
    }

    /**
     * Set the point interval.
     *
     * @param float|null $pointInterval The point interval.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setPointInterval(?float $pointInterval): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->pointInterval = $pointInterval;
        return $this;
    }

    /**
     * Set the point interval unit.
     *
     * @param string|null $pointIntervalUnit The point interval unit.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setPointIntervalUnit(?string $pointIntervalUnit): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {

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
     * Set the point placement.
     *
     * @param mixed $pointPlacement The point placement.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setPointPlacement($pointPlacement): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {

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
     * Set the point start.
     *
     * @param float|null $pointStart The point start.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setPointStart(?float $pointStart): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->pointStart = $pointStart;
        return $this;
    }

    /**
     * Set the selected.
     *
     * @param bool|null $selected The selected.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setSelected(?bool $selected): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the shadow.
     *
     * @param mixed $shadow The shadow.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setShadow($shadow): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * Set the show checkbox.
     *
     * @param bool|null $showCheckbox The show checkbox.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setShowCheckbox(?bool $showCheckbox): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->showCheckbox = $showCheckbox;
        return $this;
    }

    /**
     * Set the show in legend.
     *
     * @param bool|null $showInLegend The show in legend.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setShowInLegend(?bool $showInLegend): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->showInLegend = $showInLegend;
        return $this;
    }

    /**
     * Set the skip keyboard navigation.
     *
     * @param bool|null $skipKeyboardNavigation The skip keyboard navigation.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setSkipKeyboardNavigation(?bool $skipKeyboardNavigation): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->skipKeyboardNavigation = $skipKeyboardNavigation;
        return $this;
    }

    /**
     * Set the states.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsStates|null $states The states.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setStates(?\WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsStates $states): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->states = $states;
        return $this;
    }

    /**
     * Set the sticky tracking.
     *
     * @param bool|null $stickyTracking The sticky tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setStickyTracking(?bool $stickyTracking): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->stickyTracking = $stickyTracking;
        return $this;
    }

    /**
     * Set the tooltip.
     *
     * @param mixed[]|null $tooltip The tooltip.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setTooltip(?array $tooltip): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * Set the track by area.
     *
     * @param bool|null $trackByArea The track by area.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setTrackByArea(?bool $trackByArea): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->trackByArea = $trackByArea;
        return $this;
    }

    /**
     * Set the turbo threshold.
     *
     * @param float|null $turboThreshold The turbo threshold.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setTurboThreshold(?float $turboThreshold): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->turboThreshold = $turboThreshold;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setType(?string $type): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {

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
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setVisible(?bool $visible): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Set the x axis.
     *
     * @param mixed $xAxis The x axis.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setXAxis($xAxis): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->xAxis = $xAxis;
        return $this;
    }

    /**
     * Set the y axis.
     *
     * @param mixed $yAxis The y axis.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setYAxis($yAxis): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->yAxis = $yAxis;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param float|null $zIndex The z index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setZIndex(?float $zIndex): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->zIndex = $zIndex;
        return $this;
    }

    /**
     * Set the zone axis.
     *
     * @param string|null $zoneAxis The zone axis.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setZoneAxis(?string $zoneAxis): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->zoneAxis = $zoneAxis;
        return $this;
    }

    /**
     * Set the zones.
     *
     * @param mixed[]|null $zones The zones.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange Returns this highcharts areasplinerange.
     */
    public function setZones(?array $zones): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsAreasplinerange {
        $this->zones = $zones;
        return $this;
    }
}
