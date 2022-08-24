<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Model;

use WBW\Library\Traits\Integers\IntegerIdTrait;
use WBW\Library\Traits\Strings\StringNameTrait;
use WBW\Library\Traits\Strings\StringRawDataTrait;
use WBW\Library\Traits\Strings\StringUrlTrait;

/**
 * User.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Model
 */
class User {

    use IntegerIdTrait {
        setId as public;
    }
    use StringNameTrait;
    use StringRawDataTrait;
    use StringUrlTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}
