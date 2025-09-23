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

namespace WBW\Library\Highcharts\Model\Chart\Responsive\Rules;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts condition.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Responsive\Rules
 * @version 5.0.14
 */
class HighchartsCondition implements JsonSerializable {

    /**
     * Callback.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $callback;

    /**
     * Max height.
     *
     * @var float|null
     * @since 5.0.0
     */
    private $maxHeight;

    /**
     * Max width.
     *
     * @var float|null
     * @since 5.0.0
     */
    private $maxWidth;

    /**
     * Min height.
     *
     * @var float|null
     * @since 5.0.0
     */
    private $minHeight = 0;

    /**
     * Min width.
     *
     * @var float|null
     * @since 5.0.0
     */
    private $minWidth = 0;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the callback.
     *
     * @return string|null Returns the callback.
     */
    public function getCallback(): ?string {
        return $this->callback;
    }

    /**
     * Get the max height.
     *
     * @return float|null Returns the max height.
     */
    public function getMaxHeight(): ?float {
        return $this->maxHeight;
    }

    /**
     * Get the max width.
     *
     * @return float|null Returns the max width.
     */
    public function getMaxWidth(): ?float {
        return $this->maxWidth;
    }

    /**
     * Get the min height.
     *
     * @return float|null Returns the min height.
     */
    public function getMinHeight(): ?float {
        return $this->minHeight;
    }

    /**
     * Get the min width.
     *
     * @return float|null Returns the min width.
     */
    public function getMinWidth(): ?float {
        return $this->minWidth;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "callback", $this->callback, [null]);
        ArrayHelper::set($output, "maxHeight", $this->maxHeight, [null]);
        ArrayHelper::set($output, "maxWidth", $this->maxWidth, [null]);
        ArrayHelper::set($output, "minHeight", $this->minHeight, [null]);
        ArrayHelper::set($output, "minWidth", $this->minWidth, [null]);

        return $output;
    }

    /**
     * Set the callback.
     *
     * @param string|null $callback The callback.
     * @return \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition Returns this highcharts condition.
     */
    public function setCallback(?string $callback): \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition {
        $this->callback = $callback;
        return $this;
    }

    /**
     * Set the max height.
     *
     * @param float|null $maxHeight The max height.
     * @return \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition Returns this highcharts condition.
     */
    public function setMaxHeight(?float $maxHeight): \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition {
        $this->maxHeight = $maxHeight;
        return $this;
    }

    /**
     * Set the max width.
     *
     * @param float|null $maxWidth The max width.
     * @return \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition Returns this highcharts condition.
     */
    public function setMaxWidth(?float $maxWidth): \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition {
        $this->maxWidth = $maxWidth;
        return $this;
    }

    /**
     * Set the min height.
     *
     * @param float|null $minHeight The min height.
     * @return \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition Returns this highcharts condition.
     */
    public function setMinHeight(?float $minHeight): \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition {
        $this->minHeight = $minHeight;
        return $this;
    }

    /**
     * Set the min width.
     *
     * @param float|null $minWidth The min width.
     * @return \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition Returns this highcharts condition.
     */
    public function setMinWidth(?float $minWidth): \WBW\Library\Highcharts\Model\Chart\Responsive\Rules\HighchartsCondition {
        $this->minWidth = $minWidth;
        return $this;
    }
}
