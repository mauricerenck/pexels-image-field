<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Serializer;

use WBW\Library\Pexels\Model\Collection;
use WBW\Library\Pexels\Model\Photo;
use WBW\Library\Pexels\Model\Source;
use WBW\Library\Pexels\Model\User;
use WBW\Library\Pexels\Model\Video;
use WBW\Library\Pexels\Model\VideoFile;
use WBW\Library\Pexels\Model\VideoPicture;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * JSON deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pexels\Serializer
 */
class JsonDeserializer {

    /**
     * Deserialize a collection.
     *
     * @param array $response The response.
     * @return Collection Returns a collection.
     */
    public static function deserializeCollection(array $response): Collection {

        $model = new Collection();
        $model->setId(ArrayHelper::get($response, "id"));
        $model->setTitle(ArrayHelper::get($response, "title"));
        $model->setDescription(ArrayHelper::get($response, "description"));
        $model->setPrivate(ArrayHelper::get($response, "private"));
        $model->setMediaCount(ArrayHelper::get($response, "media_count"));
        $model->setPhotosCount(ArrayHelper::get($response, "photos_count"));
        $model->setVideosCount(ArrayHelper::get($response, "videos_count"));

        return $model;
    }

    /**
     * Deserialize a photo.
     *
     * @param array $response The response.
     * @return Photo Returns a photo.
     */
    public static function deserializePhoto(array $response): Photo {

        $model = new Photo();
        $model->setId(ArrayHelper::get($response, "id"));
        $model->setWidth(ArrayHelper::get($response, "width"));
        $model->setHeight(ArrayHelper::get($response, "height"));
        $model->setUrl(ArrayHelper::get($response, "url"));
        $model->setPhotographer(ArrayHelper::get($response, "photographer"));
        $model->setPhotographerUrl(ArrayHelper::get($response, "photographer_url"));
        $model->setPhotographerId(ArrayHelper::get($response, "photographer_id"));
        $model->setAvgColor(ArrayHelper::get($response, "avg_color"));
        $model->setSrc(static::deserializeSource(ArrayHelper::get($response, "src", [])));
        $model->setLiked(ArrayHelper::get($response, "liked"));

        return $model;
    }

    /**
     * Deserialize a source.
     *
     * @param array $response The response.
     * @return Source Returns a source.
     */
    public static function deserializeSource(array $response): Source {

        $model = new Source();
        $model->setOriginal(ArrayHelper::get($response, "original"));
        $model->setLarge(ArrayHelper::get($response, "large"));
        $model->setLarge2x(ArrayHelper::get($response, "large2x"));
        $model->setMedium(ArrayHelper::get($response, "medium"));
        $model->setSmall(ArrayHelper::get($response, "small"));
        $model->setPortrait(ArrayHelper::get($response, "portrait"));
        $model->setLandscape(ArrayHelper::get($response, "landscape"));
        $model->setTiny(ArrayHelper::get($response, "tiny"));

        return $model;
    }

    /**
     * Deserialize an user.
     *
     * @param array $response The response.
     * @return User Returns an user.
     */
    public static function deserializeUser(array $response): User {

        $model = new User();
        $model->setId(ArrayHelper::get($response, "id"));
        $model->setName(ArrayHelper::get($response, "name"));
        $model->setUrl(ArrayHelper::get($response, "url"));

        return $model;
    }

    /**
     * Deserialize a video.
     *
     * @param array $response The response.
     * @return Video Returns a video.
     */
    public static function deserializeVideo(array $response): Video {

        $model = new Video();
        $model->setId(ArrayHelper::get($response, "id"));
        $model->setWidth(ArrayHelper::get($response, "width"));
        $model->setHeight(ArrayHelper::get($response, "height"));
        $model->setUrl(ArrayHelper::get($response, "url"));
        $model->setImage(ArrayHelper::get($response, "image"));
        $model->setFullRes(ArrayHelper::get($response, "full_res"));
        $model->setDuration(ArrayHelper::get($response, "duration"));
        $model->setUser(static::deserializeUser(ArrayHelper::get($response, "user", [])));

        foreach (ArrayHelper::get($response, "video_files", []) as $current) {
            $model->addVideoFile(static::deserializeVideoFile($current));
        }

        foreach (ArrayHelper::get($response, "video_pictures", []) as $current) {
            $model->addVideoPicture(static::deserializeVideoPicture($current));
        }

        return $model;
    }

    /**
     * Deserialize a video file.
     *
     * @param array $response The response.
     * @return VideoFile Returns a video file.
     */
    public static function deserializeVideoFile(array $response): VideoFile {

        $model = new VideoFile();
        $model->setId(ArrayHelper::get($response, "id"));
        $model->setQuality(ArrayHelper::get($response, "quality"));
        $model->setFileType(ArrayHelper::get($response, "file_type"));
        $model->setWidth(ArrayHelper::get($response, "width"));
        $model->setHeight(ArrayHelper::get($response, "height"));
        $model->setLink(ArrayHelper::get($response, "link"));

        return $model;
    }

    /**
     * Deserialize a video picture.
     *
     * @param array $response The response.
     * @return VideoPicture Returns a video picture.
     */
    public static function deserializeVideoPicture(array $response): VideoPicture {

        $model = new VideoPicture();
        $model->setId(ArrayHelper::get($response, "id"));
        $model->setPicture(ArrayHelper::get($response, "picture"));
        $model->setNr(ArrayHelper::get($response, "nr"));

        return $model;
    }

}