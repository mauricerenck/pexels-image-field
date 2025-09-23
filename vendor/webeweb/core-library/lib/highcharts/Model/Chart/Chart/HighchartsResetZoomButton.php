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

namespace WBW\Library\Highcharts\Model\Chart\Chart;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts reset zoom button.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Chart
 * @version 5.0.14
 */
class HighchartsResetZoomButton implements JsonSerializable {

    /**
     * Position.
     *
     * @var mixed[]|null
     * @since 2.2
     */
    private $position;

    /**
     * Relative to.
     *
     * @var string|null
     * @since 2.2
     */
    private $relativeTo = "plot";

    /**
     * Theme.
     *
     * @var mixed[]|null
     * @since 2.2
     */
    private $theme;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the relative to.
     *
     * @return string|null Returns the relative to.
     */
    public function getRelativeTo(): ?string {
        return $this->relativeTo;
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
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "position", $this->position, [null]);
        ArrayHelper::set($output, "relativeTo", $this->relativeTo, [null]);
        ArrayHelper::set($output, "theme", $this->theme, [null]);

        return $output;
    }

    /**
     * Set the position.
     *
     * @param mixed[]|null $position The position.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton Returns this highcharts reset zoom button.
     */
    public function setPosition(?array $position): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the relative to.
     *
     * @param string|null $relativeTo The relative to.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton Returns this highcharts reset zoom button.
     */
    public function setRelativeTo(?string $relativeTo): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton {

        switch ($relativeTo) {

            case "chart":
            case "plot":
                $this->relativeTo = $relativeTo;
                break;
        }

        return $this;
    }

    /**
     * Set the theme.
     *
     * @param mixed[]|null $theme The theme.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton Returns this highcharts reset zoom button.
     */
    public function setTheme(?array $theme): \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsResetZoomButton {
        $this->theme = $theme;
        return $this;
    }
}
