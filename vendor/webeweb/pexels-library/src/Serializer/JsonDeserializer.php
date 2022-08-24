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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Serializer
 */
class JsonDeserializer {

    /**
     * Deserializes a collection.
     *
     * @param array $data The data.
     * @return Collection Returns a collection.
     */
    public static function deserializeCollection(array $data): Collection {

        $model = new Collection();
        $model->setRawData(json_encode($data, JSON_PRETTY_PRINT));
        $model->setId(ArrayHelper::get($data, "id"));
        $model->setTitle(ArrayHelper::get($data, "title"));
        $model->setDescription(ArrayHelper::get($data, "description"));
        $model->setPrivate(ArrayHelper::get($data, "private"));
        $model->setMediaCount(ArrayHelper::get($data, "media_count"));
        $model->setPhotosCount(ArrayHelper::get($data, "photos_count"));
        $model->setVideosCount(ArrayHelper::get($data, "videos_count"));

        return $model;
    }

    /**
     * Deserializes a photo.
     *
     * @param array $data The data.
     * @return Photo Returns a photo.
     */
    public static function deserializePhoto(array $data): Photo {

        $model = new Photo();
        $model->setRawData(json_encode($data, JSON_PRETTY_PRINT));
        $model->setId(ArrayHelper::get($data, "id"));
        $model->setWidth(ArrayHelper::get($data, "width"));
        $model->setHeight(ArrayHelper::get($data, "height"));
        $model->setUrl(ArrayHelper::get($data, "url"));
        $model->setPhotographer(ArrayHelper::get($data, "photographer"));
        $model->setPhotographerUrl(ArrayHelper::get($data, "photographer_url"));
        $model->setPhotographerId(ArrayHelper::get($data, "photographer_id"));
        $model->setAvgColor(ArrayHelper::get($data, "avg_color"));
        $model->setSrc(static::deserializeSource(ArrayHelper::get($data, "src", [])));
        $model->setLiked(ArrayHelper::get($data, "liked"));
        $model->setAlt(ArrayHelper::get($data, "alt"));

        return $model;
    }

    /**
     * Deserializes a source.
     *
     * @param array $data The data.
     * @return Source Returns a source.
     */
    public static function deserializeSource(array $data): Source {

        $model = new Source();
        $model->setRawData(json_encode($data, JSON_PRETTY_PRINT));
        $model->setOriginal(ArrayHelper::get($data, "original"));
        $model->setLarge(ArrayHelper::get($data, "large"));
        $model->setLarge2x(ArrayHelper::get($data, "large2x"));
        $model->setMedium(ArrayHelper::get($data, "medium"));
        $model->setSmall(ArrayHelper::get($data, "small"));
        $model->setPortrait(ArrayHelper::get($data, "portrait"));
        $model->setLandscape(ArrayHelper::get($data, "landscape"));
        $model->setTiny(ArrayHelper::get($data, "tiny"));

        return $model;
    }

    /**
     * Deserializes an user.
     *
     * @param array $data The data.
     * @return User Returns an user.
     */
    public static function deserializeUser(array $data): User {

        $model = new User();
        $model->setRawData(json_encode($data, JSON_PRETTY_PRINT));
        $model->setId(ArrayHelper::get($data, "id"));
        $model->setName(ArrayHelper::get($data, "name"));
        $model->setUrl(ArrayHelper::get($data, "url"));

        return $model;
    }

    /**
     * Deserializes a video.
     *
     * @param array $data The data.
     * @return Video Returns a video.
     */
    public static function deserializeVideo(array $data): Video {

        $model = new Video();
        $model->setRawData(json_encode($data, JSON_PRETTY_PRINT));
        $model->setId(ArrayHelper::get($data, "id"));
        $model->setWidth(ArrayHelper::get($data, "width"));
        $model->setHeight(ArrayHelper::get($data, "height"));
        $model->setUrl(ArrayHelper::get($data, "url"));
        $model->setImage(ArrayHelper::get($data, "image"));
        $model->setFullRes(ArrayHelper::get($data, "full_res"));
        $model->setDuration(ArrayHelper::get($data, "duration"));
        $model->setUser(static::deserializeUser(ArrayHelper::get($data, "user", [])));

        foreach (ArrayHelper::get($data, "video_files", []) as $current) {
            $model->addVideoFile(static::deserializeVideoFile($current));
        }

        foreach (ArrayHelper::get($data, "video_pictures", []) as $current) {
            $model->addVideoPicture(static::deserializeVideoPicture($current));
        }

        return $model;
    }

    /**
     * Deserializes a video file.
     *
     * @param array $data The data.
     * @return VideoFile Returns a video file.
     */
    public static function deserializeVideoFile(array $data): VideoFile {

        $model = new VideoFile();
        $model->setRawData(json_encode($data, JSON_PRETTY_PRINT));
        $model->setId(ArrayHelper::get($data, "id"));
        $model->setQuality(ArrayHelper::get($data, "quality"));
        $model->setFileType(ArrayHelper::get($data, "file_type"));
        $model->setWidth(ArrayHelper::get($data, "width"));
        $model->setHeight(ArrayHelper::get($data, "height"));
        $model->setLink(ArrayHelper::get($data, "link"));

        return $model;
    }

    /**
     * Deserializes a video picture.
     *
     * @param array $data The data.
     * @return VideoPicture Returns a video picture.
     */
    public static function deserializeVideoPicture(array $data): VideoPicture {

        $model = new VideoPicture();
        $model->setRawData(json_encode($data, JSON_PRETTY_PRINT));
        $model->setId(ArrayHelper::get($data, "id"));
        $model->setPicture(ArrayHelper::get($data, "picture"));
        $model->setNr(ArrayHelper::get($data, "nr"));

        return $model;
    }

}
