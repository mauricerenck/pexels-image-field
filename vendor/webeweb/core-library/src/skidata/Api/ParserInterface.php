<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Api;

/**
 * Parser interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Api
 */
interface ParserInterface {

    /**
     * Date/time format.
     *
     * @var string
     */
    public const DATETIME_FORMAT = "Ymd His";

    /**
     * Date format.
     *
     * @var string
     */
    public const DATE_FORMAT = "Ymd";
}
