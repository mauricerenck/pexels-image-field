<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Logger;

use Psr\Log\AbstractLogger;

/**
 * Null logger.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Logger
 */
class NullLogger extends AbstractLogger {

    /**
     *{@inheritdoc}
     */
    public function log($level, $message, array $context = []): void {
        // NOTHING TO DO
    }
}
