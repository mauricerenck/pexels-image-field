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

/**
 * Response interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Api
 */
interface ResponseInterface {

    /**
     * Code "Accepted".
     *
     * @var int
     */
    const CODE_ACCEPTED = 202;

    /**
     * Code "Already Reported".
     *
     * @var int
     */
    const CODE_ALREADY_REPORTED = 208;

    /**
     * Code "A_Timeout Occurred".
     *
     * @var int
     */
    const CODE_A_TIMEOUT_OCCURRED = 524;

    /**
     * Code "Bad Gateway ou Proxy Error".
     *
     * @var int
     */
    const CODE_BAD_GATEWAY_OU_PROXY_ERROR = 502;

    /**
     * Code "Bad mapping / Misdirected Request".
     *
     * @var int
     */
    const CODE_BAD_MAPPING_MISDIRECTED_REQUEST = 421;

    /**
     * Code "Bad Request".
     *
     * @var int
     */
    const CODE_BAD_REQUEST = 400;

    /**
     * Code "Bandwidth Limit Exceeded".
     *
     * @var int
     */
    const CODE_BANDWIDTH_LIMIT_EXCEEDED = 509;

    /**
     * Code "Blocked by Windows Parental Controls".
     *
     * @var int
     */
    const CODE_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450;

    /**
     * Code "Client Closed Request".
     *
     * @var int
     */
    const CODE_CLIENT_CLOSED_REQUEST = 499;

    /**
     * Code "Conflict".
     *
     * @var int
     */
    const CODE_CONFLICT = 409;

    /**
     * Code "Connection Timed Out".
     *
     * @var int
     */
    const CODE_CONNECTION_TIMED_OUT = 522;

    /**
     * Code "Content Different".
     *
     * @var int
     */
    const CODE_CONTENT_DIFFERENT = 210;

    /**
     * Code "Continue".
     *
     * @var int
     */
    const CODE_CONTINUE = 100;

    /**
     * Code "Created".
     *
     * @var int
     */
    const CODE_CREATED = 201;

    /**
     * Code "Expectation failed".
     *
     * @var int
     */
    const CODE_EXPECTATION_FAILED = 417;

    /**
     * Code "Forbidden".
     *
     * @var int
     */
    const CODE_FORBIDDEN = 403;

    /**
     * Code "Gateway Time-out".
     *
     * @var int
     */
    const CODE_GATEWAY_TIME_OUT = 504;

    /**
     * Code "Gone".
     *
     * @var int
     */
    const CODE_GONE = 410;

    /**
     * Code "HTTP_Request Sent to HTTPS_Port".
     *
     * @var int
     */
    const CODE_HTTP_REQUEST_SENT_TO_HTTPS_PORT = 497;

    /**
     * Code "HTTP_Version not supported".
     *
     * @var int
     */
    const CODE_HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * Code "I’m a teapot".
     *
     * @var int
     */
    const CODE_IM_A_TEAPOT = 418;

    /**
     * Code "IM_Used".
     *
     * @var int
     */
    const CODE_IM_USED = 226;

    /**
     * Code "Insufficient storage".
     *
     * @var int
     */
    const CODE_INSUFFICIENT_STORAGE = 507;

    /**
     * Code "Internal Server Error".
     *
     * @var int
     */
    const CODE_INTERNAL_SERVER_ERROR = 500;

    /**
     * Code "Invalid SSL_Certificate".
     *
     * @var int
     */
    const CODE_INVALID_SSL_CERTIFICATE = 526;

    /**
     * Code "Length Required".
     *
     * @var int
     */
    const CODE_LENGTH_REQUIRED = 411;

    /**
     * Code "Locked".
     *
     * @var int
     */
    const CODE_LOCKED = 423;

    /**
     * Code "Loop detected".
     *
     * @var int
     */
    const CODE_LOOP_DETECTED = 508;

    /**
     * Code "Method failure".
     *
     * @var int
     */
    const CODE_METHOD_FAILURE = 424;

    /**
     * Code "Method Not Allowed".
     *
     * @var int
     */
    const CODE_METHOD_NOT_ALLOWED = 405;

    /**
     * Code "Moved Permanently".
     *
     * @var int
     */
    const CODE_MOVED_PERMANENTLY = 301;

    /**
     * Code "Moved Temporarily".
     *
     * @var int
     */
    const CODE_MOVED_TEMPORARILY = 302;

    /**
     * Code "Multiple Choices".
     *
     * @var int
     */
    const CODE_MULTIPLE_CHOICES = 300;

    /**
     * Code "Multi-Status".
     *
     * @var int
     */
    const CODE_MULTI_STATUS = 207;

    /**
     * Code "Network authentication required".
     *
     * @var int
     */
    const CODE_NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * Code "Non-Authoritative Information".
     *
     * @var int
     */
    const CODE_NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * Code "Not Acceptable".
     *
     * @var int
     */
    const CODE_NOT_ACCEPTABLE = 406;

    /**
     * Code "Not extended".
     *
     * @var int
     */
    const CODE_NOT_EXTENDED = 510;

    /**
     * Code "Not Found".
     *
     * @var int
     */
    const CODE_NOT_FOUND = 404;

    /**
     * Code "Not Implemented".
     *
     * @var int
     */
    const CODE_NOT_IMPLEMENTED = 501;

    /**
     * Code "Not Modified".
     *
     * @var int
     */
    const CODE_NOT_MODIFIED = 304;

    /**
     * Code "No Content".
     *
     * @var int
     */
    const CODE_NO_CONTENT = 204;

    /**
     * Code "No Response".
     *
     * @var int
     */
    const CODE_NO_RESPONSE = 444;

