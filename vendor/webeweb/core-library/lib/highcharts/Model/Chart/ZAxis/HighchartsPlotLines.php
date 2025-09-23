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

namespace WBW\Library\Highcharts\Model\Chart\ZAxis;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts plot lines.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\ZAxis
 * @version 5.0.14
 */
class HighchartsPlotLines implements JsonSerializable {

    /**
     * Class name.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $className;

    /**
     * Color.
     *
     * @var string|null
     */
    private $color;

    /**
     * Dash style.
     *
     * @var string|null
     * @since 1.2
     */
    private $dashStyle = "Solid";

    /**
     * Events.
     *
     * @var mixed[]|null
     * @since 1.2
     */
    private $events;

    /**
     * Id.
     *
     * @var string|null
     */
    private $id;

    /**
     * Label.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\ZAxis\PlotLines\HighchartsLabel|null
     */
    private $label;

    /**
     * Value.
     *
     * @var float|null
     */
    private $value;

    /**
     * Width.
     *
     * @var float|null
     */
    private $width;

    /**
     * Z index.
     *
     * @var float|null
     * @since 1.2
     */
    private $zIndex;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the color.
     *
     * @return string|null Returns the color.
     */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * Get the dash style.
     *
     * @return string|null Returns the dash style.
     */
    public function getDashStyle(): ?string {
        return $this->dashStyle;
    }

    /**
     * Get the events.
     *
     * @return mixed[]|null Returns the events.
     */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * Get the id.
     *
     * @return string|null Returns the id.
     */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Get the label.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\PlotLines\HighchartsLabel|null Returns the label.
     */
    public function getLabel(): ?\WBW\Library\Highcharts\Model\Chart\ZAxis\PlotLines\HighchartsLabel {
        return $this->label;
    }

    /**
     * Get the value.
     *
     * @return float|null Returns the value.
     */
    public function getValue(): ?float {
        return $this->value;
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
     * Get the z index.
     *
     * @return float|null Returns the z index.
     */
    public function getZIndex(): ?float {
        return $this->zIndex;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "color", $this->color, [null]);
        ArrayHelper::set($output, "dashStyle", $this->dashStyle, [null]);
        ArrayHelper::set($output, "events", $this->events, [null]);
        ArrayHelper::set($output, "id", $this->id, [null]);
        if (null !== $this->label) {
            ArrayHelper::set($output, "label", $this->label->jsonSerialize());
        }
        ArrayHelper::set($output, "value", $this->value, [null]);
        ArrayHelper::set($output, "width", $this->width, [null]);
        ArrayHelper::set($output, "zIndex", $this->zIndex, [null]);

        return $output;
    }

    /**
     * Create a new label.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\PlotLines\HighchartsLabel Returns the label.
     */
    public function newLabel(): \WBW\Library\Highcharts\Model\Chart\ZAxis\PlotLines\HighchartsLabel {
        $this->label = new \WBW\Library\Highcharts\Model\Chart\ZAxis\PlotLines\HighchartsLabel();
        return $this->label;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines Returns this highcharts plot lines.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines Returns this highcharts plot lines.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the dash style.
     *
     * @param string|null $dashStyle The dash style.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines Returns this highcharts plot lines.
     */
    public function setDashStyle(?string $dashStyle): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines {

        switch ($dashStyle) {

            case "Dash":
            case "DashDot":
            case "Dot":
            case "LongDash":
            case "LongDashDot":
            case "LongDashDotDot":
            case "ShortDash":
            case "ShortDashDot":
            case "ShortDashDotDot":
            case "ShortDot":
            case "Solid":
                $this->dashStyle = $dashStyle;
                break;
        }

        return $this;
    }

    /**
     * Set the events.
     *
     * @param mixed[]|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines Returns this highcharts plot lines.
     */
    public function setEvents(?array $events): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines Returns this highcharts plot lines.
     */
    public function setId(?string $id): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the label.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\ZAxis\PlotLines\HighchartsLabel|null $label The label.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines Returns this highcharts plot lines.
     */
    public function setLabel(?\WBW\Library\Highcharts\Model\Chart\ZAxis\PlotLines\HighchartsLabel $label): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines {
        $this->label = $label;
        return $this;
    }

    /**
     * Set the value.
     *
     * @param float|null $value The value.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines Returns this highcharts plot lines.
     */
    public function setValue(?float $value): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines {
        $this->value = $value;
        return $this;
    }

    /**
     * Set the width.
     *
     * @param float|null $width The width.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines Returns this highcharts plot lines.
     */
    public function setWidth(?float $width): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines {
        $this->width = $width;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param float|null $zIndex The z index.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines Returns this highcharts plot lines.
     */
    public function setZIndex(?float $zIndex): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsPlotLines {
        $this->zIndex = $zIndex;
        return $this;
    }
}
