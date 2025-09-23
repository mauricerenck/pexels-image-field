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
 * Highcharts no data.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsNoData implements JsonSerializable {

    /**
     * Attr.
     *
     * @var mixed[]|null
     * @since 3.0.8
     */
    private $attr;

    /**
     * Position.
     *
     * @var mixed[]|null
     * @since 3.0.8
     */
    private $position = ["x" => 0, "y" => 0, "align" => "center", "verticalAlign" => "middle"];

    /**
     * Style.
     *
     * @var mixed[]|null
     * @since 3.0.8
     */
    private $style = ["fontSize" => "12px", "fontWeight" => "bold", "color" => "#666666"];

    /**
     * Use HTML.
     *
     * @var bool|null
     * @since 4.1.10
     */
    private $useHTML = false;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the attr.
     *
     * @return mixed[]|null Returns the attr.
     */
    public function getAttr(): ?array {
        return $this->attr;
    }

    /**
     * Get the position.
     *
     * @return mixed[]|null Returns the position.
     */
    public function getPosition(): ?array {
        return $this->position;
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
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "attr", $this->attr, [null]);
        ArrayHelper::set($output, "position", $this->position, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);
        ArrayHelper::set($output, "useHTML", $this->useHTML, [null]);

        return $output;
    }

    /**
     * Set the attr.
     *
     * @param mixed[]|null $attr The attr.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsNoData Returns this highcharts no data.
     */
    public function setAttr(?array $attr): \WBW\Library\Highcharts\Model\Chart\HighchartsNoData {
        $this->attr = $attr;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param mixed[]|null $position The position.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsNoData Returns this highcharts no data.
     */
    public function setPosition(?array $position): \WBW\Library\Highcharts\Model\Chart\HighchartsNoData {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsNoData Returns this highcharts no data.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\HighchartsNoData {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the use HTML.
     *
     * @param bool|null $useHTML The use HTML.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsNoData Returns this highcharts no data.
     */
    public function setUseHTML(?bool $useHTML): \WBW\Library\Highcharts\Model\Chart\HighchartsNoData {
        $this->useHTML = $useHTML;
        return $this;
    }
}
