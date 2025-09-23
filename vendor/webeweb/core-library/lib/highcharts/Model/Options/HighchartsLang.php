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

namespace WBW\Library\Highcharts\Model\Options;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts lang.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Options
 * @version 5.0.14
 */
class HighchartsLang implements JsonSerializable {

    /**
     * Context button title.
     *
     * @var string|null
     * @since 3.0
     */
    private $contextButtonTitle = "Chart context menu";

    /**
     * Decimal point.
     *
     * @var string|null
     * @since 1.2.2
     */
    private $decimalPoint = ".";

    /**
     * Download JPEG.
     *
     * @var string|null
     * @since 2.0
     */
    private $downloadJPEG = "Download JPEG image";

    /**
     * Download PDF.
     *
     * @var string|null
     * @since 2.0
     */
    private $downloadPDF = "Download PDF document";

    /**
     * Download PNG.
     *
     * @var string|null
     * @since 2.0
     */
    private $downloadPNG = "Download PNG image";

    /**
     * Download SVG.
     *
     * @var string|null
     * @since 2.0
     */
    private $downloadSVG = "Download SVG vector image";

    /**
     * Drill up text.
     *
     * @var string|null
     * @since 3.0.8
     */
    private $drillUpText = "Back to {series.name}";

    /**
     * Invalid date.
     *
     * @var string|null
     * @since 4.1.8
     */
    private $invalidDate;

    /**
     * Loading.
     *
     * @var string|null
     */
    private $loading = "Loading...";

    /**
     * Months.
     *
     * @var mixed[]|null
     */
    private $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    /**
     * No data.
     *
     * @var string|null
     * @since 3.0.8
     */
    private $noData = "No data to display";

    /**
     * Numeric symbol magnitude.
     *
     * @var float|null
     * @since 5.0.3
     */
    private $numericSymbolMagnitude = 1000;

    /**
     * Numeric symbols.
     *
     * @var mixed[]|null
     * @since 2.3.0
     */
    private $numericSymbols = ["k", "M", "G", "T", "P", "E"];

    /**
     * Print chart.
     *
     * @var string|null
     * @since 3.0.1
     */
    private $printChart = "Print chart";

    /**
     * Reset zoom.
     *
     * @var string|null
     * @since 1.2.4
     */
    private $resetZoom = "Reset zoom";

    /**
     * Reset zoom title.
     *
     * @var string|null
     * @since 1.2.4
     */
    private $resetZoomTitle = "Reset zoom level 1:1";

    /**
     * Short months.
     *
     * @var mixed[]|null
     */
    private $shortMonths = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    /**
     * Short weekdays.
     *
     * @var mixed[]|null
     * @since 4.2.4
     */
    private $shortWeekdays;

    /**
     * Thousands sep.
     *
     * @var string|null
     * @since 1.2.2
     */
    private $thousandsSep;

    /**
     * Weekdays.
     *
     * @var mixed[]|null
     */
    private $weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the context button title.
     *
     * @return string|null Returns the context button title.
     */
    public function getContextButtonTitle(): ?string {
        return $this->contextButtonTitle;
    }

    /**
     * Get the decimal point.
     *
     * @return string|null Returns the decimal point.
     */
    public function getDecimalPoint(): ?string {
        return $this->decimalPoint;
    }

    /**
     * Get the download JPEG.
     *
     * @return string|null Returns the download JPEG.
     */
    public function getDownloadJPEG(): ?string {
        return $this->downloadJPEG;
    }

    /**
     * Get the download PDF.
     *
     * @return string|null Returns the download PDF.
     */
    public function getDownloadPDF(): ?string {
        return $this->downloadPDF;
    }

    /**
     * Get the download PNG.
     *
     * @return string|null Returns the download PNG.
     */
    public function getDownloadPNG(): ?string {
        return $this->downloadPNG;
    }

    /**
     * Get the download SVG.
     *
     * @return string|null Returns the download SVG.
     */
    public function getDownloadSVG(): ?string {
        return $this->downloadSVG;
    }

    /**
     * Get the drill up text.
     *
     * @return string|null Returns the drill up text.
     */
    public function getDrillUpText(): ?string {
        return $this->drillUpText;
    }

