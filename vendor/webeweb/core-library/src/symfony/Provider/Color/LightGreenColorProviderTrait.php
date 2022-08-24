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
 * Light green color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait LightGreenColorProviderTrait {

    /**
     * Light green color provider.
     *
     * @var LightGreenColorProviderInterface|null
     */
    private $lightGreenColorProvider;

    /**
     * Get the light green color provider.
     *
     * @return LightGreenColorProviderInterface|null Returns the light green color provider.
     */
    public function getLightGreenColorProvider(): ?LightGreenColorProviderInterface {
        return $this->lightGreenColorProvider;
    }

    /**
     * Set the light green color provider.
     *
     * @param LightGreenColorProviderInterface|null $lightGreenColorProvider The light green color provider.
     * @return self Returns this instance.
     */
    protected function setLightGreenColorProvider(?LightGreenColorProviderInterface $lightGreenColorProvider): self {
        $this->lightGreenColorProvider = $lightGreenColorProvider;
        return $this;
    }
}
