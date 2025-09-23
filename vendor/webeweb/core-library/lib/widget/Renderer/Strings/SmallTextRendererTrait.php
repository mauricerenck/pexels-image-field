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

namespace WBW\Library\Widget\Renderer\Strings;

use WBW\Library\Common\Helper\StringHelper;

/**
 * Small text renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Renderer\Strings
 */
trait SmallTextRendererTrait {

    /**
     * Render a small text.
     *
     * @param string|null $text The text.
     * @return string|null Returns the small text.
     */
    protected function renderSmallText(?string $text): ?string {

        if (null === $text || "" === $text) {
            return null;
        }

        return StringHelper::domNode("small", $text);
    }
}
