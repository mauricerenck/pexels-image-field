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

namespace WBW\Library\Highcharts\Model\Chart\YAxis;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts stack labels.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\YAxis
 * @version 5.0.14
 */
class HighchartsStackLabels implements JsonSerializable {

    /**
     * Align.
     *
     * @var string|null
     * @since 2.1.5
     */
    private $align;

    /**
     * Enabled.
     *
     * @var bool|null
     * @since 2.1.5
     */
    private $enabled = false;

    /**
     * Format.
     *
     * @var string|null
     * @since 3.0.2
     */
    private $format = "{total}";

    /**
     * Formatter.
     *
     * @var string|null
     * @since 2.1.5
     */
    private $formatter;

    /**
     * Rotation.
     *
     * @var float|null
     * @since 2.1.5
     */
    private $rotation = 0;

    /**
     * Style.
     *
     * @var mixed[]|null
     * @since 2.1.5
     */
    private $style = ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"];

    /**
     * Text align.
     *
     * @var string|null
     * @since 2.1.5
     */
    private $textAlign;

    /**
     * Use HTML.
     *
     * @var bool|null
     * @since 3.0
     */
    private $useHTML = false;

    /**
     * Vertical align.
     *
     * @var string|null
     * @since 2.1.5
     */
    private $verticalAlign;

    /**
     * X.
     *
     * @var float|null
     * @since 2.1.5
     */
    private $x;

    /**
     * Y.
     *
     * @var float|null
     * @since 2.1.5
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
     * Get the enabled.
     *
     * @return bool|null Returns the enabled.
     */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * Get the format.
     *
     * @return string|null Returns the format.
     */
    public function getFormat(): ?string {
        return $this->format;
    }

    /**
     * Get the formatter.
     *
     * @return string|null Returns the formatter.
     */
    public function getFormatter(): ?string {
        return $this->formatter;
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
        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "format", $this->format, [null]);
        ArrayHelper::set($output, "formatter", $this->formatter, [null]);
        ArrayHelper::set($output, "rotation", $this->rotation, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);
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
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels Returns this highcharts stack labels.
     */
    public function setAlign(?string $align): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels {

        switch ($align) {

            case "center":
            case "left":
            case "right":
                $this->align = $align;
                break;
        }

        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels Returns this highcharts stack labels.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the format.
     *
     * @param string|null $format The format.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels Returns this highcharts stack labels.
     */
    public function setFormat(?string $format): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels {
        $this->format = $format;
        return $this;
    }

    /**
     * Set the formatter.
     *
     * @param string|null $formatter The formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels Returns this highcharts stack labels.
     */
    public function setFormatter(?string $formatter): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels {
        $this->formatter = $formatter;
        return $this;
    }

    /**
     * Set the rotation.
     *
     * @param float|null $rotation The rotation.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels Returns this highcharts stack labels.
     */
    public function setRotation(?float $rotation): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels {
        $this->rotation = $rotation;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels Returns this highcharts stack labels.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the text align.
     *
     * @param string|null $textAlign The text align.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels Returns this highcharts stack labels.
     */
    public function setTextAlign(?string $textAlign): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels {

        switch ($textAlign) {

            case "center":
            case "left":
            case "right":
                $this->textAlign = $textAlign;
                break;
        }

        return $this;
    }

    /**
     * Set the use HTML.
     *
     * @param bool|null $useHTML The use HTML.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels Returns this highcharts stack labels.
     */
    public function setUseHTML(?bool $useHTML): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels {
        $this->useHTML = $useHTML;
        return $this;
    }

    /**
     * Set the vertical align.
     *
     * @param string|null $verticalAlign The vertical align.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels Returns this highcharts stack labels.
     */
    public function setVerticalAlign(?string $verticalAlign): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels {

        switch ($verticalAlign) {

            case "bottom":
            case "middle":
            case "top":
                $this->verticalAlign = $verticalAlign;
                break;
        }

        return $this;
    }

    /**
     * Set the x.
     *
     * @param float|null $x The x.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels Returns this highcharts stack labels.
     */
    public function setX(?float $x): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param float|null $y The y.
     * @return \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels Returns this highcharts stack labels.
     */
    public function setY(?float $y): \WBW\Library\Highcharts\Model\Chart\YAxis\HighchartsStackLabels {
        $this->y = $y;
        return $this;
    }
}
