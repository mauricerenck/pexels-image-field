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
 * Highcharts tooltip.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsTooltip implements JsonSerializable {

    /**
     * Animation.
     *
     * @var bool|null
     * @since 2.3.0
     */
    private $animation = true;

    /**
     * Background color.
     *
     * @var string|null
     */
    private $backgroundColor = "rgba(247,247,247,0.85)";

    /**
     * Border color.
     *
     * @var string|null
     */
    private $borderColor;

    /**
     * Border radius.
     *
     * @var float|null
     */
    private $borderRadius = 3;

    /**
     * Border width.
     *
     * @var float|null
     */
    private $borderWidth = 1;

    /**
     * Crosshairs.
     *
     * @var mixed|null
     * @deprecated
     */
    private $crosshairs;

    /**
     * Date time label formats.
     *
     * @var mixed[]|null
     */
    private $dateTimeLabelFormats;

    /**
     * Enabled.
     *
     * @var bool|null
     */
    private $enabled = true;

    /**
     * Follow pointer.
     *
     * @var bool|null
     * @since 3.0
     */
    private $followPointer = false;

    /**
     * Follow touch move.
     *
     * @var bool|null
     * @since 3.0.1
     */
    private $followTouchMove = true;

    /**
     * Footer format.
     *
     * @var string|null
     * @since 2.2
     */
    private $footerFormat = "false";

    /**
     * Formatter.
     *
     * @var string|null
     */
    private $formatter;

    /**
     * Header format.
     *
     * @var string|null
     */
    private $headerFormat;

    /**
     * Hide delay.
     *
     * @var float|null
     * @since 3.0
     */
    private $hideDelay = 500;

    /**
     * Padding.
     *
     * @var float|null
     * @since 5.0.0
     */
    private $padding = 8;

    /**
     * Point format.
     *
     * @var string|null
     * @since 2.2
     */
    private $pointFormat = "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>";

    /**
     * Point formatter.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $pointFormatter;

    /**
     * Positioner.
     *
     * @var string|null
     * @since 2.2.4
     */
    private $positioner;

    /**
     * Shadow.
     *
     * @var bool|null
     */
    private $shadow = true;

    /**
     * Shape.
     *
     * @var string|null
     * @since 4.0
     */
    private $shape = "callout";

    /**
     * Shared.
     *
     * @var bool|null
     * @since 2.1
     */
    private $shared = false;

    /**
     * Snap.
     *
     * @var float|null
     * @since 1.2.0
     */
    private $snap;

    /**
     * Split.
     *
     * @var bool|null
     * @since 5.0.0
     */
    private $split = false;

    /**
     * Style.
     *
     * @var mixed[]|null
     */
    private $style = ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"];

    /**
     * Use HTML.
     *
     * @var bool|null
     * @since 2.2
     */
    private $useHTML = false;

    /**
     * Value decimals.
     *
     * @var float|null
     * @since 2.2
     */
    private $valueDecimals;

    /**
     * Value prefix.
     *
     * @var string|null
     * @since 2.2
     */
    private $valuePrefix;

    /**
     * Value suffix.
     *
     * @var string|null
     * @since 2.2
     */
    private $valueSuffix;

    /**
     * X date format.
     *
     * @var string|null
     */
    private $xDateFormat;

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
     * Get the crosshairs.
     *
     * @return mixed Returns the crosshairs.
     * @deprecated
     */
    public function getCrosshairs() {
        return $this->crosshairs;
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
     * Get the enabled.
     *
     * @return bool|null Returns the enabled.
     */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * Get the follow pointer.
     *
     * @return bool|null Returns the follow pointer.
     */
    public function getFollowPointer(): ?bool {
        return $this->followPointer;
    }

    /**
     * Get the follow touch move.
     *
     * @return bool|null Returns the follow touch move.
     */
    public function getFollowTouchMove(): ?bool {
        return $this->followTouchMove;
    }

    /**
     * Get the footer format.
     *
     * @return string|null Returns the footer format.
     */
    public function getFooterFormat(): ?string {
        return $this->footerFormat;
    }

    /**
     * Get the formatter.
     *
     * @return string|null Returns the formatter.
     */
    public function getFormatter(): ?string {
        return $this->formatter;
    }

    /**
     * Get the header format.
     *
     * @return string|null Returns the header format.
     */
    public function getHeaderFormat(): ?string {
        return $this->headerFormat;
    }

    /**
     * Get the hide delay.
     *
     * @return float|null Returns the hide delay.
     */
    public function getHideDelay(): ?float {
        return $this->hideDelay;
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
     * Get the point format.
     *
     * @return string|null Returns the point format.
     */
    public function getPointFormat(): ?string {
        return $this->pointFormat;
    }

    /**
     * Get the point formatter.
     *
     * @return string|null Returns the point formatter.
     */
    public function getPointFormatter(): ?string {
        return $this->pointFormatter;
    }

    /**
     * Get the positioner.
     *
     * @return string|null Returns the positioner.
     */
    public function getPositioner(): ?string {
        return $this->positioner;
    }

    /**
     * Get the shadow.
     *
     * @return bool|null Returns the shadow.
     */
    public function getShadow(): ?bool {
        return $this->shadow;
    }

    /**
     * Get the shape.
     *
     * @return string|null Returns the shape.
     */
    public function getShape(): ?string {
        return $this->shape;
    }

    /**
     * Get the shared.
     *
     * @return bool|null Returns the shared.
     */
    public function getShared(): ?bool {
        return $this->shared;
    }

    /**
     * Get the snap.
     *
     * @return float|null Returns the snap.
     */
    public function getSnap(): ?float {
        return $this->snap;
    }

    /**
     * Get the split.
     *
     * @return bool|null Returns the split.
     */
    public function getSplit(): ?bool {
        return $this->split;
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
     * Get the use HTML.
     *
     * @return bool|null Returns the use HTML.
     */
    public function getUseHTML(): ?bool {
        return $this->useHTML;
    }

    /**
     * Get the value decimals.
     *
     * @return float|null Returns the value decimals.
     */
    public function getValueDecimals(): ?float {
        return $this->valueDecimals;
    }

    /**
     * Get the value prefix.
     *
     * @return string|null Returns the value prefix.
     */
    public function getValuePrefix(): ?string {
        return $this->valuePrefix;
    }

    /**
     * Get the value suffix.
     *
     * @return string|null Returns the value suffix.
     */
    public function getValueSuffix(): ?string {
        return $this->valueSuffix;
    }

    /**
     * Get the x date format.
     *
     * @return string|null Returns the x date format.
     */
    public function getXDateFormat(): ?string {
        return $this->xDateFormat;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "animation", $this->animation, [null]);
        ArrayHelper::set($output, "backgroundColor", $this->backgroundColor, [null]);
        ArrayHelper::set($output, "borderColor", $this->borderColor, [null]);
        ArrayHelper::set($output, "borderRadius", $this->borderRadius, [null]);
        ArrayHelper::set($output, "borderWidth", $this->borderWidth, [null]);
        ArrayHelper::set($output, "crosshairs", $this->crosshairs, [null]);
        ArrayHelper::set($output, "dateTimeLabelFormats", $this->dateTimeLabelFormats, [null]);
        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "followPointer", $this->followPointer, [null]);
        ArrayHelper::set($output, "followTouchMove", $this->followTouchMove, [null]);
        ArrayHelper::set($output, "footerFormat", $this->footerFormat, [null]);
        ArrayHelper::set($output, "formatter", $this->formatter, [null]);
        ArrayHelper::set($output, "headerFormat", $this->headerFormat, [null]);
        ArrayHelper::set($output, "hideDelay", $this->hideDelay, [null]);
        ArrayHelper::set($output, "padding", $this->padding, [null]);
        ArrayHelper::set($output, "pointFormat", $this->pointFormat, [null]);
        ArrayHelper::set($output, "pointFormatter", $this->pointFormatter, [null]);
        ArrayHelper::set($output, "positioner", $this->positioner, [null]);
        ArrayHelper::set($output, "shadow", $this->shadow, [null]);
        ArrayHelper::set($output, "shape", $this->shape, [null]);
        ArrayHelper::set($output, "shared", $this->shared, [null]);
        ArrayHelper::set($output, "snap", $this->snap, [null]);
        ArrayHelper::set($output, "split", $this->split, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);
        ArrayHelper::set($output, "useHTML", $this->useHTML, [null]);
        ArrayHelper::set($output, "valueDecimals", $this->valueDecimals, [null]);
        ArrayHelper::set($output, "valuePrefix", $this->valuePrefix, [null]);
        ArrayHelper::set($output, "valueSuffix", $this->valueSuffix, [null]);
        ArrayHelper::set($output, "xDateFormat", $this->xDateFormat, [null]);

        return $output;
    }

    /**
     * Set the animation.
     *
     * @param bool|null $animation The animation.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setAnimation(?bool $animation): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the background color.
     *
     * @param string|null $backgroundColor The background color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setBackgroundColor(?string $backgroundColor): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setBorderColor(?string $borderColor): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border radius.
     *
     * @param float|null $borderRadius The border radius.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setBorderRadius(?float $borderRadius): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param float|null $borderWidth The border width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setBorderWidth(?float $borderWidth): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the crosshairs.
     *
     * @param mixed $crosshairs The crosshairs.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     * @deprecated
     */
    public function setCrosshairs($crosshairs): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->crosshairs = $crosshairs;
        return $this;
    }

    /**
     * Set the date time label formats.
     *
     * @param mixed[]|null $dateTimeLabelFormats The date time label formats.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setDateTimeLabelFormats(?array $dateTimeLabelFormats): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->dateTimeLabelFormats = $dateTimeLabelFormats;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the follow pointer.
     *
     * @param bool|null $followPointer The follow pointer.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setFollowPointer(?bool $followPointer): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->followPointer = $followPointer;
        return $this;
    }

    /**
     * Set the follow touch move.
     *
     * @param bool|null $followTouchMove The follow touch move.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setFollowTouchMove(?bool $followTouchMove): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->followTouchMove = $followTouchMove;
        return $this;
    }

    /**
     * Set the footer format.
     *
     * @param string|null $footerFormat The footer format.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setFooterFormat(?string $footerFormat): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->footerFormat = $footerFormat;
        return $this;
    }

    /**
     * Set the formatter.
     *
     * @param string|null $formatter The formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setFormatter(?string $formatter): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->formatter = $formatter;
        return $this;
    }

    /**
     * Set the header format.
     *
     * @param string|null $headerFormat The header format.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setHeaderFormat(?string $headerFormat): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->headerFormat = $headerFormat;
        return $this;
    }

    /**
     * Set the hide delay.
     *
     * @param float|null $hideDelay The hide delay.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setHideDelay(?float $hideDelay): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->hideDelay = $hideDelay;
        return $this;
    }

    /**
     * Set the padding.
     *
     * @param float|null $padding The padding.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setPadding(?float $padding): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->padding = $padding;
        return $this;
    }

    /**
     * Set the point format.
     *
     * @param string|null $pointFormat The point format.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setPointFormat(?string $pointFormat): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->pointFormat = $pointFormat;
        return $this;
    }

    /**
     * Set the point formatter.
     *
     * @param string|null $pointFormatter The point formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setPointFormatter(?string $pointFormatter): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->pointFormatter = $pointFormatter;
        return $this;
    }

    /**
     * Set the positioner.
     *
     * @param string|null $positioner The positioner.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setPositioner(?string $positioner): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->positioner = $positioner;
        return $this;
    }

    /**
     * Set the shadow.
     *
     * @param bool|null $shadow The shadow.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setShadow(?bool $shadow): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * Set the shape.
     *
     * @param string|null $shape The shape.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setShape(?string $shape): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->shape = $shape;
        return $this;
    }

    /**
     * Set the shared.
     *
     * @param bool|null $shared The shared.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setShared(?bool $shared): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->shared = $shared;
        return $this;
    }

    /**
     * Set the snap.
     *
     * @param float|null $snap The snap.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setSnap(?float $snap): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->snap = $snap;
        return $this;
    }

    /**
     * Set the split.
     *
     * @param bool|null $split The split.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setSplit(?bool $split): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->split = $split;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the use HTML.
     *
     * @param bool|null $useHTML The use HTML.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setUseHTML(?bool $useHTML): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->useHTML = $useHTML;
        return $this;
    }

    /**
     * Set the value decimals.
     *
     * @param float|null $valueDecimals The value decimals.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setValueDecimals(?float $valueDecimals): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->valueDecimals = $valueDecimals;
        return $this;
    }

    /**
     * Set the value prefix.
     *
     * @param string|null $valuePrefix The value prefix.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setValuePrefix(?string $valuePrefix): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->valuePrefix = $valuePrefix;
        return $this;
    }

    /**
     * Set the value suffix.
     *
     * @param string|null $valueSuffix The value suffix.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setValueSuffix(?string $valueSuffix): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->valueSuffix = $valueSuffix;
        return $this;
    }

    /**
     * Set the x date format.
     *
     * @param string|null $xDateFormat The x date format.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setXDateFormat(?string $xDateFormat): \WBW\Library\Highcharts\Model\Chart\HighchartsTooltip {
        $this->xDateFormat = $xDateFormat;
        return $this;
    }
}
