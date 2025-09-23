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
 * Highcharts drilldown.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsDrilldown implements JsonSerializable {

    /**
     * Active axis label style.
     *
     * @var mixed[]|null
     * @since 3.0.8
     */
    private $activeAxisLabelStyle = ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"];

    /**
     * Active data label style.
     *
     * @var mixed[]|null
     * @since 3.0.8
     */
    private $activeDataLabelStyle = ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"];

    /**
     * Allow point drilldown.
     *
     * @var bool|null
     * @since 4.1.7
     */
    private $allowPointDrilldown = true;

    /**
     * Animation.
     *
     * @var mixed|null
     * @since 3.0.8
     */
    private $animation;

    /**
     * Drill up button.
     *
     * @var mixed[]|null
     * @since 3.0.8
     */
    private $drillUpButton;

    /**
     * Series.
     *
     * @var mixed[]|null
     * @since 3.0.8
     */
    private $series;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the active axis label style.
     *
     * @return mixed[]|null Returns the active axis label style.
     */
    public function getActiveAxisLabelStyle(): ?array {
        return $this->activeAxisLabelStyle;
    }

    /**
     * Get the active data label style.
     *
     * @return mixed[]|null Returns the active data label style.
     */
    public function getActiveDataLabelStyle(): ?array {
        return $this->activeDataLabelStyle;
    }

    /**
     * Get the allow point drilldown.
     *
     * @return bool|null Returns the allow point drilldown.
     */
    public function getAllowPointDrilldown(): ?bool {
        return $this->allowPointDrilldown;
    }

    /**
     * Get the animation.
     *
     * @return mixed Returns the animation.
     */
    public function getAnimation() {
        return $this->animation;
    }

    /**
     * Get the drill up button.
     *
     * @return mixed[]|null Returns the drill up button.
     */
    public function getDrillUpButton(): ?array {
        return $this->drillUpButton;
    }

    /**
     * Get the series.
     *
     * @return mixed[]|null Returns the series.
     */
    public function getSeries(): ?array {
        return $this->series;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "activeAxisLabelStyle", $this->activeAxisLabelStyle, [null]);
        ArrayHelper::set($output, "activeDataLabelStyle", $this->activeDataLabelStyle, [null]);
        ArrayHelper::set($output, "allowPointDrilldown", $this->allowPointDrilldown, [null]);
        ArrayHelper::set($output, "animation", $this->animation, [null]);
        ArrayHelper::set($output, "drillUpButton", $this->drillUpButton, [null]);
        ArrayHelper::set($output, "series", $this->series, [null]);

        return $output;
    }

    /**
     * Set the active axis label style.
     *
     * @param mixed[]|null $activeAxisLabelStyle The active axis label style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown Returns this highcharts drilldown.
     */
    public function setActiveAxisLabelStyle(?array $activeAxisLabelStyle): \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown {
        $this->activeAxisLabelStyle = $activeAxisLabelStyle;
        return $this;
    }

    /**
     * Set the active data label style.
     *
     * @param mixed[]|null $activeDataLabelStyle The active data label style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown Returns this highcharts drilldown.
     */
    public function setActiveDataLabelStyle(?array $activeDataLabelStyle): \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown {
        $this->activeDataLabelStyle = $activeDataLabelStyle;
        return $this;
    }

    /**
     * Set the allow point drilldown.
     *
     * @param bool|null $allowPointDrilldown The allow point drilldown.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown Returns this highcharts drilldown.
     */
    public function setAllowPointDrilldown(?bool $allowPointDrilldown): \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown {
        $this->allowPointDrilldown = $allowPointDrilldown;
        return $this;
    }

    /**
     * Set the animation.
     *
     * @param mixed $animation The animation.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown Returns this highcharts drilldown.
     */
    public function setAnimation($animation): \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the drill up button.
     *
     * @param mixed[]|null $drillUpButton The drill up button.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown Returns this highcharts drilldown.
     */
    public function setDrillUpButton(?array $drillUpButton): \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown {
        $this->drillUpButton = $drillUpButton;
        return $this;
    }

    /**
     * Set the series.
     *
     * @param mixed[]|null $series The series.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown Returns this highcharts drilldown.
     */
    public function setSeries(?array $series): \WBW\Library\Highcharts\Model\Chart\HighchartsDrilldown {
        $this->series = $series;
        return $this;
    }
}
