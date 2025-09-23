<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Serializer;

/**
 * Serializer keys interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Serializer
 */
interface SerializerKeys {

    /**
     * Serializer key "actors".
     *
     * @var string
     */
    public const ACTORS = "actors";

    /**
     * Serializer key "adapters".
     *
     * @var string
     */
    public const ADAPTERS = "adapters";

    /**
     * Serializer key "aspect".
     *
     * @var string
     */
    public const ASPECT = "aspect";

    /**
     * Serializer key "audio".
     *
     * @var string
     */
    public const AUDIO = "audio";

    /**
     * Serializer key "categories".
     *
     * @var string
     */
    public const CATEGORIES = "categories";

    /**
     * Serializer key "channel".
     *
     * @var string
     */
    public const CHANNEL = "channel";

    /**
     * Serializer key "channels".
     *
     * @var string
     */
    public const CHANNELS = "channels";

    /**
     * Serializer key "clump idx".
     *
     * @var string
     */
    public const CLUMP_IDX = "clumpIdx";

    /**
     * Serializer key "colour".
     *
     * @var string
     */
    public const COLOUR = "colour";

    /**
     * Serializer key "commentators".
     *
     * @var string
     */
    public const COMMENTATORS = "commentators";

    /**
     * Serializer key "composers".
     *
     * @var string
     */
    public const COMPOSERS = "composers";

    /**
     * Serializer key "content".
     *
     * @var string
     */
    public const CONTENT = "content";

    /**
     * Serializer key "countries".
     *
     * @var string
     */
    public const COUNTRIES = "countries";

    /**
     * Serializer key "credits".
     *
     * @var string
     */
    public const CREDITS = "credits";

    /**
     * Serializer key "date".
     *
     * @var string
     */
    public const DATE = "date";

    /**
     * Serializer key "descriptions".
     *
     * @var string
     */
    public const DESCS = "descs";

    /**
     * Serializer key "directors".
     *
     * @var string
     */
    public const DIRECTORS = "directors";

    /**
     * Serializer key "display names".
     *
     * @var string
     */
    public const DISPLAY_NAMES = "displayNames";

    /**
     * Serializer key "editors".
     *
     * @var string
     */
    public const EDITORS = "editors";

    /**
     * Serializer key "episode numbers".
     *
     * @var string
     */
    public const EPISODE_NUMS = "episodeNums";

    /**
     * Serializer key "generator info name".
     *
     * @var string
     */
    public const GENERATOR_INFO_NAME = "generatorInfoName";

    /**
     * Serializer key "generator info URL".
     *
     * @var string
     */
    public const GENERATOR_INFO_URL = "generatorInfoUrl";

    /**
     * Serializer key "guests".
     *
     * @var string
     */
    public const GUESTS = "guests";

    /**
     * Serializer key "height".
     *
     * @var string
     */
    public const HEIGHT = "height";

    /**
     * Serializer key "icons".
     *
     * @var string
     */
    public const ICONS = "icons";

    /**
     * Serializer key "id".
     *
     * @var string
     */
    public const ID = "id";

    /**
     * Serializer key "keywords".
     *
     * @var string
     */
    public const KEYWORDS = "keywords";

    /**
     * Serializer key "lang".
     *
     * @var string
     */
    public const LANG = "lang";

    /**
     * Serializer key "language".
     *
     * @var string
     */
    public const LANGUAGE = "language";

    /**
     * Serializer key "last chance".
     *
     * @var string
     */
    public const LAST_CHANCE = "lastChance";

    /**
     * Serializer key "length".
     *
     * @var string
     */
    public const LENGTH = "length";

    /**
     * Serializer key "new".
     *
     * @var string
     */
    public const NEW = "new";

    /**
     * Serializer key "original language".
     *
     * @var string
     */
    public const ORIG_LANGUAGE = "origLanguage";

    /**
     * Serializer key "PDC start".
     *
     * @var string
     */
    public const PDC_START = "pdcStart";

