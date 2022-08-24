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
 * Image renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Renderer\Assets
 */
trait ImageRendererTrait {

    /**
     * Render an image.
     *
     * @param string|null $source The source.
     * @param string|null $alt The alt.
     * @param string|null $width The width.
     * @param string|null $height The height.
     * @return string|null Returns the rendered image.
     */
    protected function renderImage(?string $source, ?string $alt = null, ?string $width = null, ?string $height = null): ?string {

        if (null === $source) {
            return null;
        }

        return StringHelper::domNode("img", null, [
            "src"    => $source,
            "alt"    => $alt,
            "width"  => $width,
            "height" => $height,
        ], true);
    }
}
