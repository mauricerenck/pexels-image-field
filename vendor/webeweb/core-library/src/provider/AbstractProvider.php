<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider;

use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use WBW\Library\Logger\LoggerTrait;
use WBW\Library\Provider\Api\SubstituableRequestInterface;
use WBW\Library\Provider\Request\AbstractRequest;
use WBW\Library\Traits\Booleans\BooleanDebugTrait;

/**
 * Abstract provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Provider
 * @abstract
 */
abstract class AbstractProvider {

    use BooleanDebugTrait;
    use LoggerTrait;

    /**
     * Constructor.
     *
     * @param LoggerInterface|null $logger The logger.
     */
    protected function __construct(LoggerInterface $logger = null) {
        $this->setDebug(false);
        $this->setLogger($logger);
    }

    /**
     * Build the resource path.
     *
     * @param AbstractRequest $request The request.
     * @return string Returns the resource path.
     */
    protected function buildResourcePath(AbstractRequest $request): string {

        if (false === ($request instanceof SubstituableRequestInterface)) {
            return $request->getResourcePath();
        }

        $values = $request->getSubstituables();
        foreach ($values as $k => $v) {
            if (null === $v) {
                throw new InvalidArgumentException(sprintf('The substituable value "%s" is missing', $k));
            }
        }

        return str_replace(array_keys($values), array_values($values), $request->getResourcePath());
    }

    /**
     * Log an info.
     *
     * @param string $message The message.
     * @param array $context The context.
     * @return AbstractProvider Returns this provider.
     */
    protected function logInfo(string $message, array $context): AbstractProvider {

        if (null !== $this->getLogger()) {
            $this->getLogger()->info($message, $context);
        }

        return $this;
    }
}