    /**
     * Get the invalid date.
     *
     * @return string|null Returns the invalid date.
     */
    public function getInvalidDate(): ?string {
        return $this->invalidDate;
    }

    /**
     * Get the loading.
     *
     * @return string|null Returns the loading.
     */
    public function getLoading(): ?string {
        return $this->loading;
    }

    /**
     * Get the months.
     *
     * @return mixed[]|null Returns the months.
     */
    public function getMonths(): ?array {
        return $this->months;
    }

    /**
     * Get the no data.
     *
     * @return string|null Returns the no data.
     */
    public function getNoData(): ?string {
        return $this->noData;
    }

    /**
     * Get the numeric symbol magnitude.
     *
     * @return float|null Returns the numeric symbol magnitude.
     */
    public function getNumericSymbolMagnitude(): ?float {
        return $this->numericSymbolMagnitude;
    }

    /**
     * Get the numeric symbols.
     *
     * @return mixed[]|null Returns the numeric symbols.
     */
    public function getNumericSymbols(): ?array {
        return $this->numericSymbols;
    }

    /**
     * Get the print chart.
     *
     * @return string|null Returns the print chart.
     */
    public function getPrintChart(): ?string {
        return $this->printChart;
    }

    /**
     * Get the reset zoom.
     *
     * @return string|null Returns the reset zoom.
     */
    public function getResetZoom(): ?string {
        return $this->resetZoom;
    }

    /**
     * Get the reset zoom title.
     *
     * @return string|null Returns the reset zoom title.
     */
    public function getResetZoomTitle(): ?string {
        return $this->resetZoomTitle;
    }

    /**
     * Get the short months.
     *
     * @return mixed[]|null Returns the short months.
     */
    public function getShortMonths(): ?array {
        return $this->shortMonths;
    }

    /**
     * Get the short weekdays.
     *
     * @return mixed[]|null Returns the short weekdays.
     */
    public function getShortWeekdays(): ?array {
        return $this->shortWeekdays;
    }

    /**
     * Get the thousands sep.
     *
     * @return string|null Returns the thousands sep.
     */
    public function getThousandsSep(): ?string {
        return $this->thousandsSep;
    }

    /**
     * Get the weekdays.
     *
     * @return mixed[]|null Returns the weekdays.
     */
    public function getWeekdays(): ?array {
        return $this->weekdays;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "contextButtonTitle", $this->contextButtonTitle, [null]);
        ArrayHelper::set($output, "decimalPoint", $this->decimalPoint, [null]);
        ArrayHelper::set($output, "downloadJPEG", $this->downloadJPEG, [null]);
        ArrayHelper::set($output, "downloadPDF", $this->downloadPDF, [null]);
        ArrayHelper::set($output, "downloadPNG", $this->downloadPNG, [null]);
        ArrayHelper::set($output, "downloadSVG", $this->downloadSVG, [null]);
        ArrayHelper::set($output, "drillUpText", $this->drillUpText, [null]);
        ArrayHelper::set($output, "invalidDate", $this->invalidDate, [null]);
        ArrayHelper::set($output, "loading", $this->loading, [null]);
        ArrayHelper::set($output, "months", $this->months, [null]);
        ArrayHelper::set($output, "noData", $this->noData, [null]);
        ArrayHelper::set($output, "numericSymbolMagnitude", $this->numericSymbolMagnitude, [null]);
        ArrayHelper::set($output, "numericSymbols", $this->numericSymbols, [null]);
        ArrayHelper::set($output, "printChart", $this->printChart, [null]);
        ArrayHelper::set($output, "resetZoom", $this->resetZoom, [null]);
        ArrayHelper::set($output, "resetZoomTitle", $this->resetZoomTitle, [null]);
        ArrayHelper::set($output, "shortMonths", $this->shortMonths, [null]);
        ArrayHelper::set($output, "shortWeekdays", $this->shortWeekdays, [null]);
        ArrayHelper::set($output, "thousandsSep", $this->thousandsSep, [null]);
        ArrayHelper::set($output, "weekdays", $this->weekdays, [null]);

