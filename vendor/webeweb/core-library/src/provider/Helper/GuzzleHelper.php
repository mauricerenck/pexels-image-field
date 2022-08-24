<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Helper;

/**
 * Guzzle helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Provider\Helper
 */
class GuzzleHelper {

    /**
     * Get the stream parameter name.
     *
     * @return string|null Returns the stream parameter name.
     */
    public static function getStreamParameterName(): ?string {

        if (false === interface_exists("GuzzleHttp\\ClientInterface")) {
            return null;
        }

        // Guzzle v6.x.x
        if (true === defined("GuzzleHttp\\ClientInterface::VERSION")) {
            return "save_to";
        }

        // Guzzle v7.x.x
        return "sink";
    }
}
