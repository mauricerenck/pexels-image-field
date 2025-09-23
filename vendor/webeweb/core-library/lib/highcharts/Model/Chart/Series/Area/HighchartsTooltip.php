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

namespace WBW\Library\Highcharts\Model\Chart\Series\Area;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts tooltip.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Series\Area
 * @version 5.0.14
 */
class HighchartsTooltip implements JsonSerializable {

    /**
     * Date time label formats.
     *
     * @var mixed[]|null
     */
    private $dateTimeLabelFormats;

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
     * Split.
     *
     * @var bool|null
     * @since 5.0.0
     */
    private $split = false;

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
     * Get the date time label formats.
     *
     * @return mixed[]|null Returns the date time label formats.
     */
    public function getDateTimeLabelFormats(): ?array {
        return $this->dateTimeLabelFormats;
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
     * Get the split.
     *
     * @return bool|null Returns the split.
     */
    public function getSplit(): ?bool {
        return $this->split;
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

        ArrayHelper::set($output, "dateTimeLabelFormats", $this->dateTimeLabelFormats, [null]);
        ArrayHelper::set($output, "followPointer", $this->followPointer, [null]);
        ArrayHelper::set($output, "followTouchMove", $this->followTouchMove, [null]);
        ArrayHelper::set($output, "footerFormat", $this->footerFormat, [null]);
        ArrayHelper::set($output, "headerFormat", $this->headerFormat, [null]);
        ArrayHelper::set($output, "hideDelay", $this->hideDelay, [null]);
        ArrayHelper::set($output, "padding", $this->padding, [null]);
        ArrayHelper::set($output, "pointFormat", $this->pointFormat, [null]);
        ArrayHelper::set($output, "pointFormatter", $this->pointFormatter, [null]);
        ArrayHelper::set($output, "split", $this->split, [null]);
        ArrayHelper::set($output, "valueDecimals", $this->valueDecimals, [null]);
        ArrayHelper::set($output, "valuePrefix", $this->valuePrefix, [null]);
        ArrayHelper::set($output, "valueSuffix", $this->valueSuffix, [null]);
        ArrayHelper::set($output, "xDateFormat", $this->xDateFormat, [null]);

        return $output;
    }

    /**
     * Set the date time label formats.
     *
     * @param mixed[]|null $dateTimeLabelFormats The date time label formats.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setDateTimeLabelFormats(?array $dateTimeLabelFormats): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->dateTimeLabelFormats = $dateTimeLabelFormats;
        return $this;
    }

    /**
     * Set the follow pointer.
     *
     * @param bool|null $followPointer The follow pointer.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setFollowPointer(?bool $followPointer): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->followPointer = $followPointer;
        return $this;
    }

    /**
     * Set the follow touch move.
     *
     * @param bool|null $followTouchMove The follow touch move.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setFollowTouchMove(?bool $followTouchMove): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->followTouchMove = $followTouchMove;
        return $this;
    }

    /**
     * Set the footer format.
     *
     * @param string|null $footerFormat The footer format.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setFooterFormat(?string $footerFormat): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->footerFormat = $footerFormat;
        return $this;
    }

    /**
     * Set the header format.
     *
     * @param string|null $headerFormat The header format.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setHeaderFormat(?string $headerFormat): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->headerFormat = $headerFormat;
        return $this;
    }

    /**
     * Set the hide delay.
     *
     * @param float|null $hideDelay The hide delay.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setHideDelay(?float $hideDelay): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->hideDelay = $hideDelay;
        return $this;
    }

    /**
     * Set the padding.
     *
     * @param float|null $padding The padding.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setPadding(?float $padding): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->padding = $padding;
        return $this;
    }

    /**
     * Set the point format.
     *
     * @param string|null $pointFormat The point format.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setPointFormat(?string $pointFormat): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->pointFormat = $pointFormat;
        return $this;
    }

    /**
     * Set the point formatter.
     *
     * @param string|null $pointFormatter The point formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setPointFormatter(?string $pointFormatter): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->pointFormatter = $pointFormatter;
        return $this;
    }

    /**
     * Set the split.
     *
     * @param bool|null $split The split.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setSplit(?bool $split): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->split = $split;
        return $this;
    }

    /**
     * Set the value decimals.
     *
     * @param float|null $valueDecimals The value decimals.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setValueDecimals(?float $valueDecimals): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->valueDecimals = $valueDecimals;
        return $this;
    }

    /**
     * Set the value prefix.
     *
     * @param string|null $valuePrefix The value prefix.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setValuePrefix(?string $valuePrefix): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->valuePrefix = $valuePrefix;
        return $this;
    }

    /**
     * Set the value suffix.
     *
     * @param string|null $valueSuffix The value suffix.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setValueSuffix(?string $valueSuffix): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->valueSuffix = $valueSuffix;
        return $this;
    }

    /**
     * Set the x date format.
     *
     * @param string|null $xDateFormat The x date format.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip Returns this highcharts tooltip.
     */
    public function setXDateFormat(?string $xDateFormat): \WBW\Library\Highcharts\Model\Chart\Series\Area\HighchartsTooltip {
        $this->xDateFormat = $xDateFormat;
        return $this;
    }
}
