<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pexels\Request;

use InvalidArgumentException;
use WBW\Library\Common\Provider\AbstractRequest as BaseRequest;
use WBW\Library\Pexels\Api\RequestInterface;
use WBW\Library\Pexels\Response\AbstractResponse;

/**
 * Abstract request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Request
 * @abstract
 */
abstract class AbstractRequest extends BaseRequest implements RequestInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Deserialize a response.
     *
     * @param string $rawResponse The raw response.
     * @return AbstractResponse Returns the deserialized response.
     */
    abstract public function deserializeResponse(string $rawResponse): AbstractResponse;

    /**
     * Serialize this request.
     *
     * @return array<string,mixed> Returns this serialized request.
     * @throws InvalidArgumentException Throws an invalid argument exception if a mandatory parameter is missing.
     */
    abstract public function serializeRequest(): array;
}
