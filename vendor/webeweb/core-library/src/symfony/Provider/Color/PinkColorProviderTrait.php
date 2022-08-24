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
 * Pink color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait PinkColorProviderTrait {

    /**
     * Pink color provider.
     *
     * @var PinkColorProviderInterface|null
     */
    private $pinkColorProvider;

    /**
     * Get the pink color provider.
     *
     * @return PinkColorProviderInterface|null Returns the pink color provider.
     */
    public function getPinkColorProvider(): ?PinkColorProviderInterface {
        return $this->pinkColorProvider;
    }

    /**
     * Set the pink color provider.
     *
     * @param PinkColorProviderInterface|null $pinkColorProvider The pink color provider.
     * @return self Returns this instance.
     */
    protected function setPinkColorProvider(?PinkColorProviderInterface $pinkColorProvider): self {
        $this->pinkColorProvider = $pinkColorProvider;
        return $this;
    }
}
