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
 * Blue grey color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait BlueGreyColorProviderTrait {

    /**
     * Blue grey color provider.
     *
     * @var BlueGreyColorProviderInterface|null
     */
    private $blueGreyColorProvider;

    /**
     * Get the blue grey color provider.
     *
     * @return BlueGreyColorProviderInterface|null Returns the blue grey color provider.
     */
    public function getBlueGreyColorProvider(): ?BlueGreyColorProviderInterface {
        return $this->blueGreyColorProvider;
    }

    /**
     * Set the blue grey color provider.
     *
     * @param BlueGreyColorProviderInterface|null $blueGreyColorProvider The blue grey color provider.
     * @return self Returns this instance.
     */
    protected function setBlueGreyColorProvider(?BlueGreyColorProviderInterface $blueGreyColorProvider): self {
        $this->blueGreyColorProvider = $blueGreyColorProvider;
        return $this;
    }
}
