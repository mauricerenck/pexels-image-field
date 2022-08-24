<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Renderer\DateTimes;

use DateTime;
use WBW\Library\Types\Helper\DateTimeHelper;

/**
 * Date/time renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Renderer\DateTimes
 */
trait DateTimeRendererTrait {

    /**
     * Render a date/time.
     *
     * @param DateTime|null $date The date/time.
     * @param string $format The format.
     * @return string|null Returns the rendered date/time.
     */
    protected function renderDateTime(?DateTime $date, string $format = DateTimeHelper::DATETIME_FORMAT): ?string {
        return DateTimeHelper::toString($date, $format);
    }
}
