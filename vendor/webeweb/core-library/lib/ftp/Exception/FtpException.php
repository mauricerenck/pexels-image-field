<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Ftp\Exception;

use WBW\Library\Common\Exception\AbstractException as BaseException;

/**
 * FTP exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ftp\Exception
 */
class FtpException extends BaseException {

    /**
     * Constructor.
     *
     * @param string $message The message
     */
    public function __construct(string $message) {
        parent::__construct($message);
    }
}
