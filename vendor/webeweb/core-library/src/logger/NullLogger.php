<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Logger;

use Psr\Log\AbstractLogger;

/**
 * Null logger.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Logger
 */
class NullLogger extends AbstractLogger {

    /**
     *{@inheritDoc}
     */
    public function log($level, $message, array $context = []): void {
        // NOTHING TO DO
    }
}
