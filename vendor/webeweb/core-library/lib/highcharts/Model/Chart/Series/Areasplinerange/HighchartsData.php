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

namespace WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts data.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange
 * @version 5.0.14
 */
class HighchartsData implements JsonSerializable {

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
     * Color index.
     *
     * @var float|null
     * @since 5.0.0
     */
    private $colorIndex;

    /**
     * Data labels.
     *
     * @var mixed[]|null
     */
    private $dataLabels;

    /**
     * Description.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $description;

    /**
     * Drilldown.
     *
     * @var string|null
     * @since 3.0.8
     */
    private $drilldown;

    /**
     * Events.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\Data\HighchartsEvents|null
     */
    private $events;

    /**
     * High.
     *
     * @var float|null
     */
    private $high;

    /**
     * Id.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $id;

    /**
     * Labelrank.
     *
     * @var float|null
     */
    private $labelrank;

    /**
     * Low.
     *
     * @var float|null
     */
    private $low;

    /**
     * Name.
     *
     * @var string|null
     */
    private $name;

    /**
     * Selected.
     *
     * @var bool|null
     */
    private $selected = false;

    /**
     * X.
     *
     * @var float|null
     */
    private $x;

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
     * Get the color index.
     *
     * @return float|null Returns the color index.
     */
    public function getColorIndex(): ?float {
        return $this->colorIndex;
    }

    /**
     * Get the data labels.
     *
     * @return mixed[]|null Returns the data labels.
     */
    public function getDataLabels(): ?array {
        return $this->dataLabels;
    }

    /**
     * Get the description.
     *
     * @return string|null Returns the description.
     */
    public function getDescription(): ?string {
        return $this->description;
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
     * Get the events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\Data\HighchartsEvents|null Returns the events.
     */
    public function getEvents(): ?\WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\Data\HighchartsEvents {
        return $this->events;
    }

    /**
     * Get the high.
     *
     * @return float|null Returns the high.
     */
    public function getHigh(): ?float {
        return $this->high;
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
     * Get the labelrank.
     *
     * @return float|null Returns the labelrank.
     */
    public function getLabelrank(): ?float {
        return $this->labelrank;
    }

    /**
     * Get the low.
     *
     * @return float|null Returns the low.
     */
    public function getLow(): ?float {
        return $this->low;
    }

    /**
     * Get the name.
     *
     * @return string|null Returns the name.
     */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Get the selected.
     *
     * @return bool|null Returns the selected.
     */
    public function getSelected(): ?bool {
        return $this->selected;
    }

    /**
     * Get the x.
     *
     * @return float|null Returns the x.
     */
    public function getX(): ?float {
        return $this->x;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "color", $this->color, [null]);
        ArrayHelper::set($output, "colorIndex", $this->colorIndex, [null]);
        ArrayHelper::set($output, "dataLabels", $this->dataLabels, [null]);
        ArrayHelper::set($output, "description", $this->description, [null]);
        ArrayHelper::set($output, "drilldown", $this->drilldown, [null]);
        if (null !== $this->events) {
            ArrayHelper::set($output, "events", $this->events->jsonSerialize());
        }
        ArrayHelper::set($output, "high", $this->high, [null]);
        ArrayHelper::set($output, "id", $this->id, [null]);
        ArrayHelper::set($output, "labelrank", $this->labelrank, [null]);
        ArrayHelper::set($output, "low", $this->low, [null]);
        ArrayHelper::set($output, "name", $this->name, [null]);
        ArrayHelper::set($output, "selected", $this->selected, [null]);
        ArrayHelper::set($output, "x", $this->x, [null]);

        return $output;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\Data\HighchartsEvents Returns the events.
     */
    public function newEvents(): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\Data\HighchartsEvents {
        $this->events = new \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\Data\HighchartsEvents();
        return $this->events;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param float|null $colorIndex The color index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setColorIndex(?float $colorIndex): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param mixed[]|null $dataLabels The data labels.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setDataLabels(?array $dataLabels): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setDescription(?string $description): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the drilldown.
     *
     * @param string|null $drilldown The drilldown.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setDrilldown(?string $drilldown): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->drilldown = $drilldown;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\Data\HighchartsEvents|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setEvents(?\WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\Data\HighchartsEvents $events): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the high.
     *
     * @param float|null $high The high.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setHigh(?float $high): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->high = $high;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setId(?string $id): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the labelrank.
     *
     * @param float|null $labelrank The labelrank.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setLabelrank(?float $labelrank): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->labelrank = $labelrank;
        return $this;
    }

    /**
     * Set the low.
     *
     * @param float|null $low The low.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setLow(?float $low): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->low = $low;
        return $this;
    }

    /**
     * Set the name.
     *
     * @param string|null $name The name.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setName(?string $name): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the selected.
     *
     * @param bool|null $selected The selected.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setSelected(?bool $selected): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the x.
     *
     * @param float|null $x The x.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData Returns this highcharts data.
     */
    public function setX(?float $x): \WBW\Library\Highcharts\Model\Chart\Series\Areasplinerange\HighchartsData {
        $this->x = $x;
        return $this;
    }
}