        return $output;
    }

    /**
     * Set the context button title.
     *
     * @param string|null $contextButtonTitle The context button title.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setContextButtonTitle(?string $contextButtonTitle): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->contextButtonTitle = $contextButtonTitle;
        return $this;
    }

    /**
     * Set the decimal point.
     *
     * @param string|null $decimalPoint The decimal point.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setDecimalPoint(?string $decimalPoint): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->decimalPoint = $decimalPoint;
        return $this;
    }

    /**
     * Set the download JPEG.
     *
     * @param string|null $downloadJPEG The download JPEG.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setDownloadJPEG(?string $downloadJPEG): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->downloadJPEG = $downloadJPEG;
        return $this;
    }

    /**
     * Set the download PDF.
     *
     * @param string|null $downloadPDF The download PDF.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setDownloadPDF(?string $downloadPDF): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->downloadPDF = $downloadPDF;
        return $this;
    }

    /**
     * Set the download PNG.
     *
     * @param string|null $downloadPNG The download PNG.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setDownloadPNG(?string $downloadPNG): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->downloadPNG = $downloadPNG;
        return $this;
    }

    /**
     * Set the download SVG.
     *
     * @param string|null $downloadSVG The download SVG.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setDownloadSVG(?string $downloadSVG): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->downloadSVG = $downloadSVG;
        return $this;
    }

    /**
     * Set the drill up text.
     *
     * @param string|null $drillUpText The drill up text.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setDrillUpText(?string $drillUpText): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->drillUpText = $drillUpText;
        return $this;
    }

    /**
     * Set the invalid date.
     *
     * @param string|null $invalidDate The invalid date.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setInvalidDate(?string $invalidDate): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->invalidDate = $invalidDate;
        return $this;
    }

    /**
     * Set the loading.
     *
     * @param string|null $loading The loading.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setLoading(?string $loading): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->loading = $loading;
        return $this;
    }

    /**
     * Set the months.
     *
     * @param mixed[]|null $months The months.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setMonths(?array $months): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->months = $months;
        return $this;
    }

    /**
     * Set the no data.
     *
     * @param string|null $noData The no data.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setNoData(?string $noData): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->noData = $noData;
        return $this;
    }

    /**
     * Set the numeric symbol magnitude.
     *
     * @param float|null $numericSymbolMagnitude The numeric symbol magnitude.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setNumericSymbolMagnitude(?float $numericSymbolMagnitude): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->numericSymbolMagnitude = $numericSymbolMagnitude;
        return $this;
    }

    /**
     * Set the numeric symbols.
     *
     * @param mixed[]|null $numericSymbols The numeric symbols.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setNumericSymbols(?array $numericSymbols): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->numericSymbols = $numericSymbols;
        return $this;
    }

    /**
     * Set the print chart.
     *
     * @param string|null $printChart The print chart.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setPrintChart(?string $printChart): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->printChart = $printChart;
        return $this;
    }

    /**
     * Set the reset zoom.
     *
     * @param string|null $resetZoom The reset zoom.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setResetZoom(?string $resetZoom): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->resetZoom = $resetZoom;
        return $this;
    }

    /**
     * Set the reset zoom title.
     *
     * @param string|null $resetZoomTitle The reset zoom title.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setResetZoomTitle(?string $resetZoomTitle): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->resetZoomTitle = $resetZoomTitle;
        return $this;
    }

    /**
     * Set the short months.
     *
     * @param mixed[]|null $shortMonths The short months.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setShortMonths(?array $shortMonths): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->shortMonths = $shortMonths;
        return $this;
    }

    /**
     * Set the short weekdays.
     *
     * @param mixed[]|null $shortWeekdays The short weekdays.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setShortWeekdays(?array $shortWeekdays): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->shortWeekdays = $shortWeekdays;
        return $this;
    }

    /**
     * Set the thousands sep.
     *
     * @param string|null $thousandsSep The thousands sep.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setThousandsSep(?string $thousandsSep): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->thousandsSep = $thousandsSep;
        return $this;
    }

    /**
     * Set the weekdays.
     *
     * @param mixed[]|null $weekdays The weekdays.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns this highcharts lang.
     */
    public function setWeekdays(?array $weekdays): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->weekdays = $weekdays;
        return $this;
    }
}
