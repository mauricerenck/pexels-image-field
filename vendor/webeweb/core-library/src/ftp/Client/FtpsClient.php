<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ftp\Client;

use WBW\Library\Ftp\Exception\FtpException;
use WBW\Library\Security\Authenticator;

/**
 * FTPs client.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ftp\Client
 */
class FtpsClient extends FtpClient {

    /**
     * Constructor.
     *
     * @param Authenticator $authenticator The authenticator.
     */
    public function __construct(Authenticator $authenticator) {

        $authenticator->setScheme("ftps");
        if (null === $authenticator->getPort()) {
            $authenticator->setPort(990);
        }

        parent::__construct($authenticator);
    }

    /**
     * Connect.
     *
     * @param int $timeout The timeout.
     * @return FtpClient Returns this FTPs client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function connect(int $timeout = 90): FtpClient {

        $host = $this->getAuthenticator()->getHostname();
        $port = $this->getAuthenticator()->getPort();

        $this->setConnection(@ftp_ssl_connect($host, $port, $timeout));
        if (false === $this->getConnection()) {
            throw $this->newFtpException("ftp_ssl_connect failed: [$host, $port, $timeout]");
        }

        return $this;
    }
}
