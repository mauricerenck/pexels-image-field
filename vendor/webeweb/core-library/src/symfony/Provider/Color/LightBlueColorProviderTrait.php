<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider\Color;

/**
 * Light blue color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait LightBlueColorProviderTrait {

    /**
     * Light blue color provider.
     *
     * @var LightBlueColorProviderInterface|null
     */
    private $lightBlueColorProvider;

    /**
     * Get the light blue color provider.
     *
     * @return LightBlueColorProviderInterface|null Returns the light blue color provider.
     */
    public function getLightBlueColorProvider(): ?LightBlueColorProviderInterface {
        return $this->lightBlueColorProvider;
    }

    /**
     * Set the light blue color provider.
     *
     * @param LightBlueColorProviderInterface|null $lightBlueColorProvider The light blue color provider.
     * @return self Returns this instance.
     */
    protected function setLightBlueColorProvider(?LightBlueColorProviderInterface $lightBlueColorProvider): self {
        $this->lightBlueColorProvider = $lightBlueColorProvider;
        return $this;
    }
}
