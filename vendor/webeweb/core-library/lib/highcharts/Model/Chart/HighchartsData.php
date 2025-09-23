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
 * Highcharts data.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsData implements JsonSerializable {

    /**
     * Columns.
     *
     * @var mixed[]|null
     * @since 4.0
     */
    private $columns;

    /**
     * Complete.
     *
     * @var string|null
     * @since 4.0
     */
    private $complete;

    /**
     * Csv.
     *
     * @var string|null
     * @since 4.0
     */
    private $csv;

    /**
     * Date format.
     *
     * @var string|null
     * @since 4.0
     */
    private $dateFormat;

    /**
     * Decimal point.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $decimalPoint = ".";

    /**
     * End column.
     *
     * @var float|null
     * @since 4.0
     */
    private $endColumn;

    /**
     * End row.
     *
     * @var float|null
     * @since 4.0.4
     */
    private $endRow;

    /**
     * First row as names.
     *
     * @var bool|null
     * @since 4.1.0
     */
    private $firstRowAsNames = true;

    /**
     * Google spreadsheet key.
     *
     * @var string|null
     * @since 4.0
     */
    private $googleSpreadsheetKey;

    /**
     * Google spreadsheet worksheet.
     *
     * @var string|null
     * @since 4.0
     */
    private $googleSpreadsheetWorksheet;

    /**
     * Item delimiter.
     *
     * @var string|null
     * @since 4.0
     */
    private $itemDelimiter;

    /**
     * Line delimiter.
     *
     * @var string|null
     * @since 4.0
     */
    private $lineDelimiter = "\\n";

    /**
     * Parse date.
     *
     * @var string|null
     * @since 4.0
     */
    private $parseDate;

    /**
     * Parsed.
     *
     * @var string|null
     * @since 4.0
     */
    private $parsed;

    /**
     * Rows.
     *
     * @var mixed[]|null
     * @since 4.0
     */
    private $rows;

    /**
     * Series mapping.
     *
     * @var mixed[]|null
     * @since 4.0.4
     */
    private $seriesMapping;

    /**
     * Start column.
     *
     * @var float|null
     * @since 4.0
     */
    private $startColumn = 0;

    /**
     * Start row.
     *
     * @var float|null
     * @since 4.0
     */
    private $startRow = 0;

    /**
     * Switch rows and columns.
     *
     * @var bool|null
     * @since 4.0
     */
    private $switchRowsAndColumns = false;

    /**
     * Table.
     *
     * @var mixed|null
     * @since 4.0
     */
    private $table;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the columns.
     *
     * @return mixed[]|null Returns the columns.
     */
    public function getColumns(): ?array {
        return $this->columns;
    }

    /**
     * Get the complete.
     *
     * @return string|null Returns the complete.
     */
    public function getComplete(): ?string {
        return $this->complete;
    }

    /**
     * Get the csv.
     *
     * @return string|null Returns the csv.
     */
    public function getCsv(): ?string {
        return $this->csv;
    }

    /**
     * Get the date format.
     *
     * @return string|null Returns the date format.
     */
    public function getDateFormat(): ?string {
        return $this->dateFormat;
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
     * Get the end column.
     *
     * @return float|null Returns the end column.
     */
    public function getEndColumn(): ?float {
        return $this->endColumn;
    }

    /**
     * Get the end row.
     *
     * @return float|null Returns the end row.
     */
    public function getEndRow(): ?float {
        return $this->endRow;
    }

    /**
     * Get the first row as names.
     *
     * @return bool|null Returns the first row as names.
     */
    public function getFirstRowAsNames(): ?bool {
        return $this->firstRowAsNames;
    }

    /**
     * Get the google spreadsheet key.
     *
     * @return string|null Returns the google spreadsheet key.
     */
    public function getGoogleSpreadsheetKey(): ?string {
        return $this->googleSpreadsheetKey;
    }

    /**
     * Get the google spreadsheet worksheet.
     *
     * @return string|null Returns the google spreadsheet worksheet.
     */
    public function getGoogleSpreadsheetWorksheet(): ?string {
        return $this->googleSpreadsheetWorksheet;
    }

    /**
     * Get the item delimiter.
     *
     * @return string|null Returns the item delimiter.
     */
    public function getItemDelimiter(): ?string {
        return $this->itemDelimiter;
    }

    /**
     * Get the line delimiter.
     *
     * @return string|null Returns the line delimiter.
     */
    public function getLineDelimiter(): ?string {
        return $this->lineDelimiter;
    }

    /**
     * Get the parse date.
     *
     * @return string|null Returns the parse date.
     */
    public function getParseDate(): ?string {
        return $this->parseDate;
    }

    /**
     * Get the parsed.
     *
     * @return string|null Returns the parsed.
     */
    public function getParsed(): ?string {
        return $this->parsed;
    }

    /**
     * Get the rows.
     *
     * @return mixed[]|null Returns the rows.
     */
    public function getRows(): ?array {
        return $this->rows;
    }

    /**
     * Get the series mapping.
     *
     * @return mixed[]|null Returns the series mapping.
     */
    public function getSeriesMapping(): ?array {
        return $this->seriesMapping;
    }

    /**
     * Get the start column.
     *
     * @return float|null Returns the start column.
     */
    public function getStartColumn(): ?float {
        return $this->startColumn;
    }

    /**
     * Get the start row.
     *
     * @return float|null Returns the start row.
     */
    public function getStartRow(): ?float {
        return $this->startRow;
    }

    /**
     * Get the switch rows and columns.
     *
     * @return bool|null Returns the switch rows and columns.
     */
    public function getSwitchRowsAndColumns(): ?bool {
        return $this->switchRowsAndColumns;
    }

    /**
     * Get the table.
     *
     * @return mixed Returns the table.
     */
    public function getTable() {
        return $this->table;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "columns", $this->columns, [null]);
        ArrayHelper::set($output, "complete", $this->complete, [null]);
        ArrayHelper::set($output, "csv", $this->csv, [null]);
        ArrayHelper::set($output, "dateFormat", $this->dateFormat, [null]);
        ArrayHelper::set($output, "decimalPoint", $this->decimalPoint, [null]);
        ArrayHelper::set($output, "endColumn", $this->endColumn, [null]);
        ArrayHelper::set($output, "endRow", $this->endRow, [null]);
        ArrayHelper::set($output, "firstRowAsNames", $this->firstRowAsNames, [null]);
        ArrayHelper::set($output, "googleSpreadsheetKey", $this->googleSpreadsheetKey, [null]);
        ArrayHelper::set($output, "googleSpreadsheetWorksheet", $this->googleSpreadsheetWorksheet, [null]);
        ArrayHelper::set($output, "itemDelimiter", $this->itemDelimiter, [null]);
        ArrayHelper::set($output, "lineDelimiter", $this->lineDelimiter, [null]);
        ArrayHelper::set($output, "parseDate", $this->parseDate, [null]);
        ArrayHelper::set($output, "parsed", $this->parsed, [null]);
        ArrayHelper::set($output, "rows", $this->rows, [null]);
        ArrayHelper::set($output, "seriesMapping", $this->seriesMapping, [null]);
        ArrayHelper::set($output, "startColumn", $this->startColumn, [null]);
        ArrayHelper::set($output, "startRow", $this->startRow, [null]);
        ArrayHelper::set($output, "switchRowsAndColumns", $this->switchRowsAndColumns, [null]);
        ArrayHelper::set($output, "table", $this->table, [null]);

        return $output;
    }

    /**
     * Set the columns.
     *
     * @param mixed[]|null $columns The columns.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setColumns(?array $columns): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Set the complete.
     *
     * @param string|null $complete The complete.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setComplete(?string $complete): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->complete = $complete;
        return $this;
    }

    /**
     * Set the csv.
     *
     * @param string|null $csv The csv.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setCsv(?string $csv): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->csv = $csv;
        return $this;
    }

    /**
     * Set the date format.
     *
     * @param string|null $dateFormat The date format.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setDateFormat(?string $dateFormat): \WBW\Library\Highcharts\Model\Chart\HighchartsData {

        switch ($dateFormat) {

            case null:
            case "YYYY-mm-dd":
            case "dd/mm/YY":
            case "dd/mm/YYYY":
            case "mm/dd/YY":
            case "mm/dd/YYYY":
                $this->dateFormat = $dateFormat;
                break;
        }

        return $this;
    }

    /**
     * Set the decimal point.
     *
     * @param string|null $decimalPoint The decimal point.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setDecimalPoint(?string $decimalPoint): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->decimalPoint = $decimalPoint;
        return $this;
    }

    /**
     * Set the end column.
     *
     * @param float|null $endColumn The end column.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setEndColumn(?float $endColumn): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->endColumn = $endColumn;
        return $this;
    }

    /**
     * Set the end row.
     *
     * @param float|null $endRow The end row.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setEndRow(?float $endRow): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->endRow = $endRow;
        return $this;
    }

    /**
     * Set the first row as names.
     *
     * @param bool|null $firstRowAsNames The first row as names.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setFirstRowAsNames(?bool $firstRowAsNames): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->firstRowAsNames = $firstRowAsNames;
        return $this;
    }

    /**
     * Set the google spreadsheet key.
     *
     * @param string|null $googleSpreadsheetKey The google spreadsheet key.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setGoogleSpreadsheetKey(?string $googleSpreadsheetKey): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->googleSpreadsheetKey = $googleSpreadsheetKey;
        return $this;
    }

    /**
     * Set the google spreadsheet worksheet.
     *
     * @param string|null $googleSpreadsheetWorksheet The google spreadsheet worksheet.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setGoogleSpreadsheetWorksheet(?string $googleSpreadsheetWorksheet): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->googleSpreadsheetWorksheet = $googleSpreadsheetWorksheet;
        return $this;
    }

    /**
     * Set the item delimiter.
     *
     * @param string|null $itemDelimiter The item delimiter.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setItemDelimiter(?string $itemDelimiter): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->itemDelimiter = $itemDelimiter;
        return $this;
    }

    /**
     * Set the line delimiter.
     *
     * @param string|null $lineDelimiter The line delimiter.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setLineDelimiter(?string $lineDelimiter): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->lineDelimiter = $lineDelimiter;
        return $this;
    }

    /**
     * Set the parse date.
     *
     * @param string|null $parseDate The parse date.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setParseDate(?string $parseDate): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->parseDate = $parseDate;
        return $this;
    }

    /**
     * Set the parsed.
     *
     * @param string|null $parsed The parsed.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setParsed(?string $parsed): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->parsed = $parsed;
        return $this;
    }

    /**
     * Set the rows.
     *
     * @param mixed[]|null $rows The rows.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setRows(?array $rows): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->rows = $rows;
        return $this;
    }

    /**
     * Set the series mapping.
     *
     * @param mixed[]|null $seriesMapping The series mapping.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setSeriesMapping(?array $seriesMapping): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->seriesMapping = $seriesMapping;
        return $this;
    }

    /**
     * Set the start column.
     *
     * @param float|null $startColumn The start column.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setStartColumn(?float $startColumn): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->startColumn = $startColumn;
        return $this;
    }

    /**
     * Set the start row.
     *
     * @param float|null $startRow The start row.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setStartRow(?float $startRow): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->startRow = $startRow;
        return $this;
    }

    /**
     * Set the switch rows and columns.
     *
     * @param bool|null $switchRowsAndColumns The switch rows and columns.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setSwitchRowsAndColumns(?bool $switchRowsAndColumns): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->switchRowsAndColumns = $switchRowsAndColumns;
        return $this;
    }

    /**
     * Set the table.
     *
     * @param mixed $table The table.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsData Returns this highcharts data.
     */
    public function setTable($table): \WBW\Library\Highcharts\Model\Chart\HighchartsData {
        $this->table = $table;
        return $this;
    }
}
