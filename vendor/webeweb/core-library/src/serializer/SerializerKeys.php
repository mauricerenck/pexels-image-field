<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer;

/**
 * Serializer keys.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer
 */
interface SerializerKeys {

    /**
     * Serializer key "access token".
     *
     * @var string
     */
    const ACCESS_TOKEN = "accessToken";

    /**
     * Serializer key "account".
     *
     * @var string
     */
    const ACCOUNT = "account";

    /**
     * Serializer key "accounting code".
     *
     * @var string
     */
    const ACCOUNTING_CODE = "accountingCode";

    /**
     * Serializer key "active".
     *
     * @var string
     */
    const ACTIVE = "active";

    /**
     * Serializer key "addressee".
     *
     * @var string
     */
    const ADDRESSEE = "addressee";

    /**
     * Serializer key "addressee description".
     *
     * @var string
     */
    const ADDRESSEE_DESCRIPTION = "addresseeDescription";

    /**
     * Serializer key "api token".
     *
     * @var string
     */
    const API_TOKEN = "apiToken";

    /**
     * Serializer key "avatar".
     *
     * @var string
     */
    const AVATAR = "avatar";

    /**
     * Serializer key "average".
     *
     * @var string
     */
    const AVERAGE = "average";

    /**
     * Serializer key "begins at".
     *
     * @var string
     */
    const BEGINS_AT = "beginsAt";

    /**
     * Serializer key "begins on".
     *
     * @var string
     */
    const BEGINS_ON = "beginsOn";

    /**
     * Serializer key "birth date".
     *
     * @var string
     */
    const BIRTH_DATE = "birthDate";

    /**
     * Serializer key "category".
     *
     * @var string
     */
    const CATEGORY = "category";

    /**
     * Serializer key "civility".
     *
     * @var string
     */
    const CIVILITY = "civility";

    /**
     * Serializer key "code".
     *
     * @var string
     */
    const CODE = "code";

    /**
     * Serializer key "color".
     *
     * @var string
     */
    const COLOR = "color";

    /**
     * Serializer key "column".
     *
     * @var string
     */
    const COLUMN = "column";

    /**
     * Serializer key "comment".
     *
     * @var string
     */
    const COMMENT = "comment";

    /**
     * Serializer key "content".
     *
     * @var string
     */
    const CONTENT = "content";

    /**
     * Serializer key "count".
     *
     * @var string
     */
    const COUNT = "count";

    /**
     * Serializer key "country".
     *
     * @var string
     */
    const COUNTRY = "country";

    /**
     * Serializer key "created".
     *
     * @var string
     */
    const CREATED = "created";

    /**
     * Serializer key "created at".
     *
     * @var string
     */
    const CREATED_AT = "createdAt";

    /**
     * Serializer key "customer".
     *
     * @var string
     */
    const CUSTOMER = "customer";

    /**
     * Serializer key "data".
     *
     * @var string
     */
    const DATA = "data";

    /**
     * Serializer key "date".
     *
     * @var string
     */
    const DATE = "date";

    /**
     * Serializer key "debug".
     *
     * @var string
     */
    const DEBUG = "debug";

    /**
     * Serializer key "deleted".
     *
     * @var string
     */
    const DELETED = "deleted";

    /**
     * Serializer key "description".
     *
     * @var string
     */
    const DESCRIPTION = "description";

    /**
     * Serializer key "directory".
     *
     * @var string
     */
    const DIRECTORY = "directory";

    /**
     * Serializer key "disabled".
     *
     * @var string
     */
    const DISABLED = "disabled";

    /**
     * Serializer key "discount amount".
     *
     * @var string
     */
    const DISCOUNT_AMOUNT = "discountAmount";

    /**
     * Serializer key "discount rate".
     *
     * @var string
     */
    const DISCOUNT_RATE = "discountRate";

    /**
     * Serializer key "discount total".
     *
     * @var string
     */
    const DISCOUNT_TOTAL = "discountTotal";

    /**
     * Serializer key "domain".
     *
     * @var string
     */
    const DOMAIN = "domain";

    /**
     * Serializer key "duration".
     *
     * @var string
     */
    const DURATION = "duration";

    /**
     * Serializer key "email".
     *
     * @var string
     */
    const EMAIL = "email";

    /**
     * Serializer key "enable".
     *
     * @var string
     */
    const ENABLE = "enable";

    /**
     * Serializer key "enabled".
     *
     * @var string
     */
    const ENABLED = "enabled";

    /**
     * Serializer key "ended at".
     *
     * @var string
     */
    const ENDED_AT = "endedAt";

