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
 * Blue color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait BlueColorProviderTrait {

    /**
     * Blue color provider.
     *
     * @var BlueColorProviderInterface|null
     */
    private $blueColorProvider;

    /**
     * Get the blue color provider.
     *
     * @return BlueColorProviderInterface|null Returns the blue color provider.
     */
    public function getBlueColorProvider(): ?BlueColorProviderInterface {
        return $this->blueColorProvider;
    }

    /**
     * Set the blue color provider.
     *
     * @param BlueColorProviderInterface|null $blueColorProvider The blue color provider.
     * @return self Returns this instance.
     * @return self Returns this instance.
     */
    protected function setBlueColorProvider(?BlueColorProviderInterface $blueColorProvider): self {
        $this->blueColorProvider = $blueColorProvider;
        return $this;
    }
}
