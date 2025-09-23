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

namespace WBW\Library\Common\Provider;

use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use WBW\Library\Common\Logger\LoggerTrait;
use WBW\Library\Common\Traits\Booleans\BooleanDebugTrait;

/**
 * Abstract provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Provider
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
     * Build a resource path.
     *
     * @param RequestInterface $request The request.
     * @return string Returns the resource path.
     */
    protected function buildResourcePath(RequestInterface $request): string {

        if (false === ($request instanceof SubstituableRequestInterface)) {
            return $request->getResourcePath();
        }

        $values = $request->getSubstituables();
        foreach ($values as $k => $v) {

            if (null === $v) {
                throw new InvalidArgumentException(sprintf('The substituable value "%s" is missing', $k));
            }
        }

        $searches = array_keys($values);
        $replaces = array_values($values);

        return str_replace($searches, $replaces, $request->getResourcePath());
    }

    /**
     * Log an info.
     *
     * @param string $message The message.
     * @param mixed[] $context The context.
     * @return AbstractProvider Returns this provider.
     */
    protected function logInfo(string $message, array $context): AbstractProvider {

        if (null !== $this->getLogger()) {
            $this->getLogger()->info($message, $context);
        }

        return $this;
    }

    /**
     * Create a mandatory parameter exception.
     *
     * @param string $parameter The parameter.
     * @return InvalidArgumentException Returns the mandatory parameter exception.
     */
    protected function newMandatoryParameterException(string $parameter): InvalidArgumentException {
        return new InvalidArgumentException(sprintf('The mandatory parameter "%s" is missing', $parameter));
    }
}
