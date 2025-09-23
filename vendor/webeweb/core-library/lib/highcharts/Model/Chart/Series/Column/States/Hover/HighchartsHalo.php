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

namespace WBW\Library\Highcharts\Model\Chart\Series\Column\States\Hover;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts halo.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Series\Column\States\Hover
 * @version 5.0.14
 */
class HighchartsHalo implements JsonSerializable {

    /**
     * Attributes.
     *
     * @var mixed[]|null
     * @since 4.0
     */
    private $attributes;

    /**
     * Opacity.
     *
     * @var float|null
     * @since 4.0
     */
    private $opacity = 0.25;

    /**
     * Size.
     *
     * @var float|null
     * @since 4.0
     */
    private $size = 10;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the attributes.
     *
     * @return mixed[]|null Returns the attributes.
     */
    public function getAttributes(): ?array {
        return $this->attributes;
    }

    /**
     * Get the opacity.
     *
     * @return float|null Returns the opacity.
     */
    public function getOpacity(): ?float {
        return $this->opacity;
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
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "attributes", $this->attributes, [null]);
        ArrayHelper::set($output, "opacity", $this->opacity, [null]);
        ArrayHelper::set($output, "size", $this->size, [null]);

        return $output;
    }

    /**
     * Set the attributes.
     *
     * @param mixed[]|null $attributes The attributes.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Column\States\Hover\HighchartsHalo Returns this highcharts halo.
     */
    public function setAttributes(?array $attributes): \WBW\Library\Highcharts\Model\Chart\Series\Column\States\Hover\HighchartsHalo {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * Set the opacity.
     *
     * @param float|null $opacity The opacity.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Column\States\Hover\HighchartsHalo Returns this highcharts halo.
     */
    public function setOpacity(?float $opacity): \WBW\Library\Highcharts\Model\Chart\Series\Column\States\Hover\HighchartsHalo {
        $this->opacity = $opacity;
        return $this;
    }

    /**
     * Set the size.
     *
     * @param float|null $size The size.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Column\States\Hover\HighchartsHalo Returns this highcharts halo.
     */
    public function setSize(?float $size): \WBW\Library\Highcharts\Model\Chart\Series\Column\States\Hover\HighchartsHalo {
        $this->size = $size;
        return $this;
    }
}
