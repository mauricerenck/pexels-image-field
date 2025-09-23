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
 * Highcharts legend.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsLegend implements JsonSerializable {

    /**
     * Align.
     *
     * @var string|null
     * @since 2.0
     */
    private $align = "center";

    /**
     * Background color.
     *
     * @var string|null
     */
    private $backgroundColor;

    /**
     * Border color.
     *
     * @var string|null
     */
    private $borderColor = "#999999";

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
     * Enabled.
     *
     * @var bool|null
     */
    private $enabled = true;

    /**
     * Floating.
     *
     * @var bool|null
     * @since 2.1
     */
    private $floating = false;

    /**
     * Item distance.
     *
     * @var float|null
     * @since 3.0.3
     */
    private $itemDistance = 20;

    /**
     * Item hidden style.
     *
     * @var mixed[]|null
     */
    private $itemHiddenStyle = ["color" => "#cccccc"];

    /**
     * Item hover style.
     *
     * @var mixed[]|null
     */
    private $itemHoverStyle = ["color" => "#000000"];

    /**
     * Item margin bottom.
     *
     * @var float|null
     * @since 2.2.0
     */
    private $itemMarginBottom = 0;

    /**
     * Item margin top.
     *
     * @var float|null
     * @since 2.2.0
     */
    private $itemMarginTop = 0;

    /**
     * Item style.
     *
     * @var mixed[]|null
     */
    private $itemStyle = ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"];

    /**
     * Item width.
     *
     * @var float|null
     * @since 2.0
     */
    private $itemWidth;

    /**
     * Label format.
     *
     * @var string|null
     * @since 1.3
     */
    private $labelFormat = "{name}";

    /**
     * Label formatter.
     *
     * @var string|null
     */
    private $labelFormatter;

    /**
     * Layout.
     *
     * @var string|null
     */
    private $layout = "horizontal";

    /**
     * Line height.
     *
     * @var float|null
     * @since 2.0
     */
    private $lineHeight = 16;

    /**
     * Margin.
     *
     * @var float|null
     * @since 2.1
     */
    private $margin = 12;

    /**
     * Max height.
     *
     * @var float|null
     * @since 2.3.0
     */
    private $maxHeight;

    /**
     * Navigation.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation|null
     */
    private $navigation;

    /**
     * Padding.
     *
     * @var float|null
     * @since 2.2.0
     */
    private $padding = 8;

    /**
     * Reversed.
     *
     * @var bool|null
     * @since 1.2.5
     */
    private $reversed = false;

    /**
     * Rtl.
     *
     * @var bool|null
     * @since 2.2
     */
    private $rtl = false;

    /**
     * Shadow.
     *
     * @var mixed|null
     */
    private $shadow = "false";

    /**
     * Square symbol.
     *
     * @var bool|null
     * @since 5.0.0
     */
    private $squareSymbol = true;

    /**
     * Style.
     *
     * @var mixed[]|null
     * @deprecated
     */
    private $style;

    /**
     * Symbol height.
     *
     * @var float|null
     * @since 3.0.8
     */
    private $symbolHeight;

    /**
     * Symbol padding.
     *
     * @var float|null
     */
    private $symbolPadding = 5;

    /**
     * Symbol radius.
     *
     * @var float|null
     * @since 3.0.8
     */
    private $symbolRadius;

    /**
     * Symbol width.
     *
     * @var float|null
     */
    private $symbolWidth;

    /**
     * Title.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle|null
     * @since 3.0
     */
    private $title;

    /**
     * Use HTML.
     *
     * @var bool|null
     */
    private $useHTML = false;

    /**
     * Vertical align.
     *
     * @var string|null
     * @since 2.0
     */
    private $verticalAlign = "bottom";

    /**
     * Width.
     *
     * @var float|null
     * @since 2.0
     */
    private $width;

    /**
     * X.
     *
     * @var float|null
     * @since 2.0
     */
    private $x = 0;

    /**
     * Y.
     *
     * @var float|null
     * @since 2.0
     */
    private $y = 0;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the align.
     *
     * @return string|null Returns the align.
     */
    public function getAlign(): ?string {
        return $this->align;
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
     * Get the enabled.
     *
     * @return bool|null Returns the enabled.
     */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * Get the floating.
     *
     * @return bool|null Returns the floating.
     */
    public function getFloating(): ?bool {
        return $this->floating;
    }

    /**
     * Get the item distance.
     *
     * @return float|null Returns the item distance.
     */
    public function getItemDistance(): ?float {
        return $this->itemDistance;
    }

    /**
     * Get the item hidden style.
     *
     * @return mixed[]|null Returns the item hidden style.
     */
    public function getItemHiddenStyle(): ?array {
        return $this->itemHiddenStyle;
    }

    /**
     * Get the item hover style.
     *
     * @return mixed[]|null Returns the item hover style.
     */
    public function getItemHoverStyle(): ?array {
        return $this->itemHoverStyle;
    }

    /**
     * Get the item margin bottom.
     *
     * @return float|null Returns the item margin bottom.
     */
    public function getItemMarginBottom(): ?float {
        return $this->itemMarginBottom;
    }

    /**
     * Get the item margin top.
     *
     * @return float|null Returns the item margin top.
     */
    public function getItemMarginTop(): ?float {
        return $this->itemMarginTop;
    }

    /**
     * Get the item style.
     *
     * @return mixed[]|null Returns the item style.
     */
    public function getItemStyle(): ?array {
        return $this->itemStyle;
    }

    /**
     * Get the item width.
     *
     * @return float|null Returns the item width.
     */
    public function getItemWidth(): ?float {
        return $this->itemWidth;
    }

    /**
     * Get the label format.
     *
     * @return string|null Returns the label format.
     */
    public function getLabelFormat(): ?string {
        return $this->labelFormat;
    }

    /**
     * Get the label formatter.
     *
     * @return string|null Returns the label formatter.
     */
    public function getLabelFormatter(): ?string {
        return $this->labelFormatter;
    }

    /**
     * Get the layout.
     *
     * @return string|null Returns the layout.
     */
    public function getLayout(): ?string {
        return $this->layout;
    }

    /**
     * Get the line height.
     *
     * @return float|null Returns the line height.
     */
    public function getLineHeight(): ?float {
        return $this->lineHeight;
    }

    /**
     * Get the margin.
     *
     * @return float|null Returns the margin.
     */
    public function getMargin(): ?float {
        return $this->margin;
    }

    /**
     * Get the max height.
     *
     * @return float|null Returns the max height.
     */
    public function getMaxHeight(): ?float {
        return $this->maxHeight;
    }

    /**
     * Get the navigation.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation|null Returns the navigation.
     */
    public function getNavigation(): ?\WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation {
        return $this->navigation;
    }

    /**
     * Get the padding.
     *
     * @return float|null Returns the padding.
     */
    public function getPadding(): ?float {
        return $this->padding;
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
     * Get the rtl.
     *
     * @return bool|null Returns the rtl.
     */
    public function getRtl(): ?bool {
        return $this->rtl;
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
     * Get the square symbol.
     *
     * @return bool|null Returns the square symbol.
     */
    public function getSquareSymbol(): ?bool {
        return $this->squareSymbol;
    }

    /**
     * Get the style.
     *
     * @return mixed[]|null Returns the style.
     * @deprecated
     */
    public function getStyle(): ?array {
        return $this->style;
    }

    /**
     * Get the symbol height.
     *
     * @return float|null Returns the symbol height.
     */
    public function getSymbolHeight(): ?float {
        return $this->symbolHeight;
    }

    /**
     * Get the symbol padding.
     *
     * @return float|null Returns the symbol padding.
     */
    public function getSymbolPadding(): ?float {
        return $this->symbolPadding;
    }

    /**
     * Get the symbol radius.
     *
     * @return float|null Returns the symbol radius.
     */
    public function getSymbolRadius(): ?float {
        return $this->symbolRadius;
    }

    /**
     * Get the symbol width.
     *
     * @return float|null Returns the symbol width.
     */
    public function getSymbolWidth(): ?float {
        return $this->symbolWidth;
    }

    /**
     * Get the title.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle|null Returns the title.
     */
    public function getTitle(): ?\WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle {
        return $this->title;
    }

    /**
     * Get the use HTML.
     *
     * @return bool|null Returns the use HTML.
     */
    public function getUseHTML(): ?bool {
        return $this->useHTML;
    }

    /**
     * Get the vertical align.
     *
     * @return string|null Returns the vertical align.
     */
    public function getVerticalAlign(): ?string {
        return $this->verticalAlign;
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
     * Get the x.
     *
     * @return float|null Returns the x.
     */
    public function getX(): ?float {
        return $this->x;
    }

    /**
     * Get the y.
     *
     * @return float|null Returns the y.
     */
    public function getY(): ?float {
        return $this->y;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "align", $this->align, [null]);
        ArrayHelper::set($output, "backgroundColor", $this->backgroundColor, [null]);
        ArrayHelper::set($output, "borderColor", $this->borderColor, [null]);
        ArrayHelper::set($output, "borderRadius", $this->borderRadius, [null]);
        ArrayHelper::set($output, "borderWidth", $this->borderWidth, [null]);
        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "floating", $this->floating, [null]);
        ArrayHelper::set($output, "itemDistance", $this->itemDistance, [null]);
        ArrayHelper::set($output, "itemHiddenStyle", $this->itemHiddenStyle, [null]);
        ArrayHelper::set($output, "itemHoverStyle", $this->itemHoverStyle, [null]);
        ArrayHelper::set($output, "itemMarginBottom", $this->itemMarginBottom, [null]);
        ArrayHelper::set($output, "itemMarginTop", $this->itemMarginTop, [null]);
        ArrayHelper::set($output, "itemStyle", $this->itemStyle, [null]);
        ArrayHelper::set($output, "itemWidth", $this->itemWidth, [null]);
        ArrayHelper::set($output, "labelFormat", $this->labelFormat, [null]);
        ArrayHelper::set($output, "labelFormatter", $this->labelFormatter, [null]);
        ArrayHelper::set($output, "layout", $this->layout, [null]);
        ArrayHelper::set($output, "lineHeight", $this->lineHeight, [null]);
        ArrayHelper::set($output, "margin", $this->margin, [null]);
        ArrayHelper::set($output, "maxHeight", $this->maxHeight, [null]);
        if (null !== $this->navigation) {
            ArrayHelper::set($output, "navigation", $this->navigation->jsonSerialize());
        }
        ArrayHelper::set($output, "padding", $this->padding, [null]);
        ArrayHelper::set($output, "reversed", $this->reversed, [null]);
        ArrayHelper::set($output, "rtl", $this->rtl, [null]);
        ArrayHelper::set($output, "shadow", $this->shadow, [null]);
        ArrayHelper::set($output, "squareSymbol", $this->squareSymbol, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);
        ArrayHelper::set($output, "symbolHeight", $this->symbolHeight, [null]);
        ArrayHelper::set($output, "symbolPadding", $this->symbolPadding, [null]);
        ArrayHelper::set($output, "symbolRadius", $this->symbolRadius, [null]);
        ArrayHelper::set($output, "symbolWidth", $this->symbolWidth, [null]);
        if (null !== $this->title) {
            ArrayHelper::set($output, "title", $this->title->jsonSerialize());
        }
        ArrayHelper::set($output, "useHTML", $this->useHTML, [null]);
        ArrayHelper::set($output, "verticalAlign", $this->verticalAlign, [null]);
        ArrayHelper::set($output, "width", $this->width, [null]);
        ArrayHelper::set($output, "x", $this->x, [null]);
        ArrayHelper::set($output, "y", $this->y, [null]);

        return $output;
    }

    /**
     * Create a new navigation.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation Returns the navigation.
     */
    public function newNavigation(): \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation {
        $this->navigation = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation();
        return $this->navigation;
    }

    /**
     * Create a new title.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle Returns the title.
     */
    public function newTitle(): \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle {
        $this->title = new \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle();
        return $this->title;
    }

    /**
     * Set the align.
     *
     * @param string|null $align The align.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setAlign(?string $align): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {

        switch ($align) {

            case "center":
            case "left":
            case "right":
                $this->align = $align;
                break;
        }

        return $this;
    }

    /**
     * Set the background color.
     *
     * @param string|null $backgroundColor The background color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setBackgroundColor(?string $backgroundColor): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setBorderColor(?string $borderColor): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border radius.
     *
     * @param float|null $borderRadius The border radius.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setBorderRadius(?float $borderRadius): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param float|null $borderWidth The border width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setBorderWidth(?float $borderWidth): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the floating.
     *
     * @param bool|null $floating The floating.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setFloating(?bool $floating): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->floating = $floating;
        return $this;
    }

    /**
     * Set the item distance.
     *
     * @param float|null $itemDistance The item distance.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setItemDistance(?float $itemDistance): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->itemDistance = $itemDistance;
        return $this;
    }

    /**
     * Set the item hidden style.
     *
     * @param mixed[]|null $itemHiddenStyle The item hidden style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setItemHiddenStyle(?array $itemHiddenStyle): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->itemHiddenStyle = $itemHiddenStyle;
        return $this;
    }

    /**
     * Set the item hover style.
     *
     * @param mixed[]|null $itemHoverStyle The item hover style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setItemHoverStyle(?array $itemHoverStyle): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->itemHoverStyle = $itemHoverStyle;
        return $this;
    }

    /**
     * Set the item margin bottom.
     *
     * @param float|null $itemMarginBottom The item margin bottom.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setItemMarginBottom(?float $itemMarginBottom): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->itemMarginBottom = $itemMarginBottom;
        return $this;
    }

    /**
     * Set the item margin top.
     *
     * @param float|null $itemMarginTop The item margin top.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setItemMarginTop(?float $itemMarginTop): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->itemMarginTop = $itemMarginTop;
        return $this;
    }

    /**
     * Set the item style.
     *
     * @param mixed[]|null $itemStyle The item style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setItemStyle(?array $itemStyle): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->itemStyle = $itemStyle;
        return $this;
    }

    /**
     * Set the item width.
     *
     * @param float|null $itemWidth The item width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setItemWidth(?float $itemWidth): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->itemWidth = $itemWidth;
        return $this;
    }

    /**
     * Set the label format.
     *
     * @param string|null $labelFormat The label format.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setLabelFormat(?string $labelFormat): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->labelFormat = $labelFormat;
        return $this;
    }

    /**
     * Set the label formatter.
     *
     * @param string|null $labelFormatter The label formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setLabelFormatter(?string $labelFormatter): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->labelFormatter = $labelFormatter;
        return $this;
    }

    /**
     * Set the layout.
     *
     * @param string|null $layout The layout.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setLayout(?string $layout): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {

        switch ($layout) {

            case "horizontal":
            case "vertical":
                $this->layout = $layout;
                break;
        }

        return $this;
    }

    /**
     * Set the line height.
     *
     * @param float|null $lineHeight The line height.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setLineHeight(?float $lineHeight): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->lineHeight = $lineHeight;
        return $this;
    }

    /**
     * Set the margin.
     *
     * @param float|null $margin The margin.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setMargin(?float $margin): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->margin = $margin;
        return $this;
    }

    /**
     * Set the max height.
     *
     * @param float|null $maxHeight The max height.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setMaxHeight(?float $maxHeight): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->maxHeight = $maxHeight;
        return $this;
    }

    /**
     * Set the navigation.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation|null $navigation The navigation.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setNavigation(?\WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation $navigation): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->navigation = $navigation;
        return $this;
    }

    /**
     * Set the padding.
     *
     * @param float|null $padding The padding.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setPadding(?float $padding): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->padding = $padding;
        return $this;
    }

    /**
     * Set the reversed.
     *
     * @param bool|null $reversed The reversed.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setReversed(?bool $reversed): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->reversed = $reversed;
        return $this;
    }

    /**
     * Set the rtl.
     *
     * @param bool|null $rtl The rtl.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setRtl(?bool $rtl): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->rtl = $rtl;
        return $this;
    }

    /**
     * Set the shadow.
     *
     * @param mixed $shadow The shadow.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setShadow($shadow): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * Set the square symbol.
     *
     * @param bool|null $squareSymbol The square symbol.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setSquareSymbol(?bool $squareSymbol): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->squareSymbol = $squareSymbol;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     * @deprecated
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the symbol height.
     *
     * @param float|null $symbolHeight The symbol height.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setSymbolHeight(?float $symbolHeight): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->symbolHeight = $symbolHeight;
        return $this;
    }

    /**
     * Set the symbol padding.
     *
     * @param float|null $symbolPadding The symbol padding.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setSymbolPadding(?float $symbolPadding): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->symbolPadding = $symbolPadding;
        return $this;
    }

    /**
     * Set the symbol radius.
     *
     * @param float|null $symbolRadius The symbol radius.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setSymbolRadius(?float $symbolRadius): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->symbolRadius = $symbolRadius;
        return $this;
    }

    /**
     * Set the symbol width.
     *
     * @param float|null $symbolWidth The symbol width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setSymbolWidth(?float $symbolWidth): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->symbolWidth = $symbolWidth;
        return $this;
    }

    /**
     * Set the title.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle|null $title The title.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setTitle(?\WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle $title): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->title = $title;
        return $this;
    }

    /**
     * Set the use HTML.
     *
     * @param bool|null $useHTML The use HTML.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setUseHTML(?bool $useHTML): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->useHTML = $useHTML;
        return $this;
    }

    /**
     * Set the vertical align.
     *
     * @param string|null $verticalAlign The vertical align.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setVerticalAlign(?string $verticalAlign): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {

        switch ($verticalAlign) {

            case "bottom":
            case "middle":
            case "top":
                $this->verticalAlign = $verticalAlign;
                break;
        }

        return $this;
    }

    /**
     * Set the width.
     *
     * @param float|null $width The width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setWidth(?float $width): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->width = $width;
        return $this;
    }

    /**
     * Set the x.
     *
     * @param float|null $x The x.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setX(?float $x): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param float|null $y The y.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLegend Returns this highcharts legend.
     */
    public function setY(?float $y): \WBW\Library\Highcharts\Model\Chart\HighchartsLegend {
        $this->y = $y;
        return $this;
    }
}
