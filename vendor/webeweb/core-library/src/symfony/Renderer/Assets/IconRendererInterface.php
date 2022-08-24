<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Renderer\Assets;

/**
 * Icon renderer interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Renderer\Assets
 */
interface IconRendererInterface {

    /**
     * Render an icon.
     *
     * @param string|null $name The icon name.
     * @param string|null $style The icon style.
     * @return string Returns a rendered icon.
     */
    public function renderIcon(?string $name, ?string $style): string;
}
