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

namespace WBW\Library\Highcharts\Model\Chart\Labels;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts items.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Labels
 * @version 5.0.14
 */
class HighchartsItems implements JsonSerializable {

    /**
     * Html.
     *
     * @var string|null
     */
    private $html;

    /**
     * Style.
     *
     * @var mixed[]|null
     */
    private $style;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the html.
     *
     * @return string|null Returns the html.
     */
    public function getHtml(): ?string {
        return $this->html;
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

        ArrayHelper::set($output, "html", $this->html, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);

        return $output;
    }

    /**
     * Set the html.
     *
     * @param string|null $html The html.
     * @return \WBW\Library\Highcharts\Model\Chart\Labels\HighchartsItems Returns this highcharts items.
     */
    public function setHtml(?string $html): \WBW\Library\Highcharts\Model\Chart\Labels\HighchartsItems {
        $this->html = $html;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\Labels\HighchartsItems Returns this highcharts items.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\Labels\HighchartsItems {
        $this->style = $style;
        return $this;
    }
}
