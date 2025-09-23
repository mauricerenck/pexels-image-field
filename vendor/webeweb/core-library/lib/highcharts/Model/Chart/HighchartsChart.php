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
 * Highcharts chart.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsChart implements JsonSerializable {

    /**
     * Align ticks.
     *
     * @var bool|null
     */
    private $alignTicks = true;

    /**
     * Animation.
     *
     * @var mixed|null
     */
    private $animation = "true";

    /**
     * Background color.
     *
     * @var string|null
     */
    private $backgroundColor = "#FFFFFF";

    /**
     * Border color.
     *
     * @var string|null
     */
    private $borderColor = "#335cad";

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
    private $borderWidth = 0;

    /**
     * Class name.
     *
     * @var string|null
     */
    private $className;

    /**
     * Color count.
     *
     * @var float|null
     * @since 5.0.0
     */
    private $colorCount = 10;

    /**
     * Default series type.
     *
     * @var string|null
     * @deprecated
     */
    private $defaultSeriesType = "line";

    /**
     * Description.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $description;

    /**
     * Events.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents|null
     */
    private $events;

    /**
     * Height.
     *
     * @var mixed|null
     */
    private $height;

    /**
     * Ignore hidden series.
     *
     * @var bool|null
     * @since 1.2.0
     */
    private $ignoreHiddenSeries = true;

    /**
     * Inverted.
     *
     * @var bool|null
     */
    private $inverted = false;

    /**
     * Margin.
     *
     * @var mixed[]|null
     */
    private $margin;

    /**
     * Margin bottom.
     *
     * @var float|null
     * @since 2.0
     */
    private $marginBottom;

    /**
     * Margin left.
     *
     * @var float|null
     * @since 2.0
     */
    private $marginLeft;

    /**
     * Margin right.
     *
     * @var float|null
     * @since 2.0
     */
    private $marginRight;

    /**
     * Margin top.
     *
     * @var float|null
     * @since 2.0
     */
    private $marginTop;

    /**
     * Options3d.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d|null
     * @since 4.0
     */
    private $options3d;

    /**
     * Pan key.
     *
     * @var string|null
     * @since 4.0.3
     */
    private $panKey;

    /**
     * Panning.
     *
     * @var bool|null
     * @since 4.0.3
     */
    private $panning = false;

    /**
     * Pinch type.
     *
     * @var string|null
     * @since 3.0
     */
    private $pinchType;

    /**
     * Plot background color.
     *
     * @var string|null
     */
    private $plotBackgroundColor;

    /**
     * Plot background image.
     *
     * @var string|null
     */
    private $plotBackgroundImage;

    /**
     * Plot border color.
     *
     * @var string|null
     */
    private $plotBorderColor = "#cccccc";

    /**
     * Plot border width.
     *
     * @var float|null
     */
    private $plotBorderWidth = 0;

    /**
     * Plot shadow.
     *
     * @var mixed|null
     */
    private $plotShadow = "false";

    /**
     * Polar.
     *
     * @var bool|null
     * @since 2.3.0
     */
    private $polar = false;

    /**
     * Reflow.
     *
     * @var bool|null
     * @since 2.1
     */
    private $reflow = true;

    /**
     * Render to.
     *
     * @var mixed|null
     */
    private $renderTo;

    /**
     * Reset zoom button.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton|null
     */
    private $resetZoomButton;

    /**
     * Selection marker fill.
     *
     * @var string|null
     * @since 2.1.7
     */
    private $selectionMarkerFill = "rgba(51,92,173,0.25)";

    /**
     * Shadow.
     *
     * @var mixed|null
     */
    private $shadow = "false";

    /**
     * Show axes.
     *
     * @var bool|null
     * @since 1.2.5
     */
    private $showAxes = false;

    /**
     * Spacing.
     *
     * @var mixed[]|null
     * @since 3.0.6
     */
    private $spacing = [10, 10, 15, 10];

    /**
     * Spacing bottom.
     *
     * @var float|null
     * @since 2.1
     */
    private $spacingBottom = 15;

    /**
     * Spacing left.
     *
     * @var float|null
     * @since 2.1
     */
    private $spacingLeft = 10;

    /**
     * Spacing right.
     *
     * @var float|null
     * @since 2.1
     */
    private $spacingRight = 10;

    /**
     * Spacing top.
     *
     * @var float|null
     * @since 2.1
     */
    private $spacingTop = 10;

    /**
     * Style.
     *
     * @var mixed[]|null
     */
    private $style = ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"];

    /**
     * Type.
     *
     * @var string|null
     * @since 2.1.0
     */
    private $type = "line";

    /**
     * Type description.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $typeDescription;

    /**
     * Width.
     *
     * @var float|null
     */
    private $width;

    /**
     * Zoom type.
     *
     * @var string|null
     */
    private $zoomType;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the align ticks.
     *
     * @return bool|null Returns the align ticks.
     */
    public function getAlignTicks(): ?bool {
        return $this->alignTicks;
    }

    /**
     * Get the animation.
     *
     * @return mixed Returns the animation.
     */
    public function getAnimation() {
        return $this->animation;
    }

    /**
     * Get the background color.
     *
     * @return string|null Returns the background color.
     */
    public function getBackgroundColor(): ?string {
        return $this->backgroundColor;
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
     * Get the color count.
     *
     * @return float|null Returns the color count.
     */
    public function getColorCount(): ?float {
        return $this->colorCount;
    }

    /**
     * Get the default series type.
     *
     * @return string|null Returns the default series type.
     * @deprecated
     */
    public function getDefaultSeriesType(): ?string {
        return $this->defaultSeriesType;
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
     * Get the events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents|null Returns the events.
     */
    public function getEvents(): ?\WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents {
        return $this->events;
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
     * Get the ignore hidden series.
     *
     * @return bool|null Returns the ignore hidden series.
     */
    public function getIgnoreHiddenSeries(): ?bool {
        return $this->ignoreHiddenSeries;
    }

    /**
     * Get the inverted.
     *
     * @return bool|null Returns the inverted.
     */
    public function getInverted(): ?bool {
        return $this->inverted;
    }

    /**
     * Get the margin.
     *
     * @return mixed[]|null Returns the margin.
     */
    public function getMargin(): ?array {
        return $this->margin;
    }

    /**
     * Get the margin bottom.
     *
     * @return float|null Returns the margin bottom.
     */
    public function getMarginBottom(): ?float {
        return $this->marginBottom;
    }

    /**
     * Get the margin left.
     *
     * @return float|null Returns the margin left.
     */
    public function getMarginLeft(): ?float {
        return $this->marginLeft;
    }

    /**
     * Get the margin right.
     *
     * @return float|null Returns the margin right.
     */
    public function getMarginRight(): ?float {
        return $this->marginRight;
    }

    /**
     * Get the margin top.
     *
     * @return float|null Returns the margin top.
     */
    public function getMarginTop(): ?float {
        return $this->marginTop;
    }

    /**
     * Get the options3d.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d|null Returns the options3d.
     */
    public function getOptions3d(): ?\WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d {
        return $this->options3d;
    }

    /**
     * Get the pan key.
     *
     * @return string|null Returns the pan key.
     */
    public function getPanKey(): ?string {
        return $this->panKey;
    }

    /**
     * Get the panning.
     *
     * @return bool|null Returns the panning.
     */
    public function getPanning(): ?bool {
        return $this->panning;
    }

    /**
     * Get the pinch type.
     *
     * @return string|null Returns the pinch type.
     */
    public function getPinchType(): ?string {
        return $this->pinchType;
    }

    /**
     * Get the plot background color.
     *
     * @return string|null Returns the plot background color.
     */
    public function getPlotBackgroundColor(): ?string {
        return $this->plotBackgroundColor;
    }

    /**
     * Get the plot background image.
     *
     * @return string|null Returns the plot background image.
     */
    public function getPlotBackgroundImage(): ?string {
        return $this->plotBackgroundImage;
    }

    /**
     * Get the plot border color.
     *
     * @return string|null Returns the plot border color.
     */
    public function getPlotBorderColor(): ?string {
        return $this->plotBorderColor;
    }

    /**
     * Get the plot border width.
     *
     * @return float|null Returns the plot border width.
     */
    public function getPlotBorderWidth(): ?float {
        return $this->plotBorderWidth;
    }

    /**
     * Get the plot shadow.
     *
     * @return mixed Returns the plot shadow.
     */
    public function getPlotShadow() {
        return $this->plotShadow;
    }

    /**
     * Get the polar.
     *
     * @return bool|null Returns the polar.
     */
    public function getPolar(): ?bool {
        return $this->polar;
    }

    /**
     * Get the reflow.
     *
     * @return bool|null Returns the reflow.
     */
    public function getReflow(): ?bool {
        return $this->reflow;
    }

    /**
     * Get the render to.
     *
     * @return mixed Returns the render to.
     */
    public function getRenderTo() {
        return $this->renderTo;
    }

    /**
     * Get the reset zoom button.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton|null Returns the reset zoom button.
     */
    public function getResetZoomButton(): ?\WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton {
        return $this->resetZoomButton;
    }

    /**
     * Get the selection marker fill.
     *
     * @return string|null Returns the selection marker fill.
     */
    public function getSelectionMarkerFill(): ?string {
        return $this->selectionMarkerFill;
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
     * Get the show axes.
     *
     * @return bool|null Returns the show axes.
     */
    public function getShowAxes(): ?bool {
        return $this->showAxes;
    }

    /**
     * Get the spacing.
     *
     * @return mixed[]|null Returns the spacing.
     */
    public function getSpacing(): ?array {
        return $this->spacing;
    }

    /**
     * Get the spacing bottom.
     *
     * @return float|null Returns the spacing bottom.
     */
    public function getSpacingBottom(): ?float {
        return $this->spacingBottom;
    }

    /**
     * Get the spacing left.
     *
     * @return float|null Returns the spacing left.
     */
    public function getSpacingLeft(): ?float {
        return $this->spacingLeft;
    }

    /**
     * Get the spacing right.
     *
     * @return float|null Returns the spacing right.
     */
    public function getSpacingRight(): ?float {
        return $this->spacingRight;
    }

    /**
     * Get the spacing top.
     *
     * @return float|null Returns the spacing top.
     */
    public function getSpacingTop(): ?float {
        return $this->spacingTop;
    }

    /**
     * Get the style.
     *
     * @return mixed[]|null Returns the style.
     */
    public function getStyle(): ?array {
        return $this->style;
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
     * Get the type description.
     *
     * @return string|null Returns the type description.
     */
    public function getTypeDescription(): ?string {
        return $this->typeDescription;
    }

    /**
     * Get the width.
     *
     * @return float|null Returns the width.
     */
    public function getWidth(): ?float {
        return $this->width;
    }

    /**
     * Get the zoom type.
     *
     * @return string|null Returns the zoom type.
     */
    public function getZoomType(): ?string {
        return $this->zoomType;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "alignTicks", $this->alignTicks, [null]);
        ArrayHelper::set($output, "animation", $this->animation, [null]);
        ArrayHelper::set($output, "backgroundColor", $this->backgroundColor, [null]);
        ArrayHelper::set($output, "borderColor", $this->borderColor, [null]);
        ArrayHelper::set($output, "borderRadius", $this->borderRadius, [null]);
        ArrayHelper::set($output, "borderWidth", $this->borderWidth, [null]);
        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "colorCount", $this->colorCount, [null]);
        ArrayHelper::set($output, "defaultSeriesType", $this->defaultSeriesType, [null]);
        ArrayHelper::set($output, "description", $this->description, [null]);
        if (null !== $this->events) {
            ArrayHelper::set($output, "events", $this->events->jsonSerialize());
        }
        ArrayHelper::set($output, "height", $this->height, [null]);
        ArrayHelper::set($output, "ignoreHiddenSeries", $this->ignoreHiddenSeries, [null]);
        ArrayHelper::set($output, "inverted", $this->inverted, [null]);
        ArrayHelper::set($output, "margin", $this->margin, [null]);
        ArrayHelper::set($output, "marginBottom", $this->marginBottom, [null]);
        ArrayHelper::set($output, "marginLeft", $this->marginLeft, [null]);
        ArrayHelper::set($output, "marginRight", $this->marginRight, [null]);
        ArrayHelper::set($output, "marginTop", $this->marginTop, [null]);
        if (null !== $this->options3d) {
            ArrayHelper::set($output, "options3d", $this->options3d->jsonSerialize());
        }
        ArrayHelper::set($output, "panKey", $this->panKey, [null]);
        ArrayHelper::set($output, "panning", $this->panning, [null]);
        ArrayHelper::set($output, "pinchType", $this->pinchType, [null]);
        ArrayHelper::set($output, "plotBackgroundColor", $this->plotBackgroundColor, [null]);
        ArrayHelper::set($output, "plotBackgroundImage", $this->plotBackgroundImage, [null]);
        ArrayHelper::set($output, "plotBorderColor", $this->plotBorderColor, [null]);
        ArrayHelper::set($output, "plotBorderWidth", $this->plotBorderWidth, [null]);
        ArrayHelper::set($output, "plotShadow", $this->plotShadow, [null]);
        ArrayHelper::set($output, "polar", $this->polar, [null]);
        ArrayHelper::set($output, "reflow", $this->reflow, [null]);
        ArrayHelper::set($output, "renderTo", $this->renderTo, [null]);
        if (null !== $this->resetZoomButton) {
            ArrayHelper::set($output, "resetZoomButton", $this->resetZoomButton->jsonSerialize());
        }
        ArrayHelper::set($output, "selectionMarkerFill", $this->selectionMarkerFill, [null]);
        ArrayHelper::set($output, "shadow", $this->shadow, [null]);
        ArrayHelper::set($output, "showAxes", $this->showAxes, [null]);
        ArrayHelper::set($output, "spacing", $this->spacing, [null]);
        ArrayHelper::set($output, "spacingBottom", $this->spacingBottom, [null]);
        ArrayHelper::set($output, "spacingLeft", $this->spacingLeft, [null]);
        ArrayHelper::set($output, "spacingRight", $this->spacingRight, [null]);
        ArrayHelper::set($output, "spacingTop", $this->spacingTop, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);
        ArrayHelper::set($output, "type", $this->type, [null]);
        ArrayHelper::set($output, "typeDescription", $this->typeDescription, [null]);
        ArrayHelper::set($output, "width", $this->width, [null]);
        ArrayHelper::set($output, "zoomType", $this->zoomType, [null]);

        return $output;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents Returns the events.
     */
    public function newEvents(): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents {
        $this->events = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new options3d.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d Returns the options3d.
     */
    public function newOptions3d(): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d {
        $this->options3d = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();
        return $this->options3d;
    }

    /**
     * Create a new reset zoom button.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton Returns the reset zoom button.
     */
    public function newResetZoomButton(): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton {
        $this->resetZoomButton = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton();
        return $this->resetZoomButton;
    }

    /**
     * Set the align ticks.
     *
     * @param bool|null $alignTicks The align ticks.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setAlignTicks(?bool $alignTicks): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->alignTicks = $alignTicks;
        return $this;
    }

    /**
     * Set the animation.
     *
     * @param mixed $animation The animation.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setAnimation($animation): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the background color.
     *
     * @param string|null $backgroundColor The background color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setBackgroundColor(?string $backgroundColor): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setBorderColor(?string $borderColor): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border radius.
     *
     * @param float|null $borderRadius The border radius.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setBorderRadius(?float $borderRadius): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param float|null $borderWidth The border width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setBorderWidth(?float $borderWidth): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color count.
     *
     * @param float|null $colorCount The color count.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setColorCount(?float $colorCount): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->colorCount = $colorCount;
        return $this;
    }

    /**
     * Set the default series type.
     *
     * @param string|null $defaultSeriesType The default series type.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     * @deprecated
     */
    public function setDefaultSeriesType(?string $defaultSeriesType): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {

        switch ($defaultSeriesType) {

            case "area":
            case "areaspline":
            case "column":
            case "line":
            case "pie":
            case "spline":
                $this->defaultSeriesType = $defaultSeriesType;
                break;
        }

        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setDescription(?string $description): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setEvents(?\WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents $events): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the height.
     *
     * @param mixed $height The height.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setHeight($height): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->height = $height;
        return $this;
    }

    /**
     * Set the ignore hidden series.
     *
     * @param bool|null $ignoreHiddenSeries The ignore hidden series.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setIgnoreHiddenSeries(?bool $ignoreHiddenSeries): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->ignoreHiddenSeries = $ignoreHiddenSeries;
        return $this;
    }

    /**
     * Set the inverted.
     *
     * @param bool|null $inverted The inverted.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setInverted(?bool $inverted): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->inverted = $inverted;
        return $this;
    }

    /**
     * Set the margin.
     *
     * @param mixed[]|null $margin The margin.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setMargin(?array $margin): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->margin = $margin;
        return $this;
    }

    /**
     * Set the margin bottom.
     *
     * @param float|null $marginBottom The margin bottom.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setMarginBottom(?float $marginBottom): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->marginBottom = $marginBottom;
        return $this;
    }

    /**
     * Set the margin left.
     *
     * @param float|null $marginLeft The margin left.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setMarginLeft(?float $marginLeft): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->marginLeft = $marginLeft;
        return $this;
    }

    /**
     * Set the margin right.
     *
     * @param float|null $marginRight The margin right.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setMarginRight(?float $marginRight): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->marginRight = $marginRight;
        return $this;
    }

    /**
     * Set the margin top.
     *
     * @param float|null $marginTop The margin top.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setMarginTop(?float $marginTop): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->marginTop = $marginTop;
        return $this;
    }

    /**
     * Set the options3d.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d|null $options3d The options3d.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setOptions3d(?\WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d $options3d): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->options3d = $options3d;
        return $this;
    }

    /**
     * Set the pan key.
     *
     * @param string|null $panKey The pan key.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setPanKey(?string $panKey): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {

        switch ($panKey) {

            case null:
            case "alt":
            case "ctrl":
            case "meta":
            case "shift":
                $this->panKey = $panKey;
                break;
        }

        return $this;
    }

    /**
     * Set the panning.
     *
     * @param bool|null $panning The panning.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setPanning(?bool $panning): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->panning = $panning;
        return $this;
    }

    /**
     * Set the pinch type.
     *
     * @param string|null $pinchType The pinch type.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setPinchType(?string $pinchType): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {

        switch ($pinchType) {

            case "x":
            case "xy":
            case "y":
                $this->pinchType = $pinchType;
                break;
        }

        return $this;
    }

    /**
     * Set the plot background color.
     *
     * @param string|null $plotBackgroundColor The plot background color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setPlotBackgroundColor(?string $plotBackgroundColor): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->plotBackgroundColor = $plotBackgroundColor;
        return $this;
    }

    /**
     * Set the plot background image.
     *
     * @param string|null $plotBackgroundImage The plot background image.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setPlotBackgroundImage(?string $plotBackgroundImage): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->plotBackgroundImage = $plotBackgroundImage;
        return $this;
    }

    /**
     * Set the plot border color.
     *
     * @param string|null $plotBorderColor The plot border color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setPlotBorderColor(?string $plotBorderColor): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->plotBorderColor = $plotBorderColor;
        return $this;
    }

    /**
     * Set the plot border width.
     *
     * @param float|null $plotBorderWidth The plot border width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setPlotBorderWidth(?float $plotBorderWidth): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->plotBorderWidth = $plotBorderWidth;
        return $this;
    }

    /**
     * Set the plot shadow.
     *
     * @param mixed $plotShadow The plot shadow.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setPlotShadow($plotShadow): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->plotShadow = $plotShadow;
        return $this;
    }

    /**
     * Set the polar.
     *
     * @param bool|null $polar The polar.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setPolar(?bool $polar): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->polar = $polar;
        return $this;
    }

    /**
     * Set the reflow.
     *
     * @param bool|null $reflow The reflow.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setReflow(?bool $reflow): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->reflow = $reflow;
        return $this;
    }

    /**
     * Set the render to.
     *
     * @param mixed $renderTo The render to.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setRenderTo($renderTo): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->renderTo = $renderTo;
        return $this;
    }

    /**
     * Set the reset zoom button.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton|null $resetZoomButton The reset zoom button.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setResetZoomButton(?\WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton $resetZoomButton): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->resetZoomButton = $resetZoomButton;
        return $this;
    }

    /**
     * Set the selection marker fill.
     *
     * @param string|null $selectionMarkerFill The selection marker fill.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setSelectionMarkerFill(?string $selectionMarkerFill): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->selectionMarkerFill = $selectionMarkerFill;
        return $this;
    }

    /**
     * Set the shadow.
     *
     * @param mixed $shadow The shadow.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setShadow($shadow): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * Set the show axes.
     *
     * @param bool|null $showAxes The show axes.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setShowAxes(?bool $showAxes): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->showAxes = $showAxes;
        return $this;
    }

    /**
     * Set the spacing.
     *
     * @param mixed[]|null $spacing The spacing.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setSpacing(?array $spacing): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->spacing = $spacing;
        return $this;
    }

    /**
     * Set the spacing bottom.
     *
     * @param float|null $spacingBottom The spacing bottom.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setSpacingBottom(?float $spacingBottom): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->spacingBottom = $spacingBottom;
        return $this;
    }

    /**
     * Set the spacing left.
     *
     * @param float|null $spacingLeft The spacing left.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setSpacingLeft(?float $spacingLeft): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->spacingLeft = $spacingLeft;
        return $this;
    }

    /**
     * Set the spacing right.
     *
     * @param float|null $spacingRight The spacing right.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setSpacingRight(?float $spacingRight): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->spacingRight = $spacingRight;
        return $this;
    }

    /**
     * Set the spacing top.
     *
     * @param float|null $spacingTop The spacing top.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setSpacingTop(?float $spacingTop): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->spacingTop = $spacingTop;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setType(?string $type): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {

        switch ($type) {

            case "area":
            case "arearange":
            case "areaspline":
            case "areasplinerange":
            case "bar":
            case "boxplot":
            case "bubble":
            case "column":
            case "columnrange":
            case "errorbar":
            case "funnel":
            case "gauge":
            case "heatmap":
            case "line":
            case "pie":
            case "polygon":
            case "pyramid":
            case "scatter":
            case "solidgauge":
            case "spline":
            case "treemap":
            case "waterfall":
                $this->type = $type;
                break;
        }

        return $this;
    }

    /**
     * Set the type description.
     *
     * @param string|null $typeDescription The type description.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setTypeDescription(?string $typeDescription): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->typeDescription = $typeDescription;
        return $this;
    }

    /**
     * Set the width.
     *
     * @param float|null $width The width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setWidth(?float $width): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {
        $this->width = $width;
        return $this;
    }

    /**
     * Set the zoom type.
     *
     * @param string|null $zoomType The zoom type.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsChart Returns this highcharts chart.
     */
    public function setZoomType(?string $zoomType): \WBW\Library\Highcharts\Model\Chart\HighchartsChart {

        switch ($zoomType) {

            case null:
            case "x":
            case "xy":
            case "y":
                $this->zoomType = $zoomType;
                break;
        }

        return $this;
    }
}
