<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Wsdl2Php\Provider;

/**
 * WSDL provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Provider
 */
trait WsdlProviderTrait {

    /**
     * Provider.
     *
     * @var WsdlProvider|null
     */
    private $provider;

    /**
     * Get the provider.
     *
     * @return WsdlProvider|null Returns the provider.
     */
    public function getProvider(): ?WsdlProvider {
        return $this->provider;
    }

    /**
     * Set the provider.
     *
     * @param WsdlProvider|null $provider The provider.
     * @return self Returns this instance.
     */
    public function setProvider(?WsdlProvider $provider): self {
        $this->provider = $provider;
        return $this;
    }
}
