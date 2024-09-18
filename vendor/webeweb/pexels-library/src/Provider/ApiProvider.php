<?php

declare(strict_types = 1);

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Provider;

use InvalidArgumentException;
use WBW\Library\Pexels\Api\PaginateResponseInterface;
use WBW\Library\Pexels\Request\AbstractRequest;
use WBW\Library\Pexels\Response\AbstractResponse;
use WBW\Library\Pexels\Response\PhotosResponse;
use WBW\Library\Pexels\Response\VideosResponse;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Provider
 */
class ApiProvider extends AbstractProvider {

    /**
     * Populate a response.
     *
     * @param AbstractResponse $response The response.
     * @return AbstractResponse Returns the response.
     */
    protected function populateResponse(AbstractResponse $response): AbstractResponse {

        $response->setLimit($this->getLimit());
        $response->setRemaining($this->getRemaining());
        $response->setReset($this->getReset());

        return $response;
    }

    /**
     * Request a next page.
     *
     * @param PaginateResponseInterface $response The response.
     * @return PhotosResponse|VideosResponse Returns the response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function requestNextPage(PaginateResponseInterface $response): AbstractResponse {

        $rawResponse = $this->callApiWithResponse($response);

        /** @var PhotosResponse|VideosResponse */
        return $this->populateResponse($response->deserializeResponse($rawResponse));
    }

    /**
     * Request a previous page.
     *
     * @param PaginateResponseInterface $response The response.
     * @return PhotosResponse|VideosResponse Returns the response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function requestPrevPage(PaginateResponseInterface $response): AbstractResponse {

        $rawResponse = $this->callApiWithResponse($response, false);

        /** @var PhotosResponse|VideosResponse */
        return $this->populateResponse($response->deserializeResponse($rawResponse));
    }

    /**
     * Send a request.
     *
     * @param AbstractRequest $request The request.
     * @return AbstractResponse Returns the response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sendRequest(AbstractRequest $request): AbstractResponse {

        $queryData   = $request->serializeRequest();
        $rawResponse = $this->callApiWithRequest($request, $queryData);

        return $this->populateResponse($request->deserializeResponse($rawResponse));
    }
}
