<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Exception;

use WBW\Library\Curl\Api\ResponseInterface;

/**
 * Request call exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Exception
 */
class RequestCallException extends AbstractException {

    /**
     * Response.
     *
     * @var ResponseInterface|null
     */
    private $response;

    /**
     * Constructor.
     *
     * @param string $message The message.
     * @param int $code The code.
     * @param ResponseInterface $response The response.
     */
    public function __construct(string $message, int $code, ResponseInterface $response) {
        parent::__construct($message, $code);

        $this->setResponse($response);
    }

    /**
     * Get the response.
     *
     * @return ResponseInterface|null Returns the response.
     */
    public function getResponse(): ?ResponseInterface {
        return $this->response;
    }

    /**
     * Set the response.
     *
     * @param ResponseInterface $response The response.
     * @return RequestCallException Returns this request call exception.
     */
    protected function setResponse(ResponseInterface $response): RequestCallException {
        $this->response = $response;
        return $this;
    }
}
