<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Serializer;

use WBW\Library\Adoria\Model\RequestData;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Request serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Serializer
 */
class RequestSerializer {

    /**
     * Request date format.
     *
     * @var string
     */
    const REQUEST_DATE_FORMAT = "Y-m-d";

    /**
     * Serialize a request data.
     *
     * @param RequestData $request The request data.
     * @return array Returns the serialized request data.
     */
    public static function serializeRequestData(RequestData $request): array {

        $result = [];

        ArrayHelper::set($result, "IdentificationKey", $request->getIdentificationKey(), [null]);
        if (null !== $request->getBuyDateMax()) {
            $result["BuyDateMax"] = $request->getBuyDateMax()->format(self::REQUEST_DATE_FORMAT);
        }
        ArrayHelper::set($result, "AnalyticCode", $request->getAnalyticCode(), [null]);

        return $result;
    }
}
