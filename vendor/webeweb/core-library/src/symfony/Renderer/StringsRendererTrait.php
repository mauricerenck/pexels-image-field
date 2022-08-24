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

use WBW\Library\Symfony\Renderer\Strings\BoldTextRendererTrait;
use WBW\Library\Symfony\Renderer\Strings\DeletedTextRendererTrait;
use WBW\Library\Symfony\Renderer\Strings\InsertedTextRendererTrait;
use WBW\Library\Symfony\Renderer\Strings\ItalicTextRendererTrait;
use WBW\Library\Symfony\Renderer\Strings\MarkedTextRendererTrait;
use WBW\Library\Symfony\Renderer\Strings\SmallTextRendererTrait;
use WBW\Library\Symfony\Renderer\Strings\StrikethroughTextRendererTrait;
use WBW\Library\Symfony\Renderer\Strings\UnderlinedTextRendererTrait;

/**
 * Strings renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Renderer
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
