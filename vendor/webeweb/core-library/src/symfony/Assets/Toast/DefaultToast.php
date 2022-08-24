<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets\Toast;

use WBW\Library\Symfony\Assets\AbstractToast;

/**
 * Default toast.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Toast
 */
class DefaultToast extends AbstractToast {

    /**
     * Constructor.
     *
     * @param string $type The type.
     * @param string $content The content.
     */
    public function __construct(string $type, string $content) {
        parent::__construct($type, $content);
    }
}
