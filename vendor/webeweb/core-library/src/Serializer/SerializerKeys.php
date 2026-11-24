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

namespace WBW\Library\Common\Serializer;

/**
 * Serializer keys.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Serializer
 */
interface SerializerKeys {

    /**
     * Serializer key "A".
     *
     * @var string
     */
    public const A = "a";

    /**
     * Serializer key "A.1".
     *
     * @var string
     */
    public const A1 = "a1";

    /**
     * Serializer key "access token".
     *
     * @var string
     */
    public const ACCESS_TOKEN = "accessToken";

    /**
     * Serializer key "account".
     *
     * @var string
     */
    public const ACCOUNT = "account";

    /**
     * Serializer key "accounting code".
     *
     * @var string
     */
    public const ACCOUNTING_CODE = "accountingCode";

    /**
     * Serializer key "account number".
     *
     * @var string
     */
    public const ACCOUNT_NUMBER = "accountNumber";

    /**
     * Serializer key "active".
     *
     * @var string
     */
    public const ACTIVE = "active";

    /**
     * Serializer key "addressee".
     *
     * @var string
     */
    public const ADDRESSEE = "addressee";

    /**
     * Serializer key "addressee description".
     *
     * @var string
     */
    public const ADDRESSEE_DESCRIPTION = "addresseeDescription";

    /**
     * Serializer key "api token".
     *
     * @var string
     */
    public const API_TOKEN = "apiToken";

    /**
     * Serializer key "available".
     *
     * @var string
     */
    public const AVAILABLE = "available";

    /**
     * Serializer key "avatar".
     *
     * @var string
     */
    public const AVATAR = "avatar";

    /**
     * Serializer key "average".
     *
     * @var string
     */
    public const AVERAGE = "average";

    /**
     * Serializer key "B".
     *
     * @var string
     */
    public const B = "b";

    /**
     * Serializer key "bank code".
     *
     * @var string
     */
    public const BANK_CODE = "bankCode";

    /**
     * Serializer key "bank domiciliation".
     *
     * @var string
     */
    public const BANK_DOMICILIATION = "bankDomiciliation";

    /**
     * Serializer key "bank name".
     *
     * @var string
     */
    public const BANK_NAME = "bankName";

    /**
     * Serializer key "begins at".
     *
     * @var string
     */
    public const BEGINS_AT = "beginsAt";

    /**
     * Serializer key "begins on".
     *
     * @var string
     */
    public const BEGINS_ON = "beginsOn";

    /**
     * Serializer key "BIC".
     *
     * @var string
     */
    public const BIC = "bic";

    /**
     * Serializer key "billable".
     *
     * @var string
     */
    public const BILLABLE = "billable";

    /**
     * Serializer key "billing address addressee".
     *
     * @var string
     */
    public const BILLING_ADDRESS_ADDRESSEE = "billingAddressAddressee";

    /**
     * Serializer key "billing address country".
     *
     * @var string
     */
    public const BILLING_ADDRESS_COUNTRY = "billingAddressCountry";

    /**
     * Serializer key "billing address house number".
     *
     * @var string
     */
    public const BILLING_ADDRESS_HOUSE_NUMBER = "billingAddressHouseNumber";

    /**
     * Serializer key "billing address location".
     *
     * @var string
     */
    public const BILLING_ADDRESS_LOCATION = "billingAddressLocation";

    /**
     * Serializer key "billing address postal code".
     *
     * @var string
     */
    public const BILLING_ADDRESS_POSTAL_CODE = "billingAddressPostalCode";

    /**
     * Serializer key "billing address street name".
     *
     * @var string
     */
    public const BILLING_ADDRESS_STREET_NAME = "billingAddressStreetName";

    /**
     * Serializer key "birth date".
     *
     * @var string
     */
    public const BIRTH_DATE = "birthDate";

    /**
     * Serializer key "branch code".
     *
     * @var string
     */
    public const BRANCH_CODE = "branchCode";

    /**
     * Serializer key "C.1".
     *
     * @var string
     */
    public const C1 = "c1";

    /**
     * Serializer key "C.3".
     *
     * @var string
     */
    public const C3 = "c3";

