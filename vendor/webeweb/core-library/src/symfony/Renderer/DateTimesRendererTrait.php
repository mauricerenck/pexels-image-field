<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Renderer;

use WBW\Library\Symfony\Renderer\DateTimes\DateRendererTrait;
use WBW\Library\Symfony\Renderer\DateTimes\DateTimeRendererTrait;
use WBW\Library\Symfony\Renderer\DateTimes\TimeRendererTrait;

/**
 * Date/times renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Renderer
 */
trait DateTimesRendererTrait {

    use DateRendererTrait;
    use DateTimeRendererTrait;
    use TimeRendererTrait;
}
