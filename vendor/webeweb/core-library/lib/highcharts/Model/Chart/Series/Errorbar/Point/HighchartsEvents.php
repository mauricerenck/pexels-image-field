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

namespace WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts events.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point
 * @version 5.0.14
 */
class HighchartsEvents implements JsonSerializable {

    /**
     * Click.
     *
     * @var string|null
     */
    private $click;

    /**
     * Mouse out.
     *
     * @var string|null
     */
    private $mouseOut;

    /**
     * Mouse over.
     *
     * @var string|null
     */
    private $mouseOver;

    /**
     * Remove.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $remove;

    /**
     * Select.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $select;

    /**
     * Unselect.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $unselect;

    /**
     * Update.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $update;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the click.
     *
     * @return string|null Returns the click.
     */
    public function getClick(): ?string {
        return $this->click;
    }

    /**
     * Get the mouse out.
     *
     * @return string|null Returns the mouse out.
     */
    public function getMouseOut(): ?string {
        return $this->mouseOut;
    }

    /**
     * Get the mouse over.
     *
     * @return string|null Returns the mouse over.
     */
    public function getMouseOver(): ?string {
        return $this->mouseOver;
    }

    /**
     * Get the remove.
     *
     * @return string|null Returns the remove.
     */
    public function getRemove(): ?string {
        return $this->remove;
    }

    /**
     * Get the select.
     *
     * @return string|null Returns the select.
     */
    public function getSelect(): ?string {
        return $this->select;
    }

    /**
     * Get the unselect.
     *
     * @return string|null Returns the unselect.
     */
    public function getUnselect(): ?string {
        return $this->unselect;
    }

    /**
     * Get the update.
     *
     * @return string|null Returns the update.
     */
    public function getUpdate(): ?string {
        return $this->update;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "click", $this->click, [null]);
        ArrayHelper::set($output, "mouseOut", $this->mouseOut, [null]);
        ArrayHelper::set($output, "mouseOver", $this->mouseOver, [null]);
        ArrayHelper::set($output, "remove", $this->remove, [null]);
        ArrayHelper::set($output, "select", $this->select, [null]);
        ArrayHelper::set($output, "unselect", $this->unselect, [null]);
        ArrayHelper::set($output, "update", $this->update, [null]);

        return $output;
    }

    /**
     * Set the click.
     *
     * @param string|null $click The click.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents Returns this highcharts events.
     */
    public function setClick(?string $click): \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents {
        $this->click = $click;
        return $this;
    }

    /**
     * Set the mouse out.
     *
     * @param string|null $mouseOut The mouse out.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents Returns this highcharts events.
     */
    public function setMouseOut(?string $mouseOut): \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents {
        $this->mouseOut = $mouseOut;
        return $this;
    }

    /**
     * Set the mouse over.
     *
     * @param string|null $mouseOver The mouse over.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents Returns this highcharts events.
     */
    public function setMouseOver(?string $mouseOver): \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents {
        $this->mouseOver = $mouseOver;
        return $this;
    }

    /**
     * Set the remove.
     *
     * @param string|null $remove The remove.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents Returns this highcharts events.
     */
    public function setRemove(?string $remove): \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents {
        $this->remove = $remove;
        return $this;
    }

    /**
     * Set the select.
     *
     * @param string|null $select The select.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents Returns this highcharts events.
     */
    public function setSelect(?string $select): \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents {
        $this->select = $select;
        return $this;
    }

    /**
     * Set the unselect.
     *
     * @param string|null $unselect The unselect.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents Returns this highcharts events.
     */
    public function setUnselect(?string $unselect): \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents {
        $this->unselect = $unselect;
        return $this;
    }

    /**
     * Set the update.
     *
     * @param string|null $update The update.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents Returns this highcharts events.
     */
    public function setUpdate(?string $update): \WBW\Library\Highcharts\Model\Chart\Series\Errorbar\Point\HighchartsEvents {
        $this->update = $update;
        return $this;
    }
}
