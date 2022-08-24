<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider;

/**
 * Color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider
 */
trait ColorProviderTrait {

    /**
     * Color provider.
     *
     * @var ColorProviderInterface|null
     */
    protected $colorProvider;

    /**
     * Get the color provider.
     *
     * @return ColorProviderInterface|null Returns the color provider.
     */
    public function getColorProvider(): ?ColorProviderInterface {
        return $this->colorProvider;
    }

    /**
     * Set the color provider.
     *
     * @param ColorProviderInterface|null $colorProvider The color provider.
     * @return self Returns this instance.
     */
    protected function setColorProvider(?ColorProviderInterface $colorProvider): self {
        $this->colorProvider = $colorProvider;
        return $this;
    }
}
