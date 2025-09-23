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

namespace WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts events.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot
 * @version 5.0.14
 */
class HighchartsEvents implements JsonSerializable {

    /**
     * After animate.
     *
     * @var string|null
     * @since 4.0
     */
    private $afterAnimate;

    /**
     * Checkbox click.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $checkboxClick;

    /**
     * Click.
     *
     * @var string|null
     */
    private $click;

    /**
     * Hide.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $hide;

    /**
     * Legend item click.
     *
     * @var string|null
     */
    private $legendItemClick;

    /**
     * Mouse out.
     *
     * @var string|null
     */
    private $mouseOut;

    /**
     * Mouse over.
     *
     * @var string|null
     */
    private $mouseOver;

    /**
     * Show.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $show;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the after animate.
     *
     * @return string|null Returns the after animate.
     */
    public function getAfterAnimate(): ?string {
        return $this->afterAnimate;
    }

    /**
     * Get the checkbox click.
     *
     * @return string|null Returns the checkbox click.
     */
    public function getCheckboxClick(): ?string {
        return $this->checkboxClick;
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
     * Get the hide.
     *
     * @return string|null Returns the hide.
     */
    public function getHide(): ?string {
        return $this->hide;
    }

    /**
     * Get the legend item click.
     *
     * @return string|null Returns the legend item click.
     */
    public function getLegendItemClick(): ?string {
        return $this->legendItemClick;
    }

    /**
     * Get the mouse out.
     *
     * @return string|null Returns the mouse out.
     */
    public function getMouseOut(): ?string {
        return $this->mouseOut;
    }

    /**
     * Get the mouse over.
     *
     * @return string|null Returns the mouse over.
     */
    public function getMouseOver(): ?string {
        return $this->mouseOver;
    }

    /**
     * Get the show.
     *
     * @return string|null Returns the show.
     */
    public function getShow(): ?string {
        return $this->show;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "afterAnimate", $this->afterAnimate, [null]);
        ArrayHelper::set($output, "checkboxClick", $this->checkboxClick, [null]);
        ArrayHelper::set($output, "click", $this->click, [null]);
        ArrayHelper::set($output, "hide", $this->hide, [null]);
        ArrayHelper::set($output, "legendItemClick", $this->legendItemClick, [null]);
        ArrayHelper::set($output, "mouseOut", $this->mouseOut, [null]);
        ArrayHelper::set($output, "mouseOver", $this->mouseOver, [null]);
        ArrayHelper::set($output, "show", $this->show, [null]);

        return $output;
    }

    /**
     * Set the after animate.
     *
     * @param string|null $afterAnimate The after animate.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents Returns this highcharts events.
     */
    public function setAfterAnimate(?string $afterAnimate): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents {
        $this->afterAnimate = $afterAnimate;
        return $this;
    }

    /**
     * Set the checkbox click.
     *
     * @param string|null $checkboxClick The checkbox click.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents Returns this highcharts events.
     */
    public function setCheckboxClick(?string $checkboxClick): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents {
        $this->checkboxClick = $checkboxClick;
        return $this;
    }

    /**
     * Set the click.
     *
     * @param string|null $click The click.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents Returns this highcharts events.
     */
    public function setClick(?string $click): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents {
        $this->click = $click;
        return $this;
    }

    /**
     * Set the hide.
     *
     * @param string|null $hide The hide.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents Returns this highcharts events.
     */
    public function setHide(?string $hide): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents {
        $this->hide = $hide;
        return $this;
    }

    /**
     * Set the legend item click.
     *
     * @param string|null $legendItemClick The legend item click.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents Returns this highcharts events.
     */
    public function setLegendItemClick(?string $legendItemClick): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents {
        $this->legendItemClick = $legendItemClick;
        return $this;
    }

    /**
     * Set the mouse out.
     *
     * @param string|null $mouseOut The mouse out.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents Returns this highcharts events.
     */
    public function setMouseOut(?string $mouseOut): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents {
        $this->mouseOut = $mouseOut;
        return $this;
    }

    /**
     * Set the mouse over.
     *
     * @param string|null $mouseOver The mouse over.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents Returns this highcharts events.
     */
    public function setMouseOver(?string $mouseOver): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents {
        $this->mouseOver = $mouseOver;
        return $this;
    }

    /**
     * Set the show.
     *
     * @param string|null $show The show.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents Returns this highcharts events.
     */
    public function setShow(?string $show): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Boxplot\HighchartsEvents {
        $this->show = $show;
        return $this;
    }
}
