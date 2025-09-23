<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Exception;

use Exception;
use Throwable;

/**
 * Abstract exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Exception
 * @abstract
 */
abstract class AbstractException extends Exception {

    /**
     * Constructor.
     *
     * @param string $message The message.
     * @param int $code The code.
     * @param Throwable|null $previous The previous exception.
     */
    public function __construct(string $message, int $code = 500, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