    /**
     * Code "OK".
     *
     * @var int
     */
    const CODE_OK = 200;

    /**
     * Code "Origin Is Unreachable".
     *
     * @var int
     */
    const CODE_ORIGIN_IS_UNREACHABLE = 523;

    /**
     * Code "Partial Content".
     *
     * @var int
     */
    const CODE_PARTIAL_CONTENT = 206;

    /**
     * Code "Payment Required".
     *
     * @var int
     */
    const CODE_PAYMENT_REQUIRED = 402;

    /**
     * Code "Permanent Redirect".
     *
     * @var int
     */
    const CODE_PERMANENT_REDIRECT = 308;

    /**
     * Code "Precondition Failed".
     *
     * @var int
     */
    const CODE_PRECONDITION_FAILED = 412;

    /**
     * Code "Precondition Required".
     *
     * @var int
     */
    const CODE_PRECONDITION_REQUIRED = 428;

    /**
     * Code "Processing".
     *
     * @var int
     */
    const CODE_PROCESSING = 102;

    /**
     * Code "Proxy Authentication Required".
     *
     * @var int
     */
    const CODE_PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * Code "Railgun Error".
     *
     * @var int
     */
    const CODE_RAILGUN_ERROR = 527;

    /**
     * Code "Requested range unsatisfiable".
     *
     * @var int
     */
    const CODE_REQUESTED_RANGE_UNSATISFIABLE = 416;

    /**
     * Code "Request Entity Too Large".
     *
     * @var int
     */
    const CODE_REQUEST_ENTITY_TOO_LARGE = 413;

    /**
     * Code "Request Header Fields Too Large".
     *
     * @var int
     */
    const CODE_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * Code "Request Time-out".
     *
     * @var int
     */
    const CODE_REQUEST_TIME_OUT = 408;

    /**
     * Code "Request-URI_Too Long".
     *
     * @var int
     */
    const CODE_REQUEST_URI_TOO_LONG = 414;

    /**
     * Code "Reset Content".
     *
     * @var int
     */
    const CODE_RESET_CONTENT = 205;

    /**
     * Code "Retry With".
     *
     * @var int
     */
    const CODE_RETRY_WITH = 449;

    /**
     * Code "See Other".
     *
     * @var int
     */
    const CODE_SEE_OTHER = 303;

    /**
     * Code "Service Unavailable".
     *
     * @var int
     */
    const CODE_SERVICE_UNAVAILABLE = 503;

    /**
     * Code "SSL_Certificate Error".
     *
     * @var int
     */
    const CODE_SSL_CERTIFICATE_ERROR = 495;

    /**
     * Code "SSL_Certificate Required".
     *
     * @var int
     */
    const CODE_SSL_CERTIFICATE_REQUIRED = 496;

    /**
     * Code "SSL_Handshake Failed".
     *
     * @var int
     */
    const CODE_SSL_HANDSHAKE_FAILED = 525;

    /**
     * Code "Switching Protocols".
     *
     * @var int
     */
    const CODE_SWITCHING_PROTOCOLS = 101;

    /**
     * Code "Switch proxy".
     *
     * @var int
     */
    const CODE_SWITCH_PROXY = 306;

    /**
     * Code "Temporary Redirect".
     *
     * @var int
     */
    const CODE_TEMPORARY_REDIRECT = 307;

    /**
     * Code "Too many Redirects".
     *
     * @var int
     */
    const CODE_TOO_MANY_REDIRECTS = 310;

    /**
     * Code "Too Many Requests".
     *
     * @var int
     */
    const CODE_TOO_MANY_REQUESTS = 429;

    /**
     * Code "Unauthorized".
     *
     * @var int
     */
    const CODE_UNAUTHORIZED = 401;

    /**
     * Code "Unavailable For Legal Reasons".
     *
     * @var int
     */
    const CODE_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * Code "Unknown Error".
     *
     * @var int
     */
    const CODE_UNKNOWN_ERROR = 520;

    /**
     * Code "Unordered Collection".
     *
     * @var int
     */
    const CODE_UNORDERED_COLLECTION = 425;

    /**
     * Code "Unprocessable entity".
     *
     * @var int
     */
    const CODE_UNPROCESSABLE_ENTITY = 422;

    /**
     * Code "Unrecoverable Error".
     *
     * @var int
     */
    const CODE_UNRECOVERABLE_ERROR = 456;

    /**
     * Code "Unsupported Media Type".
     *
     * @var int
     */
    const CODE_UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * Code "Upgrade Required".
     *
     * @var int
     */
    const CODE_UPGRADE_REQUIRED = 426;

    /**
     * Code "Use Proxy".
     *
     * @var int
     */
    const CODE_USE_PROXY = 305;

    /**
     * Code "Variant Also Negotiates".
     *
     * @var int
     */
    const CODE_VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * Code "Web Server Is Down".
     *
     * @var int
     */
    const CODE_WEB_SERVER_IS_DOWN = 521;

    /**
     * Get the request body.
     *
     * @return string|null Returns the request body.
     */
    public function getRequestBody(): ?string;

    /**
     * Get the request header.
     *
     * @return array Returns the request header.
     */
    public function getRequestHeader(): array;

    /**
     * Get the request URL.
     *
     * @return string Returns the request URL.
     */
    public function getRequestUrl(): ?string;

    /**
     * Get the response body.
     *
     * @return string The response body.
     */
    public function getResponseBody(): ?string;

    /**
     * Get the response header.
     *
     * @return array Returns the response header.
     */
    public function getResponseHeader(): array;

    /**
     * Get the response info.
     *
     * @return array Returns the response info.
     */
    public function getResponseInfo(): array;
}
