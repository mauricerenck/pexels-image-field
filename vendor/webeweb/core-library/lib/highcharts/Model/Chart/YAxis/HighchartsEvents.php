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

namespace WBW\Library\Highcharts\Model\Chart\YAxis;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts events.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\YAxis
 * @version 5.0.14
 */
class HighchartsEvents implements JsonSerializable {

    /**
     * After breaks.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $afterBreaks;

    /**
     * After set extremes.
     *
     * @var string|null
     * @since 2.3
     */
    private $afterSetExtremes;

    /**
     * Point break.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $pointBreak;

    /**
     * Point in break.
     *
     * @var string|null
     */
    private $pointInBreak;

    /**
     * Set extremes.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $setExtremes;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the after breaks.
     *
     * @return string|null Returns the after breaks.
     */
    public function getAfterBreaks(): ?string {
        return $this->afterBreaks;
    }

    /**
     * Get the after set extremes.
     *
     * @return string|null Returns the after set extremes.
     */
    public function getAfterSetExtremes(): ?string {
        return $this->afterSetExtremes;
    }

    /**
     * Get the point break.
     *
     * @return string|null Returns the point break.
     */
    public function getPointBreak(): ?string {
        return $this->pointBreak;
    }

    /**
     * Get the point in break.
     *
     * @return string|null Returns the point in break.
     */
    public function getPointInBreak(): ?string {
        return $this->pointInBreak;
    }

    /**
     * Get the set extremes.
     *
     * @return string|null Returns the set extremes.
     */
    public function getSetExtremes(): ?string {
        return $this->setExtremes;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "afterBreaks", $this->afterBreaks, [null]);
        ArrayHelper::set($output, "afterSetExtremes", $this->afterSetExtremes, [null]);
        ArrayHelper::set($output, "pointBreak", $this->pointBreak, [null]);
        ArrayHelper::set($output, "pointInBreak", $this->pointInBreak, [null]);
        ArrayHelper::set($output, "setExtremes", $this->setExtremes, [null]);

        return $output;
    }

    /**
     * Set the after breaks.
     *
     * @param string|null $afterBreaks The after breaks.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents Returns this highcharts events.
     */
    public function setAfterBreaks(?string $afterBreaks): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents {
        $this->afterBreaks = $afterBreaks;
        return $this;
    }

    /**
     * Set the after set extremes.
     *
     * @param string|null $afterSetExtremes The after set extremes.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents Returns this highcharts events.
     */
    public function setAfterSetExtremes(?string $afterSetExtremes): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents {
        $this->afterSetExtremes = $afterSetExtremes;
        return $this;
    }

    /**
     * Set the point break.
     *
     * @param string|null $pointBreak The point break.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents Returns this highcharts events.
     */
    public function setPointBreak(?string $pointBreak): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents {
        $this->pointBreak = $pointBreak;
        return $this;
    }

    /**
     * Set the point in break.
     *
     * @param string|null $pointInBreak The point in break.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents Returns this highcharts events.
     */
    public function setPointInBreak(?string $pointInBreak): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents {
        $this->pointInBreak = $pointInBreak;
        return $this;
    }

    /**
     * Set the set extremes.
     *
     * @param string|null $setExtremes The set extremes.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents Returns this highcharts events.
     */
    public function setSetExtremes(?string $setExtremes): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsEvents {
        $this->setExtremes = $setExtremes;
        return $this;
    }
}
