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

namespace WBW\Library\Easilys\Provider;

use GuzzleHttp\Client;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Throwable;
use WBW\Library\Common\Provider\AbstractProvider as BaseProvider;
use WBW\Library\Common\Provider\ProviderException;
use WBW\Library\Common\Traits\Strings\StringAccessTokenTrait;
use WBW\Library\Easilys\Request\AbstractRequest;

/**
 * Abstract provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Provider
 * @abstract
 */
abstract class AbstractProvider extends BaseProvider {

    use StringAccessTokenTrait;

    /**
     * Endpoint path.
     *
     * @var string|null
     */
    protected $endpointPath;

    /**
     * Constructor.
     *
     * @param string $endpointPath The endpoint path.
     * @param string $accessToken The access token.
     * @param LoggerInterface|null $logger The logger.
     */
    public function __construct(string $endpointPath, string $accessToken, LoggerInterface $logger = null) {
        parent::__construct($logger);

        $this->setAccessToken($accessToken);
        $this->setEndpointPath($endpointPath);
    }

    /**
     * Build the configuration.
     *
     * @return array<string,mixed> Returns the configuration.
     */
    private function buildConfiguration(): array {

        return [
            "base_uri"    => $this->getEndpointPath() . "/",
            "debug"       => $this->getDebug(),
            "headers"     => [
                "Accept"     => "application/json",
                "User-Agent" => "webeweb/easilys-library",
                "Cookie"     => "access_token={$this->getAccessToken()}",
            ],
            "synchronous" => true,
        ];
    }

    /**
     * Call the API.
     *
     * @param AbstractRequest $request The request.
     * @param array<string,mixed> $queryData The query data.
     * @return string Returns the raw response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ProviderException Throws a provider exception if an error occurs.
     */
    protected function callApi(AbstractRequest $request, array $queryData): string {

        try {

            $config = $this->buildConfiguration();
            $client = new Client($config);

            $method  = $request->getMethod();
            $uri     = substr($this->buildResourcePath($request), 1);
            $options = [
                "query" => $queryData,
            ];

            $this->logInfo(sprintf("Call Easilys API %s %s", $method, $uri), ["config" => $config, "options" => $options]);

            $response = $client->request($method, $uri, $options);

            return $response->getBody()->getContents();
        } catch (InvalidArgumentException $ex) {
            throw $ex;
        } catch (Throwable $ex) {
            throw new ProviderException("Call Easilys API failed", 500, $ex);
        }
    }

    /**
     * Get the endpoint path.
     *
     * @return string|null Returns the endpoint path.
     */
    public function getEndpointPath(): ?string {
        return $this->endpointPath;
    }

    /**
     * Set the endpoint path.
     *
     * @param string|null $endpointPath The endpoint path.
     * @return AbstractProvider Returns this provider.
     */
    protected function setEndpointPath(?string $endpointPath): AbstractProvider {
        $this->endpointPath = $endpointPath;
        return $this;
    }
}
