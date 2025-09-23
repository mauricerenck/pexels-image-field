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

namespace WBW\Library\Common\Database\Connector;

use InvalidArgumentException;
use PDO;
use WBW\Library\Common\Security\Authenticator;

/**
 * Microsoft Access database connector.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Database\Connector
 */
class MicrosoftAccessDatabaseConnector extends AbstractDatabaseConnector {

    /**
     * Microsoft Access DSN.
     *
     * @var string
     */
    public const DEFAULT_DSN = "odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=%DBQ%; UID=%UID%; PWD=%PWD%";

    /**
     * Constructor.
     *
     * @param Authenticator $authenticator The authenticator.
     * @param string|null $database The database.
     */
    public function __construct(Authenticator $authenticator, ?string $database) {
        parent::__construct($authenticator);

        $this->setDatabase($database);
    }

    /**
     * {@inheritDoc}
     */
    protected function connect(): PDO {

        if (false === file_exists($this->getDatabase())) {
            throw new InvalidArgumentException(sprintf('The database "%s" was not found', $this->getDatabase()));
        }

        $searches = ["%DBQ%", "%UID%", "%PWD%"];
        $replaces = [$this->getDatabase(), $this->getAuthenticator()->getPasswordAuthentication()->getUsername(), $this->getAuthenticator()->getPasswordAuthentication()->getPassword()];

        $dsn = str_replace($searches, $replaces, self::DEFAULT_DSN);

        return new PDO($dsn);
    }
}
