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
 * Highcharts global.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Options
 * @version 5.0.14
 */
class HighchartsGlobal implements JsonSerializable {

    /**
     * Canvas tools URL.
     *
     * @var string|null
     * @deprecated
     */
    private $canvasToolsURL = "http://code.highcharts.com/{version}/modules/canvas-tools.js";

    /**
     * Date.
     *
     * @var mixed[]|null
     * @since 4.0.4
     */
    private $date;

    /**
     * Get timezone offset.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $getTimezoneOffset;

    /**
     * Timezone.
     *
     * @var string|null
     * @since 5.0.7
     */
    private $timezone;

    /**
     * Timezone offset.
     *
     * @var float|null
     * @since 3.0.8
     */
    private $timezoneOffset = 0;

    /**
     * Use UTC.
     *
     * @var bool|null
     */
    private $useUTC = true;

    /**
     * VML radial gradient URL.
     *
     * @var string|null
     * @since 2.3.0
     */
    private $vMLRadialGradientURL = "http://code.highcharts.com/{version}/gfx/vml-radial-gradient.png";

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the canvas tools URL.
     *
     * @return string|null Returns the canvas tools URL.
     * @deprecated
     */
    public function getCanvasToolsURL(): ?string {
        return $this->canvasToolsURL;
    }

    /**
     * Get the date.
     *
     * @return mixed[]|null Returns the date.
     */
    public function getDate(): ?array {
        return $this->date;
    }

    /**
     * Get the get timezone offset.
     *
     * @return string|null Returns the get timezone offset.
     */
    public function getGetTimezoneOffset(): ?string {
        return $this->getTimezoneOffset;
    }

    /**
     * Get the timezone.
     *
     * @return string|null Returns the timezone.
     */
    public function getTimezone(): ?string {
        return $this->timezone;
    }

    /**
     * Get the timezone offset.
     *
     * @return float|null Returns the timezone offset.
     */
    public function getTimezoneOffset(): ?float {
        return $this->timezoneOffset;
    }

    /**
     * Get the use UTC.
     *
     * @return bool|null Returns the use UTC.
     */
    public function getUseUTC(): ?bool {
        return $this->useUTC;
    }

    /**
     * Get the VML radial gradient URL.
     *
     * @return string|null Returns the VML radial gradient URL.
     */
    public function getVMLRadialGradientURL(): ?string {
        return $this->vMLRadialGradientURL;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "Date", $this->date, [null]);
        ArrayHelper::set($output, "VMLRadialGradientURL", $this->vMLRadialGradientURL, [null]);
        ArrayHelper::set($output, "canvasToolsURL", $this->canvasToolsURL, [null]);
        ArrayHelper::set($output, "getTimezoneOffset", $this->getTimezoneOffset, [null]);
        ArrayHelper::set($output, "timezone", $this->timezone, [null]);
        ArrayHelper::set($output, "timezoneOffset", $this->timezoneOffset, [null]);
        ArrayHelper::set($output, "useUTC", $this->useUTC, [null]);

        return $output;
    }

    /**
     * Set the canvas tools URL.
     *
     * @param string|null $canvasToolsURL The canvas tools URL.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsGlobal Returns this highcharts global.
     * @deprecated
     */
    public function setCanvasToolsURL(?string $canvasToolsURL): \WBW\Library\Highcharts\Model\Options\HighchartsGlobal {
        $this->canvasToolsURL = $canvasToolsURL;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param mixed[]|null $date The date.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsGlobal Returns this highcharts global.
     */
    public function setDate(?array $date): \WBW\Library\Highcharts\Model\Options\HighchartsGlobal {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the get timezone offset.
     *
     * @param string|null $getTimezoneOffset The get timezone offset.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsGlobal Returns this highcharts global.
     */
    public function setGetTimezoneOffset(?string $getTimezoneOffset): \WBW\Library\Highcharts\Model\Options\HighchartsGlobal {
        $this->getTimezoneOffset = $getTimezoneOffset;
        return $this;
    }

    /**
     * Set the timezone.
     *
     * @param string|null $timezone The timezone.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsGlobal Returns this highcharts global.
     */
    public function setTimezone(?string $timezone): \WBW\Library\Highcharts\Model\Options\HighchartsGlobal {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * Set the timezone offset.
     *
     * @param float|null $timezoneOffset The timezone offset.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsGlobal Returns this highcharts global.
     */
    public function setTimezoneOffset(?float $timezoneOffset): \WBW\Library\Highcharts\Model\Options\HighchartsGlobal {
        $this->timezoneOffset = $timezoneOffset;
        return $this;
    }

    /**
     * Set the use UTC.
     *
     * @param bool|null $useUTC The use UTC.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsGlobal Returns this highcharts global.
     */
    public function setUseUTC(?bool $useUTC): \WBW\Library\Highcharts\Model\Options\HighchartsGlobal {
        $this->useUTC = $useUTC;
        return $this;
    }

    /**
     * Set the VML radial gradient URL.
     *
     * @param string|null $vMLRadialGradientURL The VML radial gradient URL.
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsGlobal Returns this highcharts global.
     */
    public function setVMLRadialGradientURL(?string $vMLRadialGradientURL): \WBW\Library\Highcharts\Model\Options\HighchartsGlobal {
        $this->vMLRadialGradientURL = $vMLRadialGradientURL;
        return $this;
    }
}