    /**
     * Serializer key "C.4.1".
     *
     * @var string
     */
    public const C41 = "c41";

    /**
     * Serializer key "C.4a".
     *
     * @var string
     */
    public const C4A = "c4a";

    /**
     * Serializer key "category".
     *
     * @var string
     */
    public const CATEGORY = "category";

    /**
     * Serializer key "civility".
     *
     * @var string
     */
    public const CIVILITY = "civility";

    /**
     * Serializer key "code".
     *
     * @var string
     */
    public const CODE = "code";

    /**
     * Serializer key "codename".
     *
     * @var string
     */
    public const CODENAME = "codename";

    /**
     * Serializer key "color".
     *
     * @var string
     */
    public const COLOR = "color";

    /**
     * Serializer key "column".
     *
     * @var string
     */
    public const COLUMN = "column";

    /**
     * Serializer key "comment".
     *
     * @var string
     */
    public const COMMENT = "comment";

    /**
     * Serializer key "content".
     *
     * @var string
     */
    public const CONTENT = "content";

    /**
     * Serializer key "count".
     *
     * @var string
     */
    public const COUNT = "count";

    /**
     * Serializer key "country".
     *
     * @var string
     */
    public const COUNTRY = "country";

    /**
     * Serializer key "created".
     *
     * @var string
     */
    public const CREATED = "created";

    /**
     * Serializer key "created at".
     *
     * @var string
     */
    public const CREATED_AT = "createdAt";

    /**
     * Serializer key "customer".
     *
     * @var string
     */
    public const CUSTOMER = "customer";

    /**
     * Serializer key "D.1".
     *
     * @var string
     */
    public const D1 = "d1";

    /**
     * Serializer key "D.2".
     *
     * @var string
     */
    public const D2 = "d2";

    /**
     * Serializer key "D.2.1".
     *
     * @var string
     */
    public const D21 = "d21";

    /**
     * Serializer key "D.3".
     *
     * @var string
     */
    public const D3 = "d3";

    /**
     * Serializer key "data".
     *
     * @var string
     */
    public const DATA = "data";

    /**
     * Serializer key "data GET".
     *
     * @var string
     */
    public const DATA_GET = "dataGet";

    /**
     * Serializer key "data POST".
     *
     * @var string
     */
    public const DATA_POST = "dataPost";

    /**
     * Serializer key "date".
     *
     * @var string
     */
    public const DATE = "date";

    /**
     * Serializer key "debug".
     *
     * @var string
     */
    public const DEBUG = "debug";

    /**
     * Serializer key "deleted".
     *
     * @var string
     */
    public const DELETED = "deleted";

    /**
     * Serializer key "delivery address addressee".
     *
     * @var string
     */
    public const DELIVERY_ADDRESS_ADDRESSEE = "deliveryAddressAddressee";

    /**
     * Serializer key "delivery address country".
     *
     * @var string
     */
    public const DELIVERY_ADDRESS_COUNTRY = "deliveryAddressCountry";

    /**
     * Serializer key "delivery address house number".
     *
     * @var string
     */
    public const DELIVERY_ADDRESS_HOUSE_NUMBER = "deliveryAddressHouseNumber";

    /**
     * Serializer key "delivery address location".
     *
     * @var string
     */
    public const DELIVERY_ADDRESS_LOCATION = "deliveryAddressLocation";

    /**
     * Serializer key "delivery address postal code".
     *
     * @var string
     */
    public const DELIVERY_ADDRESS_POSTAL_CODE = "deliveryAddressPostalCode";

    /**
     * Serializer key "delivery address street name".
     *
     * @var string
     */
    public const DELIVERY_ADDRESS_STREET_NAME = "deliveryAddressStreetName";

    /**
     * Serializer key "description".
     *
     * @var string
     */
    public const DESCRIPTION = "description";

    /**
     * Serializer key "details".
     *
     * @var string
     */
    public const DETAILS = "details";

    /**
     * Serializer key "directory".
     *
     * @var string
     */
    public const DIRECTORY = "directory";

    /**
     * Serializer key "disabled".
     *
     * @var string
     */
    public const DISABLED = "disabled";

