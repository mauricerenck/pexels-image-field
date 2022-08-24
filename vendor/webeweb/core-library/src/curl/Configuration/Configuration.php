<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Configuration;

use WBW\Library\Traits\Booleans\BooleanDebugTrait;
use WBW\Library\Traits\Booleans\BooleanVerboseTrait;

/**
 * Configuration.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Configuration
 */
class Configuration {

    use BooleanDebugTrait;
    use BooleanVerboseTrait;

    /**
     * Allow encoding.
     *
     * @var bool
     */
    private $allowEncoding;

    /**
     * Connect timeout.
     *
     * @var int
     */
    private $connectTimeout;

    /**
     * Debug file.
     *
     * @var string
     */
    private $debugFile;

    /**
     * Headers.
     *
     * @var array
     */
    private $headers;

    /**
     * Host.
     *
     * @var string|null
     */
    private $host;

    /**
     * HTTP basic password.
     *
     * @var string|null
     */
    private $httpPassword;

    /**
     * HTTP basic username.
     *
     * @var string|null
     */
    private $httpUsername;

    /**
     * Proxy host.
     *
     * @var string|null
     */
    private $proxyHost;

    /**
     * Proxy password.
     *
     * @var string|null
     */
    private $proxyPassword;

    /**
     * Proxy port.
     *
     * @var int|null
     */
    private $proxyPort;

    /**
     * Proxy type.
     *
     * @var int|null
     */
    private $proxyType;

    /**
     * Proxy username.
     *
     * @var string|null
     */
    private $proxyUsername;

    /**
     * HTTP request timeout.
     *
     * @var int
     */
    private $requestTimeout;

    /**
     * SSL verification.
     *
     * @var bool
     */
    private $sslVerification;

