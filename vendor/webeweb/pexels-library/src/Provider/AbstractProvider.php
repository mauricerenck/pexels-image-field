<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pexels\Provider;

use GuzzleHttp\Client;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Throwable;
use WBW\Library\Common\Provider\AbstractProvider as BaseProvider;
use WBW\Library\Common\Provider\ProviderException;
use WBW\Library\Common\Traits\Compounds\CompoundRateLimitTrait;
use WBW\Library\Pexels\Api\PaginateResponseInterface;
use WBW\Library\Pexels\Request\AbstractRequest;

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
    public const ENDPOINT_PATH = "https://api.pexels.com";

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
     * @return array<string,mixed> Returns the configuration.
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
     * @param array<string,mixed> $queryData The query data.
     * @return string Returns the raw response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ProviderException Throws a provider exception if an error occurs.
     */
    private function callApi(string $uri, array $queryData): string {

        if (null === $this->getAuthorization()) {
            throw $this->newMandatoryParameterException("authorization");
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
        } catch (Throwable $ex) {
            throw new ProviderException("Call Pexels API failed", 500, $ex);
        }
    }

    /**
     * Call the API with a request.
     *
     * @param AbstractRequest $request The request.
     * @param array<string,mixed> $queryData The query data.
     * @return string Returns the raw response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ProviderException Throws a provider exception if an error occurs.
     */
    protected function callApiWithRequest(AbstractRequest $request, array $queryData): string {

        $uri = self::ENDPOINT_PATH . $this->buildResourcePath($request);

        return $this->callApi($uri, $queryData);
    }

    /**
     * Call the API with a response.
     *
     * @param PaginateResponseInterface $response The request.
     * @param bool $nextPage Next page ?
     * @return string Returns the raw response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ProviderException Throws a provider exception if an error occurs.
     */
    protected function callApiWithResponse(PaginateResponseInterface $response, bool $nextPage = true): string {

        $uri = true === $nextPage ? $response->getNextPage() : $response->getPrevPage();
        if (null === $uri) {
            return "";
        }

        return $this->callApi($uri, []);
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
