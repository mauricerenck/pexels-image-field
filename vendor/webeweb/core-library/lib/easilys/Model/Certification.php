<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Model;

use WBW\Library\Common\Traits\Integers\IntegerIdTrait;
use WBW\Library\Common\Traits\Strings\StringCodeTrait;
use WBW\Library\Common\Traits\Strings\StringImageTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;

/**
 * Certification.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class Certification {

    use IntegerIdTrait {
        setId as public;
    }
    use StringCodeTrait;
    use StringImageTrait;
    use StringLabelTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}
