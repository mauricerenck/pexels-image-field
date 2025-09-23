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

namespace WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts states.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid
 * @version 5.0.14
 */
class HighchartsStates implements JsonSerializable {

    /**
     * Hover.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\States\HighchartsHover|null
     */
    private $hover;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the hover.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\States\HighchartsHover|null Returns the hover.
     */
    public function getHover(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\States\HighchartsHover {
        return $this->hover;
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

        return $output;
    }

    /**
     * Create a new hover.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\States\HighchartsHover Returns the hover.
     */
    public function newHover(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\States\HighchartsHover {
        $this->hover = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\States\HighchartsHover();
        return $this->hover;
    }

    /**
     * Set the hover.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\States\HighchartsHover|null $hover The hover.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsStates Returns this highcharts states.
     */
    public function setHover(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\States\HighchartsHover $hover): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Pyramid\HighchartsStates {
        $this->hover = $hover;
        return $this;
    }
}
