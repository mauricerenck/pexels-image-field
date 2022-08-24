<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Exception;

use Exception;
use WBW\Library\Core\Exception\AbstractException as BaseException;

/**
 * Abstract exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Exception
 * @abstract
 */
abstract class AbstractException extends BaseException {

    /**
     * Constructor.
     *
     * @param string $message The message.
     * @param int $code The code.
     * @param Exception|null $previous The previous exception.
     */
    public function __construct(string $message, int $code = 500, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
