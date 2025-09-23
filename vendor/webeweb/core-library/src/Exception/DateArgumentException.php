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

use InvalidArgumentException;
use Throwable;

/**
 * Date argument exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Exception
 */
class DateArgumentException extends InvalidArgumentException {

    /**
     * Constructor.
     *
     * @param mixed $argument The argument.
     * @param Throwable|null $previous The previous exception.
     */
    public function __construct($argument, Throwable $previous = null) {
        parent::__construct(sprintf('The argument "%s" is not a date', print_r($argument, true)), 500, $previous);
    }
}
