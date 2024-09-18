<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Manager;

use InvalidArgumentException;
use WBW\Library\Symfony\Exception\AlreadyRegisteredProviderException;
use WBW\Library\Symfony\Provider\JavascriptProviderInterface;
use WBW\Library\Symfony\Provider\ProviderInterface;

/**
 * Javascript manager.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Manager
 */
class JavascriptManager extends AbstractManager implements JavascriptManagerInterface {

    /**
     * Service name.
     *
     * @var string
     */
    public const SERVICE_NAME = "wbw.core.manager.javascript";

    /**
     * {@inheritDoc}
     */
    public function addProvider(ProviderInterface $provider): ManagerInterface {

        if (true === $this->containsProvider($provider)) {
            throw new AlreadyRegisteredProviderException($provider);
        }

        return parent::addProvider($provider);
    }

    /**
     * {@inheritDoc}
     */
    public function containsProvider(ProviderInterface $provider): bool {

        if (false === ($provider instanceof JavascriptProviderInterface)) {
            throw new InvalidArgumentException("The provider must implements " . JavascriptProviderInterface::class);
        }

        return in_array($provider, $this->getProviders());
    }

    /**
     * {@inheritDoc}
     */
    public function getJavascripts(): array {

        $javascripts = [];

        /** @var JavascriptProviderInterface $current */
        foreach ($this->getProviders() as $current) {
            $javascripts = array_merge($javascripts, $current->getJavascripts());
        }

        return $javascripts;
    }
}
