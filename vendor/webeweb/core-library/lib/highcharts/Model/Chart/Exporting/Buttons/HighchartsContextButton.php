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

namespace WBW\Library\Highcharts\Model\Chart\Exporting\Buttons;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts context button.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Exporting\Buttons
 * @version 5.0.14
 */
class HighchartsContextButton implements JsonSerializable {

    /**
     * Align.
     *
     * @var string|null
     * @since 2.0
     */
    private $align = "right";

    /**
     * Enabled.
     *
     * @var bool|null
     * @since 2.0
     */
    private $enabled = true;

    /**
     * Height.
     *
     * @var float|null
     * @since 2.0
     */
    private $height = 20;

    /**
     * Menu items.
     *
     * @var mixed[]|null
     * @since 2.0
     */
    private $menuItems;

    /**
     * Onclick.
     *
     * @var string|null
     * @since 2.0
     */
    private $onclick;

    /**
     * Symbol.
     *
     * @var string|null
     * @since 2.0
     */
    private $symbol = "menu";

    /**
     * Symbol fill.
     *
     * @var string|null
     * @since 2.0
     */
    private $symbolFill = "#666666";

    /**
     * Symbol size.
     *
     * @var float|null
     * @since 2.0
     */
    private $symbolSize = 14;

    /**
     * Symbol stroke.
     *
     * @var string|null
     * @since 2.0
     */
    private $symbolStroke = "#666666";

    /**
     * Symbol stroke width.
     *
     * @var float|null
     * @since 2.0
     */
    private $symbolStrokeWidth = 1;

    /**
     * Symbol x.
     *
     * @var float|null
     * @since 2.0
     */
    private $symbolX = 12.5;

    /**
     * Symbol y.
     *
     * @var float|null
     * @since 2.0
     */
    private $symbolY = 10.5;

    /**
     * Text.
     *
     * @var string|null
     * @since 3.0
     */
    private $text;

    /**
     * Theme.
     *
     * @var mixed[]|null
     * @since 3.0
     */
    private $theme;

    /**
     * Vertical align.
     *
     * @var string|null
     * @since 2.0
     */
    private $verticalAlign = "top";

    /**
     * Width.
     *
     * @var float|null
     * @since 2.0
     */
    private $width = 24;

    /**
     * X.
     *
     * @var float|null
     * @since 2.0
     */
    private $x = -10;

    /**
     * Y.
     *
     * @var float|null
     * @since 2.0
     */
    private $y = 0;

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
     * Get the height.
     *
     * @return float|null Returns the height.
     */
    public function getHeight(): ?float {
        return $this->height;
    }

    /**
     * Get the menu items.
     *
     * @return mixed[]|null Returns the menu items.
     */
    public function getMenuItems(): ?array {
        return $this->menuItems;
    }

    /**
     * Get the onclick.
     *
     * @return string|null Returns the onclick.
     */
    public function getOnclick(): ?string {
        return $this->onclick;
    }

    /**
     * Get the symbol.
     *
     * @return string|null Returns the symbol.
     */
    public function getSymbol(): ?string {
        return $this->symbol;
    }

    /**
     * Get the symbol fill.
     *
     * @return string|null Returns the symbol fill.
     */
    public function getSymbolFill(): ?string {
        return $this->symbolFill;
    }

    /**
     * Get the symbol size.
     *
     * @return float|null Returns the symbol size.
     */
    public function getSymbolSize(): ?float {
        return $this->symbolSize;
    }

    /**
     * Get the symbol stroke.
     *
     * @return string|null Returns the symbol stroke.
     */
    public function getSymbolStroke(): ?string {
        return $this->symbolStroke;
    }

    /**
     * Get the symbol stroke width.
     *
     * @return float|null Returns the symbol stroke width.
     */
    public function getSymbolStrokeWidth(): ?float {
        return $this->symbolStrokeWidth;
    }

    /**
     * Get the symbol x.
     *
     * @return float|null Returns the symbol x.
     */
    public function getSymbolX(): ?float {
        return $this->symbolX;
    }

