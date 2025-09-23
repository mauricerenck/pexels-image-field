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

namespace WBW\Library\Highcharts\Model\Chart\Accessibility;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts keyboard navigation.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Accessibility
 * @version 5.0.14
 */
class HighchartsKeyboardNavigation implements JsonSerializable {

    /**
     * Enabled.
     *
     * @var bool|null
     * @since 5.0.0
     */
    private $enabled = true;

    /**
     * Skip null points.
     *
     * @var bool|null
     * @since 5.0.0
     */
    private $skipNullPoints = false;

    /**
     * Tab through chart elements.
     *
     * @var bool|null
     * @since 5.0.13
     */
    private $tabThroughChartElements = true;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the skip null points.
     *
     * @return bool|null Returns the skip null points.
     */
    public function getSkipNullPoints(): ?bool {
        return $this->skipNullPoints;
    }

    /**
     * Get the tab through chart elements.
     *
     * @return bool|null Returns the tab through chart elements.
     */
    public function getTabThroughChartElements(): ?bool {
        return $this->tabThroughChartElements;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "skipNullPoints", $this->skipNullPoints, [null]);
        ArrayHelper::set($output, "tabThroughChartElements", $this->tabThroughChartElements, [null]);

        return $output;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\Accessibility\HighchartsKeyboardNavigation Returns this highcharts keyboard navigation.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\Accessibility\HighchartsKeyboardNavigation {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the skip null points.
     *
     * @param bool|null $skipNullPoints The skip null points.
     * @return \WBW\Library\Highcharts\Model\Chart\Accessibility\HighchartsKeyboardNavigation Returns this highcharts keyboard navigation.
     */
    public function setSkipNullPoints(?bool $skipNullPoints): \WBW\Library\Highcharts\Model\Chart\Accessibility\HighchartsKeyboardNavigation {
        $this->skipNullPoints = $skipNullPoints;
        return $this;
    }

    /**
     * Set the tab through chart elements.
     *
     * @param bool|null $tabThroughChartElements The tab through chart elements.
     * @return \WBW\Library\Highcharts\Model\Chart\Accessibility\HighchartsKeyboardNavigation Returns this highcharts keyboard navigation.
     */
    public function setTabThroughChartElements(?bool $tabThroughChartElements): \WBW\Library\Highcharts\Model\Chart\Accessibility\HighchartsKeyboardNavigation {
        $this->tabThroughChartElements = $tabThroughChartElements;
        return $this;
    }
}
