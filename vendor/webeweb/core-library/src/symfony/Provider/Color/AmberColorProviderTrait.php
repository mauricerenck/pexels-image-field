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
 * Amber color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait AmberColorProviderTrait {

    /**
     * Amber color provider.
     *
     * @var AmberColorProviderInterface|null
     */
    private $amberColorProvider;

    /**
     * Get the amber color provider.
     *
     * @return AmberColorProviderInterface|null Returns the amber color provider.
     */
    public function getAmberColorProvider(): ?AmberColorProviderInterface {
        return $this->amberColorProvider;
    }

    /**
     * Set the amber color provider.
     *
     * @param AmberColorProviderInterface|null $amberColorProvider The amber color provider.
     * @return self Returns this instance.
     */
    protected function setAmberColorProvider(?AmberColorProviderInterface $amberColorProvider): self {
        $this->amberColorProvider = $amberColorProvider;
        return $this;
    }
}
