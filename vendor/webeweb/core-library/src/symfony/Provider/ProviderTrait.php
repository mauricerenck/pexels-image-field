<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider;

/**
 * Provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider
 */
trait ProviderTrait {

    /**
     * Provider.
     *
     * @var ProviderInterface|null
     */
    protected $provider;

    /**
     * Get the provider.
     *
     * @return ProviderInterface|null Returns the provider.
     */
    public function getProvider(): ?ProviderInterface {
        return $this->provider;
    }

    /**
     * Set the provider.
     *
     * @param ProviderInterface|null $provider The provider.
     * @return self Returns this instance.
     */
    protected function setProvider(?ProviderInterface $provider): self {
        $this->provider = $provider;
        return $this;
    }
}
