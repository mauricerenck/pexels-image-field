<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Renderer\Assets;

use WBW\Library\Types\Helper\StringHelper;

/**
 * Color renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Renderer\Assets
 */
trait ColorRendererTrait {

    /**
     * Render a color.
     *
     * @param string|null $color The color.
     * @param int|null $width The width.
     * @param int|null $height The height.
     * @return string|null Returns the rendered color.
     */
    protected function renderColor(?string $color, ?int $width = null, ?int $height = null): ?string {

        if (null === $color) {
            return null;
        }

        return StringHelper::domNode("div", null, [
            "style" => [
                sprintf("background-color: %s;", $color),
                0 < $width ? sprintf("width: %dpx;", $width) : null,
                0 < $height ? sprintf("height: %dpx;", $height) : null,
            ],
        ]);
    }
}
