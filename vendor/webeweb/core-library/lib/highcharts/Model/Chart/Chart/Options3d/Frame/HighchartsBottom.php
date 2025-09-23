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

namespace WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts bottom.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame
 * @version 5.0.14
 */
class HighchartsBottom implements JsonSerializable {

    /**
     * Color.
     *
     * @var string|null
     * @since 4.0
     */
    private $color = "transparent";

    /**
     * Size.
     *
     * @var float|null
     * @since 4.0
     */
    private $size = 1;

    /**
     * Visible.
     *
     * @var mixed|null
     * @since 5.0.12
     */
    private $visible = "default";

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the color.
     *
     * @return string|null Returns the color.
     */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * Get the size.
     *
     * @return float|null Returns the size.
     */
    public function getSize(): ?float {
        return $this->size;
    }

    /**
     * Get the visible.
     *
     * @return mixed Returns the visible.
     */
    public function getVisible() {
        return $this->visible;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "color", $this->color, [null]);
        ArrayHelper::set($output, "size", $this->size, [null]);
        ArrayHelper::set($output, "visible", $this->visible, [null]);

        return $output;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom Returns this highcharts bottom.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the size.
     *
     * @param float|null $size The size.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom Returns this highcharts bottom.
     */
    public function setSize(?float $size): \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom {
        $this->size = $size;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param mixed $visible The visible.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom Returns this highcharts bottom.
     */
    public function setVisible($visible): \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom {

        if (true === in_array($visible, [false, true, "auto", "default"], true)) {
            $this->visible = $visible;
        }

        return $this;
    }
}
