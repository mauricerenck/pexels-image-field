<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Planning\Helper;

use WBW\Library\Sorter\FunctorInterface;
use WBW\Library\Types\Helper\DateTimeHelper;

/**
 * Time slot functor.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Planning\Helper
 */
class TimeSlotFunctor implements FunctorInterface {

    /**
     * {@inheritdoc}
     */
    public function compare($a, $b): bool {
        return DateTimeHelper::isLessThan($a->getStartDate(), $b->getStartDate());
    }
}
