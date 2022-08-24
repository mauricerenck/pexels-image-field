<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Api;

/**
 * Request interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\API
 */
interface RequestInterface {

    /**
     * Color "black".
     *
     * @var string
     */
    const COLOR_BLACK = "black";

    /**
     * Color "blue".
     *
     * @var string
     */
    const COLOR_BLUE = "blue";

    /**
     * Color "brown".
     *
     * @var string
     */
    const COLOR_BROWN = "brown";

    /**
     * Color "gray".
     *
     * @var string
     */
    const COLOR_GRAY = "gray";

    /**
     * Color "green".
     *
     * @var string
     */
    const COLOR_GREEN = "green";

    /**
     * Color "orange".
     *
     * @var string
     */
    const COLOR_ORANGE = "orange";

    /**
     * Color "pink".
     *
     * @var string
     */
    const COLOR_PINK = "pink";

    /**
     * Color "red".
     *
     * @var string
     */
    const COLOR_RED = "red";

    /**
     * Color "turquoise".
     *
     * @var string
     */
    const COLOR_TURQUOISE = "turquoise";

    /**
     * Color "violet".
     *
     * @var string
     */
    const COLOR_VIOLET = "violet";

    /**
     * Color "white".
     *
     * @var string
     */
    const COLOR_WHITE = "white";

    /**
     * Color "yellow".
     *
     * @var string
     */
    const COLOR_YELLOW = "yellow";

    /**
     * Locale "ca-ES".
     *
     * @var string
     */
    const LOCALE_CA_ES = "ca-ES";

    /**
     * Locale "cs-CZ".
     *
     * @var string
     */
    const LOCALE_CS_CZ = "cs-CZ";

    /**
     * Locale "da-DK".
     *
     * @var string
     */
    const LOCALE_DA_DK = "da-DK";

    /**
     * Locale "de-DE".
     *
     * @var string
     */
    const LOCALE_DE_DE = "de-DE";

    /**
     * Locale "el-GR".
     *
     * @var string
     */
    const LOCALE_EL_GR = "el-GR";

    /**
     * Locale "en-US".
     *
     * @var string
     */
    const LOCALE_EN_US = "en-US";

    /**
     * Locale "es-ES".
     *
     * @var string
     */
    const LOCALE_ES_ES = "es-ES";

    /**
     * Locale "fi-FI".
     *
     * @var string
     */
    const LOCALE_FI_FI = "fi-FI";

    /**
     * Locale "fr-FR".
     *
     * @var string
     */
    const LOCALE_FR_FR = "fr-FR";

    /**
     * Locale "hu-HU".
     *
     * @var string
     */
    const LOCALE_HU_HU = "hu-HU";

    /**
     * Locale "id-ID".
     *
     * @var string
     */
    const LOCALE_ID_ID = "id-ID";

    /**
     * Locale "it-IT".
     *
     * @var string
     */
    const LOCALE_IT_IT = "it-IT";

    /**
     * Locale "ja-JP".
     *
     * @var string
     */
    const LOCALE_JA_JP = "ja-JP";

    /**
     * Locale "ko-KR".
     *
     * @var string
     */
    const LOCALE_KO_KR = "ko-KR";

    /**
     * Locale "nb-NO".
     *
     * @var string
     */
    const LOCALE_NB_NO = "nb-NO";

    /**
     * Locale "nl-NL".
     *
     * @var string
     */
    const LOCALE_NL_NL = "nl-NL";

    /**
     * Locale "pl-PL".
     *
     * @var string
     */
    const LOCALE_PL_PL = "pl-PL";

    /**
     * Locale "pt-BR".
     *
     * @var string
     */
    const LOCALE_PT_BR = "pt-BR";

    /**
     * Locale "ro-RO".
     *
     * @var string
     */
    const LOCALE_RO_RO = "ro-RO";

    /**
     * Locale "ru-RU".
     *
     * @var string
     */
    const LOCALE_RU_RU = "ru-RU";

    /**
     * Locale "sk-SK".
     *
     * @var string
     */
    const LOCALE_SK_SK = "sk-SK";

    /**
     * Locale "sv-SE".
     *
     * @var string
     */
    const LOCALE_SV_SE = "sv-SE";

    /**
     * Locale "th-TH".
     *
     * @var string
     */
    const LOCALE_TH_TH = "th-TH";

    /**
     * Locale "tr-TR".
     *
     * @var string
     */
    const LOCALE_TR_TR = "tr-TR";

    /**
     * Locale "uk-UA".
     *
     * @var string
     */
    const LOCALE_UK_UA = "uk-UA";

    /**
     * Locale "vi-VN".
     *
     * @var string
     */
    const LOCALE_VI_VN = "vi-VN";

    /**
     * Locale "zh-CN".
     *
     * @var string
     */
    const LOCALE_ZH_CN = "zh-CN";

    /**
     * Locale "zh-TW".
     *
     * @var string
     */
    const LOCALE_ZH_TW = "zh-TW";

    /**
     * Orientation "landscape".
     *
     * @var string
     */
    const ORIENTATION_LANDSCAPE = "landscape";

    /**
     * Orientation "portrait".
     *
     * @var string
     */
    const ORIENTATION_PORTRAIT = "portrait";

    /**
     * Orientation "square".
     *
     * @var string
     */
    const ORIENTATION_SQUARE = "square";

    /**
     * Per page "default".
     *
     * @var int
     */
    const PER_PAGE_DEFAULT = 15;

    /**
     * Per page "max".
     *
     * @var int
     */
    const PER_PAGE_MAX = 80;

    /**
     * Size "large".
     *
     * @var string
     */
    const SIZE_LARGE = "large";

    /**
     * Size "medium".
     *
     * @var string
     */
    const SIZE_MEDIUM = "medium";

    /**
     * Size "small".
     *
     * @var string
     */
    const SIZE_SMALL = "small";
}
