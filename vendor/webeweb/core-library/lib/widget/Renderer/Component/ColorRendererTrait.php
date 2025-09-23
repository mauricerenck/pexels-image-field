<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Renderer\Component;

use WBW\Library\Common\Helper\StringHelper;

/**
 * Color renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Renderer\Component
 */
trait ColorRendererTrait {

    /**
     * Preview a color.
     *
     * @param string|null $color The color.
     * @param int|null $width The width.
     * @param int|null $height The height.
     * @return string|null Returns the preview color.
     */
    protected function previewColor(?string $color, ?int $width = null, ?int $height = null): ?string {

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
