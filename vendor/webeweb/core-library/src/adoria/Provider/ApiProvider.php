<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Provider;

use Exception;
use Psr\Log\LoggerInterface;
use WBW\Library\Adoria\Api\ApiProviderInterface;
use WBW\Library\Adoria\Model\RequestData;
use WBW\Library\Adoria\Model\Result;
use WBW\Library\Adoria\Serializer\RequestSerializer;
use WBW\Library\Adoria\Serializer\ResponseDeserializer;
use WBW\Library\Curl\Configuration\Configuration;
use WBW\Library\Curl\Request\PostRequest;
use WBW\Library\Provider\AbstractProvider;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Provider
 */
class ApiProvider extends AbstractProvider implements ApiProviderInterface {

    /**
     * Constructor.
     *
     * @param LoggerInterface|null $logger The logger.
     */
    public function __construct(LoggerInterface $logger = null) {
        parent::__construct($logger);
    }

    /**
     * Call API.
     *
     * @param string $resourcePath The resource path.
     * @param array $postData The post data.
     * @return string Returns the response.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    protected function callApi(string $resourcePath, array $postData): string {

        try {

            $request = new PostRequest(new Configuration(), $resourcePath);
            $request->getConfiguration()->addHeader("Accept", "application/json");
            $request->getConfiguration()->addHeader("Content-Type", "application/json");
            $request->getConfiguration()->setDebug($this->getDebug());
            $request->getConfiguration()->setHost(self::ENDPOINT_PATH);
            $request->getConfiguration()->setUserAgent("webeweb/adoria-library");

            // Handle each parameter.
            foreach ($postData as $name => $value) {
                $request->addPostData($name, $value);
            }

            $response = $request->call();

            return $response->getResponseBody();
        } catch (Exception $ex) {

            throw new ApiException("Failed to call Adoria API", 500, $ex);
        }
    }

    /**
     * Request data.
     *
     * @param RequestData $requestData The request data.
     * @return Result Returns the result.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function requestData(RequestData $requestData): Result {

        $parameters = RequestSerializer::serializeRequestData($requestData);

        $rawResponse = $this->callAPI(self::REQUEST_DATA_RESOURCE_PATH, $parameters);

        return ResponseDeserializer::deserializeResult($rawResponse);
    }
}
