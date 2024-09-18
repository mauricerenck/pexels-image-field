<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Exception;

use InvalidArgumentException;
use Throwable;

/**
 * Timestamp argument exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Exception
 */
class TimestampArgumentException extends InvalidArgumentException {

    /**
     * Constructor.
     *
     * @param mixed $argument The argument.
     * @param Throwable|null $previous The previous exception.
     */
    public function __construct($argument, Throwable $previous = null) {
        parent::__construct(sprintf('The argument "%s" is not a timestamp', print_r($argument, true)), 500, $previous);
    }
}
