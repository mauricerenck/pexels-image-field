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
 * Highcharts responsive.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsResponsive implements JsonSerializable {

    /**
     * Rules.
     *
     * @var mixed[]|null
     * @since 5.0.0
     */
    private $rules;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the rules.
     *
     * @return mixed[]|null Returns the rules.
     */
    public function getRules(): ?array {
        return $this->rules;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "rules", $this->rules, [null]);

        return $output;
    }

    /**
     * Set the rules.
     *
     * @param mixed[]|null $rules The rules.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive Returns this highcharts responsive.
     */
    public function setRules(?array $rules): \WBW\Library\Highcharts\Model\Chart\HighchartsResponsive {
        $this->rules = $rules;
        return $this;
    }
}
