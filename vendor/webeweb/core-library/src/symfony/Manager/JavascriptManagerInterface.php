<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Manager;

/**
 * Javascript manager interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Manager
 */
interface JavascriptManagerInterface extends ManagerInterface {

    /**
     * Get the javascripts.
     *
     * @return array Returns the javascripts.
     */
    public function getJavascripts(): array;
}
