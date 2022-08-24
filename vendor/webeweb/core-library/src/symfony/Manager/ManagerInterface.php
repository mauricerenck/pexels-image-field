<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Manager;

use WBW\Library\Symfony\Provider\ProviderInterface;

/**
 * Manager interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Manager
 */
interface ManagerInterface {

    /**
     * Add a provider.
     *
     * @param ProviderInterface $provider The provider.
     * @return ManagerInterface Returns this manager.
     */
    public function addProvider(ProviderInterface $provider): ManagerInterface;

    /**
     * Determines if this manager contains a provider.
     *
     * @param ProviderInterface $provider The provider.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function contains(ProviderInterface $provider): bool;

    /**
     * Determines if this manager contains providers.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasProviders(): bool;

    /**
     * Index of a provider.
     *
     * @param ProviderInterface $provider The provider.
     * @return int Returns the index of in case of success, -1 otherwise.
     */
    public function indexOf(ProviderInterface $provider): int;

    /**
     * Size.
     *
     * @return int Returns the providers count
     */
    public function size(): int;
}
