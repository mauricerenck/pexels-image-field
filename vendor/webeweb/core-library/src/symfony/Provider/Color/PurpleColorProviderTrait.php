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
 * Purple color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait PurpleColorProviderTrait {

    /**
     * Purple color provider.
     *
     * @var PurpleColorProviderInterface|null
     */
    private $purpleColorProvider;

    /**
     * Get the purple color provider.
     *
     * @return PurpleColorProviderInterface|null Returns the purple color provider.
     */
    public function getPurpleColorProvider(): ?PurpleColorProviderInterface {
        return $this->purpleColorProvider;
    }

    /**
     * Set the purple color provider.
     *
     * @param PurpleColorProviderInterface|null $purpleColorProvider The purple color provider.
     * @return self Returns this instance.
     */
    protected function setPurpleColorProvider(?PurpleColorProviderInterface $purpleColorProvider): self {
        $this->purpleColorProvider = $purpleColorProvider;
        return $this;
    }
}
