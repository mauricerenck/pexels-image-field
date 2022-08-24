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
 * Grey color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait GreyColorProviderTrait {

    /**
     * Grey color provider.
     *
     * @var GreyColorProviderInterface|null
     */
    private $greyColorProvider;

    /**
     * Get the grey color provider.
     *
     * @return GreyColorProviderInterface|null Returns the grey color provider.
     */
    public function getGreyColorProvider(): ?GreyColorProviderInterface {
        return $this->greyColorProvider;
    }

    /**
     * Set the grey color provider.
     *
     * @param GreyColorProviderInterface|null $greyColorProvider The grey color provider.
     * @return self Returns this instance.
     */
    protected function setGreyColorProvider(?GreyColorProviderInterface $greyColorProvider): self {
        $this->greyColorProvider = $greyColorProvider;
        return $this;
    }
}