    /**
     * Serializer key "discount amount".
     *
     * @var string
     */
    public const DISCOUNT_AMOUNT = "discountAmount";

    /**
     * Serializer key "discount rate".
     *
     * @var string
     */
    public const DISCOUNT_RATE = "discountRate";

    /**
     * Serializer key "discount total".
     *
     * @var string
     */
    public const DISCOUNT_TOTAL = "discountTotal";

    /**
     * Serializer key "dns".
     *
     * @var string
     */
    public const DNS = "dns";

    /**
     * Serializer key "domain".
     *
     * @var string
     */
    public const DOMAIN = "domain";

    /**
     * Serializer key "duplex".
     *
     * @var string
     */
    public const DUPLEX = "duplex";

    /**
     * Serializer key "duration".
     *
     * @var string
     */
    public const DURATION = "duration";

    /**
     * Serializer key "E".
     *
     * @var string
     */
    public const E = "e";

    /**
     * Serializer key "email".
     *
     * @var string
     */
    public const EMAIL = "email";

    /**
     * Serializer key "enable".
     *
     * @var string
     */
    public const ENABLE = "enable";

    /**
     * Serializer key "enabled".
     *
     * @var string
     */
    public const ENABLED = "enabled";

    /**
     * Serializer key "ended at".
     *
     * @var string
     */
    public const ENDED_AT = "endedAt";

    /**
     * Serializer key "ended on".
     *
     * @var string
     */
    public const ENDED_ON = "endedOn";

    /**
     * Serializer key "entity".
     *
     * @var string
     */
    public const ENTITY = "entity";

    /**
     * Serializer key "entity data".
     *
     * @var string
     */
    public const ENTITY_DATA = "entityData";

    /**
     * Serializer key "entity id".
     *
     * @var string
     */
    public const ENTITY_ID = "entityId";

    /**
     * Serializer key "environment".
     *
     * @var string
     */
    public const ENVIRONMENT = "environment";

    /**
     * Serializer key "error".
     *
     * @var string
     */
    public const ERROR = "error";

    /**
     * Serializer key "errors".
     *
     * @var string
     */
    public const ERRORS = "errors";

    /**
     * Serializer key "excluding VAT price".
     *
     * @var string
     */
    public const EXCLUDING_VAT_PRICE = "excludingVatPrice";

    /**
     * Serializer key "excluding VAT total".
     *
     * @var string
     */
    public const EXCLUDING_VAT_TOTAL = "excludingVatTotal";

    /**
     * Serializer key "expiration date".
     *
     * @var string
     */
    public const EXPIRATION_DATE = "expirationDate";

    /**
     * Serializer key "extension".
     *
     * @var string
     */
    public const EXTENSION = "extension";

    /**
     * Serializer key "F.1".
     *
     * @var string
     */
    public const F1 = "f1";

    /**
     * Serializer key "F.2".
     *
     * @var string
     */
    public const F2 = "f2";

    /**
     * Serializer key "F.3".
     *
     * @var string
     */
    public const F3 = "f3";

    /**
     * Serializer key "filename".
     *
     * @var string
     */
    public const FILENAME = "filename";

    /**
     * Serializer key "fileSystem".
     *
     * @var string
     */
    public const FILE_SYSTEM = "fileSystem";

    /**
     * Serializer key "finishes at".
     *
     * @var string
     */
    public const FINISHES_AT = "finishesAt";

    /**
     * Serializer key "finishes on".
     *
     * @var string
     */
    public const FINISHES_ON = "finishesOn";

    /**
     * Serializer key "first name".
     *
     * @var string
     */
    public const FIRST_NAME = "firstName";

    /**
     * Serializer key "format".
     *
     * @var string
     */
    public const FORMAT = "format";

    /**
     * Serializer key "from".
     *
     * @var string
     */
    public const FROM = "from";

    /**
     * Serializer key "G".
     *
     * @var string
     */
    public const G = "g";

    /**
     * Serializer key "G.1".
     *
     * @var string
     */
    public const G1 = "g1";

    /**
     * Serializer key "gateway".
     *
     * @var string
     */
    public const GATEWAY = "gateway";

