<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Api;

use Exception;
use WBW\Library\Curl\Configuration\Configuration;

/**
 * Request interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Api
 */
interface RequestInterface {

    /**
     * Method "DELETE".
     *
     * @var string
     */
    const METHOD_DELETE = "DELETE";

    /**
     * Method "GET".
     *
     * @var string
     */
    const METHOD_GET = "GET";

    /**
     * Method "HEAD".
     *
     * @var string
     */
    const METHOD_HEAD = "HEAD";

    /**
     * Method "OPTIONS".
     *
     * @var string
     */
    const METHOD_OPTIONS = "OPTIONS";

    /**
     * Method "PATCH".
     *
     * @var string
     */
    const METHOD_PATCH = "PATCH";

    /**
     * Method "POST".
     *
     * @var string
     */
    const METHOD_POST = "POST";

    /**
     * Method "PUT".
     *
     * @var string
     */
    const METHOD_PUT = "PUT";

    /**
     * Add an header.
     *
     * @param string $name The header name.
     * @param string $value The header value.
     * @return RequestInterface Returns this request.
     */
    public function addHeader(string $name, string $value): RequestInterface;

    /**
     * Add a POST data.
     *
     * @param string $name The POST data name.
     * @param string $value The POST data value.
     * @return RequestInterface Returns this request.
     */
    public function addPostData(string $name, string $value): RequestInterface;

    /**
     * Add a query data.
     *
     * @param string $name The query data name.
     * @param string $value The query data value.
     * @return RequestInterface Returns this request.
     */
    public function addQueryData(string $name, string $value): RequestInterface;

    /**
     * Call the request.
     *
     * @return ResponseInterface Returns the response.
     * @throws Exception Throws an exception if an error occurs.
     */
    public function call(): ResponseInterface;

    /**
     * Clear headers.
     *
     * @return RequestInterface Returns this request.
     */
    public function clearHeaders(): RequestInterface;

    /**
     * Clear post data.
     *
     * @return RequestInterface Returns this request.
     */
    public function clearPostData(): RequestInterface;

    /**
     * Clear query data.
     *
     * @return RequestInterface Returns this request.
     */
    public function clearQueryData(): RequestInterface;

    /**
     * Get the configuration.
     *
     * @return Configuration Returns the configuration.
     */
    public function getConfiguration(): Configuration;

    /**
     * Get the headers.
     *
     * @return array Returns the headers.
     */
    public function getHeaders(): array;

    /**
     * Get the method.
     *
     * @return string Returns the method.
     */
    public function getMethod(): string;

    /**
     * Get the POST data.
     *
     * @return array Returns the POST data.
     */
    public function getPostData(): array;

    /**
     * Get the query data.
     *
     * @return array Returns the query data.
     */
    public function getQueryData(): array;

    /**
     * Get the resource path.
     *
     * @return string Returns the resource path.
     */
    public function getResourcePath(): string;

    /**
     * Remove an header.
     *
     * @param string $name The header name.
     * @return RequestInterface Returns this request.
     */
    public function removeHeader(string $name): RequestInterface;

    /**
     * Remove a POST data.
     *
     * @param string $name The POST data name.
     * @return RequestInterface Returns this request.
     */
    public function removePostData(string $name): RequestInterface;

    /**
     * Remove a query data.
     *
     * @param string $name The query data name.
     * @return RequestInterface Returns this request.
     */
    public function removeQueryData(string $name): RequestInterface;

    /**
     * Set the resource path.
     *
     * @param string|null $resourcePath The resource path.
     * @return RequestInterface Returns this request.
     */
    public function setResourcePath(?string $resourcePath): RequestInterface;
}
