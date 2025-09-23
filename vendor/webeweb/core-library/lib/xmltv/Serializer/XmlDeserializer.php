<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Serializer;

use DOMNode;
use WBW\Library\Common\Serializer\XmlDeserializer as BaseXmlDeserializer;
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
 * XML deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Serializer
 */
class XmlDeserializer extends BaseXmlDeserializer {

    /**
     * Deserialize an actor node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Actor Returns the actor.
     */
    public static function deserializeActor(DOMNode $domNode): Actor {

        static::log($domNode);

        $model = new Actor();
        $model->setRole(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::ROLE));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize an adapter node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Adapter Returns the adapter.
     */
    public static function deserializeAdapter(DOMNode $domNode): Adapter {

        static::log($domNode);

        $model = new Adapter();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize an aspect node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Aspect Returns the aspect.
     */
    public static function deserializeAspect(DOMNode $domNode): Aspect {

        static::log($domNode);

        $model = new Aspect();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize an audio node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Audio Returns the audio.
     */
    public static function deserializeAudio(DOMNode $domNode): Audio {

        static::log($domNode);

        $model = new Audio();

        SerializerHelper::xmlDeserializeModel($domNode, Present::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, Stereo::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a category node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Category Returns the category.
     */
    public static function deserializeCategory(DOMNode $domNode): Category {

        static::log($domNode);

        $model = new Category();
        $model->setLang(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::LANG));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a channel node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Channel Returns the channel.
     */
    public static function deserializeChannel(DOMNode $domNode): Channel {

        static::log($domNode);

        $model = new Channel();
        $model->setId(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::ID));

        SerializerHelper::xmlDeserializeArray($domNode, DisplayName::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Icon::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Url::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a colour node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Colour Returns the colour.
     */
    public static function deserializeColour(DOMNode $domNode): Colour {

        static::log($domNode);

        $model = new Colour();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a commentator node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Commentator Returns the commentator.
     */
    public static function deserializeCommentator(DOMNode $domNode): Commentator {

        static::log($domNode);

        $model = new Commentator();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a composer node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Composer Returns the composer.
     */
    public static function deserializeComposer(DOMNode $domNode): Composer {

        static::log($domNode);

        $model = new Composer();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a country node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Country Returns the country.
     */
    public static function deserializeCountry(DOMNode $domNode): Country {

        static::log($domNode);

        $model = new Country();
        $model->setLang(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::LANG));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a credits node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Credits Returns the credits.
     */
    public static function deserializeCredits(DOMNode $domNode): Credits {

        static::log($domNode);

        $model = new Credits();

        SerializerHelper::xmlDeserializeArray($domNode, Director::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Actor::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Writer::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Adapter::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Producer::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Composer::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Editor::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Presenter::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Commentator::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Guest::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a date node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Date Returns the date.
     */
    public static function deserializeDate(DOMNode $domNode): Date {

        static::log($domNode);

        $model = new Date();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a description node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Desc Returns the description.
     */
    public static function deserializeDesc(DOMNode $domNode): Desc {

        static::log($domNode);

        $model = new Desc();
        $model->setLang(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::LANG));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a director node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Director Returns the director.
     */
    public static function deserializeDirector(DOMNode $domNode): Director {

        static::log($domNode);

        $model = new Director();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a display name node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return DisplayName Returns the display name.
     */
    public static function deserializeDisplayName(DOMNode $domNode): DisplayName {

        static::log($domNode);

        $model = new DisplayName();
        $model->setLang(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::LANG));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize an editor node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Editor Returns the editor.
     */
    public static function deserializeEditor(DOMNode $domNode): Editor {

        static::log($domNode);

        $model = new Editor();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a episode number node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return EpisodeNum Returns the episode number.
     */
    public static function deserializeEpisodeNum(DOMNode $domNode): EpisodeNum {

        static::log($domNode);

        $model = new EpisodeNum();
        $model->setSystem(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::SYSTEM));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a guest node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Guest Returns the guest.
     */
    public static function deserializeGuest(DOMNode $domNode): Guest {

        static::log($domNode);

        $model = new Guest();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize an icon node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Icon Returns the icon.
     */
    public static function deserializeIcon(DOMNode $domNode): Icon {

        static::log($domNode);

        $model = new Icon();
        $model->setSrc(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::SRC));
        $model->setWidth((int) BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::WIDTH));
        $model->setHeight((int) BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::HEIGHT));

        return $model;
    }

    /**
     * Deserialize a keyword node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Keyword Returns the keyword.
     */
    public static function deserializeKeyword(DOMNode $domNode): Keyword {

        static::log($domNode);

        $model = new Keyword();
        $model->setLang(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::LANG));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a language node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Language Returns the language.
     */
    public static function deserializeLanguage(DOMNode $domNode): Language {

        static::log($domNode);

        $model = new Language();
        $model->setLang(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::LANG));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a last chance node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return LastChance Returns the last chance.
     */
    public static function deserializeLastChance(DOMNode $domNode): LastChance {

        static::log($domNode);

        $model = new LastChance();
        $model->setLang(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::LANG));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a length node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Length Returns the length.
     */
    public static function deserializeLength(DOMNode $domNode): Length {

        static::log($domNode);

        $model = new Length();
        $model->setUnits(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::UNITS));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize an original language node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return OrigLanguage Returns the original language.
     */
    public static function deserializeOrigLanguage(DOMNode $domNode): OrigLanguage {

        static::log($domNode);

        $model = new OrigLanguage();
        $model->setLang(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::LANG));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a premiere node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Premiere Returns the premiere.
     */
    public static function deserializePremiere(DOMNode $domNode): Premiere {

        static::log($domNode);

        $model = new Premiere();
        $model->setLang(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::LANG));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a present node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Present Returns the present.
     */
    public static function deserializePresent(DOMNode $domNode): Present {

        static::log($domNode);

        $model = new Present();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a presenter node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Presenter Returns the presenter.
     */
    public static function deserializePresenter(DOMNode $domNode): Presenter {

        static::log($domNode);

        $model = new Presenter();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a previously shown node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return PreviouslyShown Returns the previously shown.
     */
    public static function deserializePreviouslyShown(DOMNode $domNode): PreviouslyShown {

        static::log($domNode);

        $model = new PreviouslyShown();
        $model->setChannel(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::CHANNEL));
        $model->setStart(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::START));

        return $model;
    }

    /**
     * Deserialize a producer node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Producer Returns the producer.
     */
    public static function deserializeProducer(DOMNode $domNode): Producer {

        static::log($domNode);

        $model = new Producer();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a programme node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Programme Returns the programme.
     */
    public static function deserializeProgramme(DOMNode $domNode): Programme {

        static::log($domNode);

        $newNode = BaseXmlDeserializer::getDomNodeByName(SerializerKeys::NEW, $domNode->childNodes);

        $model = new Programme();
        $model->setStart(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::START));
        $model->setStop(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::STOP));
        $model->setPdcStart(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, "pdc-start"));
        $model->setVpsStart(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, "vps-start"));
        $model->setShowView(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, "showview"));
        $model->setVideoPlus(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, "videoplus"));
        $model->setChannel(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::CHANNEL));
        $model->setClumpIdx(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, "clumpidx"));
        SerializerHelper::xmlDeserializeArray($domNode, Title::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, SecondaryTitle::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Desc::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, Credits::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, Date::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Category::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Keyword::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, Language::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, OrigLanguage::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, Length::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Icon::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Url::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Country::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, EpisodeNum::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, Video::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, Audio::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, PreviouslyShown::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, Premiere::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, LastChance::DOM_NODE_NAME, $model);
        $model->setNew(null !== $newNode);
        SerializerHelper::xmlDeserializeArray($domNode, Subtitles::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Rating::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, StarRating::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Review::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a quality node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Quality Returns the quality.
     */
    public static function deserializeQuality(DOMNode $domNode): Quality {

        static::log($domNode);

        $model = new Quality();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a rating node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Rating Returns the rating.
     */
    public static function deserializeRating(DOMNode $domNode): Rating {

        static::log($domNode);

        $model = new Rating();
        $model->setSystem(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::SYSTEM));
        SerializerHelper::xmlDeserializeModel($domNode, Value::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Icon::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a review node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Review Returns the review.
     */
    public static function deserializeReview(DOMNode $domNode): Review {

        static::log($domNode);

        $model = new Review();
        $model->setType(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::TYPE));
        $model->setSource(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::SOURCE));
        $model->setReviewer(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::REVIEWER));
        $model->setLang(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::LANG));

        return $model;
    }

    /**
     * Deserialize a sub-title node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return SecondaryTitle Returns the sub-title.
     */
    public static function deserializeSecondaryTitle(DOMNode $domNode): SecondaryTitle {

        static::log($domNode);

        $model = new SecondaryTitle();
        $model->setLang(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::LANG));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a star rating node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return StarRating Returns the star rating.
     */
    public static function deserializeStarRating(DOMNode $domNode): StarRating {

        static::log($domNode);

        $model = new StarRating();
        SerializerHelper::xmlDeserializeModel($domNode, Value::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Icon::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a stereo node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Stereo Returns the stereo.
     */
    public static function deserializeStereo(DOMNode $domNode): Stereo {

        static::log($domNode);

        $model = new Stereo();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a subtitles node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Subtitles Returns the subtitles.
     */
    public static function deserializeSubtitles(DOMNode $domNode): Subtitles {

        static::log($domNode);

        $model = new Subtitles();
        $model->setType(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::TYPE));
        SerializerHelper::xmlDeserializeModel($domNode, Language::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a title node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Title Returns the title.
     */
    public static function deserializeTitle(DOMNode $domNode): Title {

        static::log($domNode);

        $model = new Title();
        $model->setLang(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::LANG));
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a TV node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Tv Returns the TV.
     */
    public static function deserializeTv(DOMNode $domNode): Tv {

        static::log($domNode);

        $model = new Tv();
        $model->setDate(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, SerializerKeys::DATE));
        $model->setGeneratorInfoName(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, "generator-info-name"));
        $model->setGeneratorInfoUrl(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, "generator-info-url"));
        $model->setSourceDataUrl(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, "source-data-url"));
        $model->setSourceInfoName(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, "source-info-name"));
        $model->setSourceInfoUrl(BaseXmlDeserializer::getDomNodeAttributeValue($domNode, "source-info-url"));
        SerializerHelper::xmlDeserializeArray($domNode, Channel::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeArray($domNode, Programme::DOM_NODE_NAME, $model);

        $model->indexProgrammesByChannel();

        return $model;
    }

    /**
     * Deserialize a URL node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Url Returns the URL.
     */
    public static function deserializeUrl(DOMNode $domNode): Url {

        static::log($domNode);

        $model = new Url();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a value node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Value Returns the value.
     */
    public static function deserializeValue(DOMNode $domNode): Value {

        static::log($domNode);

        $model = new Value();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }

    /**
     * Deserialize a video node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Video Returns the video.
     */
    public static function deserializeVideo(DOMNode $domNode): Video {

        static::log($domNode);

        $model = new Video();

        SerializerHelper::xmlDeserializeModel($domNode, Present::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, Colour::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, Aspect::DOM_NODE_NAME, $model);
        SerializerHelper::xmlDeserializeModel($domNode, Quality::DOM_NODE_NAME, $model);

        return $model;
    }

    /**
     * Deserialize a writer node.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Writer Returns the writer.
     */
    public static function deserializeWriter(DOMNode $domNode): Writer {

        static::log($domNode);

        $model = new Writer();
        $model->setContent(trim($domNode->textContent));

        return $model;
    }
}
