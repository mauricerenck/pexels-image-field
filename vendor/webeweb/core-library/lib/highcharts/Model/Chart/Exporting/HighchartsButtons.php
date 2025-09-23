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

namespace WBW\Library\Highcharts\Model\Chart\Exporting;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts buttons.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Exporting
 * @version 5.0.14
 */
class HighchartsButtons implements JsonSerializable {

    /**
     * Context button.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton|null
     */
    private $contextButton;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the context button.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton|null Returns the context button.
     */
    public function getContextButton(): ?\WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        return $this->contextButton;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        if (null !== $this->contextButton) {
            ArrayHelper::set($output, "contextButton", $this->contextButton->jsonSerialize());
        }

        return $output;
    }

    /**
     * Create a new context button.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton Returns the context button.
     */
    public function newContextButton(): \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton {
        $this->contextButton = new \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton();
        return $this->contextButton;
    }

    /**
     * Set the context button.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton|null $contextButton The context button.
     * @return \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons Returns this highcharts buttons.
     */
    public function setContextButton(?\WBW\Library\Highcharts\Model\Chart\Exporting\Buttons\HighchartsContextButton $contextButton): \WBW\Library\Highcharts\Model\Chart\Exporting\HighchartsButtons {
        $this->contextButton = $contextButton;
        return $this;
    }
}
