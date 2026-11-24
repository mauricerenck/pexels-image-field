<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Compounds;

use WBW\Library\Common\Traits\DateTimes\DateTimeCreatedAtTrait;
use WBW\Library\Common\Traits\DateTimes\DateTimeUpdatedAtTrait;

/**
 * Compound timestampable trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Compounds
 */
trait CompoundTimestampableTrait {

    use DateTimeCreatedAtTrait;
    use DateTimeUpdatedAtTrait;
}
