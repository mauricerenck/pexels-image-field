<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Renderer;

use WBW\Library\Widget\Renderer\DateTimes\DateRendererTrait;
use WBW\Library\Widget\Renderer\DateTimes\DateTimeRendererTrait;
use WBW\Library\Widget\Renderer\DateTimes\TimeRendererTrait;

/**
 * Date/times renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Renderer
 */
trait DateTimesRendererTrait {

    use DateRendererTrait;
    use DateTimeRendererTrait;
    use TimeRendererTrait;
}
