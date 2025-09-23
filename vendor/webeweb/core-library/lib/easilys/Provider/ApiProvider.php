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
use GuzzleHttp\Cookie\CookieJar;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Throwable;
use WBW\Library\Common\Provider\ProviderException;
use WBW\Library\Easilys\Request\AbstractRequest;
use WBW\Library\Easilys\Response\AbstractResponse;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Provider
 */
class ApiProvider extends AbstractProvider {

    /**
     * Login.
     *
     * @param string $endpoint The endpoint.
     * @param string $username The username.
     * @param string $password The password.
     * @param LoggerInterface|null $logger The logger.
     * @return ApiProvider Returns the API provider.
     * @throws ProviderException Throws a provider exception if an error occurs.
     */
    public static function login(string $endpoint, string $username, string $password, LoggerInterface $logger = null): ApiProvider {

        $config = [
            "base_uri"    => $endpoint . "/",
            "headers"     => [
                "Accept"     => "application/json",
                "User-Agent" => "webeweb/easilys-library",
            ],
            "synchronous" => true,
            "cookies"     => true,
        ];

        $options = [
            "form_params" => [
                "username" => $username,
                "password" => hash_hmac("SHA256", $password, "secret"),
            ],
        ];

        try {

            $client = new Client($config);
            $client->request("POST", "/login", $options);

            /** @var CookieJar $cookies */
            $cookies = $client->getConfig("cookies");

            $cookie = $cookies->getCookieByName("access_token");
            if (null === $cookie) {
                throw new InvalidArgumentException("Access token not found");
            }

            $accessToken = $cookie->getValue();

            return new ApiProvider($endpoint, $accessToken, $logger);
        } catch (Throwable $ex) {
            throw new ProviderException("Call Easilys API failed", 500, $ex);
        }
    }

    /**
     * Send a request.
     *
     * @param AbstractRequest $request The request.
     * @return AbstractResponse Returns the response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ProviderException Throws a provider exception if an error occurs.
     */
    public function sendRequest(AbstractRequest $request): AbstractResponse {

        $queryData   = $request->serializeRequest();
        $rawResponse = $this->callApi($request, $queryData);

        return $request->deserializeResponse($rawResponse);
    }
}
