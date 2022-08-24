<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Renderer\DateTimes;

use DateTime;
use WBW\Library\Types\Helper\DateTimeHelper;

/**
 * Time renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Renderer\DateTimes
 */
trait TimeRendererTrait {

    /**
     * Render a time.
     *
     * @param DateTime|null $date The time.
     * @param string $format The format.
     * @return string|null Returns the rendered time.
     */
    protected function renderTime(?DateTime $date, string $format = "H:i:s"): ?string {
        return DateTimeHelper::toString($date, $format);
    }
}
