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
 * Orange color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait OrangeColorProviderTrait {

    /**
     * Orange color provider.
     *
     * @var OrangeColorProviderInterface|null
     */
    private $orangeColorProvider;

    /**
     * Get the orange color provider.
     *
     * @return OrangeColorProviderInterface|null Returns the orange color provider.
     */
    public function getOrangeColorProvider(): ?OrangeColorProviderInterface {
        return $this->orangeColorProvider;
    }

    /**
     * Set the orange color provider.
     *
     * @param OrangeColorProviderInterface|null $orangeColorProvider The orange color provider.
     * @return self Returns this instance.
     */
    protected function setOrangeColorProvider(?OrangeColorProviderInterface $orangeColorProvider): self {
        $this->orangeColorProvider = $orangeColorProvider;
        return $this;
    }
}
