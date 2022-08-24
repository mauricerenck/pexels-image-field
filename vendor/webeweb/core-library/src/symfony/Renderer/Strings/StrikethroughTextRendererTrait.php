<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Renderer\Strings;

use WBW\Library\Types\Helper\StringHelper;

/**
 * Striktehrough text renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Renderer\Strings
 */
trait StrikethroughTextRendererTrait {

    /**
     * Render a strikethrough text.
     *
     * @param string|null $text The text.
     * @return string|null Returns the strikethrough text.
     */
    protected function renderStrikethroughText(?string $text): ?string {

        if (null === $text || "" === $text) {
            return null;
        }

        return StringHelper::domNode("s", $text);
    }
}
