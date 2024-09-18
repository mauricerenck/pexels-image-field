<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Helper;

use DateTime;
use Throwable;
use WBW\Library\Curl\Api\RequestInterface;
use WBW\Library\Curl\Api\ResponseInterface;
use WBW\Library\Curl\Configuration\Configuration;

/**
 * cURL helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Helper
 */
class CurlHelper {

    /**
     * Enumerate the codes.
     *
     * @return int[] Returns the codes enumeration.
     */
    public static function enumCodes(): array {

        return [
            ResponseInterface::CODE_CONTINUE,
            ResponseInterface::CODE_SWITCHING_PROTOCOLS,
            ResponseInterface::CODE_PROCESSING,
            ResponseInterface::CODE_OK,
            ResponseInterface::CODE_CREATED,
            ResponseInterface::CODE_ACCEPTED,
            ResponseInterface::CODE_NON_AUTHORITATIVE_INFORMATION,
            ResponseInterface::CODE_NO_CONTENT,
            ResponseInterface::CODE_RESET_CONTENT,
            ResponseInterface::CODE_PARTIAL_CONTENT,
            ResponseInterface::CODE_MULTI_STATUS,
            ResponseInterface::CODE_ALREADY_REPORTED,
            ResponseInterface::CODE_IM_USED,
            ResponseInterface::CODE_MULTIPLE_CHOICES,
            ResponseInterface::CODE_MOVED_PERMANENTLY,
            ResponseInterface::CODE_MOVED_TEMPORARILY,
            ResponseInterface::CODE_SEE_OTHER,
            ResponseInterface::CODE_NOT_MODIFIED,
            ResponseInterface::CODE_USE_PROXY,
            ResponseInterface::CODE_TEMPORARY_REDIRECT,
            ResponseInterface::CODE_PERMANENT_REDIRECT,
            ResponseInterface::CODE_BAD_REQUEST,
            ResponseInterface::CODE_UNAUTHORIZED,
            ResponseInterface::CODE_PAYMENT_REQUIRED,
            ResponseInterface::CODE_FORBIDDEN,
            ResponseInterface::CODE_NOT_FOUND,
            ResponseInterface::CODE_METHOD_NOT_ALLOWED,
            ResponseInterface::CODE_NOT_ACCEPTABLE,
            ResponseInterface::CODE_PROXY_AUTHENTICATION_REQUIRED,
            ResponseInterface::CODE_REQUEST_TIME_OUT,
            ResponseInterface::CODE_CONFLICT,
            ResponseInterface::CODE_GONE,
            ResponseInterface::CODE_LENGTH_REQUIRED,
            ResponseInterface::CODE_PRECONDITION_FAILED,
            ResponseInterface::CODE_REQUEST_ENTITY_TOO_LARGE,
            ResponseInterface::CODE_REQUEST_URI_TOO_LONG,
            ResponseInterface::CODE_UNSUPPORTED_MEDIA_TYPE,
            ResponseInterface::CODE_REQUESTED_RANGE_UNSATISFIABLE,
            ResponseInterface::CODE_EXPECTATION_FAILED,
            ResponseInterface::CODE_UNPROCESSABLE_ENTITY,
            ResponseInterface::CODE_LOCKED,
            ResponseInterface::CODE_METHOD_FAILURE,
            ResponseInterface::CODE_UPGRADE_REQUIRED,
            ResponseInterface::CODE_PRECONDITION_REQUIRED,
            ResponseInterface::CODE_TOO_MANY_REQUESTS,
            ResponseInterface::CODE_REQUEST_HEADER_FIELDS_TOO_LARGE,
            ResponseInterface::CODE_INTERNAL_SERVER_ERROR,
            ResponseInterface::CODE_NOT_IMPLEMENTED,
            ResponseInterface::CODE_BAD_GATEWAY_OU_PROXY_ERROR,
            ResponseInterface::CODE_SERVICE_UNAVAILABLE,
            ResponseInterface::CODE_GATEWAY_TIME_OUT,
            ResponseInterface::CODE_HTTP_VERSION_NOT_SUPPORTED,
            ResponseInterface::CODE_VARIANT_ALSO_NEGOTIATES,
            ResponseInterface::CODE_INSUFFICIENT_STORAGE,
            ResponseInterface::CODE_LOOP_DETECTED,
            ResponseInterface::CODE_NOT_EXTENDED,
            ResponseInterface::CODE_NETWORK_AUTHENTICATION_REQUIRED,
        ];
    }

    /**
     * Enumerate the methods.
     *
     * @return string[] Returns the methods enumeration.
     */
    public static function enumMethods(): array {

        return [
            RequestInterface::METHOD_DELETE,
            RequestInterface::METHOD_GET,
            RequestInterface::METHOD_HEAD,
            RequestInterface::METHOD_OPTIONS,
            RequestInterface::METHOD_PATCH,
            RequestInterface::METHOD_POST,
            RequestInterface::METHOD_PUT,
        ];
    }

