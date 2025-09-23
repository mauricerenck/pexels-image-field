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

namespace WBW\Library\Highcharts\Model\Chart\Pane;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts background.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Pane
 * @version 5.0.14
 */
class HighchartsBackground implements JsonSerializable {

    /**
     * Background color.
     *
     * @var string|null
     * @since 2.3.0
     */
    private $backgroundColor;

    /**
     * Border color.
     *
     * @var string|null
     * @since 2.3.0
     */
    private $borderColor = "#cccccc";

    /**
     * Border width.
     *
     * @var float|null
     * @since 2.3.0
     */
    private $borderWidth = 1;

    /**
     * Class name.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $className = "highcharts-pane";

    /**
     * Inner radius.
     *
     * @var mixed|null
     * @since 2.3.0
     */
    private $innerRadius = "0";

    /**
     * Outer radius.
     *
     * @var mixed|null
     * @since 2.3.0
     */
    private $outerRadius = "105%";

    /**
     * Shape.
     *
     * @var string|null
     * @since 2.3.0
     */
    private $shape = "solid";

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the background color.
     *
     * @return string|null Returns the background color.
     */
    public function getBackgroundColor(): ?string {
        return $this->backgroundColor;
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
     * Get the border width.
     *
     * @return float|null Returns the border width.
     */
    public function getBorderWidth(): ?float {
        return $this->borderWidth;
    }

    /**
     * Get the class name.
     *
     * @return string|null Returns the class name.
     */
    public function getClassName(): ?string {
        return $this->className;
    }

    /**
     * Get the inner radius.
     *
     * @return mixed Returns the inner radius.
     */
    public function getInnerRadius() {
        return $this->innerRadius;
    }

    /**
     * Get the outer radius.
     *
     * @return mixed Returns the outer radius.
     */
    public function getOuterRadius() {
        return $this->outerRadius;
    }

    /**
     * Get the shape.
     *
     * @return string|null Returns the shape.
     */
    public function getShape(): ?string {
        return $this->shape;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "backgroundColor", $this->backgroundColor, [null]);
        ArrayHelper::set($output, "borderColor", $this->borderColor, [null]);
        ArrayHelper::set($output, "borderWidth", $this->borderWidth, [null]);
        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "innerRadius", $this->innerRadius, [null]);
        ArrayHelper::set($output, "outerRadius", $this->outerRadius, [null]);
        ArrayHelper::set($output, "shape", $this->shape, [null]);

        return $output;
    }

    /**
     * Set the background color.
     *
     * @param string|null $backgroundColor The background color.
     * @return \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground Returns this highcharts background.
     */
    public function setBackgroundColor(?string $backgroundColor): \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground Returns this highcharts background.
     */
    public function setBorderColor(?string $borderColor): \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param float|null $borderWidth The border width.
     * @return \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground Returns this highcharts background.
     */
    public function setBorderWidth(?float $borderWidth): \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground Returns this highcharts background.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the inner radius.
     *
     * @param mixed $innerRadius The inner radius.
     * @return \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground Returns this highcharts background.
     */
    public function setInnerRadius($innerRadius): \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground {
        $this->innerRadius = $innerRadius;
        return $this;
    }

    /**
     * Set the outer radius.
     *
     * @param mixed $outerRadius The outer radius.
     * @return \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground Returns this highcharts background.
     */
    public function setOuterRadius($outerRadius): \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground {
        $this->outerRadius = $outerRadius;
        return $this;
    }

    /**
     * Set the shape.
     *
     * @param string|null $shape The shape.
     * @return \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground Returns this highcharts background.
     */
    public function setShape(?string $shape): \WBW\Library\Highcharts\Model\Chart\Pane\HighchartsBackground {

        switch ($shape) {

            case "arc":
            case "solid":
                $this->shape = $shape;
                break;
        }

        return $this;
    }
}
