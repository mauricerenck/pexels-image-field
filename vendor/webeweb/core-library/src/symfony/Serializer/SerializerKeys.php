<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Serializer;

/**
 * Serializer keys.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Serializer
 */
interface SerializerKeys {

    /**
     * Serializer key "data GET".
     *
     * @var string
     */
    const DATA_GET = "dataGet";

    /**
     * Serializer key "data POST".
     *
     * @var string
     */
    const DATA_POST = "dataPost";

    /**
     * Serializer key "entity".
     *
     * @var string
     */
    const ENTITY = "entity";

    /**
     * Serializer key "entity data".
     *
     * @var string
     */
    const ENTITY_DATA = "entityData";

    /**
     * Serializer key "entity id".
     *
     * @var string
     */
    const ENTITY_ID = "entityId";

    /**
     * Serializer key "matcher".
     *
     * @var string
     */
    const MATCHER = "matcher";

    /**
     * Serializer key "request data GET".
     *
     * @var string
     */
    const REQUEST_DATA_GET = "requestDataGet";

    /**
     * Serializer key "request data POST".
     *
     * @var string
     */
    const REQUEST_DATA_POST = "requestDataPost";

    /**
     * Serializer key "request method".
     *
     * @var string
     */
    const REQUEST_METHOD = "requestMethod";

    /**
     * Serializer key "request route".
     *
     * @var string
     */
    const REQUEST_ROUTE = "requestRoute";

    /**
     * Serializer key "request URL".
     *
     * @var string
     */
    const REQUEST_URL = "requestUrl";

    /**
     * Serializer key "XML HTTP".
     *
     * @var string
     */
    const XML_HTTP = "xmlHttp";
}
