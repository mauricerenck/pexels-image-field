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
 * Warning toast.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Toast
 */
class WarningToast extends AbstractToast {

    /**
     * Constructor.
     *
     * @param string $content The content.
     */
    public function __construct(string $content) {
        parent::__construct(self::TOAST_TYPE_WARNING, $content);
    }
}
