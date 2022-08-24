<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Response;

use WBW\Library\Curl\Api\ResponseInterface;

/**
 * Response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Response
 */
class Response implements ResponseInterface {

    /**
     * Request body.
     *
     * @var string|null
     */
    private $requestBody;

    /**
     * Request header.
     *
     * @var array
     */
    private $requestHeader;

    /**
     * Request URL.
     *
     * @var string|null
     */
    private $requestUrl;

    /**
     * Response body.
     *
     * @var string|null
     */
    private $responseBody;

    /**
     * Response header.
     *
     * @var array
     */
    private $responseHeader;

    /**
     * Response info.
     *
     * @var array
     */
    private $responseInfo;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setRequestHeader([]);
        $this->setResponseHeader([]);
        $this->setResponseInfo([]);
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestBody(): ?string {
        return $this->requestBody;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestHeader(): array {
        return $this->requestHeader;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestUrl(): ?string {
        return $this->requestUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseBody(): ?string {
        return $this->responseBody;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseHeader(): array {
        return $this->responseHeader;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseInfo(): array {
        return $this->responseInfo;
    }

    /**
     * Set the request body.
     *
     * @param string|null $requestBody The request body.
     * @return Response Returns this response.
     */
    public function setRequestBody(?string $requestBody): Response {
        $this->requestBody = $requestBody;
        return $this;
    }

    /**
     * Set the request header.
     *
     * @param array $requestHeader The request header.
     * @return Response Returns this response.
     */
    public function setRequestHeader(array $requestHeader): Response {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * Set the request URL.
     *
     * @param string $requestUrl The request URL.
     * @return Response Returns this response.
     */
    public function setRequestUrl(string $requestUrl): Response {
        $this->requestUrl = $requestUrl;
        return $this;
    }

    /**
     * Set the response body.
     *
     * @param string|null $responseBody The response body.
     * @return Response Returns this response.
     */
    public function setResponseBody(?string $responseBody): Response {
        $this->responseBody = $responseBody;
        return $this;
    }

    /**
     * Set the response header.
     *
     * @param array $responseHeader The response header.
     * @return Response Returns this response.
     */
    public function setResponseHeader(array $responseHeader): Response {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * Set the response info.
     *
     * @param array $responseInfo The response info.
     * @return Response Returns this response.
     */
    public function setResponseInfo(array $responseInfo): Response {
        $this->responseInfo = $responseInfo;
        return $this;
    }
}
