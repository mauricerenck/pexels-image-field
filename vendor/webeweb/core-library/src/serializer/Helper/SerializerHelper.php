<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Helper;

use Psr\Log\LoggerInterface;

/**
 * Serializer helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Helper
 * @abstract
 */
abstract class SerializerHelper {

    /**
     * Logger.
     *
     * @var LoggerInterface|null
     */
    protected static $logger;

    /**
     * Get the logger.
     *
     * @return LoggerInterface|null Returns the logger.
     */
    public static function getLogger(): ?LoggerInterface {
        return static::$logger;
    }

    /**
     * Set the logger.
     *
     * @param LoggerInterface|null $logger The logger.
     * @return void
     */
    public static function setLogger(?LoggerInterface $logger): void {
        static::$logger = $logger;
    }
}