    /**
     * Serializer key "ended on".
     *
     * @var string
     */
    const ENDED_ON = "endedOn";

    /**
     * Serializer key "environment".
     *
     * @var string
     */
    const ENVIRONMENT = "environment";

    /**
     * Serializer key "error".
     *
     * @var string
     */
    const ERROR = "error";

    /**
     * Serializer key "excluding VAT price".
     *
     * @var string
     */
    const EXCLUDING_VAT_PRICE = "excludingVatPrice";

    /**
     * Serializer key "excluding VAT total".
     *
     * @var string
     */
    const EXCLUDING_VAT_TOTAL = "excludingVatTotal";

    /**
     * Serializer key "extension".
     *
     * @var string
     */
    const EXTENSION = "extension";

    /**
     * Serializer key "filename".
     *
     * @var string
     */
    const FILENAME = "filename";

    /**
     * Serializer key "finishes at".
     *
     * @var string
     */
    const FINISHES_AT = "finishesAt";

    /**
     * Serializer key "finishes on".
     *
     * @var string
     */
    const FINISHES_ON = "finishesOn";

    /**
     * Serializer key "first name".
     *
     * @var string
     */
    const FIRST_NAME = "firstName";

    /**
     * Serializer key "format".
     *
     * @var string
     */
    const FORMAT = "format";

    /**
     * Serializer key "from".
     *
     * @var string
     */
    const FROM = "from";

    /**
     * Serializer key "GID".
     *
     * @var string
     */
    const GID = "gid";

    /**
     * Serializer key "hash".
     *
     * @var string
     */
    const HASH = "hash";

    /**
     * Serializer key "hash MD5".
     *
     * @var string
     */
    const HASH_MD5 = "hashMD5";

    /**
     * Serializer key "hash SHA1".
     *
     * @var string
     */
    const HASH_SHA1 = "hashSHA1";

    /**
     * Serializer key "hash SHA256".
     *
     * @var string
     */
    const HASH_SHA256 = "hashSHA256";

    /**
     * Serializer key "height".
     *
     * @var string
     */
    const HEIGHT = "height";

    /**
     * Serializer key "hostname".
     *
     * @var string
     */
    const HOSTNAME = "hostname";

    /**
     * Serializer key "house number".
     *
     * @var string
     */
    const HOUSE_NUMBER = "houseNumber";

    /**
     * Serializer key "icon".
     *
     * @var string
     */
    const ICON = "icon";

    /**
     * Serializer key "id".
     *
     * @var string
     */
    const ID = "id";

    /**
     * Serializer key "enable".
     *
     * @var string
     */
    const IDENTIFIER = "identifier";

    /**
     * Serializer key "including VAT price".
     *
     * @var string
     */
    const INCLUDING_VAT_PRICE = "includingVatPrice";

    /**
     * Serializer key "including VAT total".
     *
     * @var string
     */
    const INCLUDING_VAT_TOTAL = "includingVatTotal";

    /**
     * Serializer key "income".
     *
     * @var string
     */
    const INCOME = "income";

    /**
     * Serializer key "ipAddress".
     *
     * @var string
     */
    const IP_ADDRESS = "ipAddress";

    /**
     * Serializer key "key".
     *
     * @var string
     */
    const KEY = "key";

    /**
     * Serializer key "label".
     *
     * @var string
     */
    const LABEL = "label";

    /**
     * Serializer key "lang".
     *
     * @var string
     */
    const LANG = "lang";

    /**
     * Serializer key "last name".
     *
     * @var string
     */
    const LAST_NAME = "lastName";

    /**
     * Serializer key "last update".
     *
     * @var string
     */
    const LAST_UPDATE = "lastUpdate";

    /**
     * Serializer key "lat".
     *
     * @var string
     */
    const LAT = "lat";

    /**
     * Serializer key "latitude".
     *
     * @var string
     */
    const LATITUDE = "latitude";

    /**
     * Serializer key "limit".
     *
     * @var string
     */
    const LIMIT = "limit";

    /**
     * Serializer key "link".
     *
     * @var string
     */
    const LINK = "link";

    /**
     * Serializer key "locate".
     *
     * @var string
     */
    const LOCATE = "locate";

    /**
     * Serializer key "location".
     *
     * @var string
     */
    const LOCATION = "location";

    /**
     * Serializer key "logo".
     *
     * @var string
     */
    const LOGO = "logo";

    /**
     * Serializer key "lon".
     *
     * @var string
     */
    const LON = "lon";

    /**
     * Serializer key "longitude".
     *
     * @var string
     */
    const LONGITUDE = "longitude";

