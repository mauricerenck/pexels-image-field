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
 * Cyan color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait CyanColorProviderTrait {

    /**
     * Cyan color provider.
     *
     * @var CyanColorProviderInterface|null
     */
    private $cyanColorProvider;

    /**
     * Get the cyan color provider.
     *
     * @return CyanColorProviderInterface|null Returns the cyan color provider.
     */
    public function getCyanColorProvider(): ?CyanColorProviderInterface {
        return $this->cyanColorProvider;
    }

    /**
     * Set the cyan color provider.
     *
     * @param CyanColorProviderInterface|null $cyanColorProvider The cyan color provider.
     * @return self Returns this instance.
     */
    protected function setCyanColorProvider(?CyanColorProviderInterface $cyanColorProvider): self {
        $this->cyanColorProvider = $cyanColorProvider;
        return $this;
    }
}