    /**
     * Serializer key "GID".
     *
     * @var string
     */
    public const GID = "gid";

    /**
     * Serializer key "H".
     *
     * @var string
     */
    public const H = "h";

    /**
     * Serializer key "hash".
     *
     * @var string
     */
    public const HASH = "hash";

    /**
     * Serializer key "hash MD5".
     *
     * @var string
     */
    public const HASH_MD5 = "hashMD5";

    /**
     * Serializer key "hash SHA1".
     *
     * @var string
     */
    public const HASH_SHA1 = "hashSHA1";

    /**
     * Serializer key "hash SHA256".
     *
     * @var string
     */
    public const HASH_SHA256 = "hashSHA256";

    /**
     * Serializer key "height".
     *
     * @var string
     */
    public const HEIGHT = "height";

    /**
     * Serializer key "hi".
     *
     * @var string
     */
    public const HI = "hi";

    /**
     * Serializer key "hostname".
     *
     * @var string
     */
    public const HOSTNAME = "hostname";

    /**
     * Serializer key "house number".
     *
     * @var string
     */
    public const HOUSE_NUMBER = "houseNumber";

    /**
     * Serializer key "I".
     *
     * @var string
     */
    public const I = "i";

    /**
     * Serializer key "I.1".
     *
     * @var string
     */
    public const I1 = "i1";

    /**
     * Serializer key "IBAN".
     *
     * @var string
     */
    public const IBAN = "iban";

    /**
     * Serializer key "icon".
     *
     * @var string
     */
    public const ICON = "icon";

    /**
     * Serializer key "id".
     *
     * @var string
     */
    public const ID = "id";

    /**
     * Serializer key "identifier".
     *
     * @var string
     */
    public const IDENTIFIER = "identifier";

    /**
     * Serializer key "image".
     *
     * @var string
     */
    public const IMAGE = "image";

    /**
     * Serializer key "including VAT price".
     *
     * @var string
     */
    public const INCLUDING_VAT_PRICE = "includingVatPrice";

    /**
     * Serializer key "including VAT total".
     *
     * @var string
     */
    public const INCLUDING_VAT_TOTAL = "includingVatTotal";

    /**
     * Serializer key "income".
     *
     * @var string
     */
    public const INCOME = "income";

    /**
     * Serializer key "ipv4".
     *
     * @var string
     */
    public const IPV4 = "ipv4";

    /**
     * Serializer key "ipv6".
     *
     * @var string
     */
    public const IPV6 = "ipv6";

    /**
     * Serializer key "ipAddress".
     *
     * @var string
     */
    public const IP_ADDRESS = "ipAddress";

    /**
     * Serializer key "J".
     *
     * @var string
     */
    public const J = "j";

    /**
     * Serializer key "J.1".
     *
     * @var string
     */
    public const J1 = "j1";

    /**
     * Serializer key "J.2".
     *
     * @var string
     */
    public const J2 = "j2";

    /**
     * Serializer key "J.3".
     *
     * @var string
     */
    public const J3 = "j3";

    /**
     * Serializer key "K".
     *
     * @var string
     */
    public const K = "k";

    /**
     * Serializer key "key".
     *
     * @var string
     */
    public const KEY = "key";

    /**
     * Serializer key "label".
     *
     * @var string
     */
    public const LABEL = "label";

    /**
     * Serializer key "lang".
     *
     * @var string
     */
    public const LANG = "lang";

    /**
     * Serializer key "last name".
     *
     * @var string
     */
    public const LAST_NAME = "lastName";

    /**
     * Serializer key "last update".
     *
     * @var string
     */
    public const LAST_UPDATE = "lastUpdate";

    /**
     * Serializer key "lat".
     *
     * @var string
     */
    public const LAT = "lat";

    /**
     * Serializer key "latitude".
     *
     * @var string
     */
    public const LATITUDE = "latitude";

    /**
     * Serializer key "limit".
     *
     * @var string
     */
    public const LIMIT = "limit";

    /**
     * Serializer key "link".
     *
     * @var string
     */
    public const LINK = "link";

    /**
     * Serializer key "locate".
     *
     * @var string
     */
    public const LOCATE = "locate";

