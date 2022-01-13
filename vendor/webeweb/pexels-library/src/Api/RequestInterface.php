<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Api;

/**
 * Request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pexels\API
 */
interface RequestInterface {

    /**
     * Per page "default".
     *
     * @var int
     */
    const PER_PAGE_DEFAULT = 15;

    /**
     * Per page "max".
     *
     * @var int
     */
    const PER_PAGE_MAX = 80;
}
