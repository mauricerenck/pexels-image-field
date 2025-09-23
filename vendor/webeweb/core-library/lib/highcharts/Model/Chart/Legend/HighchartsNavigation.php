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

namespace WBW\Library\Highcharts\Model\Chart\Legend;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts navigation.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Legend
 * @version 5.0.14
 */
class HighchartsNavigation implements JsonSerializable {

    /**
     * Active color.
     *
     * @var string|null
     * @since 2.2.4
     */
    private $activeColor = "#003399";

    /**
     * Animation.
     *
     * @var mixed|null
     * @since 2.2.4
     */
    private $animation = "true";

    /**
     * Arrow size.
     *
     * @var float|null
     * @since 2.2.4
     */
    private $arrowSize = 12;

    /**
     * Enabled.
     *
     * @var bool|null
     * @since 4.2.4
     */
    private $enabled = true;

    /**
     * Inactive color.
     *
     * @var string|null
     * @since 2.2.4
     */
    private $inactiveColor = "#cccccc";

    /**
     * Style.
     *
     * @var mixed[]|null
     * @since 2.2.4
     */
    private $style;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the active color.
     *
     * @return string|null Returns the active color.
     */
    public function getActiveColor(): ?string {
        return $this->activeColor;
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
     * Get the arrow size.
     *
     * @return float|null Returns the arrow size.
     */
    public function getArrowSize(): ?float {
        return $this->arrowSize;
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
     * Get the inactive color.
     *
     * @return string|null Returns the inactive color.
     */
    public function getInactiveColor(): ?string {
        return $this->inactiveColor;
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

        ArrayHelper::set($output, "activeColor", $this->activeColor, [null]);
        ArrayHelper::set($output, "animation", $this->animation, [null]);
        ArrayHelper::set($output, "arrowSize", $this->arrowSize, [null]);
        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "inactiveColor", $this->inactiveColor, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);

        return $output;
    }

    /**
     * Set the active color.
     *
     * @param string|null $activeColor The active color.
     * @return \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation Returns this highcharts navigation.
     */
    public function setActiveColor(?string $activeColor): \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation {
        $this->activeColor = $activeColor;
        return $this;
    }

    /**
     * Set the animation.
     *
     * @param mixed $animation The animation.
     * @return \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation Returns this highcharts navigation.
     */
    public function setAnimation($animation): \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the arrow size.
     *
     * @param float|null $arrowSize The arrow size.
     * @return \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation Returns this highcharts navigation.
     */
    public function setArrowSize(?float $arrowSize): \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation {
        $this->arrowSize = $arrowSize;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation Returns this highcharts navigation.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the inactive color.
     *
     * @param string|null $inactiveColor The inactive color.
     * @return \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation Returns this highcharts navigation.
     */
    public function setInactiveColor(?string $inactiveColor): \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation {
        $this->inactiveColor = $inactiveColor;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation Returns this highcharts navigation.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsNavigation {
        $this->style = $style;
        return $this;
    }
}