    /**
     * Serializer key "location".
     *
     * @var string
     */
    public const LOCATION = "location";

    /**
     * Serializer key "logo".
     *
     * @var string
     */
    public const LOGO = "logo";

    /**
     * Serializer key "lon".
     *
     * @var string
     */
    public const LON = "lon";

    /**
     * Serializer key "longitude".
     *
     * @var string
     */
    public const LONGITUDE = "longitude";

    /**
     * Serializer key "mac".
     *
     * @var string
     */
    public const MAC = "mac";

    /**
     * Serializer key "macAddress".
     *
     * @var string
     */
    public const MAC_ADDRESS = "macAddress";

    /**
     * Serializer key "marital status".
     *
     * @var string
     */
    public const MARITAL_STATUS = "maritalStatus";

    /**
     * Serializer key "matcher".
     *
     * @var string
     */
    public const MATCHER = "matcher";

    /**
     * Serializer key "max".
     *
     * @var string
     */
    public const MAX = "max";

    /**
     * Serializer key "maximum".
     *
     * @var string
     */
    public const MAXIMUM = "maximum";

    /**
     * Serializer key "max duration".
     *
     * @var string
     */
    public const MAX_DURATION = "maxDuration";

    /**
     * Serializer key "max width".
     *
     * @var string
     */
    public const MAX_WIDTH = "maxWidth";

    /**
     * Serializer key "mention".
     *
     * @var string
     */
    public const MENTION = "mention";

    /**
     * Serializer key "message".
     *
     * @var string
     */
    public const MESSAGE = "message";

    /**
     * Serializer key "method".
     *
     * @var string
     */
    public const METHOD = "method";

    /**
     * Serializer key "mime type".
     *
     * @var string
     */
    public const MIME_TYPE = "mimeType";

    /**
     * Serializer key "min".
     *
     * @var string
     */
    public const MIN = "min";

    /**
     * Serializer key "minimum".
     *
     * @var string
     */
    public const MINIMUM = "minimum";

    /**
     * Serializer key "min duration".
     *
     * @var string
     */
    public const MIN_DURATION = "minDuration";

    /**
     * Serializer key "min height".
     *
     * @var string
     */
    public const MIN_HEIGHT = "minHeight";

    /**
     * Serializer key "min width".
     *
     * @var string
     */
    public const MIN_WIDTH = "minWidth";

    /**
     * Serializer key "mobile".
     *
     * @var string
     */
    public const MOBILE = "mobile";

    /**
     * Serializer key "motif".
     *
     * @var string
     */
    public const MOTIF = "motif";

    /**
     * Serializer key "mounted on".
     *
     * @var string
     */
    public const MOUNTED_ON = "mountedOn";

    /**
     * Serializer key "NAF code".
     *
     * @var string
     */
    public const NAF_CODE = "nafCode";

    /**
     * Serializer key "name".
     *
     * @var string
     */
    public const NAME = "name";

    /**
     * Serializer key "ni".
     *
     * @var string
     */
    public const NI = "ni";

    /**
     * Serializer key "notify".
     *
     * @var string
     */
    public const NOTIFY = "notify";

    /**
     * Serializer key "number".
     *
     * @var string
     */
    public const NUMBER = "number";

    /**
     * Serializer key "object".
     *
     * @var string
     */
    public const OBJECT = "object";

    /**
     * Serializer key "orientation".
     *
     * @var string
     */
    public const ORIENTATION = "orientation";

    /**
     * Serializer key "origin URL".
     *
     * @var string
     */
    public const ORIGIN_URL = "originUrl";

    /**
     * Serializer key "owner".
     *
     * @var string
     */
    public const OWNER = "owner";

    /**
     * Serializer key "P.1".
     *
     * @var string
     */
    public const P1 = "p1";

    /**
     * Serializer key "P.2".
     *
     * @var string
     */
    public const P2 = "p2";

    /**
     * Serializer key "P.3".
     *
     * @var string
     */
    public const P3 = "p3";

    /**
     * Serializer key "P.6".
     *
     * @var string
     */
    public const P6 = "p6";

    /**
     * Serializer key "page".
     *
     * @var string
     */
    public const PAGE = "page";

