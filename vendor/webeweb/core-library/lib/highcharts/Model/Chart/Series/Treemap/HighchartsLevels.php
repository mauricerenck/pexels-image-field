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

namespace WBW\Library\Highcharts\Model\Chart\Series\Treemap;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts levels.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Series\Treemap
 * @version 5.0.14
 */
class HighchartsLevels implements JsonSerializable {

    /**
     * Border color.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $borderColor;

    /**
     * Border dash style.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $borderDashStyle;

    /**
     * Border width.
     *
     * @var float|null
     * @since 4.1.0
     */
    private $borderWidth;

    /**
     * Color.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $color;

    /**
     * Data labels.
     *
     * @var mixed[]|null
     * @since 4.1.0
     */
    private $dataLabels;

    /**
     * Layout algorithm.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $layoutAlgorithm;

    /**
     * Layout starting direction.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $layoutStartingDirection;

    /**
     * Level.
     *
     * @var float|null
     * @since 4.1.0
     */
    private $level;

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
     * Get the border dash style.
     *
     * @return string|null Returns the border dash style.
     */
    public function getBorderDashStyle(): ?string {
        return $this->borderDashStyle;
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
     * Get the color.
     *
     * @return string|null Returns the color.
     */
    public function getColor(): ?string {
        return $this->color;
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
     * Get the layout algorithm.
     *
     * @return string|null Returns the layout algorithm.
     */
    public function getLayoutAlgorithm(): ?string {
        return $this->layoutAlgorithm;
    }

    /**
     * Get the layout starting direction.
     *
     * @return string|null Returns the layout starting direction.
     */
    public function getLayoutStartingDirection(): ?string {
        return $this->layoutStartingDirection;
    }

    /**
     * Get the level.
     *
     * @return float|null Returns the level.
     */
    public function getLevel(): ?float {
        return $this->level;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "borderColor", $this->borderColor, [null]);
        ArrayHelper::set($output, "borderDashStyle", $this->borderDashStyle, [null]);
        ArrayHelper::set($output, "borderWidth", $this->borderWidth, [null]);
        ArrayHelper::set($output, "color", $this->color, [null]);
        ArrayHelper::set($output, "dataLabels", $this->dataLabels, [null]);
        ArrayHelper::set($output, "layoutAlgorithm", $this->layoutAlgorithm, [null]);
        ArrayHelper::set($output, "layoutStartingDirection", $this->layoutStartingDirection, [null]);
        ArrayHelper::set($output, "level", $this->level, [null]);

        return $output;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels Returns this highcharts levels.
     */
    public function setBorderColor(?string $borderColor): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border dash style.
     *
     * @param string|null $borderDashStyle The border dash style.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels Returns this highcharts levels.
     */
    public function setBorderDashStyle(?string $borderDashStyle): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels {
        $this->borderDashStyle = $borderDashStyle;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param float|null $borderWidth The border width.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels Returns this highcharts levels.
     */
    public function setBorderWidth(?float $borderWidth): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels Returns this highcharts levels.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param mixed[]|null $dataLabels The data labels.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels Returns this highcharts levels.
     */
    public function setDataLabels(?array $dataLabels): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the layout algorithm.
     *
     * @param string|null $layoutAlgorithm The layout algorithm.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels Returns this highcharts levels.
     */
    public function setLayoutAlgorithm(?string $layoutAlgorithm): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels {

        switch ($layoutAlgorithm) {

            case "sliceAndDice":
            case "squarified":
            case "strip":
            case "stripes":
                $this->layoutAlgorithm = $layoutAlgorithm;
                break;
        }

        return $this;
    }

    /**
     * Set the layout starting direction.
     *
     * @param string|null $layoutStartingDirection The layout starting direction.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels Returns this highcharts levels.
     */
    public function setLayoutStartingDirection(?string $layoutStartingDirection): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels {

        switch ($layoutStartingDirection) {

            case "horizontal":
            case "vertical":
                $this->layoutStartingDirection = $layoutStartingDirection;
                break;
        }

        return $this;
    }

    /**
     * Set the level.
     *
     * @param float|null $level The level.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels Returns this highcharts levels.
     */
    public function setLevel(?float $level): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsLevels {
        $this->level = $level;
        return $this;
    }
}
