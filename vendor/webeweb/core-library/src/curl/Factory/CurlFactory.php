<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Factory;

use InvalidArgumentException;
use WBW\Library\Curl\Api\RequestInterface;
use WBW\Library\Curl\Api\ResponseInterface;
use WBW\Library\Curl\Configuration\Configuration;
use WBW\Library\Curl\Request\DeleteRequest;
use WBW\Library\Curl\Request\GetRequest;
use WBW\Library\Curl\Request\HeadRequest;
use WBW\Library\Curl\Request\OptionsRequest;
use WBW\Library\Curl\Request\PatchRequest;
use WBW\Library\Curl\Request\PostRequest;
use WBW\Library\Curl\Request\PutRequest;
use WBW\Library\Curl\Response\Response;

/**
 * cURL factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Factory
 */
class CurlFactory {

    /**
     * Create a request.
     *
     * @param string $method The method.
     * @param Configuration|null $configuration The configuration.
     * @param string|null $resourcePath The resource path.
     * @return RequestInterface Returns the request.
     */
    public static function newCurlRequest(string $method, Configuration $configuration = null, string $resourcePath = null) {

        if (null === $configuration) {
            $configuration = new Configuration();
        }

        switch ($method) {

            case RequestInterface::METHOD_DELETE:
                return new DeleteRequest($configuration, $resourcePath);

            case RequestInterface::METHOD_GET:
                return new GetRequest($configuration, $resourcePath);

            case RequestInterface::METHOD_HEAD:
                return new HeadRequest($configuration, $resourcePath);

            case RequestInterface::METHOD_OPTIONS:
                return new OptionsRequest($configuration, $resourcePath);

            case RequestInterface::METHOD_PATCH:
                return new PatchRequest($configuration, $resourcePath);

            case RequestInterface::METHOD_POST:
                return new PostRequest($configuration, $resourcePath);

            case RequestInterface::METHOD_PUT:
                return new PutRequest($configuration, $resourcePath);
        }

        throw new InvalidArgumentException(sprintf('The HTTP method "%s" is invalid', $method));
    }

    /**
     * Create a response.
     *
     * @return ResponseInterface Returns the response.
     */
    public static function newCurlResponse(): ResponseInterface {
        return new Response();
    }
}
