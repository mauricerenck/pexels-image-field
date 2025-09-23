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

namespace WBW\Library\Highcharts\Model\Chart;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts credits.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsCredits implements JsonSerializable {

    /**
     * Enabled.
     *
     * @var bool|null
     */
    private $enabled = true;

    /**
     * Href.
     *
     * @var string|null
     */
    private $href = "http://www.highcharts.com";

    /**
     * Position.
     *
     * @var mixed[]|null
     * @since 2.1
     */
    private $position;

    /**
     * Style.
     *
     * @var mixed[]|null
     */
    private $style = ["cursor" => "pointer", "color" => "#999999", "fontSize" => "10px"];

    /**
     * Text.
     *
     * @var string|null
     */
    private $text = "Highcharts.com";

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the href.
     *
     * @return string|null Returns the href.
     */
    public function getHref(): ?string {
        return $this->href;
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

        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "href", $this->href, [null]);
        ArrayHelper::set($output, "position", $this->position, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);
        ArrayHelper::set($output, "text", $this->text, [null]);

        return $output;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsCredits Returns this highcharts credits.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\HighchartsCredits {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the href.
     *
     * @param string|null $href The href.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsCredits Returns this highcharts credits.
     */
    public function setHref(?string $href): \WBW\Library\Highcharts\Model\Chart\HighchartsCredits {
        $this->href = $href;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param mixed[]|null $position The position.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsCredits Returns this highcharts credits.
     */
    public function setPosition(?array $position): \WBW\Library\Highcharts\Model\Chart\HighchartsCredits {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsCredits Returns this highcharts credits.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\HighchartsCredits {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the text.
     *
     * @param string|null $text The text.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsCredits Returns this highcharts credits.
     */
    public function setText(?string $text): \WBW\Library\Highcharts\Model\Chart\HighchartsCredits {
        $this->text = $text;
        return $this;
    }
}