    /**
     * Initialize a stream.
     *
     * @param string $url The URL.
     * @param Configuration $config The configuration.
     * @return resource Returns the stream.
     */
    public static function initStream(string $url, Configuration $config) {

        $stream = curl_init();

        curl_setopt($stream, CURLOPT_URL, $url);

        if (true === $config->getAllowEncoding()) {
            curl_setopt($stream, CURLOPT_ENCODING, "");
        }

        if (0 < $config->getConnectTimeout()) {
            curl_setopt($stream, CURLOPT_CONNECTTIMEOUT, $config->getConnectTimeout());
        }

        return $stream;
    }

    /**
     * Set the headers.
     *
     * @param resource $stream The stream.
     * @param array<string,string> $headers The headers.
     * @return void
     */
    public static function setHeaders($stream, array $headers): void {
        curl_setopt($stream, CURLOPT_HEADER, 1);
        curl_setopt($stream, CURLOPT_HTTPHEADER, $headers);
    }

    /**
     * Set POST.
     *
     * @param resource $stream The stream.
     * @param string $method The HTTP method.
     * @param string $postData The POST data.
     * @return void
     */
    public static function setPost($stream, string $method, string $postData): void {

        switch ($method) {

            case RequestInterface::METHOD_DELETE:
            case RequestInterface::METHOD_OPTIONS:
            case RequestInterface::METHOD_PATCH:
            case RequestInterface::METHOD_PUT:
                curl_setopt($stream, CURLOPT_CUSTOMREQUEST, $method);
                curl_setopt($stream, CURLOPT_POSTFIELDS, $postData);
                break;

            case RequestInterface::METHOD_HEAD:
                curl_setopt($stream, CURLOPT_NOBODY, true);
                break;

            case RequestInterface::METHOD_POST:
                curl_setopt($stream, CURLOPT_POST, true);
                curl_setopt($stream, CURLOPT_POSTFIELDS, $postData);
                break;
        }
    }

    /**
     * Set proxy.
     *
     * @param resource $stream The stream.
     * @param Configuration $config The configuration.
     * @return void
     */
    public static function setProxy($stream, Configuration $config): void {

        if (null !== $config->getProxyHost()) {
            curl_setopt($stream, CURLOPT_PROXY, $config->getProxyHost());
        }

        if (null !== $config->getProxyPort()) {
            curl_setopt($stream, CURLOPT_PROXYPORT, $config->getProxyPort());
        }

        if (null !== $config->getProxyType()) {
            curl_setopt($stream, CURLOPT_PROXYTYPE, $config->getProxyType());
        }

        if (null !== $config->getProxyUsername()) {
            curl_setopt($stream, CURLOPT_PROXYUSERPWD, implode(":", [$config->getProxyUsername(), $config->getProxyPassword()]));
        }
    }

    /**
     * Set return transfer.
     *
     * @param resource $stream The stream.
     * @return void
     */
    public static function setReturnTransfer($stream): void {
        curl_setopt($stream, CURLOPT_RETURNTRANSFER, true);
    }

    /**
     * Set SSL.
     *
     * @param resource $stream The stream.
     * @param Configuration $config The configuration.
     * @return void
     */
    public static function setSsl($stream, Configuration $config): void {
        if (false === $config->getSslVerification()) {
            curl_setopt($stream, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($stream, CURLOPT_SSL_VERIFYPEER, 0);
        }
    }

    /**
     * Set timeout.
     *
     * @param resource $stream The stream.
     * @param Configuration $config The configuration.
     * @return void
     */
    public static function setTimeout($stream, Configuration $config): void {
        if (0 < $config->getRequestTimeout()) {
            curl_setopt($stream, CURLOPT_TIMEOUT, $config->getRequestTimeout());
        }
    }

    /**
     * Set user agent.
     *
     * @param resource $stream The stream.
     * @param Configuration $config The configuration.
     * @return void
     */
    public static function setUserAgent($stream, Configuration $config): void {
        curl_setopt($stream, CURLOPT_USERAGENT, $config->getUserAgent());
    }

    /**
     * Set verbose.
     *
     * @param resource $stream The stream.
     * @param Configuration $config The configuration.
     * @param string $url The URL.
     * @param string $postData The POST data.
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function setVerbose($stream, Configuration $config, string $url, string $postData): void {

        if (true === $config->getDebug()) {

            curl_setopt($stream, CURLOPT_STDERR, fopen($config->getDebugFile(), "a"));
            curl_setopt($stream, CURLOPT_VERBOSE, 0);

            $msg = (new DateTime())->format("c") . " [DEBUG] $url" . PHP_EOL . "HTTP request body ~BEGIN~" . PHP_EOL . print_r($postData, true) . PHP_EOL . "~END~" . PHP_EOL;
            error_log($msg, 3, $config->getDebugFile());
        } else {

            if (true === $config->getVerbose()) {
                curl_setopt($stream, CURLOPT_VERBOSE, 1);
            } else {
                curl_setopt($stream, CURLOPT_VERBOSE, 0);
            }
        }
    }
}
