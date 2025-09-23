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

namespace WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts hover.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States
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
     * Border color.
     *
     * @var string|null
     */
    private $borderColor;

    /**
     * Brightness.
     *
     * @var float|null
     */
    private $brightness = 0.1;

    /**
     * Color.
     *
     * @var string|null
     */
    private $color;

    /**
     * Enabled.
     *
     * @var bool|null
     * @since 1.2
     */
    private $enabled = true;

    /**
     * Opacity.
     *
     * @var float|null
     * @since 4.2.4
     */
    private $opacity = 0.75;

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
     * Get the border color.
     *
     * @return string|null Returns the border color.
     */
    public function getBorderColor(): ?string {
        return $this->borderColor;
    }

    /**
     * Get the brightness.
     *
     * @return float|null Returns the brightness.
     */
    public function getBrightness(): ?float {
        return $this->brightness;
    }

    /**
     * Get the color.
     *
     * @return string|null Returns the color.
     */
    public function getColor(): ?string {
        return $this->color;
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
     * Get the opacity.
     *
     * @return float|null Returns the opacity.
     */
    public function getOpacity(): ?float {
        return $this->opacity;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "animation", $this->animation, [null]);
        ArrayHelper::set($output, "borderColor", $this->borderColor, [null]);
        ArrayHelper::set($output, "brightness", $this->brightness, [null]);
        ArrayHelper::set($output, "color", $this->color, [null]);
        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "opacity", $this->opacity, [null]);

        return $output;
    }

    /**
     * Set the animation.
     *
     * @param mixed $animation The animation.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States\HighchartsHover Returns this highcharts hover.
     */
    public function setAnimation($animation): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States\HighchartsHover {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States\HighchartsHover Returns this highcharts hover.
     */
    public function setBorderColor(?string $borderColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States\HighchartsHover {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the brightness.
     *
     * @param float|null $brightness The brightness.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States\HighchartsHover Returns this highcharts hover.
     */
    public function setBrightness(?float $brightness): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States\HighchartsHover {
        $this->brightness = $brightness;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States\HighchartsHover Returns this highcharts hover.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States\HighchartsHover {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States\HighchartsHover Returns this highcharts hover.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States\HighchartsHover {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the opacity.
     *
     * @param float|null $opacity The opacity.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States\HighchartsHover Returns this highcharts hover.
     */
    public function setOpacity(?float $opacity): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Treemap\States\HighchartsHover {
        $this->opacity = $opacity;
        return $this;
    }
}
