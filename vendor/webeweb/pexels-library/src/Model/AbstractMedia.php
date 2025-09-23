<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pexels\Model;

use WBW\Library\Common\Traits\Integers\IntegerHeightTrait;
use WBW\Library\Common\Traits\Integers\IntegerIdTrait;
use WBW\Library\Common\Traits\Integers\IntegerWidthTrait;
use WBW\Library\Common\Traits\Strings\StringUrlTrait;

/**
 * Abstract media.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Model
 * @abstract
 */
abstract class AbstractMedia {

    use IntegerHeightTrait;
    use IntegerIdTrait {
        setId as public;
    }
    use IntegerWidthTrait;
    use StringUrlTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}
