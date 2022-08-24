<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Exception;

/**
 * Missing start record format exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Exception
 */
class MissingStartRecordFormatException extends AbstractException {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct("The start record format is missing");
    }
}
