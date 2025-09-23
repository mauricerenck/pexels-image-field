<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Request;

use InvalidArgumentException;
use WBW\Library\Common\Provider\AbstractRequest as BaseRequest;
use WBW\Library\Easilys\Response\AbstractResponse;

/**
 * Abstract request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Request
 * @abstract
 */
abstract class AbstractRequest extends BaseRequest {

    /**
     * Params
     *
     * @var string[]|null
     */
    protected $params;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setParams([]);
    }

    /**
     * Add a param.
     *
     * @param string $name The name.
     * @param mixed $value The value.
     * @return AbstractRequest Returns this request.
     */
    public function addParam(string $name, $value): AbstractRequest {
        $this->params[$name] = $value;
        return $this;
    }

    /**
     * Deserialize a response.
     *
     * @param string $rawResponse The raw response.
     * @return AbstractResponse Returns the deserialized response.
     */
    abstract public function deserializeResponse(string $rawResponse): AbstractResponse;

    /**
     * Get the method.
     *
     * @return string Returns the method.
     */
    public function getMethod(): string {
        return "GET";
    }

    /**
     * Get the params.
     *
     * @return string[] Returns the params.
     */
    protected function getParams(): array {
        return $this->params;
    }

    /**
     * Serialize this request.
     *
     * @return array<string,mixed> Returns this serialized request.
     * @throws InvalidArgumentException Throws an invalid argument exception if a mandatory parameter is missing.
     */
    public function serializeRequest(): array {
        return $this->params;
    }

    /**
     * Set the params.
     *
     * @param string[] $params The params.
     * @return AbstractRequest Returns this request.
     */
    protected function setParams(array $params): AbstractRequest {
        $this->params = $params;
        return $this;
    }
}
