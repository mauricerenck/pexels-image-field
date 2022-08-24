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

use GuzzleHttp\Exception\GuzzleException;
use InvalidArgumentException;
use WBW\Library\Pexels\Api\PaginateResponseInterface;
use WBW\Library\Pexels\Request\CollectionRequest;
use WBW\Library\Pexels\Request\CollectionsRequest;
use WBW\Library\Pexels\Request\CuratedPhotosRequest;
use WBW\Library\Pexels\Request\GetPhotoRequest;
use WBW\Library\Pexels\Request\GetVideoRequest;
use WBW\Library\Pexels\Request\PopularVideosRequest;
use WBW\Library\Pexels\Request\SearchPhotosRequest;
use WBW\Library\Pexels\Request\SearchVideosRequest;
use WBW\Library\Pexels\Response\AbstractResponse;
use WBW\Library\Pexels\Response\CollectionResponse;
use WBW\Library\Pexels\Response\CollectionsResponse;
use WBW\Library\Pexels\Response\PhotoResponse;
use WBW\Library\Pexels\Response\PhotosResponse;
use WBW\Library\Pexels\Response\VideoResponse;
use WBW\Library\Pexels\Response\VideosResponse;
use WBW\Library\Pexels\Serializer\RequestSerializer;
use WBW\Library\Pexels\Serializer\ResponseDeserializer;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Provider
 */
class ApiProvider extends AbstractProvider {

    /**
     * Before return a response.
     *
     * @param AbstractResponse $response The response.
     * @return AbstractResponse Returns the response.
     */
    protected function beforeReturnResponse(AbstractResponse $response): AbstractResponse {

        $response->setLimit($this->getLimit());
        $response->setRemaining($this->getRemaining());
        $response->setReset($this->getReset());

        return $response;
    }

    /**
     * Collection.
     *
     * @param CollectionRequest $request The curated photos request.
     * @return CollectionResponse Returns the collection response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function collection(CollectionRequest $request): CollectionResponse {

        $queryData = RequestSerializer::serializeCollectionRequest($request);

        $rawResponse = $this->callApiWithRequest($request, $queryData);

        return $this->beforeReturnResponse(ResponseDeserializer::deserializeCollectionResponse($rawResponse));
    }

    /**
     * Collections.
     *
     * @param CollectionsRequest $request The curated photos request.
     * @return CollectionsResponse Returns the collections response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function collections(CollectionsRequest $request): CollectionsResponse {

        $queryData = RequestSerializer::serializeCollectionsRequest($request);

        $rawResponse = $this->callApiWithRequest($request, $queryData);

        return $this->beforeReturnResponse(ResponseDeserializer::deserializeCollectionsResponse($rawResponse));
    }

    /**
     * Curated photos.
     *
     * @param CuratedPhotosRequest $request The curated photos request.
     * @return PhotosResponse Returns the photos response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function curatedPhotos(CuratedPhotosRequest $request): PhotosResponse {

        $queryData = RequestSerializer::serializeCuratedPhotosRequest($request);

        $rawResponse = $this->callApiWithRequest($request, $queryData);

        return $this->beforeReturnResponse(ResponseDeserializer::deserializePhotosResponse($rawResponse));
    }

    /**
     * Get a photo.
     *
     * @param GetPhotoRequest $request The get photo request.
     * @return PhotoResponse Returns the photo response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function getPhoto(GetPhotoRequest $request): PhotoResponse {

        $rawResponse = $this->callApiWithRequest($request, []);

        return $this->beforeReturnResponse(ResponseDeserializer::deserializePhotoResponse($rawResponse));
    }

    /**
     * Get a video.
     *
     * @param GetVideoRequest $request The get video request.
     * @return VideoResponse Returns the video response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function getVideo(GetVideoRequest $request): VideoResponse {

        $rawResponse = $this->callApiWithRequest($request, []);

        return $this->beforeReturnResponse(ResponseDeserializer::deserializeVideoResponse($rawResponse));
    }

    /**
     * Next page.
     *
     * @param PaginateResponseInterface $response The response.
     * @return PhotosResponse|VideosResponse Returns the response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function nextPage(PaginateResponseInterface $response) {

        $rawResponse = $this->callApiWithResponse($response, true);

        if (true === ($response instanceof PhotosResponse)) {
            return $this->beforeReturnResponse(ResponseDeserializer::deserializePhotosResponse($rawResponse));
        }

        return $this->beforeReturnResponse(ResponseDeserializer::deserializeVideosResponse($rawResponse));
    }

    /**
     * Popular videos.
     *
     * @param PopularVideosRequest $response The popular videos request.
     * @return VideosResponse Returns the videos response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function popularVideos(PopularVideosRequest $response): VideosResponse {

        $queryData = RequestSerializer::serializePopularVideosRequest($response);

        $rawResponse = $this->callApiWithRequest($response, $queryData);

        return $this->beforeReturnResponse(ResponseDeserializer::deserializeVideosResponse($rawResponse));
    }

    /**
     * Prev page.
     *
     * @param PaginateResponseInterface $response The response.
     * @return PhotosResponse|VideosResponse Returns the response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function prevPage(PaginateResponseInterface $response) {

        $rawResponse = $this->callApiWithResponse($response, false);

        if (true === ($response instanceof PhotosResponse)) {
            return $this->beforeReturnResponse(ResponseDeserializer::deserializePhotosResponse($rawResponse));
        }

        return $this->beforeReturnResponse(ResponseDeserializer::deserializeVideosResponse($rawResponse));
    }

    /**
     * Search photos.
     *
     * @param SearchPhotosRequest $request The search photos request.
     * @return PhotosResponse Returns the photo response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function searchPhotos(SearchPhotosRequest $request): PhotosResponse {

        $queryData = RequestSerializer::serializeSearchPhotosRequest($request);

        $rawResponse = $this->callApiWithRequest($request, $queryData);

        return $this->beforeReturnResponse(ResponseDeserializer::deserializePhotosResponse($rawResponse));
    }

    /**
     * Search videos.
     *
     * @param SearchVideosRequest $request The search videos request.
     * @return VideosResponse Returns the videos response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function searchVideos(SearchVideosRequest $request): VideosResponse {

        $queryData = RequestSerializer::serializeSearchVideosRequest($request);

        $rawResponse = $this->callApiWithRequest($request, $queryData);

        return $this->beforeReturnResponse(ResponseDeserializer::deserializeVideosResponse($rawResponse));
    }
}