    /**
     * Serializer key "parent".
     *
     * @var string
     */
    public const PARENT = "parent";

    /**
     * Serializer key "password".
     *
     * @var string
     */
    public const PASSWORD = "password";

    /**
     * Serializer key "pathname".
     *
     * @var string
     */
    public const PATHNAME = "pathname";

    /**
     * Serializer key "payment date".
     *
     * @var string
     */
    public const PAYMENT_DATE = "paymentDate";

    /**
     * Serializer key "per page".
     *
     * @var string
     */
    public const PER_PAGE = "perPage";

    /**
     * Serializer key "phone".
     *
     * @var string
     */
    public const PHONE = "phone";

    /**
     * Serializer key "picture".
     *
     * @var string
     */
    public const PICTURE = "picture";

    /**
     * Serializer key "port".
     *
     * @var string
     */
    public const PORT = "port";

    /**
     * Serializer key "position".
     *
     * @var string
     */
    public const POSITION = "position";

    /**
     * Serializer key "postal code".
     *
     * @var string
     */
    public const POSTAL_CODE = "postalCode";

    /**
     * Serializer key "purchases accounting account".
     *
     * @var string
     */
    public const PURCHASES_ACCOUNTING_ACCOUNT = "purchasesAccountingAccount";

    /**
     * Serializer key "q".
     *
     * @var string
     */
    public const Q = "q";

    /**
     * Serializer key "quantity".
     *
     * @var string
     */
    public const QUANTITY = "quantity";

    /**
     * Serializer key "query".
     *
     * @var string
     */
    public const QUERY = "query";

    /**
     * Serializer key "rate".
     *
     * @var string
     */
    public const RATE = "rate";

    /**
     * Serializer key "raw data".
     *
     * @var string
     */
    public const RAW_DATA = "rawData";

    /**
     * Serializer key "raw response".
     *
     * @var string
     */
    public const RAW_RESPONSE = "rawResponse";

    /**
     * Serializer key "ready".
     *
     * @var string
     */
    public const READY = "ready";

    /**
     * Serializer key "redirect URL".
     *
     * @var string
     */
    public const REDIRECT_URL = "redirectUrl";

    /**
     * Serializer key "reference".
     *
     * @var string
     */
    public const REFERENCE = "reference";

    /**
     * Serializer key "release".
     *
     * @var string
     */
    public const RELEASE = "release";

    /**
     * Serializer key "remaining".
     *
     * @var string
     */
    public const REMAINING = "remaining";

    /**
     * Serializer key "request".
     *
     * @var string
     */
    public const REQUEST = "request";

    /**
     * Serializer key "request data GET".
     *
     * @var string
     */
    public const REQUEST_DATA_GET = "requestDataGet";

    /**
     * Serializer key "request data POST".
     *
     * @var string
     */
    public const REQUEST_DATA_POST = "requestDataPost";

    /**
     * Serializer key "request method".
     *
     * @var string
     */
    public const REQUEST_METHOD = "requestMethod";

    /**
     * Serializer key "request route".
     *
     * @var string
     */
    public const REQUEST_ROUTE = "requestRoute";

    /**
     * Serializer key "request URL".
     *
     * @var string
     */
    public const REQUEST_URL = "requestUrl";

    /**
     * Serializer key "reset".
     *
     * @var string
     */
    public const RESET = "reset";

    /**
     * Serializer key "RIB key".
     *
     * @var string
     */
    public const RIB_KEY = "ribKey";

    /**
     * Serializer key "role".
     *
     * @var string
     */
    public const ROLE = "role";

    /**
     * Serializer key "roles".
     *
     * @var string
     */
    public const ROLES = "roles";

    /**
     * Serializer key "route".
     *
     * @var string
     */
    public const ROUTE = "route";

    /**
     * Serializer key "S.1".
     *
     * @var string
     */
    public const S1 = "s1";

    /**
     * Serializer key "S.2".
     *
     * @var string
     */
    public const S2 = "s2";

    /**
     * Serializer key "sales accounting account".
     *
     * @var string
     */
    public const SALES_ACCOUNTING_ACCOUNT = "salesAccountingAccount";

