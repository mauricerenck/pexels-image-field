<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Provider;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use WBW\Library\Pexels\Api\PaginateResponseInterface;
use WBW\Library\Pexels\Request\AbstractRequest;
use WBW\Library\Provider\AbstractProvider as BaseProvider;
use WBW\Library\Provider\Exception\ApiException;
use WBW\Library\Traits\Compounds\CompoundRateLimitTrait;

/**
 * Abstract provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Provider
 * @abstract
 */
abstract class AbstractProvider extends BaseProvider {

    use CompoundRateLimitTrait;

    /**
     * Endpoint path.
     *
     * @var string
     */
    const ENDPOINT_PATH = "https://api.pexels.com";

    /**
     * Authorization.
     *
     * @var string
     */
    private $authorization;

    /**
     * Constructor.
     *
     * @param string|null $authorization The authorization.
     * @param LoggerInterface|null $logger The logger.
     */
    public function __construct(string $authorization = null, LoggerInterface $logger = null) {
        parent::__construct($logger);

        $this->setAuthorization($authorization);
    }

    /**
     * Build the configuration.
     *
     * @return array Returns the configuration.
     */
    private function buildConfiguration(): array {
        return [
            "debug"       => $this->getDebug(),
            "headers"     => [
                "Accept"        => "application/json",
                "User-Agent"    => "webeweb/pexels-library",
                "Authorization" => $this->getAuthorization(),
            ],
            "synchronous" => true,
        ];
    }

    /**
     * Call the API.
     *
     * @param string $uri The URI.
     * @param array $queryData The query data.
     * @return string Returns the raw response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    private function callApi(string $uri, array $queryData): string {

        if (null === $this->getAuthorization()) {
            throw new InvalidArgumentException('The mandatory parameter "authorization" is missing');
        }

        try {

            $config = $this->buildConfiguration();

            $client = new Client($config);

            $method  = "GET";
            $options = 0 < count($queryData) ? ["query" => $queryData] : [];

            $this->logInfo(sprintf("Call Pexels API %s %s", $method, $uri), ["config" => $config, "options" => $options]);

            $response = $client->request($method, $uri, $options);

            $this->setLimit(intval($response->getHeaderLine("X-Ratelimit-Limit")));
            $this->setRemaining(intval($response->getHeaderLine("X-Ratelimit-Remaining")));

            return $response->getBody()->getContents();
        } catch (Exception $ex) {

            throw new ApiException("Call Pexels API failed", 500, $ex);
        }
    }

    /**
     * Call the API.
     *
     * @param AbstractRequest $request The request.
     * @param array $queryData The query data.
     * @return string Returns the raw response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    protected function callApiWithRequest(AbstractRequest $request, array $queryData): string {

        try {

            $uri = self::ENDPOINT_PATH . $this->buildResourcePath($request);

            return $this->callApi($uri, $queryData);
        } catch (InvalidArgumentException $ex) {

            throw $ex;
        }
    }

    /**
     * Call the API.
     *
     * @param PaginateResponseInterface $response The request.
     * @param bool $nextPage Next page ?.
     * @return string Returns the raw response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    protected function callApiWithResponse(PaginateResponseInterface $response, bool $nextPage): string {

        try {

            $uri = false === $nextPage ? $response->getPrevPage() : $response->getNextPage();
            if (null === $uri) {
                return "";
            }

            return $this->callApi($uri, []);
        } catch (InvalidArgumentException $ex) {

            throw $ex;
        }
    }

    /**
     * Get the authorization.
     *
     * @return string|null Returns the authorization.
     */
    public function getAuthorization(): ?string {
        return $this->authorization;
    }

    /**
     * Set the authorization.
     *
     * @param string|null $authorization The authorization.
     * @return AbstractProvider Returns this provider.
     */
    public function setAuthorization(?string $authorization): AbstractProvider {
        $this->authorization = $authorization;
        return $this;
    }
}
