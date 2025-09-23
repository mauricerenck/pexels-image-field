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

namespace WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts hover.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States
 * @version 5.0.14
 */
class HighchartsHover implements JsonSerializable {

    /**
     * Animation.
     *
     * @var mixed|null
     * @since 5.0.8
     */
    private $animation = "{ \"duration\": 50 }";

    /**
     * Enabled.
     *
     * @var bool|null
     * @since 1.2
     */
    private $enabled = true;

    /**
     * Halo.
     *
     * @var mixed[]|null
     * @since 4.0
     */
    private $halo;

    /**
     * Line width.
     *
     * @var float|null
     */
    private $lineWidth = 2;

    /**
     * Line width plus.
     *
     * @var float|null
     * @since 4.0.3
     */
    private $lineWidthPlus = 1;

    /**
     * Marker.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\Hover\HighchartsMarker|null
     * @deprecated
     */
    private $marker;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the animation.
     *
     * @return mixed Returns the animation.
     */
    public function getAnimation() {
        return $this->animation;
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
     * Get the halo.
     *
     * @return mixed[]|null Returns the halo.
     */
    public function getHalo(): ?array {
        return $this->halo;
    }

    /**
     * Get the line width.
     *
     * @return float|null Returns the line width.
     */
    public function getLineWidth(): ?float {
        return $this->lineWidth;
    }

    /**
     * Get the line width plus.
     *
     * @return float|null Returns the line width plus.
     */
    public function getLineWidthPlus(): ?float {
        return $this->lineWidthPlus;
    }

    /**
     * Get the marker.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\Hover\HighchartsMarker|null Returns the marker.
     * @deprecated
     */
    public function getMarker(): ?\WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\Hover\HighchartsMarker {
        return $this->marker;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "animation", $this->animation, [null]);
        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "halo", $this->halo, [null]);
        ArrayHelper::set($output, "lineWidth", $this->lineWidth, [null]);
        ArrayHelper::set($output, "lineWidthPlus", $this->lineWidthPlus, [null]);
        if (null !== $this->marker) {
            ArrayHelper::set($output, "marker", $this->marker->jsonSerialize());
        }

        return $output;
    }

    /**
     * Create a new marker.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\Hover\HighchartsMarker Returns the marker.
     */
    public function newMarker(): \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\Hover\HighchartsMarker {
        $this->marker = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\Hover\HighchartsMarker();
        return $this->marker;
    }

    /**
     * Set the animation.
     *
     * @param mixed $animation The animation.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\HighchartsHover Returns this highcharts hover.
     */
    public function setAnimation($animation): \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\HighchartsHover {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\HighchartsHover Returns this highcharts hover.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\HighchartsHover {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the halo.
     *
     * @param mixed[]|null $halo The halo.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\HighchartsHover Returns this highcharts hover.
     */
    public function setHalo(?array $halo): \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\HighchartsHover {
        $this->halo = $halo;
        return $this;
    }

    /**
     * Set the line width.
     *
     * @param float|null $lineWidth The line width.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\HighchartsHover Returns this highcharts hover.
     */
    public function setLineWidth(?float $lineWidth): \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\HighchartsHover {
        $this->lineWidth = $lineWidth;
        return $this;
    }

    /**
     * Set the line width plus.
     *
     * @param float|null $lineWidthPlus The line width plus.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\HighchartsHover Returns this highcharts hover.
     */
    public function setLineWidthPlus(?float $lineWidthPlus): \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\HighchartsHover {
        $this->lineWidthPlus = $lineWidthPlus;
        return $this;
    }

    /**
     * Set the marker.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\Hover\HighchartsMarker|null $marker The marker.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\HighchartsHover Returns this highcharts hover.
     * @deprecated
     */
    public function setMarker(?\WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\Hover\HighchartsMarker $marker): \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\States\HighchartsHover {
        $this->marker = $marker;
        return $this;
    }
}
