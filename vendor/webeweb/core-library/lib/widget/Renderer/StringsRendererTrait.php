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

use WBW\Library\Widget\Renderer\Strings\BoldTextRendererTrait;
use WBW\Library\Widget\Renderer\Strings\DeletedTextRendererTrait;
use WBW\Library\Widget\Renderer\Strings\InsertedTextRendererTrait;
use WBW\Library\Widget\Renderer\Strings\ItalicTextRendererTrait;
use WBW\Library\Widget\Renderer\Strings\MarkedTextRendererTrait;
use WBW\Library\Widget\Renderer\Strings\SmallTextRendererTrait;
use WBW\Library\Widget\Renderer\Strings\StrikethroughTextRendererTrait;
use WBW\Library\Widget\Renderer\Strings\UnderlinedTextRendererTrait;

/**
 * Strings renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Renderer
 */
trait StringsRendererTrait {

    use BoldTextRendererTrait;
    use DeletedTextRendererTrait;
    use InsertedTextRendererTrait;
    use ItalicTextRendererTrait;
    use MarkedTextRendererTrait;
    use SmallTextRendererTrait;
    use StrikethroughTextRendererTrait;
    use UnderlinedTextRendererTrait;
}
