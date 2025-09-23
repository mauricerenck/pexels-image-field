<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Serializer;

use WBW\Library\Common\Helper\ArrayHelper;
use WBW\Library\XmlTv\Model\Actor;
use WBW\Library\XmlTv\Model\Adapter;
use WBW\Library\XmlTv\Model\Aspect;
use WBW\Library\XmlTv\Model\Audio;
use WBW\Library\XmlTv\Model\Category;
use WBW\Library\XmlTv\Model\Channel;
use WBW\Library\XmlTv\Model\Colour;
use WBW\Library\XmlTv\Model\Commentator;
use WBW\Library\XmlTv\Model\Composer;
use WBW\Library\XmlTv\Model\Country;
use WBW\Library\XmlTv\Model\Credits;
use WBW\Library\XmlTv\Model\Date;
use WBW\Library\XmlTv\Model\Desc;
use WBW\Library\XmlTv\Model\Director;
use WBW\Library\XmlTv\Model\DisplayName;
use WBW\Library\XmlTv\Model\Editor;
use WBW\Library\XmlTv\Model\EpisodeNum;
use WBW\Library\XmlTv\Model\Guest;
use WBW\Library\XmlTv\Model\Icon;
use WBW\Library\XmlTv\Model\Keyword;
use WBW\Library\XmlTv\Model\Language;
use WBW\Library\XmlTv\Model\LastChance;
use WBW\Library\XmlTv\Model\Length;
use WBW\Library\XmlTv\Model\OrigLanguage;
use WBW\Library\XmlTv\Model\Premiere;
use WBW\Library\XmlTv\Model\Present;
use WBW\Library\XmlTv\Model\Presenter;
use WBW\Library\XmlTv\Model\PreviouslyShown;
use WBW\Library\XmlTv\Model\Producer;
use WBW\Library\XmlTv\Model\Programme;
use WBW\Library\XmlTv\Model\Quality;
use WBW\Library\XmlTv\Model\Rating;
use WBW\Library\XmlTv\Model\Review;
use WBW\Library\XmlTv\Model\SecondaryTitle;
use WBW\Library\XmlTv\Model\StarRating;
use WBW\Library\XmlTv\Model\Stereo;
use WBW\Library\XmlTv\Model\Subtitles;
use WBW\Library\XmlTv\Model\Title;
use WBW\Library\XmlTv\Model\Tv;
use WBW\Library\XmlTv\Model\Url;
use WBW\Library\XmlTv\Model\Value;
use WBW\Library\XmlTv\Model\Video;
use WBW\Library\XmlTv\Model\Writer;

/**
 * JSON deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Serializer
 */
class JsonDeserializer {

