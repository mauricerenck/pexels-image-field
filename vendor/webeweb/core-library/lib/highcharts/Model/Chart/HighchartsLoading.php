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
 * Highcharts loading.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsLoading implements JsonSerializable {

    /**
     * Hide duration.
     *
     * @var float|null
     * @since 1.2.0
     */
    private $hideDuration = 100;

    /**
     * Label style.
     *
     * @var mixed[]|null
     * @since 1.2.0
     */
    private $labelStyle = ["fontWeight" => "bold", "position" => "relative", "top" => "45%"];

    /**
     * Show duration.
     *
     * @var float|null
     * @since 1.2.0
     */
    private $showDuration = 100;

    /**
     * Style.
     *
     * @var mixed[]|null
     * @since 1.2.0
     */
    private $style = ["position" => "absolute", "backgroundColor" => "#ffffff", "opacity" => 0.5, "textAlign" => "center"];

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the hide duration.
     *
     * @return float|null Returns the hide duration.
     */
    public function getHideDuration(): ?float {
        return $this->hideDuration;
    }

    /**
     * Get the label style.
     *
     * @return mixed[]|null Returns the label style.
     */
    public function getLabelStyle(): ?array {
        return $this->labelStyle;
    }

    /**
     * Get the show duration.
     *
     * @return float|null Returns the show duration.
     */
    public function getShowDuration(): ?float {
        return $this->showDuration;
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

        ArrayHelper::set($output, "hideDuration", $this->hideDuration, [null]);
        ArrayHelper::set($output, "labelStyle", $this->labelStyle, [null]);
        ArrayHelper::set($output, "showDuration", $this->showDuration, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);

        return $output;
    }

    /**
     * Set the hide duration.
     *
     * @param float|null $hideDuration The hide duration.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLoading Returns this highcharts loading.
     */
    public function setHideDuration(?float $hideDuration): \WBW\Library\Highcharts\Model\Chart\HighchartsLoading {
        $this->hideDuration = $hideDuration;
        return $this;
    }

    /**
     * Set the label style.
     *
     * @param mixed[]|null $labelStyle The label style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLoading Returns this highcharts loading.
     */
    public function setLabelStyle(?array $labelStyle): \WBW\Library\Highcharts\Model\Chart\HighchartsLoading {
        $this->labelStyle = $labelStyle;
        return $this;
    }

    /**
     * Set the show duration.
     *
     * @param float|null $showDuration The show duration.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLoading Returns this highcharts loading.
     */
    public function setShowDuration(?float $showDuration): \WBW\Library\Highcharts\Model\Chart\HighchartsLoading {
        $this->showDuration = $showDuration;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsLoading Returns this highcharts loading.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\HighchartsLoading {
        $this->style = $style;
        return $this;
    }
}
