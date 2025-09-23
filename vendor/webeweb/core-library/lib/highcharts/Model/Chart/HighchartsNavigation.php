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
 * Highcharts navigation.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsNavigation implements JsonSerializable {

    /**
     * Button options.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions|null
     */
    private $buttonOptions;

    /**
     * Menu item hover style.
     *
     * @var mixed[]|null
     * @since 2.0
     */
    private $menuItemHoverStyle = ["background" => "#335cad", "color" => "#ffffff"];

    /**
     * Menu item style.
     *
     * @var mixed[]|null
     * @since 2.0
     */
    private $menuItemStyle = ["padding" => "0.5em 1em", "color" => "#333333", "background" => "none"];

    /**
     * Menu style.
     *
     * @var mixed[]|null
     * @since 2.0
     */
    private $menuStyle = ["border" => "1px solid #999999", "background" => "#ffffff", "padding" => "5px 0"];

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the button options.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions|null Returns the button options.
     */
    public function getButtonOptions(): ?\WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions {
        return $this->buttonOptions;
    }

    /**
     * Get the menu item hover style.
     *
     * @return mixed[]|null Returns the menu item hover style.
     */
    public function getMenuItemHoverStyle(): ?array {
        return $this->menuItemHoverStyle;
    }

    /**
     * Get the menu item style.
     *
     * @return mixed[]|null Returns the menu item style.
     */
    public function getMenuItemStyle(): ?array {
        return $this->menuItemStyle;
    }

    /**
     * Get the menu style.
     *
     * @return mixed[]|null Returns the menu style.
     */
    public function getMenuStyle(): ?array {
        return $this->menuStyle;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        if (null !== $this->buttonOptions) {
            ArrayHelper::set($output, "buttonOptions", $this->buttonOptions->jsonSerialize());
        }
        ArrayHelper::set($output, "menuItemHoverStyle", $this->menuItemHoverStyle, [null]);
        ArrayHelper::set($output, "menuItemStyle", $this->menuItemStyle, [null]);
        ArrayHelper::set($output, "menuStyle", $this->menuStyle, [null]);

        return $output;
    }

    /**
     * Create a new button options.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions Returns the button options.
     */
    public function newButtonOptions(): \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions {
        $this->buttonOptions = new \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions();
        return $this->buttonOptions;
    }

    /**
     * Set the button options.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions|null $buttonOptions The button options.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation Returns this highcharts navigation.
     */
    public function setButtonOptions(?\WBW\Library\Highcharts\Model\Chart\Navigation\HighchartsButtonOptions $buttonOptions): \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation {
        $this->buttonOptions = $buttonOptions;
        return $this;
    }

    /**
     * Set the menu item hover style.
     *
     * @param mixed[]|null $menuItemHoverStyle The menu item hover style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation Returns this highcharts navigation.
     */
    public function setMenuItemHoverStyle(?array $menuItemHoverStyle): \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation {
        $this->menuItemHoverStyle = $menuItemHoverStyle;
        return $this;
    }

    /**
     * Set the menu item style.
     *
     * @param mixed[]|null $menuItemStyle The menu item style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation Returns this highcharts navigation.
     */
    public function setMenuItemStyle(?array $menuItemStyle): \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation {
        $this->menuItemStyle = $menuItemStyle;
        return $this;
    }

    /**
     * Set the menu style.
     *
     * @param mixed[]|null $menuStyle The menu style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation Returns this highcharts navigation.
     */
    public function setMenuStyle(?array $menuStyle): \WBW\Library\Highcharts\Model\Chart\HighchartsNavigation {
        $this->menuStyle = $menuStyle;
        return $this;
    }
}
