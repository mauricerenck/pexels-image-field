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
 * Deep purple color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait DeepPurpleColorProviderTrait {

    /**
     * Deep purple color provider.
     *
     * @var DeepPurpleColorProviderInterface|null
     */
    private $deepPurpleColorProvider;

    /**
     * Get the deep purple color provider.
     *
     * @return DeepPurpleColorProviderInterface|null Returns the deep purple color provider.
     */
    public function getDeepPurpleColorProvider(): ?DeepPurpleColorProviderInterface {
        return $this->deepPurpleColorProvider;
    }

    /**
     * Set the deep purple color provider.
     *
     * @param DeepPurpleColorProviderInterface|null $deepPurpleColorProvider The deep purple color provider.
     * @return self Returns this instance.
     */
    protected function setDeepPurpleColorProvider(?DeepPurpleColorProviderInterface $deepPurpleColorProvider): self {
        $this->deepPurpleColorProvider = $deepPurpleColorProvider;
        return $this;
    }
}
