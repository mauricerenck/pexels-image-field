<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Component\Image;

use WBW\Library\Widget\Component\AbstractImage;

/**
 * Default image.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Image
 */
class DefaultImage extends AbstractImage {

    /**
     * Constructor.
     *
     * @param string $pathname The pathname.
     */
    public function __construct(string $pathname) {
        parent::__construct($pathname);

        $this->load();
    }
}
