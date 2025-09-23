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
 * Highcharts options3d.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Chart
 * @version 5.0.14
 */
class HighchartsOptions3d implements JsonSerializable {

    /**
     * Alpha.
     *
     * @var float|null
     * @since 4.0
     */
    private $alpha = 0;

    /**
     * Axis label position.
     *
     * @var string|null
     * @since 5.0.12
     */
    private $axisLabelPosition;

    /**
     * Beta.
     *
     * @var float|null
     * @since 4.0
     */
    private $beta = 0;

    /**
     * Depth.
     *
     * @var float|null
     * @since 4.0
     */
    private $depth = 100;

    /**
     * Enabled.
     *
     * @var bool|null
     * @since 4.0
     */
    private $enabled = false;

    /**
     * Fit to plot.
     *
     * @var bool|null
     * @since 4.2.4
     */
    private $fitToPlot = true;

    /**
     * Frame.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame|null
     * @since 4.0
     */
    private $frame;

    /**
     * View distance.
     *
     * @var float|null
     * @since 4.0
     */
    private $viewDistance = 100;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the alpha.
     *
     * @return float|null Returns the alpha.
     */
    public function getAlpha(): ?float {
        return $this->alpha;
    }

    /**
     * Get the axis label position.
     *
     * @return string|null Returns the axis label position.
     */
    public function getAxisLabelPosition(): ?string {
        return $this->axisLabelPosition;
    }

    /**
     * Get the beta.
     *
     * @return float|null Returns the beta.
     */
    public function getBeta(): ?float {
        return $this->beta;
    }

    /**
     * Get the depth.
     *
     * @return float|null Returns the depth.
     */
    public function getDepth(): ?float {
        return $this->depth;
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
     * Get the fit to plot.
     *
     * @return bool|null Returns the fit to plot.
     */
    public function getFitToPlot(): ?bool {
        return $this->fitToPlot;
    }

    /**
     * Get the frame.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame|null Returns the frame.
     */
    public function getFrame(): ?\WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame {
        return $this->frame;
    }

    /**
     * Get the view distance.
     *
     * @return float|null Returns the view distance.
     */
    public function getViewDistance(): ?float {
        return $this->viewDistance;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "alpha", $this->alpha, [null]);
        ArrayHelper::set($output, "axisLabelPosition", $this->axisLabelPosition, [null]);
        ArrayHelper::set($output, "beta", $this->beta, [null]);
        ArrayHelper::set($output, "depth", $this->depth, [null]);
        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "fitToPlot", $this->fitToPlot, [null]);
        if (null !== $this->frame) {
            ArrayHelper::set($output, "frame", $this->frame->jsonSerialize());
        }
        ArrayHelper::set($output, "viewDistance", $this->viewDistance, [null]);

        return $output;
    }

    /**
     * Create a new frame.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame Returns the frame.
     */
    public function newFrame(): \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame {
        $this->frame = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame();
        return $this->frame;
    }

    /**
     * Set the alpha.
     *
     * @param float|null $alpha The alpha.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d Returns this highcharts options3d.
     */
    public function setAlpha(?float $alpha): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d {
        $this->alpha = $alpha;
        return $this;
    }

    /**
     * Set the axis label position.
     *
     * @param string|null $axisLabelPosition The axis label position.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d Returns this highcharts options3d.
     */
    public function setAxisLabelPosition(?string $axisLabelPosition): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d {

        switch ($axisLabelPosition) {

            case null:
            case "auto":
                $this->axisLabelPosition = $axisLabelPosition;
                break;
        }

        return $this;
    }

    /**
     * Set the beta.
     *
     * @param float|null $beta The beta.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d Returns this highcharts options3d.
     */
    public function setBeta(?float $beta): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d {
        $this->beta = $beta;
        return $this;
    }

    /**
     * Set the depth.
     *
     * @param float|null $depth The depth.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d Returns this highcharts options3d.
     */
    public function setDepth(?float $depth): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d {
        $this->depth = $depth;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d Returns this highcharts options3d.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the fit to plot.
     *
     * @param bool|null $fitToPlot The fit to plot.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d Returns this highcharts options3d.
     */
    public function setFitToPlot(?bool $fitToPlot): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d {
        $this->fitToPlot = $fitToPlot;
        return $this;
    }

    /**
     * Set the frame.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame|null $frame The frame.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d Returns this highcharts options3d.
     */
    public function setFrame(?\WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame $frame): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d {
        $this->frame = $frame;
        return $this;
    }

    /**
     * Set the view distance.
     *
     * @param float|null $viewDistance The view distance.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d Returns this highcharts options3d.
     */
    public function setViewDistance(?float $viewDistance): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d {
        $this->viewDistance = $viewDistance;
        return $this;
    }
}
