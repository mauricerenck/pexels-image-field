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

namespace WBW\Library\Highcharts\Model\Chart\Chart;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts events.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Chart
 * @version 5.0.14
 */
class HighchartsEvents implements JsonSerializable {

    /**
     * Add series.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $addSeries;

    /**
     * After print.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $afterPrint;

    /**
     * Before print.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $beforePrint;

    /**
     * Click.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $click;

    /**
     * Drilldown.
     *
     * @var string|null
     * @since 3.0.8
     */
    private $drilldown;

    /**
     * Drillup.
     *
     * @var string|null
     * @since 3.0.8
     */
    private $drillup;

    /**
     * Drillupall.
     *
     * @var string|null
     * @since 4.2.4
     */
    private $drillupall;

    /**
     * Load.
     *
     * @var string|null
     */
    private $load;

    /**
     * Redraw.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $redraw;

    /**
     * Render.
     *
     * @var string|null
     * @since 5.0.7
     */
    private $render;

    /**
     * Selection.
     *
     * @var string|null
     */
    private $selection;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the add series.
     *
     * @return string|null Returns the add series.
     */
    public function getAddSeries(): ?string {
        return $this->addSeries;
    }

    /**
     * Get the after print.
     *
     * @return string|null Returns the after print.
     */
    public function getAfterPrint(): ?string {
        return $this->afterPrint;
    }

    /**
     * Get the before print.
     *
     * @return string|null Returns the before print.
     */
    public function getBeforePrint(): ?string {
        return $this->beforePrint;
    }

    /**
     * Get the click.
     *
     * @return string|null Returns the click.
     */
    public function getClick(): ?string {
        return $this->click;
    }

    /**
     * Get the drilldown.
     *
     * @return string|null Returns the drilldown.
     */
    public function getDrilldown(): ?string {
        return $this->drilldown;
    }

    /**
     * Get the drillup.
     *
     * @return string|null Returns the drillup.
     */
    public function getDrillup(): ?string {
        return $this->drillup;
    }

    /**
     * Get the drillupall.
     *
     * @return string|null Returns the drillupall.
     */
    public function getDrillupall(): ?string {
        return $this->drillupall;
    }

    /**
     * Get the load.
     *
     * @return string|null Returns the load.
     */
    public function getLoad(): ?string {
        return $this->load;
    }

    /**
     * Get the redraw.
     *
     * @return string|null Returns the redraw.
     */
    public function getRedraw(): ?string {
        return $this->redraw;
    }

    /**
     * Get the render.
     *
     * @return string|null Returns the render.
     */
    public function getRender(): ?string {
        return $this->render;
    }

    /**
     * Get the selection.
     *
     * @return string|null Returns the selection.
     */
    public function getSelection(): ?string {
        return $this->selection;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "addSeries", $this->addSeries, [null]);
        ArrayHelper::set($output, "afterPrint", $this->afterPrint, [null]);
        ArrayHelper::set($output, "beforePrint", $this->beforePrint, [null]);
        ArrayHelper::set($output, "click", $this->click, [null]);
        ArrayHelper::set($output, "drilldown", $this->drilldown, [null]);
        ArrayHelper::set($output, "drillup", $this->drillup, [null]);
        ArrayHelper::set($output, "drillupall", $this->drillupall, [null]);
        ArrayHelper::set($output, "load", $this->load, [null]);
        ArrayHelper::set($output, "redraw", $this->redraw, [null]);
        ArrayHelper::set($output, "render", $this->render, [null]);
        ArrayHelper::set($output, "selection", $this->selection, [null]);

        return $output;
    }

    /**
     * Set the add series.
     *
     * @param string|null $addSeries The add series.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents Returns this highcharts events.
     */
    public function setAddSeries(?string $addSeries): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents {
        $this->addSeries = $addSeries;
        return $this;
    }

    /**
     * Set the after print.
     *
     * @param string|null $afterPrint The after print.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents Returns this highcharts events.
     */
    public function setAfterPrint(?string $afterPrint): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents {
        $this->afterPrint = $afterPrint;
        return $this;
    }

    /**
     * Set the before print.
     *
     * @param string|null $beforePrint The before print.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents Returns this highcharts events.
     */
    public function setBeforePrint(?string $beforePrint): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents {
        $this->beforePrint = $beforePrint;
        return $this;
    }

    /**
     * Set the click.
     *
     * @param string|null $click The click.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents Returns this highcharts events.
     */
    public function setClick(?string $click): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents {
        $this->click = $click;
        return $this;
    }

    /**
     * Set the drilldown.
     *
     * @param string|null $drilldown The drilldown.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents Returns this highcharts events.
     */
    public function setDrilldown(?string $drilldown): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents {
        $this->drilldown = $drilldown;
        return $this;
    }

    /**
     * Set the drillup.
     *
     * @param string|null $drillup The drillup.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents Returns this highcharts events.
     */
    public function setDrillup(?string $drillup): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents {
        $this->drillup = $drillup;
        return $this;
    }

    /**
     * Set the drillupall.
     *
     * @param string|null $drillupall The drillupall.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents Returns this highcharts events.
     */
    public function setDrillupall(?string $drillupall): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents {
        $this->drillupall = $drillupall;
        return $this;
    }

    /**
     * Set the load.
     *
     * @param string|null $load The load.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents Returns this highcharts events.
     */
    public function setLoad(?string $load): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents {
        $this->load = $load;
        return $this;
    }

    /**
     * Set the redraw.
     *
     * @param string|null $redraw The redraw.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents Returns this highcharts events.
     */
    public function setRedraw(?string $redraw): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents {
        $this->redraw = $redraw;
        return $this;
    }

    /**
     * Set the render.
     *
     * @param string|null $render The render.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents Returns this highcharts events.
     */
    public function setRender(?string $render): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents {
        $this->render = $render;
        return $this;
    }

    /**
     * Set the selection.
     *
     * @param string|null $selection The selection.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents Returns this highcharts events.
     */
    public function setSelection(?string $selection): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsEvents {
        $this->selection = $selection;
        return $this;
    }
}
