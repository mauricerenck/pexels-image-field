<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Provider;

/**
 * Guzzle helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Provider
 */
class GuzzleHelper {

    /**
     * Get the stream parameter name.
     *
     * @return string|null Returns the stream parameter name.
     */
    public static function getStreamParameterName(): ?string {

        // Guzzle v6.x.x
        if (true === defined("GuzzleHttp\\ClientInterface::VERSION")) {
            return "save_to";
        }

        // Guzzle v7.x.x
        return "sink";
    }
}
