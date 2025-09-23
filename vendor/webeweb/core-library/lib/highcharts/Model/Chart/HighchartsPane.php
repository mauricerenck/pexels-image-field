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

namespace WBW\Library\Highcharts\Model\Chart;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts pane.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsPane implements JsonSerializable {

    /**
     * Background.
     *
     * @var mixed[]|null
     * @since 2.3.0
     */
    private $background;

    /**
     * Center.
     *
     * @var mixed[]|null
     * @since 2.3.0
     */
    private $center = ["50%", "50%"];

    /**
     * End angle.
     *
     * @var float|null
     * @since 2.3.0
     */
    private $endAngle;

    /**
     * Size.
     *
     * @var mixed|null
     */
    private $size = "85%";

    /**
     * Start angle.
     *
     * @var float|null
     * @since 2.3.0
     */
    private $startAngle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the background.
     *
     * @return mixed[]|null Returns the background.
     */
    public function getBackground(): ?array {
        return $this->background;
    }

    /**
     * Get the center.
     *
     * @return mixed[]|null Returns the center.
     */
    public function getCenter(): ?array {
        return $this->center;
    }

    /**
     * Get the end angle.
     *
     * @return float|null Returns the end angle.
     */
    public function getEndAngle(): ?float {
        return $this->endAngle;
    }

    /**
     * Get the size.
     *
     * @return mixed Returns the size.
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Get the start angle.
     *
     * @return float|null Returns the start angle.
     */
    public function getStartAngle(): ?float {
        return $this->startAngle;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "background", $this->background, [null]);
        ArrayHelper::set($output, "center", $this->center, [null]);
        ArrayHelper::set($output, "endAngle", $this->endAngle, [null]);
        ArrayHelper::set($output, "size", $this->size, [null]);
        ArrayHelper::set($output, "startAngle", $this->startAngle, [null]);

        return $output;
    }

    /**
     * Set the background.
     *
     * @param mixed[]|null $background The background.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPane Returns this highcharts pane.
     */
    public function setBackground(?array $background): \WBW\Library\Highcharts\Model\Chart\HighchartsPane {
        $this->background = $background;
        return $this;
    }

    /**
     * Set the center.
     *
     * @param mixed[]|null $center The center.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPane Returns this highcharts pane.
     */
    public function setCenter(?array $center): \WBW\Library\Highcharts\Model\Chart\HighchartsPane {
        $this->center = $center;
        return $this;
    }

    /**
     * Set the end angle.
     *
     * @param float|null $endAngle The end angle.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPane Returns this highcharts pane.
     */
    public function setEndAngle(?float $endAngle): \WBW\Library\Highcharts\Model\Chart\HighchartsPane {
        $this->endAngle = $endAngle;
        return $this;
    }

    /**
     * Set the size.
     *
     * @param mixed $size The size.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPane Returns this highcharts pane.
     */
    public function setSize($size): \WBW\Library\Highcharts\Model\Chart\HighchartsPane {
        $this->size = $size;
        return $this;
    }

    /**
     * Set the start angle.
     *
     * @param float|null $startAngle The start angle.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsPane Returns this highcharts pane.
     */
    public function setStartAngle(?float $startAngle): \WBW\Library\Highcharts\Model\Chart\HighchartsPane {
        $this->startAngle = $startAngle;
        return $this;
    }
}
