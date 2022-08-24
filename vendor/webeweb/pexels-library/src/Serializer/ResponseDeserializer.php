<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Serializer;

use WBW\Library\Pexels\Response\CollectionResponse;
use WBW\Library\Pexels\Response\CollectionsResponse;
use WBW\Library\Pexels\Response\PhotoResponse;
use WBW\Library\Pexels\Response\PhotosResponse;
use WBW\Library\Pexels\Response\VideoResponse;
use WBW\Library\Pexels\Response\VideosResponse;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Serializer
 */
class ResponseDeserializer {

    /**
     * Deserializes a collection response.
     *
     * @param string $rawResponse The raw response.
     * @return CollectionResponse Returns the collection response.
     */
    public static function deserializeCollectionResponse(string $rawResponse): CollectionResponse {

        $data = json_decode(trim($rawResponse), true);

        $model = new CollectionResponse();
        $model->setRawResponse($rawResponse);

        if (null === $data) {
            return $model;
        }

        foreach (ArrayHelper::get($data, "media", []) as $current) {

            $type = ArrayHelper::get($current, "type");
            if ("Photo" === $type) {
                $model->addMedia(JsonDeserializer::deserializePhoto($current));
            }
            if ("Video" === $type) {
                $model->addMedia(JsonDeserializer::deserializeVideo($current));
            }
        }

        $model->setPage(intval(ArrayHelper::get($data, "page", -1)));
        $model->setPerPage(intval(ArrayHelper::get($data, "per_page", -1)));
        $model->setTotalResults(intval(ArrayHelper::get($data, "total_results", -1)));
        $model->setNextPage(ArrayHelper::get($data, "next_page"));
        $model->setPrevPage(ArrayHelper::get($data, "prev_page"));

        return $model;
    }

    /**
     * Deserializes a collections response.
     *
     * @param string $rawResponse The raw response.
     * @return CollectionsResponse Returns the collections response.
     */
    public static function deserializeCollectionsResponse(string $rawResponse): CollectionsResponse {

        $data = json_decode(trim($rawResponse), true);

        $model = new CollectionsResponse();
        $model->setRawResponse($rawResponse);

        if (null === $data) {
            return $model;
        }

        foreach (ArrayHelper::get($data, "collections", []) as $current) {
            $model->addCollection(JsonDeserializer::deserializeCollection($current));
        }

        $model->setPage(intval(ArrayHelper::get($data, "page", -1)));
        $model->setPerPage(intval(ArrayHelper::get($data, "per_page", -1)));
        $model->setTotalResults(intval(ArrayHelper::get($data, "total_results", -1)));
        $model->setNextPage(ArrayHelper::get($data, "next_page"));
        $model->setPrevPage(ArrayHelper::get($data, "prev_page"));

        return $model;
    }

    /**
     * Deserializes a photo response.
     *
     * @param string $rawResponse The raw response.
     * @return PhotoResponse Returns the photo response.
     */
    public static function deserializePhotoResponse(string $rawResponse): PhotoResponse {

        $data = json_decode(trim($rawResponse), true);

        $model = new PhotoResponse();
        $model->setRawResponse($rawResponse);

        if (null === $data) {
            return $model;
        }

        $model->setPhoto(JsonDeserializer::deserializePhoto($data));

        return $model;
    }

    /**
     * Deserializes a photos response.
     *
     * @param string $rawResponse The raw response.
     * @return PhotosResponse Returns the photos response.
     */
    public static function deserializePhotosResponse(string $rawResponse): PhotosResponse {

        $data = json_decode(trim($rawResponse), true);

        $model = new PhotosResponse();
        $model->setRawResponse($rawResponse);

        if (null === $data) {
            return $model;
        }

        $model->setTotalResults(intval(ArrayHelper::get($data, "total_results", -1)));
        $model->setPage(intval(ArrayHelper::get($data, "page", -1)));
        $model->setPerPage(intval(ArrayHelper::get($data, "per_page", -1)));
        $model->setUrl(ArrayHelper::get($data, "url"));
        $model->setPrevPage(ArrayHelper::get($data, "prev_page"));
        $model->setNextPage(ArrayHelper::get($data, "next_page"));

        foreach (ArrayHelper::get($data, "photos", []) as $current) {
            $model->addPhoto(JsonDeserializer::deserializePhoto($current));
        }

        return $model;
    }

    /**
     * Deserializes a video response.
     *
     * @param string $rawResponse The raw response.
     * @return VideoResponse Returns the video response.
     */
    public static function deserializeVideoResponse(string $rawResponse): VideoResponse {

        $data = json_decode(trim($rawResponse), true);

        $model = new VideoResponse();
        $model->setRawResponse($rawResponse);

        if (null === $data) {
            return $model;
        }

        $model->setVideo(JsonDeserializer::deserializeVideo($data));

        return $model;
    }

    /**
     * Deserializes a videos response.
     *
     * @param string $rawResponse The raw response.
     * @return VideosResponse Returns the photos response.
     */
    public static function deserializeVideosResponse(string $rawResponse): VideosResponse {

        $data = json_decode(trim($rawResponse), true);

        $model = new VideosResponse();
        $model->setRawResponse($rawResponse);

        if (null === $data) {
            return $model;
        }

        $model->setTotalResults(intval(ArrayHelper::get($data, "total_results", -1)));
        $model->setPage(intval(ArrayHelper::get($data, "page", -1)));
        $model->setPerPage(intval(ArrayHelper::get($data, "per_page", -1)));
        $model->setUrl(ArrayHelper::get($data, "url"));
        $model->setPrevPage(ArrayHelper::get($data, "prev_page"));
        $model->setNextPage(ArrayHelper::get($data, "next_page"));

        foreach (ArrayHelper::get($data, "videos", []) as $current) {
            $model->addVideo(JsonDeserializer::deserializeVideo($current));
        }

        return $model;
    }
}
