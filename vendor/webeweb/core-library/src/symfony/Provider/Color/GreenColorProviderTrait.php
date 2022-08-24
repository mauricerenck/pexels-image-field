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
 * Green color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait GreenColorProviderTrait {

    /**
     * Green color provider.
     *
     * @var GreenColorProviderInterface|null
     */
    private $greenColorProvider;

    /**
     * Get the green color provider.
     *
     * @return GreenColorProviderInterface|null Returns the green color provider.
     */
    public function getGreenColorProvider(): ?GreenColorProviderInterface {
        return $this->greenColorProvider;
    }

    /**
     * Set the green color provider.
     *
     * @param GreenColorProviderInterface|null $greenColorProvider The green color provider.
     * @return self Returns this instance.
     */
    protected function setGreenColorProvider(?GreenColorProviderInterface $greenColorProvider): self {
        $this->greenColorProvider = $greenColorProvider;
        return $this;
    }
}