    /**
     * Serializer key "salt".
     *
     * @var string
     */
    public const SALT = "salt";

    /**
     * Serializer key "schema".
     *
     * @var string
     */
    public const SCHEMA = "schema";

    /**
     * Serializer key "score".
     *
     * @var string
     */
    public const SCORE = "score";

    /**
     * Serializer key "sending address addressee".
     *
     * @var string
     */
    public const SENDING_ADDRESS_ADDRESSEE = "sendingAddressAddressee";

    /**
     * Serializer key "sending address country".
     *
     * @var string
     */
    public const SENDING_ADDRESS_COUNTRY = "sendingAddressCountry";

    /**
     * Serializer key "sending address house number".
     *
     * @var string
     */
    public const SENDING_ADDRESS_HOUSE_NUMBER = "sendingAddressHouseNumber";

    /**
     * Serializer key "sending address location".
     *
     * @var string
     */
    public const SENDING_ADDRESS_LOCATION = "sendingAddressLocation";

    /**
     * Serializer key "sending address postal code".
     *
     * @var string
     */
    public const SENDING_ADDRESS_POSTAL_CODE = "sendingAddressPostalCode";

    /**
     * Serializer key "sending address street name".
     *
     * @var string
     */
    public const SENDING_ADDRESS_STREET_NAME = "sendingAddressStreetName";

    /**
     * Serializer key "si".
     *
     * @var string
     */
    public const SI = "si";

    /**
     * Serializer key "SIRET number".
     *
     * @var string
     */
    public const SIRET_NUMBER = "siretNumber";

    /**
     * Serializer key "size".
     *
     * @var string
     */
    public const SIZE = "size";

    /**
     * Serializer key "source".
     *
     * @var string
     */
    public const SOURCE = "source";

    /**
     * Serializer key "speed".
     *
     * @var string
     */
    public const SPEED = "speed";

    /**
     * Serializer key "st".
     *
     * @var string
     */
    public const ST = "st";

    /**
     * Serializer key "started at".
     *
     * @var string
     */
    public const STARTED_AT = "startedAt";

    /**
     * Serializer key "started on".
     *
     * @var string
     */
    public const STARTED_ON = "startedOn";

    /**
     * Serializer key "state".
     *
     * @var string
     */
    public const STATE = "state";

    /**
     * Serializer key "status".
     *
     * @var string
     */
    public const STATUS = "status";

    /**
     * Serializer key "street name".
     *
     * @var string
     */
    public const STREET_NAME = "streetName";

    /**
     * Serializer key "style".
     *
     * @var string
     */
    public const STYLE = "style";

    /**
     * Serializer key "subject".
     *
     * @var string
     */
    public const SUBJECT = "subject";

    /**
     * Serializer key "success".
     *
     * @var string
     */
    public const SUCCESS = "success";

    /**
     * Serializer key "sy".
     *
     * @var string
     */
    public const SY = "sy";

    /**
     * Serializer key "table".
     *
     * @var string
     */
    public const TABLE = "table";

    /**
     * Serializer key "target".
     *
     * @var string
     */
    public const TARGET = "target";

    /**
     * Serializer key "text".
     *
     * @var string
     */
    public const TEXT = "text";

    /**
     * Serializer key "title".
     *
     * @var string
     */
    public const TITLE = "title";

    /**
     * Serializer key "to".
     *
     * @var string
     */
    public const TO = "to";

    /**
     * Serializer key "token".
     *
     * @var string
     */
    public const TOKEN = "token";

    /**
     * Serializer key "tooltip".
     *
     * @var string
     */
    public const TOOLTIP = "tooltip";

    /**
     * Serializer key "total".
     *
     * @var string
     */
    public const TOTAL = "total";

    /**
     * Serializer key "total amount".
     *
     * @var string
     */
    public const TOTAL_AMOUNT = "totalAmount";

    /**
     * Serializer key "type".
     *
     * @var string
     */
    public const TYPE = "type";

    /**
     * Serializer key "U.1".
     *
     * @var string
     */
    public const U1 = "u1";

    /**
     * Serializer key "U.2".
     *
     * @var string
     */
    public const U2 = "u2";

