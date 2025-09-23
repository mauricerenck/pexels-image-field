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

namespace WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts states.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker
 * @version 5.0.14
 */
class HighchartsStates implements JsonSerializable {

    /**
     * Hover.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsHover|null
     */
    private $hover;

    /**
     * Select.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsSelect|null
     */
    private $select;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the hover.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsHover|null Returns the hover.
     */
    public function getHover(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsHover {
        return $this->hover;
    }

    /**
     * Get the select.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsSelect|null Returns the select.
     */
    public function getSelect(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsSelect {
        return $this->select;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        if (null !== $this->hover) {
            ArrayHelper::set($output, "hover", $this->hover->jsonSerialize());
        }
        if (null !== $this->select) {
            ArrayHelper::set($output, "select", $this->select->jsonSerialize());
        }

        return $output;
    }

    /**
     * Create a new hover.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsHover Returns the hover.
     */
    public function newHover(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsHover {
        $this->hover = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsHover();
        return $this->hover;
    }

    /**
     * Create a new select.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsSelect Returns the select.
     */
    public function newSelect(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsSelect {
        $this->select = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsSelect();
        return $this->select;
    }

    /**
     * Set the hover.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsHover|null $hover The hover.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\HighchartsStates Returns this highcharts states.
     */
    public function setHover(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsHover $hover): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\HighchartsStates {
        $this->hover = $hover;
        return $this;
    }

    /**
     * Set the select.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsSelect|null $select The select.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\HighchartsStates Returns this highcharts states.
     */
    public function setSelect(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\States\HighchartsSelect $select): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Scatter\Marker\HighchartsStates {
        $this->select = $select;
        return $this;
    }
}
