<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Api;

/**
 * API provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Api
 */
interface ApiProviderInterface {

    /**
     * Endpoint path.
     *
     * @avr string
     */
    const ENDPOINT_PATH = "http://ws.adoria.com";

    /**
     * Request data resource path.
     *
     * @var string
     */
    const REQUEST_DATA_RESOURCE_PATH = "/MdbProcurement.adoria.ExternalsServices/EProcurement/Buying/V10.svc/rest/AcountingInterface";
}
