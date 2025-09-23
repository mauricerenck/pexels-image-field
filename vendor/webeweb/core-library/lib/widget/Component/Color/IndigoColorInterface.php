<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Component\Color;

use WBW\Library\Widget\Component\ColorInterface;

/**
 * Indigo color interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Color
 */
interface IndigoColorInterface extends ColorInterface {

    /**
     * Indigo color name.
     *
     * @var string
     */
    public const INDIGO_COLOR_NAME = "indigo";
}
