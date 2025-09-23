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
 * Highcharts exporting.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsExporting implements JsonSerializable {

    /**
     * Allow HTML.
     *
     * @var bool|null
     * @since 4.1.8
     */
    private $allowHTML = false;

    /**
     * Buttons.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons|null
     */
    private $buttons;

    /**
     * Chart options.
     *
     * @var mixed[]|null
     */
    private $chartOptions;

    /**
     * Enabled.
     *
     * @var bool|null
     * @since 2.0
     */
    private $enabled = true;

    /**
     * Error.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $error;

    /**
     * Fallback to export server.
     *
     * @var bool|null
     * @since 4.1.8
     */
    private $fallbackToExportServer = true;

    /**
     * Filename.
     *
     * @var string|null
     * @since 2.0
     */
    private $filename = "chart";

    /**
     * Form attributes.
     *
     * @var mixed[]|null
     * @since 3.0.8
     */
    private $formAttributes;

    /**
     * Lib URL.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $libURL = "https://code.highcharts.com/{version}/lib";

    /**
     * Menu item definitions.
     *
     * @var mixed[]|null
     * @since 5.0.13
     */
    private $menuItemDefinitions;

    /**
     * Print max width.
     *
     * @var float|null
     * @since 4.2.5
     */
    private $printMaxWidth = 780;

    /**
     * Scale.
     *
     * @var float|null
     * @since 3.0
     */
    private $scale = 2;

    /**
     * Source height.
     *
     * @var float|null
     * @since 3.0
     */
    private $sourceHeight;

    /**
     * Source width.
     *
     * @var float|null
     * @since 3.0
     */
    private $sourceWidth;

    /**
     * Type.
     *
     * @var string|null
     * @since 2.0
     */
    private $type = "image/png";

    /**
     * Url.
     *
     * @var string|null
     * @since 2.0
     */
    private $url = "https://export.highcharts.com";

    /**
     * Width.
     *
     * @var float|null
     * @since 2.0
     */
    private $width;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the allow HTML.
     *
     * @return bool|null Returns the allow HTML.
     */
    public function getAllowHTML(): ?bool {
        return $this->allowHTML;
    }

    /**
     * Get the buttons.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons|null Returns the buttons.
     */
    public function getButtons(): ?\WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons {
        return $this->buttons;
    }

    /**
     * Get the chart options.
     *
     * @return mixed[]|null Returns the chart options.
     */
    public function getChartOptions(): ?array {
        return $this->chartOptions;
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
     * Get the error.
     *
     * @return string|null Returns the error.
     */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * Get the fallback to export server.
     *
     * @return bool|null Returns the fallback to export server.
     */
    public function getFallbackToExportServer(): ?bool {
        return $this->fallbackToExportServer;
    }

    /**
     * Get the filename.
     *
     * @return string|null Returns the filename.
     */
    public function getFilename(): ?string {
        return $this->filename;
    }

    /**
     * Get the form attributes.
     *
     * @return mixed[]|null Returns the form attributes.
     */
    public function getFormAttributes(): ?array {
        return $this->formAttributes;
    }

    /**
     * Get the lib URL.
     *
     * @return string|null Returns the lib URL.
     */
    public function getLibURL(): ?string {
        return $this->libURL;
    }

    /**
     * Get the menu item definitions.
     *
     * @return mixed[]|null Returns the menu item definitions.
     */
    public function getMenuItemDefinitions(): ?array {
        return $this->menuItemDefinitions;
    }

    /**
     * Get the print max width.
     *
     * @return float|null Returns the print max width.
     */
    public function getPrintMaxWidth(): ?float {
        return $this->printMaxWidth;
    }

    /**
     * Get the scale.
     *
     * @return float|null Returns the scale.
     */
    public function getScale(): ?float {
        return $this->scale;
    }

    /**
     * Get the source height.
     *
     * @return float|null Returns the source height.
     */
    public function getSourceHeight(): ?float {
        return $this->sourceHeight;
    }

    /**
     * Get the source width.
     *
     * @return float|null Returns the source width.
     */
    public function getSourceWidth(): ?float {
        return $this->sourceWidth;
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
     * Get the url.
     *
     * @return string|null Returns the url.
     */
    public function getUrl(): ?string {
        return $this->url;
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
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "allowHTML", $this->allowHTML, [null]);
        if (null !== $this->buttons) {
            ArrayHelper::set($output, "buttons", $this->buttons->jsonSerialize());
        }
        ArrayHelper::set($output, "chartOptions", $this->chartOptions, [null]);
        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "error", $this->error, [null]);
        ArrayHelper::set($output, "fallbackToExportServer", $this->fallbackToExportServer, [null]);
        ArrayHelper::set($output, "filename", $this->filename, [null]);
        ArrayHelper::set($output, "formAttributes", $this->formAttributes, [null]);
        ArrayHelper::set($output, "libURL", $this->libURL, [null]);
        ArrayHelper::set($output, "menuItemDefinitions", $this->menuItemDefinitions, [null]);
        ArrayHelper::set($output, "printMaxWidth", $this->printMaxWidth, [null]);
        ArrayHelper::set($output, "scale", $this->scale, [null]);
        ArrayHelper::set($output, "sourceHeight", $this->sourceHeight, [null]);
        ArrayHelper::set($output, "sourceWidth", $this->sourceWidth, [null]);
        ArrayHelper::set($output, "type", $this->type, [null]);
        ArrayHelper::set($output, "url", $this->url, [null]);
        ArrayHelper::set($output, "width", $this->width, [null]);

        return $output;
    }

    /**
     * Create a new buttons.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons Returns the buttons.
     */
    public function newButtons(): \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons {
        $this->buttons = new \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons();
        return $this->buttons;
    }

    /**
     * Set the allow HTML.
     *
     * @param bool|null $allowHTML The allow HTML.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setAllowHTML(?bool $allowHTML): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->allowHTML = $allowHTML;
        return $this;
    }

    /**
     * Set the buttons.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons|null $buttons The buttons.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setButtons(?\WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons $buttons): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->buttons = $buttons;
        return $this;
    }

    /**
     * Set the chart options.
     *
     * @param mixed[]|null $chartOptions The chart options.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setChartOptions(?array $chartOptions): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->chartOptions = $chartOptions;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the error.
     *
     * @param string|null $error The error.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setError(?string $error): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->error = $error;
        return $this;
    }

    /**
     * Set the fallback to export server.
     *
     * @param bool|null $fallbackToExportServer The fallback to export server.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setFallbackToExportServer(?bool $fallbackToExportServer): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->fallbackToExportServer = $fallbackToExportServer;
        return $this;
    }

    /**
     * Set the filename.
     *
     * @param string|null $filename The filename.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setFilename(?string $filename): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->filename = $filename;
        return $this;
    }

    /**
     * Set the form attributes.
     *
     * @param mixed[]|null $formAttributes The form attributes.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setFormAttributes(?array $formAttributes): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->formAttributes = $formAttributes;
        return $this;
    }

    /**
     * Set the lib URL.
     *
     * @param string|null $libURL The lib URL.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setLibURL(?string $libURL): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->libURL = $libURL;
        return $this;
    }

    /**
     * Set the menu item definitions.
     *
     * @param mixed[]|null $menuItemDefinitions The menu item definitions.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setMenuItemDefinitions(?array $menuItemDefinitions): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->menuItemDefinitions = $menuItemDefinitions;
        return $this;
    }

    /**
     * Set the print max width.
     *
     * @param float|null $printMaxWidth The print max width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setPrintMaxWidth(?float $printMaxWidth): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->printMaxWidth = $printMaxWidth;
        return $this;
    }

    /**
     * Set the scale.
     *
     * @param float|null $scale The scale.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setScale(?float $scale): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->scale = $scale;
        return $this;
    }

    /**
     * Set the source height.
     *
     * @param float|null $sourceHeight The source height.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setSourceHeight(?float $sourceHeight): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->sourceHeight = $sourceHeight;
        return $this;
    }

    /**
     * Set the source width.
     *
     * @param float|null $sourceWidth The source width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setSourceWidth(?float $sourceWidth): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->sourceWidth = $sourceWidth;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setType(?string $type): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {

        switch ($type) {

            case "application/pdf":
            case "image/jpeg":
            case "image/png":
            case "image/svg+xml":
                $this->type = $type;
                break;
        }

        return $this;
    }

    /**
     * Set the url.
     *
     * @param string|null $url The url.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setUrl(?string $url): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->url = $url;
        return $this;
    }

    /**
     * Set the width.
     *
     * @param float|null $width The width.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsExporting Returns this highcharts exporting.
     */
    public function setWidth(?float $width): \WBW\Library\Highcharts\Model\Chart\HighchartsExporting {
        $this->width = $width;
        return $this;
    }
}
