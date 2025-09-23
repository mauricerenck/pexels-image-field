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
 * Highcharts heatmap.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\PlotOptions
 * @version 5.0.14
 */
class HighchartsHeatmap implements JsonSerializable {

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
     * @since 4.0
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
     * Colsize.
     *
     * @var float|null
     * @since 4.0
     */
    private $colsize = 1;

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
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsDataLabels|null
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
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsEvents|null
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
     * Point.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsPoint|null
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
     * Rowsize.
     *
     * @var float|null
     * @since 4.0
     */
    private $rowsize = 1;

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
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsStates|null
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
     * Get the colsize.
     *
     * @return float|null Returns the colsize.
     */
    public function getColsize(): ?float {
        return $this->colsize;
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
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsDataLabels|null Returns the data labels.
     */
    public function getDataLabels(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsDataLabels {
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
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsEvents|null Returns the events.
     */
    public function getEvents(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsEvents {
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
     * Get the point.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsPoint|null Returns the point.
     */
    public function getPoint(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsPoint {
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
     * Get the rowsize.
     *
     * @return float|null Returns the rowsize.
     */
    public function getRowsize(): ?float {
        return $this->rowsize;
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
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsStates|null Returns the states.
     */
    public function getStates(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsStates {
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
        ArrayHelper::set($output, "colsize", $this->colsize, [null]);
        ArrayHelper::set($output, "crisp", $this->crisp, [null]);
        ArrayHelper::set($output, "cropThreshold", $this->cropThreshold, [null]);
        ArrayHelper::set($output, "cursor", $this->cursor, [null]);
        if (null !== $this->dataLabels) {
            ArrayHelper::set($output, "dataLabels", $this->dataLabels->jsonSerialize());
        }
        ArrayHelper::set($output, "description", $this->description, [null]);
        ArrayHelper::set($output, "enableMouseTracking", $this->enableMouseTracking, [null]);
        if (null !== $this->events) {
            ArrayHelper::set($output, "events", $this->events->jsonSerialize());
        }
        ArrayHelper::set($output, "exposeElementToA11y", $this->exposeElementToA11y, [null]);
        ArrayHelper::set($output, "findNearestPointBy", $this->findNearestPointBy, [null]);
        ArrayHelper::set($output, "getExtremesFromAll", $this->getExtremesFromAll, [null]);
        ArrayHelper::set($output, "keys", $this->keys, [null]);
        ArrayHelper::set($output, "linkedTo", $this->linkedTo, [null]);
        ArrayHelper::set($output, "maxPointWidth", $this->maxPointWidth, [null]);
        if (null !== $this->point) {
            ArrayHelper::set($output, "point", $this->point->jsonSerialize());
        }
        ArrayHelper::set($output, "pointDescriptionFormatter", $this->pointDescriptionFormatter, [null]);
        ArrayHelper::set($output, "rowsize", $this->rowsize, [null]);
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
        ArrayHelper::set($output, "turboThreshold", $this->turboThreshold, [null]);
        ArrayHelper::set($output, "visible", $this->visible, [null]);
        ArrayHelper::set($output, "zoneAxis", $this->zoneAxis, [null]);
        ArrayHelper::set($output, "zones", $this->zones, [null]);

        return $output;
    }

    /**
     * Create a new data labels.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsDataLabels Returns the data labels.
     */
    public function newDataLabels(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsDataLabels {
        $this->dataLabels = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsDataLabels();
        return $this->dataLabels;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsEvents Returns the events.
     */
    public function newEvents(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsEvents {
        $this->events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new point.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsPoint Returns the point.
     */
    public function newPoint(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsPoint {
        $this->point = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsPoint();
        return $this->point;
    }

    /**
     * Create a new states.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsStates Returns the states.
     */
    public function newStates(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsStates {
        $this->states = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsStates();
        return $this->states;
    }

    /**
     * Set the allow point select.
     *
     * @param bool|null $allowPointSelect The allow point select.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setAllowPointSelect(?bool $allowPointSelect): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->allowPointSelect = $allowPointSelect;
        return $this;
    }

    /**
     * Set the animation.
     *
     * @param bool|null $animation The animation.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setAnimation(?bool $animation): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the animation limit.
     *
     * @param float|null $animationLimit The animation limit.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setAnimationLimit(?float $animationLimit): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->animationLimit = $animationLimit;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setBorderColor(?string $borderColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border radius.
     *
     * @param float|null $borderRadius The border radius.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setBorderRadius(?float $borderRadius): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param float|null $borderWidth The border width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setBorderWidth(?float $borderWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the color by point.
     *
     * @param bool|null $colorByPoint The color by point.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setColorByPoint(?bool $colorByPoint): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->colorByPoint = $colorByPoint;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param float|null $colorIndex The color index.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setColorIndex(?float $colorIndex): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the colors.
     *
     * @param mixed[]|null $colors The colors.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setColors(?array $colors): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->colors = $colors;
        return $this;
    }

    /**
     * Set the colsize.
     *
     * @param float|null $colsize The colsize.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setColsize(?float $colsize): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->colsize = $colsize;
        return $this;
    }

    /**
     * Set the crisp.
     *
     * @param bool|null $crisp The crisp.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setCrisp(?bool $crisp): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->crisp = $crisp;
        return $this;
    }

    /**
     * Set the crop threshold.
     *
     * @param float|null $cropThreshold The crop threshold.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setCropThreshold(?float $cropThreshold): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->cropThreshold = $cropThreshold;
        return $this;
    }

    /**
     * Set the cursor.
     *
     * @param string|null $cursor The cursor.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setCursor(?string $cursor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {

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
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsDataLabels|null $dataLabels The data labels.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setDataLabels(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsDataLabels $dataLabels): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setDescription(?string $description): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the enable mouse tracking.
     *
     * @param bool|null $enableMouseTracking The enable mouse tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setEnableMouseTracking(?bool $enableMouseTracking): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->enableMouseTracking = $enableMouseTracking;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsEvents|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setEvents(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsEvents $events): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the expose element to a11y.
     *
     * @param bool|null $exposeElementToA11y The expose element to a11y.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setExposeElementToA11y(?bool $exposeElementToA11y): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->exposeElementToA11y = $exposeElementToA11y;
        return $this;
    }

    /**
     * Set the find nearest point by.
     *
     * @param string|null $findNearestPointBy The find nearest point by.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setFindNearestPointBy(?string $findNearestPointBy): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {

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
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setGetExtremesFromAll(?bool $getExtremesFromAll): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->getExtremesFromAll = $getExtremesFromAll;
        return $this;
    }

    /**
     * Set the keys.
     *
     * @param mixed[]|null $keys The keys.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setKeys(?array $keys): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->keys = $keys;
        return $this;
    }

    /**
     * Set the linked to.
     *
     * @param string|null $linkedTo The linked to.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setLinkedTo(?string $linkedTo): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->linkedTo = $linkedTo;
        return $this;
    }

    /**
     * Set the max point width.
     *
     * @param float|null $maxPointWidth The max point width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setMaxPointWidth(?float $maxPointWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->maxPointWidth = $maxPointWidth;
        return $this;
    }

    /**
     * Set the point.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsPoint|null $point The point.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setPoint(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsPoint $point): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->point = $point;
        return $this;
    }

    /**
     * Set the point description formatter.
     *
     * @param string|null $pointDescriptionFormatter The point description formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setPointDescriptionFormatter(?string $pointDescriptionFormatter): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->pointDescriptionFormatter = $pointDescriptionFormatter;
        return $this;
    }

    /**
     * Set the rowsize.
     *
     * @param float|null $rowsize The rowsize.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setRowsize(?float $rowsize): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->rowsize = $rowsize;
        return $this;
    }

    /**
     * Set the selected.
     *
     * @param bool|null $selected The selected.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setSelected(?bool $selected): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the shadow.
     *
     * @param mixed $shadow The shadow.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setShadow($shadow): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * Set the show checkbox.
     *
     * @param bool|null $showCheckbox The show checkbox.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setShowCheckbox(?bool $showCheckbox): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->showCheckbox = $showCheckbox;
        return $this;
    }

    /**
     * Set the show in legend.
     *
     * @param bool|null $showInLegend The show in legend.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setShowInLegend(?bool $showInLegend): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->showInLegend = $showInLegend;
        return $this;
    }

    /**
     * Set the skip keyboard navigation.
     *
     * @param bool|null $skipKeyboardNavigation The skip keyboard navigation.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setSkipKeyboardNavigation(?bool $skipKeyboardNavigation): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->skipKeyboardNavigation = $skipKeyboardNavigation;
        return $this;
    }

    /**
     * Set the states.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsStates|null $states The states.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setStates(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Heatmap\HighchartsStates $states): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->states = $states;
        return $this;
    }

    /**
     * Set the sticky tracking.
     *
     * @param bool|null $stickyTracking The sticky tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setStickyTracking(?bool $stickyTracking): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->stickyTracking = $stickyTracking;
        return $this;
    }

    /**
     * Set the tooltip.
     *
     * @param mixed[]|null $tooltip The tooltip.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setTooltip(?array $tooltip): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * Set the turbo threshold.
     *
     * @param float|null $turboThreshold The turbo threshold.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setTurboThreshold(?float $turboThreshold): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->turboThreshold = $turboThreshold;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param bool|null $visible The visible.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setVisible(?bool $visible): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Set the zone axis.
     *
     * @param string|null $zoneAxis The zone axis.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setZoneAxis(?string $zoneAxis): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->zoneAxis = $zoneAxis;
        return $this;
    }

    /**
     * Set the zones.
     *
     * @param mixed[]|null $zones The zones.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap Returns this highcharts heatmap.
     */
    public function setZones(?array $zones): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsHeatmap {
        $this->zones = $zones;
        return $this;
    }
}
