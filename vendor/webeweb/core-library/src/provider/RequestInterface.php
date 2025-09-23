<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Provider;

/**
 * Request interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Provider
 */
interface RequestInterface {

    /**
     * Get the resource path.
     *
     * @return string Returns the resource path.
     */
    public function getResourcePath(): string;
}
