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
 * Highcharts labels.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\XAxis
 * @version 5.0.14
 */
class HighchartsLabels implements JsonSerializable {

    /**
     * Align.
     *
     * @var string|null
     */
    private $align;

    /**
     * Auto rotation.
     *
     * @var mixed[]|null
     * @since 4.1.0
     */
    private $autoRotation = [-45];

    /**
     * Auto rotation limit.
     *
     * @var float|null
     * @since 4.1.5
     */
    private $autoRotationLimit = 80;

    /**
     * Distance.
     *
     * @var float|null
     */
    private $distance = 15;

    /**
     * Enabled.
     *
     * @var bool|null
     */
    private $enabled = true;

    /**
     * Format.
     *
     * @var string|null
     * @since 3.0
     */
    private $format = "{value}";

    /**
     * Formatter.
     *
     * @var string|null
     */
    private $formatter;

    /**
     * Overflow.
     *
     * @var string|null
     * @since 2.2.5
     * @deprecated
     */
    private $overflow;

    /**
     * Padding.
     *
     * @var float|null
     */
    private $padding = 5;

    /**
     * Reserve space.
     *
     * @var bool|null
     * @since 4.1.10
     */
    private $reserveSpace = true;

    /**
     * Rotation.
     *
     * @var float|null
     */
    private $rotation = 0;

    /**
     * Stagger lines.
     *
     * @var float|null
     * @since 2.1
     */
    private $staggerLines;

    /**
     * Step.
     *
     * @var float|null
     * @since 2.1
     */
    private $step;

    /**
     * Style.
     *
     * @var mixed[]|null
     */
    private $style = ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"];

    /**
     * Use HTML.
     *
     * @var bool|null
     */
    private $useHTML = false;

    /**
     * X.
     *
     * @var float|null
     */
    private $x = 0;

    /**
     * Y.
     *
     * @var float|null
     */
    private $y;

    /**
     * Z index.
     *
     * @var float|null
     */
    private $zIndex = 7;

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
     * Get the auto rotation.
     *
     * @return mixed[]|null Returns the auto rotation.
     */
    public function getAutoRotation(): ?array {
        return $this->autoRotation;
    }

    /**
     * Get the auto rotation limit.
     *
     * @return float|null Returns the auto rotation limit.
     */
    public function getAutoRotationLimit(): ?float {
        return $this->autoRotationLimit;
    }

    /**
     * Get the distance.
     *
     * @return float|null Returns the distance.
     */
    public function getDistance(): ?float {
        return $this->distance;
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
     * Get the overflow.
     *
     * @return string|null Returns the overflow.
     * @deprecated
     */
    public function getOverflow(): ?string {
        return $this->overflow;
    }

    /**
     * Get the padding.
     *
     * @return float|null Returns the padding.
     */
    public function getPadding(): ?float {
        return $this->padding;
    }

    /**
     * Get the reserve space.
     *
     * @return bool|null Returns the reserve space.
     */
    public function getReserveSpace(): ?bool {
        return $this->reserveSpace;
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
     * Get the stagger lines.
     *
     * @return float|null Returns the stagger lines.
     */
    public function getStaggerLines(): ?float {
        return $this->staggerLines;
    }

    /**
     * Get the step.
     *
     * @return float|null Returns the step.
     */
    public function getStep(): ?float {
        return $this->step;
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
     * Get the use HTML.
     *
     * @return bool|null Returns the use HTML.
     */
    public function getUseHTML(): ?bool {
        return $this->useHTML;
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

        ArrayHelper::set($output, "align", $this->align, [null]);
        ArrayHelper::set($output, "autoRotation", $this->autoRotation, [null]);
        ArrayHelper::set($output, "autoRotationLimit", $this->autoRotationLimit, [null]);
        ArrayHelper::set($output, "distance", $this->distance, [null]);
        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "format", $this->format, [null]);
        ArrayHelper::set($output, "formatter", $this->formatter, [null]);
        ArrayHelper::set($output, "overflow", $this->overflow, [null]);
        ArrayHelper::set($output, "padding", $this->padding, [null]);
        ArrayHelper::set($output, "reserveSpace", $this->reserveSpace, [null]);
        ArrayHelper::set($output, "rotation", $this->rotation, [null]);
        ArrayHelper::set($output, "staggerLines", $this->staggerLines, [null]);
        ArrayHelper::set($output, "step", $this->step, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);
        ArrayHelper::set($output, "useHTML", $this->useHTML, [null]);
        ArrayHelper::set($output, "x", $this->x, [null]);
        ArrayHelper::set($output, "y", $this->y, [null]);
        ArrayHelper::set($output, "zIndex", $this->zIndex, [null]);

        return $output;
    }

    /**
     * Set the align.
     *
     * @param string|null $align The align.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setAlign(?string $align): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {

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
     * Set the auto rotation.
     *
     * @param mixed[]|null $autoRotation The auto rotation.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setAutoRotation(?array $autoRotation): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->autoRotation = $autoRotation;
        return $this;
    }

    /**
     * Set the auto rotation limit.
     *
     * @param float|null $autoRotationLimit The auto rotation limit.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setAutoRotationLimit(?float $autoRotationLimit): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->autoRotationLimit = $autoRotationLimit;
        return $this;
    }

    /**
     * Set the distance.
     *
     * @param float|null $distance The distance.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setDistance(?float $distance): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->distance = $distance;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the format.
     *
     * @param string|null $format The format.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setFormat(?string $format): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->format = $format;
        return $this;
    }

    /**
     * Set the formatter.
     *
     * @param string|null $formatter The formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setFormatter(?string $formatter): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->formatter = $formatter;
        return $this;
    }

    /**
     * Set the overflow.
     *
     * @param string|null $overflow The overflow.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     * @deprecated
     */
    public function setOverflow(?string $overflow): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {

        switch ($overflow) {

            case null:
            case "justify":
                $this->overflow = $overflow;
                break;
        }

        return $this;
    }

    /**
     * Set the padding.
     *
     * @param float|null $padding The padding.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setPadding(?float $padding): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->padding = $padding;
        return $this;
    }

    /**
     * Set the reserve space.
     *
     * @param bool|null $reserveSpace The reserve space.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setReserveSpace(?bool $reserveSpace): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->reserveSpace = $reserveSpace;
        return $this;
    }

    /**
     * Set the rotation.
     *
     * @param float|null $rotation The rotation.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setRotation(?float $rotation): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->rotation = $rotation;
        return $this;
    }

    /**
     * Set the stagger lines.
     *
     * @param float|null $staggerLines The stagger lines.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setStaggerLines(?float $staggerLines): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->staggerLines = $staggerLines;
        return $this;
    }

    /**
     * Set the step.
     *
     * @param float|null $step The step.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setStep(?float $step): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->step = $step;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the use HTML.
     *
     * @param bool|null $useHTML The use HTML.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setUseHTML(?bool $useHTML): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->useHTML = $useHTML;
        return $this;
    }

    /**
     * Set the x.
     *
     * @param float|null $x The x.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setX(?float $x): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param float|null $y The y.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setY(?float $y): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->y = $y;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param float|null $zIndex The z index.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels Returns this highcharts labels.
     */
    public function setZIndex(?float $zIndex): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsLabels {
        $this->zIndex = $zIndex;
        return $this;
    }
}