    /**
     * Serializer key "macAddress".
     *
     * @var string
     */
    const MAC_ADDRESS = "macAddress";

    /**
     * Serializer key "marital status".
     *
     * @var string
     */
    const MARITAL_STATUS = "maritalStatus";

    /**
     * Serializer key "max".
     *
     * @var string
     */
    const MAX = "max";

    /**
     * Serializer key "maximum".
     *
     * @var string
     */
    const MAXIMUM = "maximum";

    /**
     * Serializer key "max duration".
     *
     * @var string
     */
    const MAX_DURATION = "maxDuration";

    /**
     * Serializer key "max width".
     *
     * @var string
     */
    const MAX_WIDTH = "maxWidth";

    /**
     * Serializer key "mention".
     *
     * @var string
     */
    const MENTION = "mention";

    /**
     * Serializer key "message".
     *
     * @var string
     */
    const MESSAGE = "message";

    /**
     * Serializer key "mime type".
     *
     * @var string
     */
    const MIME_TYPE = "mimeType";

    /**
     * Serializer key "min".
     *
     * @var string
     */
    const MIN = "min";

    /**
     * Serializer key "minimum".
     *
     * @var string
     */
    const MINIMUM = "minimum";

    /**
     * Serializer key "min duration".
     *
     * @var string
     */
    const MIN_DURATION = "minDuration";

    /**
     * Serializer key "min height".
     *
     * @var string
     */
    const MIN_HEIGHT = "minHeight";

    /**
     * Serializer key "min width".
     *
     * @var string
     */
    const MIN_WIDTH = "minWidth";

    /**
     * Serializer key "mobile".
     *
     * @var string
     */
    const MOBILE = "mobile";

    /**
     * Serializer key "motif".
     *
     * @var string
     */
    const MOTIF = "motif";

    /**
     * Serializer key "NAF code".
     *
     * @var string
     */
    const NAF_CODE = "nafCode";

    /**
     * Serializer key "name".
     *
     * @var string
     */
    const NAME = "name";

    /**
     * Serializer key "number".
     *
     * @var string
     */
    const NUMBER = "number";

    /**
     * Serializer key "object".
     *
     * @var string
     */
    const OBJECT = "object";

    /**
     * Serializer key "orientation".
     *
     * @var string
     */
    const ORIENTATION = "orientation";

    /**
     * Serializer key "origin URL".
     *
     * @var string
     */
    const ORIGIN_URL = "originUrl";

    /**
     * Serializer key "page".
     *
     * @var string
     */
    const PAGE = "page";

    /**
     * Serializer key "parent".
     *
     * @var string
     */
    const PARENT = "parent";

    /**
     * Serializer key "password".
     *
     * @var string
     */
    const PASSWORD = "password";

    /**
     * Serializer key "pathname".
     *
     * @var string
     */
    const PATHNAME = "pathname";

    /**
     * Serializer key "payment date".
     *
     * @var string
     */
    const PAYMENT_DATE = "paymentDate";

    /**
     * Serializer key "per page".
     *
     * @var string
     */
    const PER_PAGE = "perPage";

    /**
     * Serializer key "phone".
     *
     * @var string
     */
    const PHONE = "phone";

    /**
     * Serializer key "picture".
     *
     * @var string
     */
    const PICTURE = "picture";

    /**
     * Serializer key "port".
     *
     * @var string
     */
    const PORT = "port";

    /**
     * Serializer key "position".
     *
     * @var string
     */
    const POSITION = "position";

    /**
     * Serializer key "postal code".
     *
     * @var string
     */
    const POSTAL_CODE = "postalCode";

    /**
     * Serializer key "q".
     *
     * @var string
     */
    const Q = "q";

    /**
     * Serializer key "quantity".
     *
     * @var string
     */
    const QUANTITY = "quantity";

    /**
     * Serializer key "query".
     *
     * @var string
     */
    const QUERY = "query";

    /**
     * Serializer key "rate".
     *
     * @var string
     */
    const RATE = "rate";

    /**
     * Serializer key "raw data".
     *
     * @var string
     */
    const RAW_DATA = "rawData";

    /**
     * Serializer key "raw response".
     *
     * @var string
     */
    const RAW_RESPONSE = "rawResponse";

    /**
     * Serializer key "ready".
     *
     * @var string
     */
    const READY = "ready";

    /**
     * Serializer key "redirect URL".
     *
     * @var string
     */
    const REDIRECT_URL = "redirectUrl";

    /**
     * Serializer key "reference".
     *
     * @var string
     */
    const REFERENCE = "reference";

