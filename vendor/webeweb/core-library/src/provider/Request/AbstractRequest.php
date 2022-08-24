<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Request;

/**
 * Abstract request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Provider\Request
 * @abstract
 */
abstract class AbstractRequest {

    /**
     * Get the resource path.
     *
     * @return string Returns the resource path.
     */
    abstract public function getResourcePath(): string;
}