    /**
     * Get the symbol y.
     *
     * @return float|null Returns the symbol y.
     */
    public function getSymbolY(): ?float {
        return $this->symbolY;
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
     * Get the theme.
     *
     * @return mixed[]|null Returns the theme.
     */
    public function getTheme(): ?array {
        return $this->theme;
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
     * Get the width.
     *
     * @return float|null Returns the width.
     */
    public function getWidth(): ?float {
        return $this->width;
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
        ArrayHelper::set($output, "height", $this->height, [null]);
        ArrayHelper::set($output, "menuItems", $this->menuItems, [null]);
        ArrayHelper::set($output, "onclick", $this->onclick, [null]);
        ArrayHelper::set($output, "symbol", $this->symbol, [null]);
        ArrayHelper::set($output, "symbolFill", $this->symbolFill, [null]);
        ArrayHelper::set($output, "symbolSize", $this->symbolSize, [null]);
        ArrayHelper::set($output, "symbolStroke", $this->symbolStroke, [null]);
        ArrayHelper::set($output, "symbolStrokeWidth", $this->symbolStrokeWidth, [null]);
        ArrayHelper::set($output, "symbolX", $this->symbolX, [null]);
        ArrayHelper::set($output, "symbolY", $this->symbolY, [null]);
        ArrayHelper::set($output, "text", $this->text, [null]);
        ArrayHelper::set($output, "theme", $this->theme, [null]);
        ArrayHelper::set($output, "verticalAlign", $this->verticalAlign, [null]);
        ArrayHelper::set($output, "width", $this->width, [null]);
        ArrayHelper::set($output, "x", $this->x, [null]);
        ArrayHelper::set($output, "y", $this->y, [null]);

        return $output;
    }

    /**
     * Set the align.
     *
     * @param string|null $align The align.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setAlign(?string $align): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {

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
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the height.
     *
     * @param float|null $height The height.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setHeight(?float $height): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->height = $height;
        return $this;
    }

    /**
     * Set the menu items.
     *
     * @param mixed[]|null $menuItems The menu items.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setMenuItems(?array $menuItems): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->menuItems = $menuItems;
        return $this;
    }

    /**
     * Set the onclick.
     *
     * @param string|null $onclick The onclick.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setOnclick(?string $onclick): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->onclick = $onclick;
        return $this;
    }

    /**
     * Set the symbol.
     *
     * @param string|null $symbol The symbol.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setSymbol(?string $symbol): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {

        switch ($symbol) {

            case "circle":
            case "diamond":
            case "menu":
            case "square":
            case "triangle":
            case "triangle-down":
                $this->symbol = $symbol;
                break;
        }

        return $this;
    }

    /**
     * Set the symbol fill.
     *
     * @param string|null $symbolFill The symbol fill.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setSymbolFill(?string $symbolFill): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->symbolFill = $symbolFill;
        return $this;
    }

    /**
     * Set the symbol size.
     *
     * @param float|null $symbolSize The symbol size.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setSymbolSize(?float $symbolSize): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->symbolSize = $symbolSize;
        return $this;
    }

    /**
     * Set the symbol stroke.
     *
     * @param string|null $symbolStroke The symbol stroke.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setSymbolStroke(?string $symbolStroke): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->symbolStroke = $symbolStroke;
        return $this;
    }

    /**
     * Set the symbol stroke width.
     *
     * @param float|null $symbolStrokeWidth The symbol stroke width.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setSymbolStrokeWidth(?float $symbolStrokeWidth): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->symbolStrokeWidth = $symbolStrokeWidth;
        return $this;
    }

    /**
     * Set the symbol x.
     *
     * @param float|null $symbolX The symbol x.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setSymbolX(?float $symbolX): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->symbolX = $symbolX;
        return $this;
    }

    /**
     * Set the symbol y.
     *
     * @param float|null $symbolY The symbol y.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setSymbolY(?float $symbolY): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->symbolY = $symbolY;
        return $this;
    }

    /**
     * Set the text.
     *
     * @param string|null $text The text.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setText(?string $text): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->text = $text;
        return $this;
    }

    /**
     * Set the theme.
     *
     * @param mixed[]|null $theme The theme.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setTheme(?array $theme): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->theme = $theme;
        return $this;
    }

    /**
     * Set the vertical align.
     *
     * @param string|null $verticalAlign The vertical align.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setVerticalAlign(?string $verticalAlign): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {

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
     * Set the width.
     *
     * @param float|null $width The width.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setWidth(?float $width): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->width = $width;
        return $this;
    }

    /**
     * Set the x.
     *
     * @param float|null $x The x.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setX(?float $x): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param float|null $y The y.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns this highcharts context button.
     */
    public function setY(?float $y): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->y = $y;
        return $this;
    }
}
