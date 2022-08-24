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
 * Teal color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait TealColorProviderTrait {

    /**
     * Teal color provider.
     *
     * @var TealColorProviderInterface|null
     */
    private $tealColorProvider;

    /**
     * Get the teal color provider.
     *
     * @return TealColorProviderInterface|null Returns the teal color provider.
     */
    public function getTealColorProvider(): ?TealColorProviderInterface {
        return $this->tealColorProvider;
    }

    /**
     * Set the teal color provider.
     *
     * @param TealColorProviderInterface|null $tealColorProvider The teal color provider.
     * @return self Returns this instance.
     */
    protected function setTealColorProvider(?TealColorProviderInterface $tealColorProvider): self {
        $this->tealColorProvider = $tealColorProvider;
        return $this;
    }
}
