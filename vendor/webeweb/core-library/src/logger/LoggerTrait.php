<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Logger;

use Psr\Log\LoggerInterface;

/**
 * Logger trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Logger
 */
trait LoggerTrait {

    /**
     * Logger.
     *
     * @var LoggerInterface|null
     */
    private $logger;

    /**
     * Get the logger.
     *
     * @return LoggerInterface|null Returns the logger.
     */
    public function getLogger(): ?LoggerInterface {
        return $this->logger;
    }

    /**
     * Set the logger.
     *
     * @param LoggerInterface|null $logger The logger.
     * @return self Returns this instance.
     */
    protected function setLogger(?LoggerInterface $logger): self {
        $this->logger = $logger;
        return $this;
    }
}
