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
 * Lime color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait LimeColorProviderTrait {

    /**
     * Lime color provider.
     *
     * @var LimeColorProviderInterface|null
     */
    private $limeColorProvider;

    /**
     * Get the lime color provider.
     *
     * @return LimeColorProviderInterface|null Returns the lime color provider.
     */
    public function getLimeColorProvider(): ?LimeColorProviderInterface {
        return $this->limeColorProvider;
    }

    /**
     * Set the lime color provider.
     *
     * @param LimeColorProviderInterface|null $limeColorProvider The lime color provider.
     * @return self Returns this instance.
     */
    protected function setLimeColorProvider(?LimeColorProviderInterface $limeColorProvider): self {
        $this->limeColorProvider = $limeColorProvider;
        return $this;
    }
}
