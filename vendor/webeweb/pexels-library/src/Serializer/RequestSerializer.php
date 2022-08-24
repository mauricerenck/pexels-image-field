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

use InvalidArgumentException;
use WBW\Library\Pexels\Request\CollectionRequest;
use WBW\Library\Pexels\Request\CollectionsRequest;
use WBW\Library\Pexels\Request\CuratedPhotosRequest;
use WBW\Library\Pexels\Request\PopularVideosRequest;
use WBW\Library\Pexels\Request\SearchPhotosRequest;
use WBW\Library\Pexels\Request\SearchVideosRequest;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Request serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Serializer
 */
class RequestSerializer {

    /**
     * Serializes a collection request.
     *
     * @param CollectionRequest $request The collection request.
     * @return array Returns the serialized curated photos request.
     */
    public static function serializeCollectionRequest(CollectionRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "type", $request->getType(), [null]);
        ArrayHelper::set($result, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($result, "per_page", $request->getPerPage(), [null, CollectionRequest::PER_PAGE_DEFAULT]);

        return $result;
    }

    /**
     * Serializes a collections request.
     *
     * @param CollectionsRequest $request The collections request.
     * @return array Returns the serialized curated photos request.
     */
    public static function serializeCollectionsRequest(CollectionsRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($result, "per_page", $request->getPerPage(), [null, CollectionsRequest::PER_PAGE_DEFAULT]);

        return $result;
    }

    /**
     * Serializes a curated photos request.
     *
     * @param CuratedPhotosRequest $request The curated photos request.
     * @return array Returns the serialized curated photos request.
     */
    public static function serializeCuratedPhotosRequest(CuratedPhotosRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($result, "per_page", $request->getPerPage(), [null, CuratedPhotosRequest::PER_PAGE_DEFAULT]);

        return $result;
    }

    /**
     * Serializes a popular videos request.
     *
     * @param PopularVideosRequest $request The popular photos request.
     * @return array Returns the serialized popular videos request.
     */
    public static function serializePopularVideosRequest(PopularVideosRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "min_width", $request->getMinWidth(), [null]);
        ArrayHelper::set($result, "min_height", $request->getMinHeight(), [null]);
        ArrayHelper::set($result, "min_duration", $request->getMinDuration(), [null]);
        ArrayHelper::set($result, "max_duration", $request->getMaxDuration(), [null]);
        ArrayHelper::set($result, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($result, "per_page", $request->getPerPage(), [null, PopularVideosRequest::PER_PAGE_DEFAULT]);

        return $result;
    }

    /**
     * Serializes a search photos request.
     *
     * @param SearchPhotosRequest $request The search photos request.
     * @return array Returns the serialized search photos request.
     * @throws InvalidArgumentException Throws an invalid argument exception if a mandatory parameter is missing.
     */
    public static function serializeSearchPhotosRequest(SearchPhotosRequest $request): array {

        $result = [];

        if (null === $request->getQuery()) {
            throw new InvalidArgumentException('The mandatory parameter "query" is missing');
        }

        ArrayHelper::set($result, "query", $request->getQuery());
        ArrayHelper::set($result, "orientation", $request->getOrientation(), [null]);
        ArrayHelper::set($result, "size", $request->getSize(), [null]);
        ArrayHelper::set($result, "color", $request->getColor(), [null]);
        ArrayHelper::set($result, "locale", $request->getLocale());
        ArrayHelper::set($result, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($result, "per_page", $request->getPerPage(), [null, SearchPhotosRequest::PER_PAGE_DEFAULT]);

        return $result;
    }

    /**
     * Serializes a search videos request.
     *
     * @param SearchVideosRequest $request The search photos request.
     * @return array Returns the serialized search videos request.
     * @throws InvalidArgumentException Throws an invalid argument exception if a mandatory parameter is missing.
     */
    public static function serializeSearchVideosRequest(SearchVideosRequest $request): array {

        $result = [];

        if (null === $request->getQuery()) {
            throw new InvalidArgumentException('The mandatory parameter "query" is missing');
        }

        ArrayHelper::set($result, "query", $request->getQuery());
        ArrayHelper::set($result, "orientation", $request->getOrientation(), [null]);
        ArrayHelper::set($result, "size", $request->getSize(), [null]);
        ArrayHelper::set($result, "locale", $request->getLocale(), [null]);
        ArrayHelper::set($result, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($result, "per_page", $request->getPerPage(), [null, SearchVideosRequest::PER_PAGE_DEFAULT]);

        return $result;
    }
}
