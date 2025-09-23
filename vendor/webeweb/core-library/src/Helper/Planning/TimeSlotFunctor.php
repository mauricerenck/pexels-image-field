<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Helper\Planning;

use WBW\Library\Common\Helper\DateTimeHelper;
use WBW\Library\Common\Sorter\FunctorInterface;

/**
 * Time slot functor.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Helper\Planning
 */
class TimeSlotFunctor implements FunctorInterface {

    /**
     * {@inheritDoc}
     */
    public function compare($a, $b): bool {
        return DateTimeHelper::isLessThan($a->getStartDate(), $b->getStartDate());
    }
}
