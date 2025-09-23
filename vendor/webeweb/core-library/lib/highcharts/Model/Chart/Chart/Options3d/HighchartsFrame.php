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

namespace WBW\Library\Highcharts\Model\Chart\Chart\Options3d;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts frame.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Chart\Options3d
 * @version 5.0.14
 */
class HighchartsFrame implements JsonSerializable {

    /**
     * Back.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack|null
     * @since 4.0
     */
    private $back;

    /**
     * Bottom.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom|null
     * @since 4.0
     */
    private $bottom;

    /**
     * Side.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsSide|null
     * @since 4.0
     */
    private $side;

    /**
     * Top.
     *
     * @var mixed[]|null
     * @since 5.0.12
     */
    private $top;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the back.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack|null Returns the back.
     */
    public function getBack(): ?\WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack {
        return $this->back;
    }

    /**
     * Get the bottom.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom|null Returns the bottom.
     */
    public function getBottom(): ?\WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom {
        return $this->bottom;
    }

    /**
     * Get the side.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsSide|null Returns the side.
     */
    public function getSide(): ?\WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsSide {
        return $this->side;
    }

    /**
     * Get the top.
     *
     * @return mixed[]|null Returns the top.
     */
    public function getTop(): ?array {
        return $this->top;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        if (null !== $this->back) {
            ArrayHelper::set($output, "back", $this->back->jsonSerialize());
        }
        if (null !== $this->bottom) {
            ArrayHelper::set($output, "bottom", $this->bottom->jsonSerialize());
        }
        if (null !== $this->side) {
            ArrayHelper::set($output, "side", $this->side->jsonSerialize());
        }
        ArrayHelper::set($output, "top", $this->top, [null]);

        return $output;
    }

    /**
     * Create a new back.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack Returns the back.
     */
    public function newBack(): \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack {
        $this->back = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack();
        return $this->back;
    }

    /**
     * Create a new bottom.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom Returns the bottom.
     */
    public function newBottom(): \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom {
        $this->bottom = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom();
        return $this->bottom;
    }

    /**
     * Create a new side.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsSide Returns the side.
     */
    public function newSide(): \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsSide {
        $this->side = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsSide();
        return $this->side;
    }

    /**
     * Set the back.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack|null $back The back.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame Returns this highcharts frame.
     */
    public function setBack(?\WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBack $back): \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame {
        $this->back = $back;
        return $this;
    }

    /**
     * Set the bottom.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom|null $bottom The bottom.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame Returns this highcharts frame.
     */
    public function setBottom(?\WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsBottom $bottom): \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame {
        $this->bottom = $bottom;
        return $this;
    }

    /**
     * Set the side.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsSide|null $side The side.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame Returns this highcharts frame.
     */
    public function setSide(?\WBW\Library\Highcharts\Model\Chart\Chart\Options3d\Frame\HighchartsSide $side): \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame {
        $this->side = $side;
        return $this;
    }

    /**
     * Set the top.
     *
     * @param mixed[]|null $top The top.
     * @return \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame Returns this highcharts frame.
     */
    public function setTop(?array $top): \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame {
        $this->top = $top;
        return $this;
    }
}
