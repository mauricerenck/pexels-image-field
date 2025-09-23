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
 * Highcharts title.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Legend
 * @version 5.0.14
 */
class HighchartsTitle implements JsonSerializable {

    /**
     * Style.
     *
     * @var mixed[]|null
     * @since 3.0
     */
    private $style = ["fontWeight" => "bold"];

    /**
     * Text.
     *
     * @var string|null
     * @since 3.0
     */
    private $text;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the text.
     *
     * @return string|null Returns the text.
     */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "style", $this->style, [null]);
        ArrayHelper::set($output, "text", $this->text, [null]);

        return $output;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle Returns this highcharts title.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the text.
     *
     * @param string|null $text The text.
     * @return \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle Returns this highcharts title.
     */
    public function setText(?string $text): \WBW\Library\Highcharts\Model\Chart\Legend\HighchartsTitle {
        $this->text = $text;
        return $this;
    }
}