    /**
     * Deserialize an actor.
     *
     * @param array<string,mixed> $data The data.
     * @return Actor Returns the actor.
     */
    public static function deserializeActor(array $data): Actor {

        $model = new Actor();
        $model->setRole(ArrayHelper::get($data, SerializerKeys::ROLE));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize an adapter.
     *
     * @param array<string,mixed> $data The data.
     * @return Adapter Returns the adapter.
     */
    public static function deserializeAdapter(array $data): Adapter {

        $model = new Adapter();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize an aspect.
     *
     * @param array<string,mixed> $data The data.
     * @return Aspect Returns the aspect.
     */
    public static function deserializeAspect(array $data): Aspect {

        $model = new Aspect();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize an audio.
     *
     * @param array<string,mixed> $data The data.
     * @return Audio Returns the audio.
     */
    public static function deserializeAudio(array $data): Audio {

        $model = new Audio();
        SerializerHelper::jsonDeserializeModel($data, Present::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeModel($data, Stereo::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a category.
     *
     * @param array<string,mixed> $data The data.
     * @return Category Returns the category.
     */
    public static function deserializeCategory(array $data): Category {

        $model = new Category();
        $model->setLang(ArrayHelper::get($data, SerializerKeys::LANG));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a channel.
     *
     * @param array<string,mixed> $data The data.
     * @return Channel Returns the channel.
     */
    public static function deserializeChannel(array $data): Channel {

        $model = new Channel();
        $model->setId(ArrayHelper::get($data, SerializerKeys::ID));
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::DISPLAY_NAMES, []), DisplayName::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::ICONS, []), Icon::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::URLS, []), Url::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a colour.
     *
     * @param array<string,mixed> $data The data.
     * @return Colour Returns the colour.
     */
    public static function deserializeColour(array $data): Colour {

        $model = new Colour();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a commentator.
     *
     * @param array<string,mixed> $data The data.
     * @return Commentator Returns the commentator.
     */
    public static function deserializeCommentator(array $data): Commentator {

        $model = new Commentator();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a composer.
     *
     * @param array<string,mixed> $data The data.
     * @return Composer Returns the composer.
     */
    public static function deserializeComposer(array $data): Composer {

        $model = new Composer();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a country.
     *
     * @param array<string,mixed> $data The data.
     * @return Country Returns the country.
     */
    public static function deserializeCountry(array $data): Country {

        $model = new Country();
        $model->setLang(ArrayHelper::get($data, SerializerKeys::LANG));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize the credits.
     *
     * @param array<string,mixed> $data The data.
     * @return Credits Returns the credits.
     */
    public static function deserializeCredits(array $data): Credits {

        $model = new Credits();
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::DIRECTORS, []), Director::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::ACTORS, []), Actor::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::WRITERS, []), Writer::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::ADAPTERS, []), Adapter::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::PRODUCERS, []), Producer::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::COMPOSERS, []), Composer::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::EDITORS, []), Editor::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::PRESENTERS, []), Presenter::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::COMMENTATORS, []), Commentator::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::GUESTS, []), Guest::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a date.
     *
     * @param array<string,mixed> $data The data.
     * @return Date Returns the date.
     */
    public static function deserializeDate(array $data): Date {

        $model = new Date();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a description.
     *
     * @param array<string,mixed> $data The data.
     * @return Desc Returns the description.
     */
    public static function deserializeDesc(array $data): Desc {

        $model = new Desc();
        $model->setLang(ArrayHelper::get($data, SerializerKeys::LANG));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a director.
     *
     * @param array<string,mixed> $data The data.
     * @return Director Returns the director.
     */
    public static function deserializeDirector(array $data): Director {

        $model = new Director();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a display name.
     *
     * @param array<string,mixed> $data The data.
     * @return DisplayName Returns the display name.
     */
    public static function deserializeDisplayName(array $data): DisplayName {

        $model = new DisplayName();
        $model->setLang(ArrayHelper::get($data, SerializerKeys::LANG));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize an editor.
     *
     * @param array<string,mixed> $data The data.
     * @return Editor Returns the editor.
     */
    public static function deserializeEditor(array $data): Editor {

        $model = new Editor();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a episode number.
     *
     * @param array<string,mixed> $data The data.
     * @return EpisodeNum Returns the episode number.
     */
    public static function deserializeEpisodeNum(array $data): EpisodeNum {

        $model = new EpisodeNum();
        $model->setSystem(ArrayHelper::get($data, SerializerKeys::SYSTEM));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a guest.
     *
     * @param array<string,mixed> $data The data.
     * @return Guest Returns the guest.
     */
    public static function deserializeGuest(array $data): Guest {

        $model = new Guest();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a icon.
     *
     * @param array<string,mixed> $data The data.
     * @return Icon Returns the icon.
     */
    public static function deserializeIcon(array $data): Icon {

        $model = new Icon();
        $model->setSrc(ArrayHelper::get($data, SerializerKeys::SRC));
        $model->setWidth(ArrayHelper::get($data, SerializerKeys::WIDTH));
        $model->setHeight(ArrayHelper::get($data, SerializerKeys::HEIGHT));

        return $model;
    }

    /**
     * Deserialize a keyword.
     *
     * @param array<string,mixed> $data The data.
     * @return Keyword Returns the keyword.
     */
    public static function deserializeKeyword(array $data): Keyword {

        $model = new Keyword();
        $model->setLang(ArrayHelper::get($data, SerializerKeys::LANG));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a language.
     *
     * @param array<string,mixed> $data The data.
     * @return Language Returns the language.
     */
    public static function deserializeLanguage(array $data): Language {

        $model = new Language();
        $model->setLang(ArrayHelper::get($data, SerializerKeys::LANG));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a last chance.
     *
     * @param array<string,mixed> $data The data.
     * @return LastChance Returns the last chance.
     */
    public static function deserializeLastChance(array $data): LastChance {

        $model = new LastChance();
        $model->setLang(ArrayHelper::get($data, SerializerKeys::LANG));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a length.
     *
     * @param array<string,mixed> $data The data.
     * @return Length Returns the length.
     */
    public static function deserializeLength(array $data): Length {

        $model = new Length();
        $model->setUnits(ArrayHelper::get($data, SerializerKeys::UNITS));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize an original language.
     *
     * @param array<string,mixed> $data The data.
     * @return OrigLanguage Returns the original language.
     */
    public static function deserializeOrigLanguage(array $data): OrigLanguage {

        $model = new OrigLanguage();
        $model->setLang(ArrayHelper::get($data, SerializerKeys::LANG));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a premiere.
     *
     * @param array<string,mixed> $data The data.
     * @return Premiere Returns the premiere.
     */
    public static function deserializePremiere(array $data): Premiere {

        $model = new Premiere();
        $model->setLang(ArrayHelper::get($data, SerializerKeys::LANG));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a present.
     *
     * @param array<string,mixed> $data The data.
     * @return Present Returns the present.
     */
    public static function deserializePresent(array $data): Present {

        $model = new Present();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a presenter.
     *
     * @param array<string,mixed> $data The data.
     * @return Presenter Returns the presenter.
     */
    public static function deserializePresenter(array $data): Presenter {

        $model = new Presenter();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a previously shown.
     *
     * @param array<string,mixed> $data The data.
     * @return PreviouslyShown Returns the previously shown.
     */
    public static function deserializePreviouslyShown(array $data): PreviouslyShown {

        $model = new PreviouslyShown();
        $model->setChannel(ArrayHelper::get($data, SerializerKeys::CHANNEL));
        $model->setStart(ArrayHelper::get($data, SerializerKeys::START));

        return $model;
    }

    /**
     * Deserialize a producer.
     *
     * @param array<string,mixed> $data The data.
     * @return Producer Returns the producer.
     */
    public static function deserializeProducer(array $data): Producer {

        $model = new Producer();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a programme.
     *
     * @param array<string,mixed> $data The data.
     * @return Programme Returns the programme.
     */
    public static function deserializeProgramme(array $data): Programme {

        $model = new Programme();
        $model->setStart(ArrayHelper::get($data, SerializerKeys::START));
        $model->setStop(ArrayHelper::get($data, SerializerKeys::STOP));
        $model->setPdcStart(ArrayHelper::get($data, SerializerKeys::PDC_START));
        $model->setVpsStart(ArrayHelper::get($data, SerializerKeys::VPS_START));
        $model->setShowView(ArrayHelper::get($data, SerializerKeys::SHOW_VIEW));
        $model->setVideoPlus(ArrayHelper::get($data, SerializerKeys::VIDEO_PLUS));
        $model->setChannel(ArrayHelper::get($data, SerializerKeys::CHANNEL));
        $model->setClumpIdx(ArrayHelper::get($data, SerializerKeys::CLUMP_IDX));
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::TITLES, []), Title::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::SECONDARY_TITLES, []), SecondaryTitle::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::DESCS, []), Desc::DOM_NODE_NAME, $model);
        $model->setCredits(static::deserializeCredits(ArrayHelper::get($data, SerializerKeys::CREDITS, [])));
        SerializerHelper::jsonDeserializeModel($data, SerializerKeys::DATE, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::CATEGORIES, []), Category::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::KEYWORDS, []), Keyword::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeModel($data, SerializerKeys::LANGUAGE, $model);
        SerializerHelper::jsonDeserializeModel($data, SerializerKeys::ORIG_LANGUAGE, $model);
        SerializerHelper::jsonDeserializeModel($data, SerializerKeys::LENGTH, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::ICONS, []), Icon::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::URLS, []), Url::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::COUNTRIES, []), Country::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::EPISODE_NUMS, []), EpisodeNum::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeModel($data, SerializerKeys::VIDEO, $model);
        SerializerHelper::jsonDeserializeModel($data, SerializerKeys::AUDIO, $model);
        SerializerHelper::jsonDeserializeModel($data, SerializerKeys::PREVIOUSLY_SHOWN, $model);
        SerializerHelper::jsonDeserializeModel($data, SerializerKeys::PREMIERE, $model);
        SerializerHelper::jsonDeserializeModel($data, SerializerKeys::LAST_CHANCE, $model);
        $model->setNew(ArrayHelper::get($data, SerializerKeys::NEW));
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::SUBTITLES, []), Subtitles::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::RATINGS, []), Rating::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::STAR_RATINGS, []), StarRating::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::REVIEWS, []), Review::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a quality.
     *
     * @param array<string,mixed> $data The data.
     * @return Quality Returns the quality.
     */
    public static function deserializeQuality(array $data): Quality {

        $model = new Quality();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a rating.
     *
     * @param array<string,mixed> $data The data.
     * @return Rating Returns the rating.
     */
    public static function deserializeRating(array $data): Rating {

        $model = new Rating();
        $model->setSystem(ArrayHelper::get($data, SerializerKeys::SYSTEM));
        SerializerHelper::jsonDeserializeModel($data, Value::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::ICONS, []), Icon::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a review.
     *
     * @param array<string,mixed> $data The data.
     * @return Review Returns the review.
     */
    public static function deserializeReview(array $data): Review {

        $model = new Review();
        $model->setType(ArrayHelper::get($data, SerializerKeys::TYPE));
        $model->setSource(ArrayHelper::get($data, SerializerKeys::SOURCE));
        $model->setReviewer(ArrayHelper::get($data, SerializerKeys::REVIEWER));
        $model->setLang(ArrayHelper::get($data, SerializerKeys::LANG));

        return $model;
    }

    /**
     * Deserialize a secondary title.
     *
     * @param array<string,mixed> $data The data.
     * @return SecondaryTitle Returns the secondary title.
     */
    public static function deserializeSecondaryTitle(array $data): SecondaryTitle {

        $model = new SecondaryTitle();
        $model->setLang(ArrayHelper::get($data, SerializerKeys::LANG));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a star rating.
     *
     * @param array<string,mixed> $data The data.
     * @return StarRating Returns the star rating.
     */
    public static function deserializeStarRating(array $data): StarRating {

        $model = new StarRating();
        SerializerHelper::jsonDeserializeModel($data, Value::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::ICONS, []), Icon::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a stereo.
     *
     * @param array<string,mixed> $data The data.
     * @return Stereo Returns the stereo.
     */
    public static function deserializeStereo(array $data): Stereo {

        $model = new Stereo();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a subtitles.
     *
     * @param array<string,mixed> $data The data.
     * @return Subtitles Returns the subtitles.
     */
    public static function deserializeSubtitles(array $data): Subtitles {

        $model = new Subtitles();
        $model->setType(ArrayHelper::get($data, SerializerKeys::TYPE));
        SerializerHelper::jsonDeserializeModel($data, Language::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a title.
     *
     * @param array<string,mixed> $data The data.
     * @return Title Returns the title.
     */
    public static function deserializeTitle(array $data): Title {

        $model = new Title();
        $model->setLang(ArrayHelper::get($data, SerializerKeys::LANG));
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a TV.
     *
     * @param array<string,mixed> $data The data.
     * @return Tv Returns the TV.
     */
    public static function deserializeTv(array $data): Tv {

        $model = new Tv();
        $model->setDate(ArrayHelper::get($data, SerializerKeys::DATE));
        $model->setGeneratorInfoName(ArrayHelper::get($data, SerializerKeys::GENERATOR_INFO_NAME));
        $model->setGeneratorInfoUrl(ArrayHelper::get($data, SerializerKeys::GENERATOR_INFO_URL));
        $model->setSourceDataUrl(ArrayHelper::get($data, SerializerKeys::SOURCE_DATA_URL));
        $model->setSourceInfoName(ArrayHelper::get($data, SerializerKeys::SOURCE_INFO_NAME));
        $model->setSourceInfoUrl(ArrayHelper::get($data, SerializerKeys::SOURCE_INFO_URL));
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::CHANNELS, []), Channel::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeArray(ArrayHelper::get($data, SerializerKeys::PROGRAMMES, []), Programme::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a URL.
     *
     * @param array<string,mixed> $data The data.
     * @return Url Returns the URL.
     */
    public static function deserializeUrl(array $data): Url {

        $model = new Url();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a value.
     *
     * @param array<string,mixed> $data The data.
     * @return Value Returns the value.
     */
    public static function deserializeValue(array $data): Value {

        $model = new Value();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }

    /**
     * Deserialize a video.
     *
     * @param array<string,mixed> $data The data.
     * @return Video Returns the video.
     */
    public static function deserializeVideo(array $data): Video {

        $model = new Video();
        SerializerHelper::jsonDeserializeModel($data, Present::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeModel($data, Colour::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeModel($data, Aspect::DOM_NODE_NAME, $model);
        SerializerHelper::jsonDeserializeModel($data, Quality::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a writer.
     *
     * @param array<string,mixed> $data The data.
     * @return Writer Returns the writer.
     */
    public static function deserializeWriter(array $data): Writer {

        $model = new Writer();
        $model->setContent(ArrayHelper::get($data, SerializerKeys::CONTENT));

        return $model;
    }
}
