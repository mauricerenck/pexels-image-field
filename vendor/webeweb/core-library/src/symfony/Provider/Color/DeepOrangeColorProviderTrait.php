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
 * Deep orange color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait DeepOrangeColorProviderTrait {

    /**
     * Deep orange color provider.
     *
     * @var DeepOrangeColorProviderInterface|null
     */
    private $deepOrangeColorProvider;

    /**
     * Get the deep orange color provider.
     *
     * @return DeepOrangeColorProviderInterface|null Returns the deep orange color provider.
     */
    public function getDeepOrangeColorProvider(): ?DeepOrangeColorProviderInterface {
        return $this->deepOrangeColorProvider;
    }

    /**
     * Set the deep orange color provider.
     *
     * @param DeepOrangeColorProviderInterface|null $deepOrangeColorProvider The deep orange color provider.
     * @return self Returns this instance.
     */
    protected function setDeepOrangeColorProvider(?DeepOrangeColorProviderInterface $deepOrangeColorProvider): self {
        $this->deepOrangeColorProvider = $deepOrangeColorProvider;
        return $this;
    }
}
