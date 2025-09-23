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

namespace WBW\Library\Highcharts\Model\Chart\XAxis;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts breaks.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\XAxis
 * @version 5.0.14
 */
class HighchartsBreaks implements JsonSerializable {

    /**
     * Break size.
     *
     * @var float|null
     * @since 4.1.0
     */
    private $breakSize = 0;

    /**
     * From.
     *
     * @var float|null
     * @since 4.1.0
     */
    private $from;

    /**
     * Repeat.
     *
     * @var float|null
     * @since 4.1.0
     */
    private $repeat = 0;

    /**
     * To.
     *
     * @var float|null
     * @since 4.1.0
     */
    private $to;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the break size.
     *
     * @return float|null Returns the break size.
     */
    public function getBreakSize(): ?float {
        return $this->breakSize;
    }

    /**
     * Get the from.
     *
     * @return float|null Returns the from.
     */
    public function getFrom(): ?float {
        return $this->from;
    }

    /**
     * Get the repeat.
     *
     * @return float|null Returns the repeat.
     */
    public function getRepeat(): ?float {
        return $this->repeat;
    }

    /**
     * Get the to.
     *
     * @return float|null Returns the to.
     */
    public function getTo(): ?float {
        return $this->to;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "breakSize", $this->breakSize, [null]);
        ArrayHelper::set($output, "from", $this->from, [null]);
        ArrayHelper::set($output, "repeat", $this->repeat, [null]);
        ArrayHelper::set($output, "to", $this->to, [null]);

        return $output;
    }

    /**
     * Set the break size.
     *
     * @param float|null $breakSize The break size.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks Returns this highcharts breaks.
     */
    public function setBreakSize(?float $breakSize): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks {
        $this->breakSize = $breakSize;
        return $this;
    }

    /**
     * Set the from.
     *
     * @param float|null $from The from.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks Returns this highcharts breaks.
     */
    public function setFrom(?float $from): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks {
        $this->from = $from;
        return $this;
    }

    /**
     * Set the repeat.
     *
     * @param float|null $repeat The repeat.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks Returns this highcharts breaks.
     */
    public function setRepeat(?float $repeat): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks {
        $this->repeat = $repeat;
        return $this;
    }

    /**
     * Set the to.
     *
     * @param float|null $to The to.
     * @return \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks Returns this highcharts breaks.
     */
    public function setTo(?float $to): \WBW\Library\Highcharts\Model\Chart\XAxis\HighchartsBreaks {
        $this->to = $to;
        return $this;
    }
}
