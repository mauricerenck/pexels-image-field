<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Provider;

use WBW\Library\Common\Traits\Strings\StringRawResponseTrait;

/**
 * Abstract response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Provider
 * @abstract
 */
abstract class AbstractResponse implements ResponseInterface {

    use StringRawResponseTrait;
}
