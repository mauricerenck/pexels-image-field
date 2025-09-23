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
 * Highcharts title.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\ZAxis
 * @version 5.0.14
 */
class HighchartsTitle implements JsonSerializable {

    /**
     * Align.
     *
     * @var string|null
     */
    private $align = "middle";

    /**
     * Enabled.
     *
     * @var string|null
     * @deprecated
     */
    private $enabled = "middle";

    /**
     * Margin.
     *
     * @var float|null
     */
    private $margin;

    /**
     * Offset.
     *
     * @var float|null
     * @since 2.2.0
     */
    private $offset;

    /**
     * Reserve space.
     *
     * @var bool|null
     * @since 5.0.11
     */
    private $reserveSpace = true;

    /**
     * Rotation.
     *
     * @var float|null
     */
    private $rotation = 0;

    /**
     * Style.
     *
     * @var mixed[]|null
     */
    private $style = ["color" => "#666666"];

    /**
     * Text.
     *
     * @var string|null
     */
    private $text;

    /**
     * X.
     *
     * @var float|null
     * @since 4.1.6
     */
    private $x = 0;

    /**
     * Y.
     *
     * @var float|null
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
     * @return string|null Returns the enabled.
     * @deprecated
     */
    public function getEnabled(): ?string {
        return $this->enabled;
    }

    /**
     * Get the margin.
     *
     * @return float|null Returns the margin.
     */
    public function getMargin(): ?float {
        return $this->margin;
    }

    /**
     * Get the offset.
     *
     * @return float|null Returns the offset.
     */
    public function getOffset(): ?float {
        return $this->offset;
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
        ArrayHelper::set($output, "margin", $this->margin, [null]);
        ArrayHelper::set($output, "offset", $this->offset, [null]);
        ArrayHelper::set($output, "reserveSpace", $this->reserveSpace, [null]);
        ArrayHelper::set($output, "rotation", $this->rotation, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);
        ArrayHelper::set($output, "text", $this->text, [null]);
        ArrayHelper::set($output, "x", $this->x, [null]);
        ArrayHelper::set($output, "y", $this->y, [null]);

        return $output;
    }

    /**
     * Set the align.
     *
     * @param string|null $align The align.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle Returns this highcharts title.
     */
    public function setAlign(?string $align): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle {

        switch ($align) {

            case "high":
            case "low":
            case "middle":
                $this->align = $align;
                break;
        }

        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param string|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle Returns this highcharts title.
     * @deprecated
     */
    public function setEnabled(?string $enabled): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the margin.
     *
     * @param float|null $margin The margin.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle Returns this highcharts title.
     */
    public function setMargin(?float $margin): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle {
        $this->margin = $margin;
        return $this;
    }

    /**
     * Set the offset.
     *
     * @param float|null $offset The offset.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle Returns this highcharts title.
     */
    public function setOffset(?float $offset): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle {
        $this->offset = $offset;
        return $this;
    }

    /**
     * Set the reserve space.
     *
     * @param bool|null $reserveSpace The reserve space.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle Returns this highcharts title.
     */
    public function setReserveSpace(?bool $reserveSpace): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle {
        $this->reserveSpace = $reserveSpace;
        return $this;
    }

    /**
     * Set the rotation.
     *
     * @param float|null $rotation The rotation.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle Returns this highcharts title.
     */
    public function setRotation(?float $rotation): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle {
        $this->rotation = $rotation;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle Returns this highcharts title.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the text.
     *
     * @param string|null $text The text.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle Returns this highcharts title.
     */
    public function setText(?string $text): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle {
        $this->text = $text;
        return $this;
    }

    /**
     * Set the x.
     *
     * @param float|null $x The x.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle Returns this highcharts title.
     */
    public function setX(?float $x): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param float|null $y The y.
     * @return \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle Returns this highcharts title.
     */
    public function setY(?float $y): \WBW\Library\Highcharts\Model\Chart\ZAxis\HighchartsTitle {
        $this->y = $y;
        return $this;
    }
}
