<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Exception;

use WBW\Library\Core\Exception\AbstractException as BaseException;

/**
 * Abstract exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Exception
 * @abstract
 */
abstract class AbstractException extends BaseException {

    /**
     * Constructor.
     *
     * @param string $message The message.
     */
    public function __construct(string $message) {
        parent::__construct($message);
    }
}