    /**
     * Serializer key "premiere".
     *
     * @var string
     */
    public const PREMIERE = "premiere";

    /**
     * Serializer key "present".
     *
     * @var string
     */
    public const PRESENT = "present";

    /**
     * Serializer key "presenters".
     *
     * @var string
     */
    public const PRESENTERS = "presenters";

    /**
     * Serializer key "previously shown".
     *
     * @var string
     */
    public const PREVIOUSLY_SHOWN = "previouslyShown";

    /**
     * Serializer key "producers".
     *
     * @var string
     */
    public const PRODUCERS = "producers";

    /**
     * Serializer key "programmes".
     *
     * @var string
     */
    public const PROGRAMMES = "programmes";

    /**
     * Serializer key "quality".
     *
     * @var string
     */
    public const QUALITY = "quality";

    /**
     * Serializer key "ratings".
     *
     * @var string
     */
    public const RATINGS = "ratings";

    /**
     * Serializer key "reviewer".
     *
     * @var string
     */
    public const REVIEWER = "reviewer";

    /**
     * Serializer key "reviews".
     *
     * @var string
     */
    public const REVIEWS = "reviews";

    /**
     * Serializer key "role".
     *
     * @var string
     */
    public const ROLE = "role";

    /**
     * Serializer key "secondary titles".
     *
     * @var string
     */
    public const SECONDARY_TITLES = "secondaryTitles";

    /**
     * Serializer key "Show view".
     *
     * @var string
     */
    public const SHOW_VIEW = "showView";

    /**
     * Serializer key "source".
     *
     * @var string
     */
    public const SOURCE = "source";

    /**
     * Serializer key "source data URL".
     *
     * @var string
     */
    public const SOURCE_DATA_URL = "sourceDataUrl";

    /**
     * Serializer key "source info name".
     *
     * @var string
     */
    public const SOURCE_INFO_NAME = "sourceInfoName";

    /**
     * Serializer key "source info URL".
     *
     * @var string
     */
    public const SOURCE_INFO_URL = "sourceInfoUrl";

    /**
     * Serializer key "src".
     *
     * @var string
     */
    public const SRC = "src";

    /**
     * Serializer key "start".
     *
     * @var string
     */
    public const START = "start";

    /**
     * Serializer key "star ratings".
     *
     * @var string
     */
    public const STAR_RATINGS = "starRatings";

    /**
     * Serializer key "stereo".
     *
     * @var string
     */
    public const STEREO = "stereo";

    /**
     * Serializer key "stop".
     *
     * @var string
     */
    public const STOP = "stop";

    /**
     * Serializer key "subtitles".
     *
     * @var string
     */
    public const SUBTITLES = "subtitles";

    /**
     * Serializer key "system".
     *
     * @var string
     */
    public const SYSTEM = "system";

    /**
     * Serializer key "titles".
     *
     * @var string
     */
    public const TITLES = "titles";

    /**
     * Serializer key "type".
     *
     * @var string
     */
    public const TYPE = "type";

    /**
     * Serializer key "units".
     *
     * @var string
     */
    public const UNITS = "units";

    /**
     * Serializer key "URLs".
     *
     * @var string
     */
    public const URLS = "urls";

    /**
     * Serializer key "value".
     *
     * @var string
     */
    public const VALUE = "value";

    /**
     * Serializer key "video".
     *
     * @var string
     */
    public const VIDEO = "video";

    /**
     * Serializer key "video plus".
     *
     * @var string
     */
    public const VIDEO_PLUS = "videoPlus";

    /**
     * Serializer key "VPS start".
     *
     * @var string
     */
    public const VPS_START = "vpsStart";

    /**
     * Serializer key "width".
     *
     * @var string
     */
    public const WIDTH = "width";

    /**
     * Serializer key "writers".
     *
     * @var string
     */
    public const WRITERS = "writers";
}