    /**
     * Serializer key "UID".
     *
     * @var string
     */
    public const UID = "uid";

    /**
     * Serializer key "unit price".
     *
     * @var string
     */
    public const UNIT_PRICE = "unitPrice";

    /**
     * Serializer key "unit value".
     *
     * @var string
     */
    public const UNIT_VALUE = "unitValue";

    /**
     * Serializer key "updated at".
     *
     * @var string
     */
    public const UPDATED_AT = "updatedAt";

    /**
     * Serializer key "URI".
     *
     * @var string
     */
    public const URI = "uri";

    /**
     * Serializer key "URL".
     *
     * @var string
     */
    public const URL = "url";

    /**
     * Serializer key "us".
     *
     * @var string
     */
    public const US = "us";

    /**
     * Serializer key "used".
     *
     * @var string
     */
    public const USED = "used";

    /**
     * Serializer key "username".
     *
     * @var string
     */
    public const USERNAME = "username";

    /**
     * Serializer key "user agent".
     *
     * @var string
     */
    public const USER_AGENT = "userAgent";

    /**
     * Serializer key "usePercent".
     *
     * @var string
     */
    public const USE_PERCENT = "usePercent";

    /**
     * Serializer key "V.7".
     *
     * @var string
     */
    public const V7 = "v7";

    /**
     * Serializer key "V.9".
     *
     * @var string
     */
    public const V9 = "v9";

    /**
     * Serializer key "value".
     *
     * @var string
     */
    public const VALUE = "value";

    /**
     * Serializer key "VAT amount".
     *
     * @var string
     */
    public const VAT_AMOUNT = "vatAmount";

    /**
     * Serializer key "VAT number".
     *
     * @var string
     */
    public const VAT_NUMBER = "vatNumber";

    /**
     * Serializer key "VAT rate".
     *
     * @var string
     */
    public const VAT_RATE = "vatRate";

    /**
     * Serializer key "VAT total".
     *
     * @var string
     */
    public const VAT_TOTAL = "vatTotal";

    /**
     * Serializer key "verbose".
     *
     * @var string
     */
    public const VERBOSE = "verbose";

    /**
     * Serializer key "version".
     *
     * @var string
     */
    public const VERSION = "version";

    /**
     * Serializer key "visible".
     *
     * @var string
     */
    public const VISIBLE = "visible";

    /**
     * Serializer key "wa".
     *
     * @var string
     */
    public const WA = "wa";

    /**
     * Serializer key "width".
     *
     * @var string
     */
    public const WIDTH = "width";

    /**
     * Serializer key "x".
     *
     * @var string
     */
    public const X = "x";

    /**
     * Serializer key "X.1".
     *
     * @var string
     */
    public const X1 = "x1";

    /**
     * Serializer key "XML HTTP".
     *
     * @var string
     */
    public const XML_HTTP = "xmlHttp";

    /**
     * Serializer key "y".
     *
     * @var string
     */
    public const Y = "y";

    /**
     * Serializer key "Y.1".
     *
     * @var string
     */
    public const Y1 = "y1";

    /**
     * Serializer key "Y.2".
     *
     * @var string
     */
    public const Y2 = "y2";

    /**
     * Serializer key "Y.3".
     *
     * @var string
     */
    public const Y3 = "y3";

    /**
     * Serializer key "Y.4".
     *
     * @var string
     */
    public const Y4 = "y4";

    /**
     * Serializer key "Y.5".
     *
     * @var string
     */
    public const Y5 = "y5";

    /**
     * Serializer key "Y.6".
     *
     * @var string
     */
    public const Y6 = "y6";

    /**
     * Serializer key "year".
     *
     * @var string
     */
    public const YEAR = "year";

    /**
     * Serializer key "Z.1".
     *
     * @var string
     */
    public const Z1 = "z1";

    /**
     * Serializer key "Z.2".
     *
     * @var string
     */
    public const Z2 = "z2";

    /**
     * Serializer key "Z.3".
     *
     * @var string
     */
    public const Z3 = "z3";

    /**
     * Serializer key "Z.4".
     *
     * @var string
     */
    public const Z4 = "z4";
}
