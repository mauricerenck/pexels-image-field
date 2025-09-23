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

namespace WBW\Library\Highcharts\Model;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts options.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model
 * @version 5.0.14
 */
class HighchartsOptions implements JsonSerializable {

    /**
     * Global.
     *
     * @var \WBW\Library\Highcharts\Model\Options\HighchartsGlobal|null
     */
    private $global;

    /**
     * Lang.
     *
     * @var \WBW\Library\Highcharts\Model\Options\HighchartsLang|null
     */
    private $lang;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the global.
     *
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsGlobal|null Returns the global.
     */
    public function getGlobal(): ?\WBW\Library\Highcharts\Model\Options\HighchartsGlobal {
        return $this->global;
    }

    /**
     * Get the lang.
     *
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang|null Returns the lang.
     */
    public function getLang(): ?\WBW\Library\Highcharts\Model\Options\HighchartsLang {
        return $this->lang;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        if (null !== $this->global) {
            ArrayHelper::set($output, "global", $this->global->jsonSerialize());
        }
        if (null !== $this->lang) {
            ArrayHelper::set($output, "lang", $this->lang->jsonSerialize());
        }

        return $output;
    }

    /**
     * Create a new global.
     *
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsGlobal Returns the global.
     */
    public function newGlobal(): \WBW\Library\Highcharts\Model\Options\HighchartsGlobal {
        $this->global = new \WBW\Library\Highcharts\Model\Options\HighchartsGlobal();
        return $this->global;
    }

    /**
     * Create a new lang.
     *
     * @return \WBW\Library\Highcharts\Model\Options\HighchartsLang Returns the lang.
     */
    public function newLang(): \WBW\Library\Highcharts\Model\Options\HighchartsLang {
        $this->lang = new \WBW\Library\Highcharts\Model\Options\HighchartsLang();
        return $this->lang;
    }

    /**
     * Set the global.
     *
     * @param \WBW\Library\Highcharts\Model\Options\HighchartsGlobal|null $global The global.
     * @return \WBW\Library\Highcharts\Model\HighchartsOptions Returns this highcharts options.
     */
    public function setGlobal(?\WBW\Library\Highcharts\Model\Options\HighchartsGlobal $global): \WBW\Library\Highcharts\Model\HighchartsOptions {
        $this->global = $global;
        return $this;
    }

    /**
     * Set the lang.
     *
     * @param \WBW\Library\Highcharts\Model\Options\HighchartsLang|null $lang The lang.
     * @return \WBW\Library\Highcharts\Model\HighchartsOptions Returns this highcharts options.
     */
    public function setLang(?\WBW\Library\Highcharts\Model\Options\HighchartsLang $lang): \WBW\Library\Highcharts\Model\HighchartsOptions {
        $this->lang = $lang;
        return $this;
    }
}
