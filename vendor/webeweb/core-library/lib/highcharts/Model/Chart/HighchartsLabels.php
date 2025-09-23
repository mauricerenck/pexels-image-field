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
 * Highcharts labels.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsLabels implements JsonSerializable {

    /**
     * Items.
     *
     * @var mixed[]|null
     */
    private $items;

    /**
     * Style.
     *
     * @var mixed[]|null
     */
    private $style = ["color" => "#333333"];

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the items.
     *
     * @return mixed[]|null Returns the items.
     */
    public function getItems(): ?array {
        return $this->items;
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
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "items", $this->items, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);

        return $output;
    }

    /**
     * Set the items.
     *
     * @param mixed[]|null $items The items.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLabels Returns this highcharts labels.
     */
    public function setItems(?array $items): \WBW\Library\Highcharts\Model\Chart\HighchartsLabels {
        $this->items = $items;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLabels Returns this highcharts labels.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\HighchartsLabels {
        $this->style = $style;
        return $this;
    }
}
