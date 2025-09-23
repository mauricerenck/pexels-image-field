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

namespace WBW\Library\Highcharts\Model\Chart\Responsive;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts rules.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Responsive
 * @version 5.0.14
 */
class HighchartsRules implements JsonSerializable {

    /**
     * Chart options.
     *
     * @var mixed[]|null
     * @since 5.0.0
     */
    private $chartOptions;

    /**
     * Condition.
     *
     * @var mixed[]|null
     * @since 5.0.0
     */
    private $condition;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the chart options.
     *
     * @return mixed[]|null Returns the chart options.
     */
    public function getChartOptions(): ?array {
        return $this->chartOptions;
    }

    /**
     * Get the condition.
     *
     * @return mixed[]|null Returns the condition.
     */
    public function getCondition(): ?array {
        return $this->condition;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "chartOptions", $this->chartOptions, [null]);
        ArrayHelper::set($output, "condition", $this->condition, [null]);

        return $output;
    }

    /**
     * Set the chart options.
     *
     * @param mixed[]|null $chartOptions The chart options.
     * @return \WBW\Library\Highcharts\Model\Chart\Responsive\HighchartsRules Returns this highcharts rules.
     */
    public function setChartOptions(?array $chartOptions): \WBW\Library\Highcharts\Model\Chart\Responsive\HighchartsRules {
        $this->chartOptions = $chartOptions;
        return $this;
    }

    /**
     * Set the condition.
     *
     * @param mixed[]|null $condition The condition.
     * @return \WBW\Library\Highcharts\Model\Chart\Responsive\HighchartsRules Returns this highcharts rules.
     */
    public function setCondition(?array $condition): \WBW\Library\Highcharts\Model\Chart\Responsive\HighchartsRules {
        $this->condition = $condition;
        return $this;
    }
}
