<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Manager;

use InvalidArgumentException;
use WBW\Library\Symfony\Exception\AlreadyRegisteredProviderException;
use WBW\Library\Symfony\Helper\ColorHelper;
use WBW\Library\Symfony\Provider\ColorProviderInterface;
use WBW\Library\Symfony\Provider\ProviderInterface;

/**
 * Color manager.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Manager
 */
class ColorManager extends AbstractManager implements ColorManagerInterface {

    /**
     * Service name.
     *
     * @var string
     */
    public const SERVICE_NAME = "wbw.core.manager.color";

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

        if (false === ($provider instanceof ColorProviderInterface)) {
            throw new InvalidArgumentException("The provider must implements " . ColorProviderInterface::class);
        }

        $identifier = ColorHelper::getIdentifier($provider);

        /** @var ColorProviderInterface $current */
        foreach ($this->getProviders() as $current) {

            if ($identifier === ColorHelper::getIdentifier($current)) {
                return true;
            }
        }

        return false;
    }
}