    /**
     * User agent.
     *
     * @var string
     */
    private $userAgent;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setAllowEncoding(false);
        $this->setConnectTimeout(0);
        $this->setDebug(false);
        $this->setDebugFile("php://output");
        $this->setHeaders([]);
        $this->setRequestTimeout(0);
        $this->setSslVerification(true);
        $this->setUserAgent("webeweb/curl-library");
        $this->setVerbose(false);
    }

    /**
     * Add an header.
     *
     * @param string $name The header name.
     * @param string $value The header value.
     * @return Configuration Returns this configuration.
     */
    public function addHeader(string $name, string $value): Configuration {
        $this->headers[$name] = $value;
        return $this;
    }

    /**
     * Clear the headers.
     *
     * @return Configuration Returns this configuration.
     */
    public function clearHeaders(): Configuration {
        return $this->setHeaders([]);
    }

    /**
     * Get the allow encoding.
     *
     * @return bool Returns the allow encoding.
     */
    public function getAllowEncoding(): bool {
        return $this->allowEncoding;
    }

    /**
     * Get the connect timeout.
     *
     * @return int Returns the connect timeout.
     */
    public function getConnectTimeout(): int {
        return $this->connectTimeout;
    }

    /**
     * Get the debug file.
     *
     * @return string Returns the debug file.
     */
    public function getDebugFile(): string {
        return $this->debugFile;
    }

    /**
     * Get the headers.
     *
     * @return array Returns the headers.
     */
    public function getHeaders(): array {
        return $this->headers;
    }

    /**
     * Get the host.
     *
     * @return string|null Returns the host.
     */
    public function getHost(): ?string {
        return $this->host;
    }

    /**
     * Get the HTTP password.
     *
     * @return string|null Returns the HTTP password.
     */
    public function getHttpPassword(): ?string {
        return $this->httpPassword;
    }

    /**
     * Get the HTTP username.
     *
     * @return string|null Returns the HTTP username.
     */
    public function getHttpUsername(): ?string {
        return $this->httpUsername;
    }

    /**
     * Get the proxy host.
     *
     * @return string|null Returns the proxy host.
     */
    public function getProxyHost(): ?string {
        return $this->proxyHost;
    }

    /**
     * Get the proxy password.
     *
     * @return string|null Returns the proxy password.
     */
    public function getProxyPassword(): ?string {
        return $this->proxyPassword;
    }

    /**
     * Get the proxy port.
     *
     * @return int|null Returns the proxy port.
     */
    public function getProxyPort(): ?int {
        return $this->proxyPort;
    }

    /**
     * Get the proxy type.
     *
     * @return int|null Returns the proxy type.
     */
    public function getProxyType(): ?int {
        return $this->proxyType;
    }

    /**
     * Get the proxy username.
     *
     * @return string|null Returns the proxy username.
     */
    public function getProxyUsername(): ?string {
        return $this->proxyUsername;
    }

    /**
     * Get the request timeout.
     *
     * @return int Returns the request timeout.
     */
    public function getRequestTimeout(): int {
        return $this->requestTimeout;
    }

    /**
     * Get the SSL verification.
     *
     * @return bool Returns the SSL verification.
     */
    public function getSslVerification(): bool {
        return $this->sslVerification;
    }

    /**
     * Get the user agent.
     *
     * @return string Returns the user agent.
     */
    public function getUserAgent(): string {
        return $this->userAgent;
    }

    /**
     * Remove an header.
     *
     * @param string $name The header name.
     * @return void
     */
    public function removeHeader(string $name): void {
        if (true === array_key_exists($name, $this->headers)) {
            unset($this->headers[$name]);
        }
    }

    /**
     * Set the allow encoding.
     *
     * @param bool $allowEncoding The allow encoding.
     * @return Configuration Returns this configuration.
     */
    public function setAllowEncoding(bool $allowEncoding): Configuration {
        $this->allowEncoding = $allowEncoding;
        return $this;
    }

    /**
     * Set the connect timeout.
     *
     * @param int $connectTimeout The connect timeout.
     * @return Configuration Returns this configuration.
     */
    public function setConnectTimeout(int $connectTimeout): Configuration {
        $this->connectTimeout = $connectTimeout;
        return $this;
    }

    /**
     * Set the debug file.
     *
     * @param string $debugFile The debug file.
     * @return Configuration Returns this configuration.
     */
    public function setDebugFile(string $debugFile): Configuration {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Set the headers.
     *
     * @param array $headers The headers
     * @return Configuration Returns this configuration.
     */
    protected function setHeaders(array $headers): Configuration {
        $this->headers = $headers;
        return $this;
    }

    /**
     * Set the host.
     *
     * @param string $host The host.
     * @return Configuration Returns this configuration.
     */
    public function setHost(string $host): Configuration {
        $this->host = preg_replace("/\/$/", "", trim($host));
        return $this;
    }

    /**
     * Set the HTTP basic password.
     *
     * @param string|null $httpPassword The HTTP basic password.
     * @return Configuration Returns this configuration.
     */
    public function setHttpPassword(?string $httpPassword): Configuration {
        $this->httpPassword = $httpPassword;
        return $this;
    }

    /**
     * Set the HTTP basic username.
     *
     * @param string|null $httpUsername The HTTP basic username.
     * @return Configuration Returns this configuration.
     */
    public function setHttpUsername(?string $httpUsername): Configuration {
        $this->httpUsername = $httpUsername;
        return $this;
    }

    /**
     * Set the proxy host.
     *
     * @param string|null $proxyHost The proxy host.
     * @return Configuration Returns this configuration.
     */
    public function setProxyHost(?string $proxyHost): Configuration {
        $this->proxyHost = $proxyHost;
        return $this;
    }

    /**
     * Set the proxy password.
     *
     * @param string|null $proxyPassword The proxy password.
     * @return Configuration Returns this configuration.
     */
    public function setProxyPassword(?string $proxyPassword): Configuration {
        $this->proxyPassword = $proxyPassword;
        return $this;
    }

    /**
     * Set the proxy port.
     *
     * @param int|null $proxyPort The proxy port.
     * @return Configuration Returns this configuration.
     */
    public function setProxyPort(?int $proxyPort): Configuration {
        $this->proxyPort = $proxyPort;
        return $this;
    }

    /**
     * Set the proxy type.
     *
     * @param int|null $proxyType The proxy type.
     * @return Configuration Returns this configuration.
     */
    public function setProxyType(?int $proxyType): Configuration {
        $this->proxyType = $proxyType;
        return $this;
    }

    /**
     * Set the proxy username.
     *
     * @param string|null $proxyUsername The proxy username.
     * @return Configuration Returns this configuration.
     */
    public function setProxyUsername(?string $proxyUsername): Configuration {
        $this->proxyUsername = $proxyUsername;
        return $this;
    }

    /**
     * Set the request timeout.
     *
     * @param int $requestTimeout The request timeout.
     * @return Configuration Returns this configuration.
     */
    public function setRequestTimeout(int $requestTimeout): Configuration {
        $this->requestTimeout = $requestTimeout;
        return $this;
    }

    /**
     * Set the SSL verification.
     *
     * @param bool $sslVerification The SSL verification.
     * @return Configuration Returns this configuration.
     */
    public function setSslVerification(bool $sslVerification): Configuration {
        $this->sslVerification = $sslVerification;
        return $this;
    }

    /**
     * Set the user agent.
     *
     * @param string $userAgent The user agent.
     * @return Configuration Returns this configuration.
     */
    public function setUserAgent(string $userAgent): Configuration {
        $this->userAgent = $userAgent;
        return $this;
    }
}
