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
 * Highcharts accessibility.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsAccessibility implements JsonSerializable {

    /**
     * Describe single series.
     *
     * @var bool|null
     * @since 5.0.0
     */
    private $describeSingleSeries = false;

    /**
     * Enabled.
     *
     * @var bool|null
     * @since 5.0.0
     */
    private $enabled = true;

    /**
     * Keyboard navigation.
     *
     * @var mixed[]|null
     * @since 5.0.0
     */
    private $keyboardNavigation;

    /**
     * On table anchor click.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $onTableAnchorClick;

    /**
     * Point date format.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $pointDateFormat;

    /**
     * Point date formatter.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $pointDateFormatter;

    /**
     * Point description formatter.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $pointDescriptionFormatter;

    /**
     * Point description threshold.
     *
     * @var mixed|null
     * @since 5.0.0
     */
    private $pointDescriptionThreshold = "30";

    /**
     * Screen reader section formatter.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $screenReaderSectionFormatter;

    /**
     * Series description formatter.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $seriesDescriptionFormatter;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the describe single series.
     *
     * @return bool|null Returns the describe single series.
     */
    public function getDescribeSingleSeries(): ?bool {
        return $this->describeSingleSeries;
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
     * Get the keyboard navigation.
     *
     * @return mixed[]|null Returns the keyboard navigation.
     */
    public function getKeyboardNavigation(): ?array {
        return $this->keyboardNavigation;
    }

    /**
     * Get the on table anchor click.
     *
     * @return string|null Returns the on table anchor click.
     */
    public function getOnTableAnchorClick(): ?string {
        return $this->onTableAnchorClick;
    }

    /**
     * Get the point date format.
     *
     * @return string|null Returns the point date format.
     */
    public function getPointDateFormat(): ?string {
        return $this->pointDateFormat;
    }

    /**
     * Get the point date formatter.
     *
     * @return string|null Returns the point date formatter.
     */
    public function getPointDateFormatter(): ?string {
        return $this->pointDateFormatter;
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
     * Get the point description threshold.
     *
     * @return mixed Returns the point description threshold.
     */
    public function getPointDescriptionThreshold() {
        return $this->pointDescriptionThreshold;
    }

    /**
     * Get the screen reader section formatter.
     *
     * @return string|null Returns the screen reader section formatter.
     */
    public function getScreenReaderSectionFormatter(): ?string {
        return $this->screenReaderSectionFormatter;
    }

    /**
     * Get the series description formatter.
     *
     * @return string|null Returns the series description formatter.
     */
    public function getSeriesDescriptionFormatter(): ?string {
        return $this->seriesDescriptionFormatter;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "describeSingleSeries", $this->describeSingleSeries, [null]);
        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "keyboardNavigation", $this->keyboardNavigation, [null]);
        ArrayHelper::set($output, "onTableAnchorClick", $this->onTableAnchorClick, [null]);
        ArrayHelper::set($output, "pointDateFormat", $this->pointDateFormat, [null]);
        ArrayHelper::set($output, "pointDateFormatter", $this->pointDateFormatter, [null]);
        ArrayHelper::set($output, "pointDescriptionFormatter", $this->pointDescriptionFormatter, [null]);
        ArrayHelper::set($output, "pointDescriptionThreshold", $this->pointDescriptionThreshold, [null]);
        ArrayHelper::set($output, "screenReaderSectionFormatter", $this->screenReaderSectionFormatter, [null]);
        ArrayHelper::set($output, "seriesDescriptionFormatter", $this->seriesDescriptionFormatter, [null]);

        return $output;
    }

    /**
     * Set the describe single series.
     *
     * @param bool|null $describeSingleSeries The describe single series.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility Returns this highcharts accessibility.
     */
    public function setDescribeSingleSeries(?bool $describeSingleSeries): \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility {
        $this->describeSingleSeries = $describeSingleSeries;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility Returns this highcharts accessibility.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the keyboard navigation.
     *
     * @param mixed[]|null $keyboardNavigation The keyboard navigation.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility Returns this highcharts accessibility.
     */
    public function setKeyboardNavigation(?array $keyboardNavigation): \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility {
        $this->keyboardNavigation = $keyboardNavigation;
        return $this;
    }

    /**
     * Set the on table anchor click.
     *
     * @param string|null $onTableAnchorClick The on table anchor click.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility Returns this highcharts accessibility.
     */
    public function setOnTableAnchorClick(?string $onTableAnchorClick): \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility {
        $this->onTableAnchorClick = $onTableAnchorClick;
        return $this;
    }

    /**
     * Set the point date format.
     *
     * @param string|null $pointDateFormat The point date format.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility Returns this highcharts accessibility.
     */
    public function setPointDateFormat(?string $pointDateFormat): \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility {
        $this->pointDateFormat = $pointDateFormat;
        return $this;
    }

    /**
     * Set the point date formatter.
     *
     * @param string|null $pointDateFormatter The point date formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility Returns this highcharts accessibility.
     */
    public function setPointDateFormatter(?string $pointDateFormatter): \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility {
        $this->pointDateFormatter = $pointDateFormatter;
        return $this;
    }

    /**
     * Set the point description formatter.
     *
     * @param string|null $pointDescriptionFormatter The point description formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility Returns this highcharts accessibility.
     */
    public function setPointDescriptionFormatter(?string $pointDescriptionFormatter): \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility {
        $this->pointDescriptionFormatter = $pointDescriptionFormatter;
        return $this;
    }

    /**
     * Set the point description threshold.
     *
     * @param mixed $pointDescriptionThreshold The point description threshold.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility Returns this highcharts accessibility.
     */
    public function setPointDescriptionThreshold($pointDescriptionThreshold): \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility {
        $this->pointDescriptionThreshold = $pointDescriptionThreshold;
        return $this;
    }

    /**
     * Set the screen reader section formatter.
     *
     * @param string|null $screenReaderSectionFormatter The screen reader section formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility Returns this highcharts accessibility.
     */
    public function setScreenReaderSectionFormatter(?string $screenReaderSectionFormatter): \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility {
        $this->screenReaderSectionFormatter = $screenReaderSectionFormatter;
        return $this;
    }

    /**
     * Set the series description formatter.
     *
     * @param string|null $seriesDescriptionFormatter The series description formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility Returns this highcharts accessibility.
     */
    public function setSeriesDescriptionFormatter(?string $seriesDescriptionFormatter): \WBW\Library\Highcharts\Model\Chart\HighchartsAccessibility {
        $this->seriesDescriptionFormatter = $seriesDescriptionFormatter;
        return $this;
    }
}
