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

namespace WBW\Library\Highcharts\Model\Chart\XAxis;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts plot bands.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\XAxis
 * @version 5.0.14
 */
class HighchartsPlotBands implements JsonSerializable {

    /**
     * Border color.
     *
     * @var string|null
     */
    private $borderColor;

    /**
     * Border width.
     *
     * @var float|null
     */
    private $borderWidth = 0;

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
     * Events.
     *
     * @var mixed[]|null
     * @since 1.2
     */
    private $events;

    /**
     * From.
     *
     * @var float|null
     */
    private $from;

    /**
     * Id.
     *
     * @var string|null
     */
    private $id;

    /**
     * Label.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel|null
     */
    private $label;

    /**
     * To.
     *
     * @var float|null
     */
    private $to;

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
     * Get the color.
     *
     * @return string|null Returns the color.
     */
    public function getColor(): ?string {
        return $this->color;
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
     * Get the from.
     *
     * @return float|null Returns the from.
     */
    public function getFrom(): ?float {
        return $this->from;
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
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel|null Returns the label.
     */
    public function getLabel(): ?\WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel {
        return $this->label;
    }

    /**
     * Get the to.
     *
     * @return float|null Returns the to.
     */
    public function getTo(): ?float {
        return $this->to;
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

        ArrayHelper::set($output, "borderColor", $this->borderColor, [null]);
        ArrayHelper::set($output, "borderWidth", $this->borderWidth, [null]);
        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "color", $this->color, [null]);
        ArrayHelper::set($output, "events", $this->events, [null]);
        ArrayHelper::set($output, "from", $this->from, [null]);
        ArrayHelper::set($output, "id", $this->id, [null]);
        if (null !== $this->label) {
            ArrayHelper::set($output, "label", $this->label->jsonSerialize());
        }
        ArrayHelper::set($output, "to", $this->to, [null]);
        ArrayHelper::set($output, "zIndex", $this->zIndex, [null]);

        return $output;
    }

    /**
     * Create a new label.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel Returns the label.
     */
    public function newLabel(): \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel {
        $this->label = new \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel();
        return $this->label;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands Returns this highcharts plot bands.
     */
    public function setBorderColor(?string $borderColor): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param float|null $borderWidth The border width.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands Returns this highcharts plot bands.
     */
    public function setBorderWidth(?float $borderWidth): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands Returns this highcharts plot bands.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands Returns this highcharts plot bands.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param mixed[]|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands Returns this highcharts plot bands.
     */
    public function setEvents(?array $events): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the from.
     *
     * @param float|null $from The from.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands Returns this highcharts plot bands.
     */
    public function setFrom(?float $from): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands {
        $this->from = $from;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands Returns this highcharts plot bands.
     */
    public function setId(?string $id): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the label.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel|null $label The label.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands Returns this highcharts plot bands.
     */
    public function setLabel(?\WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel $label): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands {
        $this->label = $label;
        return $this;
    }

    /**
     * Set the to.
     *
     * @param float|null $to The to.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands Returns this highcharts plot bands.
     */
    public function setTo(?float $to): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands {
        $this->to = $to;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param float|null $zIndex The z index.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands Returns this highcharts plot bands.
     */
    public function setZIndex(?float $zIndex): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsPlotBands {
        $this->zIndex = $zIndex;
        return $this;
    }
}