    /**
     * Serializer key "remaining".
     *
     * @var string
     */
    const REMAINING = "remaining";

    /**
     * Serializer key "reset".
     *
     * @var string
     */
    const RESET = "reset";

    /**
     * Serializer key "role".
     *
     * @var string
     */
    const ROLE = "role";

    /**
     * Serializer key "roles".
     *
     * @var string
     */
    const ROLES = "roles";

    /**
     * Serializer key "salt".
     *
     * @var string
     */
    const SALT = "salt";

    /**
     * Serializer key "schema".
     *
     * @var string
     */
    const SCHEMA = "schema";

    /**
     * Serializer key "score".
     *
     * @var string
     */
    const SCORE = "score";

    /**
     * Serializer key "SIRET number".
     *
     * @var string
     */
    const SIRET_NUMBER = "siretNumber";

    /**
     * Serializer key "size".
     *
     * @var string
     */
    const SIZE = "size";

    /**
     * Serializer key "source".
     *
     * @var string
     */
    const SOURCE = "source";

    /**
     * Serializer key "started at".
     *
     * @var string
     */
    const STARTED_AT = "startedAt";

    /**
     * Serializer key "started on".
     *
     * @var string
     */
    const STARTED_ON = "startedOn";

    /**
     * Serializer key "state".
     *
     * @var string
     */
    const STATE = "state";

    /**
     * Serializer key "street name".
     *
     * @var string
     */
    const STREET_NAME = "streetName";

    /**
     * Serializer key "style".
     *
     * @var string
     */
    const STYLE = "style";

    /**
     * Serializer key "subject".
     *
     * @var string
     */
    const SUBJECT = "subject";

    /**
     * Serializer key "table".
     *
     * @var string
     */
    const TABLE = "table";

    /**
     * Serializer key "target".
     *
     * @var string
     */
    const TARGET = "target";

    /**
     * Serializer key "text".
     *
     * @var string
     */
    const TEXT = "text";

    /**
     * Serializer key "title".
     *
     * @var string
     */
    const TITLE = "title";

    /**
     * Serializer key "to".
     *
     * @var string
     */
    const TO = "to";

    /**
     * Serializer key "token".
     *
     * @var string
     */
    const TOKEN = "token";

    /**
     * Serializer key "tooltip".
     *
     * @var string
     */
    const TOOLTIP = "tooltip";

    /**
     * Serializer key "total".
     *
     * @var string
     */
    const TOTAL = "total";

    /**
     * Serializer key "total amount".
     *
     * @var string
     */
    const TOTAL_AMOUNT = "totalAmount";

    /**
     * Serializer key "type".
     *
     * @var string
     */
    const TYPE = "type";

    /**
     * Serializer key "UID".
     *
     * @var string
     */
    const UID = "uid";

    /**
     * Serializer key "unit price".
     *
     * @var string
     */
    const UNIT_PRICE = "unitPrice";

    /**
     * Serializer key "unit value".
     *
     * @var string
     */
    const UNIT_VALUE = "unitValue";

    /**
     * Serializer key "updated at".
     *
     * @var string
     */
    const UPDATED_AT = "updatedAt";

    /**
     * Serializer key "URI".
     *
     * @var string
     */
    const URI = "uri";

    /**
     * Serializer key "URL".
     *
     * @var string
     */
    const URL = "url";

    /**
     * Serializer key "username".
     *
     * @var string
     */
    const USERNAME = "username";

    /**
     * Serializer key "value".
     *
     * @var string
     */
    const VALUE = "value";

    /**
     * Serializer key "VAT amount".
     *
     * @var string
     */
    const VAT_AMOUNT = "vatAmount";

    /**
     * Serializer key "VAT number".
     *
     * @var string
     */
    const VAT_NUMBER = "vatNumber";

    /**
     * Serializer key "VAT rate".
     *
     * @var string
     */
    const VAT_RATE = "vatRate";

    /**
     * Serializer key "VAT total".
     *
     * @var string
     */
    const VAT_TOTAL = "vatTotal";

    /**
     * Serializer key "verbose".
     *
     * @var string
     */
    const VERBOSE = "verbose";

    /**
     * Serializer key "visible".
     *
     * @var string
     */
    const VISIBLE = "visible";

    /**
     * Serializer key "width".
     *
     * @var string
     */
    const WIDTH = "width";

    /**
     * Serializer key "x".
     *
     * @var string
     */
    const X = "x";

    /**
     * Serializer key "y".
     *
     * @var string
     */
    const Y = "y";
}
