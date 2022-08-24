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
 * Indigo color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait IndigoColorProviderTrait {

    /**
     * Indigo color provider.
     *
     * @var IndigoColorProviderInterface|null
     */
    private $indigoColorProvider;

    /**
     * Get the indigo color provider.
     *
     * @return IndigoColorProviderInterface|null Returns the indigo color provider.
     */
    public function getIndigoColorProvider(): ?IndigoColorProviderInterface {
        return $this->indigoColorProvider;
    }

    /**
     * Set the indigo color provider.
     *
     * @param IndigoColorProviderInterface|null $indigoColorProvider The indigo color provider.
     * @return self Returns this instance.
     */
    protected function setIndigoColorProvider(?IndigoColorProviderInterface $indigoColorProvider): self {
        $this->indigoColorProvider = $indigoColorProvider;
        return $this;
    }
}
