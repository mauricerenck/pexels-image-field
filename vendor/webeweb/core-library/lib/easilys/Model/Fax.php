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

use WBW\Library\Common\Traits\Strings\StringLabelTrait;
use WBW\Library\Common\Traits\Strings\StringNumberTrait;

/**
 * Fax.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class Fax {

    use StringLabelTrait;
    use StringNumberTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}
