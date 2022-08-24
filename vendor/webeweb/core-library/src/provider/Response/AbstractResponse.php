<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Response;

use WBW\Library\Traits\Strings\StringRawResponseTrait;

/**
 * Abstract response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Provider\Response
 * @abstract
 */
abstract class AbstractResponse {

    use StringRawResponseTrait;
}
