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
 * Deleted text renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Renderer\Strings
 */
trait DeletedTextRendererTrait {

    /**
     * Render a deleted text.
     *
     * @param string|null $text The text.
     * @return string|null Returns the deleted text.
     */
    protected function renderDeletedText(?string $text): ?string {

        if (null === $text || "" === $text) {
            return null;
        }

        return StringHelper::domNode("del", $text);
    }
}
