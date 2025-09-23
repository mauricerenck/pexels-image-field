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

namespace WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts label.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands
 * @version 5.0.14
 */
class HighchartsLabel implements JsonSerializable {

    /**
     * Align.
     *
     * @var string|null
     * @since 2.1
     */
    private $align = "center";

    /**
     * Rotation.
     *
     * @var float|null
     * @since 2.1
     */
    private $rotation = 0;

    /**
     * Style.
     *
     * @var mixed[]|null
     * @since 2.1
     */
    private $style;

    /**
     * Text.
     *
     * @var string|null
     * @since 2.1
     */
    private $text;

    /**
     * Text align.
     *
     * @var string|null
     * @since 2.1
     */
    private $textAlign;

    /**
     * Use HTML.
     *
     * @var bool|null
     * @since 3.0.3
     */
    private $useHTML = false;

    /**
     * Vertical align.
     *
     * @var string|null
     * @since 2.1
     */
    private $verticalAlign = "top";

    /**
     * X.
     *
     * @var float|null
     * @since 2.1
     */
    private $x;

    /**
     * Y.
     *
     * @var float|null
     * @since 2.1
     */
    private $y;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the align.
     *
     * @return string|null Returns the align.
     */
    public function getAlign(): ?string {
        return $this->align;
    }

    /**
     * Get the rotation.
     *
     * @return float|null Returns the rotation.
     */
    public function getRotation(): ?float {
        return $this->rotation;
    }

    /**
     * Get the style.
     *
     * @return mixed[]|null Returns the style.
     */
    public function getStyle(): ?array {
        return $this->style;
    }

    /**
     * Get the text.
     *
     * @return string|null Returns the text.
     */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Get the text align.
     *
     * @return string|null Returns the text align.
     */
    public function getTextAlign(): ?string {
        return $this->textAlign;
    }

    /**
     * Get the use HTML.
     *
     * @return bool|null Returns the use HTML.
     */
    public function getUseHTML(): ?bool {
        return $this->useHTML;
    }

    /**
     * Get the vertical align.
     *
     * @return string|null Returns the vertical align.
     */
    public function getVerticalAlign(): ?string {
        return $this->verticalAlign;
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
     * Get the y.
     *
     * @return float|null Returns the y.
     */
    public function getY(): ?float {
        return $this->y;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "align", $this->align, [null]);
        ArrayHelper::set($output, "rotation", $this->rotation, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);
        ArrayHelper::set($output, "text", $this->text, [null]);
        ArrayHelper::set($output, "textAlign", $this->textAlign, [null]);
        ArrayHelper::set($output, "useHTML", $this->useHTML, [null]);
        ArrayHelper::set($output, "verticalAlign", $this->verticalAlign, [null]);
        ArrayHelper::set($output, "x", $this->x, [null]);
        ArrayHelper::set($output, "y", $this->y, [null]);

        return $output;
    }

    /**
     * Set the align.
     *
     * @param string|null $align The align.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel Returns this highcharts label.
     */
    public function setAlign(?string $align): \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel {
        $this->align = $align;
        return $this;
    }

    /**
     * Set the rotation.
     *
     * @param float|null $rotation The rotation.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel Returns this highcharts label.
     */
    public function setRotation(?float $rotation): \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel {
        $this->rotation = $rotation;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel Returns this highcharts label.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the text.
     *
     * @param string|null $text The text.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel Returns this highcharts label.
     */
    public function setText(?string $text): \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel {
        $this->text = $text;
        return $this;
    }

    /**
     * Set the text align.
     *
     * @param string|null $textAlign The text align.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel Returns this highcharts label.
     */
    public function setTextAlign(?string $textAlign): \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel {
        $this->textAlign = $textAlign;
        return $this;
    }

    /**
     * Set the use HTML.
     *
     * @param bool|null $useHTML The use HTML.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel Returns this highcharts label.
     */
    public function setUseHTML(?bool $useHTML): \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel {
        $this->useHTML = $useHTML;
        return $this;
    }

    /**
     * Set the vertical align.
     *
     * @param string|null $verticalAlign The vertical align.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel Returns this highcharts label.
     */
    public function setVerticalAlign(?string $verticalAlign): \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel {
        $this->verticalAlign = $verticalAlign;
        return $this;
    }

    /**
     * Set the x.
     *
     * @param float|null $x The x.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel Returns this highcharts label.
     */
    public function setX(?float $x): \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param float|null $y The y.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel Returns this highcharts label.
     */
    public function setY(?float $y): \WBW\Library\Highcharts\Model\Chart\XAxis\PlotBands\HighchartsLabel {
        $this->y = $y;
        return $this;
    }
}
