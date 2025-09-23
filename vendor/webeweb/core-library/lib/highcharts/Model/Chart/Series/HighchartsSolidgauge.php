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
 * Highcharts solidgauge.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Series
 * @version 5.0.14
 */
class HighchartsSolidgauge implements JsonSerializable {

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
     * Color index.
     *
     * @var float|null
     * @since 5.0.0
     */
    private $colorIndex;

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
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsEvents|null
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
     * Linecap.
     *
     * @var string|null
     * @since 4.2.2
     */
    private $linecap = "round";

    /**
     * Name.
     *
     * @var string|null
     */
    private $name;

    /**
     * Overshoot.
     *
     * @var float|null
     * @since 3.0.10
     */
    private $overshoot = 0;

    /**
     * Point.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint|null
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
     * Rounded.
     *
     * @var bool|null
     * @since 5.0.11
     */
    private $rounded = false;

    /**
     * Selected.
     *
     * @var bool|null
     * @since 1.2.0
     */
    private $selected = false;

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
     * @since 2.3.0
     */
    private $showInLegend;

    /**
     * Skip keyboard navigation.
     *
     * @var bool|null
     * @since 5.0.12
     */
    private $skipKeyboardNavigation;

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
     * @since 5.0.3
     */
    private $threshold;

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
     * Wrap.
     *
     * @var bool|null
     * @since 3.0
     */
    private $wrap = true;

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
     * Get the color index.
     *
     * @return float|null Returns the color index.
     */
    public function getColorIndex(): ?float {
        return $this->colorIndex;
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
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsEvents|null Returns the events.
     */
    public function getEvents(): ?\WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsEvents {
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
     * Get the linecap.
     *
     * @return string|null Returns the linecap.
     */
    public function getLinecap(): ?string {
        return $this->linecap;
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
     * Get the overshoot.
     *
     * @return float|null Returns the overshoot.
     */
    public function getOvershoot(): ?float {
        return $this->overshoot;
    }

    /**
     * Get the point.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint|null Returns the point.
     */
    public function getPoint(): ?\WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint {
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
     * Get the rounded.
     *
     * @return bool|null Returns the rounded.
     */
    public function getRounded(): ?bool {
        return $this->rounded;
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
     * Get the wrap.
     *
     * @return bool|null Returns the wrap.
     */
    public function getWrap(): ?bool {
        return $this->wrap;
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

        ArrayHelper::set($output, "animation", $this->animation, [null]);
        ArrayHelper::set($output, "animationLimit", $this->animationLimit, [null]);
        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "colorIndex", $this->colorIndex, [null]);
        ArrayHelper::set($output, "cursor", $this->cursor, [null]);
        ArrayHelper::set($output, "data", $this->data, [null]);
        ArrayHelper::set($output, "dataLabels", $this->dataLabels, [null]);
        ArrayHelper::set($output, "description", $this->description, [null]);
        ArrayHelper::set($output, "enableMouseTracking", $this->enableMouseTracking, [null]);
        if (null !== $this->events) {
            ArrayHelper::set($output, "events", $this->events->jsonSerialize());
        }
        ArrayHelper::set($output, "exposeElementToA11y", $this->exposeElementToA11y, [null]);
        ArrayHelper::set($output, "findNearestPointBy", $this->findNearestPointBy, [null]);
        ArrayHelper::set($output, "getExtremesFromAll", $this->getExtremesFromAll, [null]);
        ArrayHelper::set($output, "id", $this->id, [null]);
        ArrayHelper::set($output, "index", $this->index, [null]);
        ArrayHelper::set($output, "keys", $this->keys, [null]);
        ArrayHelper::set($output, "legendIndex", $this->legendIndex, [null]);
        ArrayHelper::set($output, "linecap", $this->linecap, [null]);
        ArrayHelper::set($output, "name", $this->name, [null]);
        ArrayHelper::set($output, "overshoot", $this->overshoot, [null]);
        if (null !== $this->point) {
            ArrayHelper::set($output, "point", $this->point->jsonSerialize());
        }
        ArrayHelper::set($output, "pointDescriptionFormatter", $this->pointDescriptionFormatter, [null]);
        ArrayHelper::set($output, "rounded", $this->rounded, [null]);
        ArrayHelper::set($output, "selected", $this->selected, [null]);
        ArrayHelper::set($output, "showCheckbox", $this->showCheckbox, [null]);
        ArrayHelper::set($output, "showInLegend", $this->showInLegend, [null]);
        ArrayHelper::set($output, "skipKeyboardNavigation", $this->skipKeyboardNavigation, [null]);
        ArrayHelper::set($output, "stickyTracking", $this->stickyTracking, [null]);
        ArrayHelper::set($output, "threshold", $this->threshold, [null]);
        ArrayHelper::set($output, "tooltip", $this->tooltip, [null]);
        ArrayHelper::set($output, "type", $this->type, [null]);
        ArrayHelper::set($output, "visible", $this->visible, [null]);
        ArrayHelper::set($output, "wrap", $this->wrap, [null]);
        ArrayHelper::set($output, "xAxis", $this->xAxis, [null]);
        ArrayHelper::set($output, "yAxis", $this->yAxis, [null]);
        ArrayHelper::set($output, "zIndex", $this->zIndex, [null]);

        return $output;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsEvents Returns the events.
     */
    public function newEvents(): \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsEvents {
        $this->events = new \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new point.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint Returns the point.
     */
    public function newPoint(): \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint {
        $this->point = new \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint();
        return $this->point;
    }

    /**
     * Set the animation.
     *
     * @param bool|null $animation The animation.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setAnimation(?bool $animation): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the animation limit.
     *
     * @param float|null $animationLimit The animation limit.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setAnimationLimit(?float $animationLimit): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->animationLimit = $animationLimit;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param float|null $colorIndex The color index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setColorIndex(?float $colorIndex): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the cursor.
     *
     * @param string|null $cursor The cursor.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setCursor(?string $cursor): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {

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
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setData(?array $data): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->data = $data;
        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param mixed[]|null $dataLabels The data labels.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setDataLabels(?array $dataLabels): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setDescription(?string $description): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the enable mouse tracking.
     *
     * @param bool|null $enableMouseTracking The enable mouse tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setEnableMouseTracking(?bool $enableMouseTracking): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->enableMouseTracking = $enableMouseTracking;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsEvents|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setEvents(?\WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsEvents $events): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the expose element to a11y.
     *
     * @param bool|null $exposeElementToA11y The expose element to a11y.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setExposeElementToA11y(?bool $exposeElementToA11y): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->exposeElementToA11y = $exposeElementToA11y;
        return $this;
    }

    /**
     * Set the find nearest point by.
     *
     * @param string|null $findNearestPointBy The find nearest point by.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setFindNearestPointBy(?string $findNearestPointBy): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {

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
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setGetExtremesFromAll(?bool $getExtremesFromAll): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->getExtremesFromAll = $getExtremesFromAll;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setId(?string $id): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the index.
     *
     * @param float|null $index The index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setIndex(?float $index): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->index = $index;
        return $this;
    }

    /**
     * Set the keys.
     *
     * @param mixed[]|null $keys The keys.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setKeys(?array $keys): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->keys = $keys;
        return $this;
    }

    /**
     * Set the legend index.
     *
     * @param float|null $legendIndex The legend index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setLegendIndex(?float $legendIndex): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->legendIndex = $legendIndex;
        return $this;
    }

    /**
     * Set the linecap.
     *
     * @param string|null $linecap The linecap.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setLinecap(?string $linecap): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {

        switch ($linecap) {

            case "round":
            case "square":
                $this->linecap = $linecap;
                break;
        }

        return $this;
    }

    /**
     * Set the name.
     *
     * @param string|null $name The name.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setName(?string $name): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the overshoot.
     *
     * @param float|null $overshoot The overshoot.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setOvershoot(?float $overshoot): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->overshoot = $overshoot;
        return $this;
    }

    /**
     * Set the point.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint|null $point The point.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setPoint(?\WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint $point): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->point = $point;
        return $this;
    }

    /**
     * Set the point description formatter.
     *
     * @param string|null $pointDescriptionFormatter The point description formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setPointDescriptionFormatter(?string $pointDescriptionFormatter): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->pointDescriptionFormatter = $pointDescriptionFormatter;
        return $this;
    }

    /**
     * Set the rounded.
     *
     * @param bool|null $rounded The rounded.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setRounded(?bool $rounded): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {

        switch ($rounded) {

            case false:
            case true:
                $this->rounded = $rounded;
                break;
        }

        return $this;
    }

    /**
     * Set the selected.
     *
     * @param bool|null $selected The selected.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setSelected(?bool $selected): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the show checkbox.
     *
     * @param bool|null $showCheckbox The show checkbox.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setShowCheckbox(?bool $showCheckbox): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->showCheckbox = $showCheckbox;
        return $this;
    }

    /**
     * Set the show in legend.
     *
     * @param bool|null $showInLegend The show in legend.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setShowInLegend(?bool $showInLegend): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->showInLegend = $showInLegend;
        return $this;
    }

    /**
     * Set the skip keyboard navigation.
     *
     * @param bool|null $skipKeyboardNavigation The skip keyboard navigation.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setSkipKeyboardNavigation(?bool $skipKeyboardNavigation): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->skipKeyboardNavigation = $skipKeyboardNavigation;
        return $this;
    }

    /**
     * Set the sticky tracking.
     *
     * @param bool|null $stickyTracking The sticky tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setStickyTracking(?bool $stickyTracking): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->stickyTracking = $stickyTracking;
        return $this;
    }

    /**
     * Set the threshold.
     *
     * @param float|null $threshold The threshold.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setThreshold(?float $threshold): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->threshold = $threshold;
        return $this;
    }

    /**
     * Set the tooltip.
     *
     * @param mixed[]|null $tooltip The tooltip.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setTooltip(?array $tooltip): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setType(?string $type): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {

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
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setVisible(?bool $visible): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Set the wrap.
     *
     * @param bool|null $wrap The wrap.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setWrap(?bool $wrap): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->wrap = $wrap;
        return $this;
    }

    /**
     * Set the x axis.
     *
     * @param mixed $xAxis The x axis.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setXAxis($xAxis): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->xAxis = $xAxis;
        return $this;
    }

    /**
     * Set the y axis.
     *
     * @param mixed $yAxis The y axis.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setYAxis($yAxis): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->yAxis = $yAxis;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param float|null $zIndex The z index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge Returns this highcharts solidgauge.
     */
    public function setZIndex(?float $zIndex): \WBW\Library\Highcharts\Model\Chart\Series\HighchartsSolidgauge {
        $this->zIndex = $zIndex;
        return $this;
    }
}
