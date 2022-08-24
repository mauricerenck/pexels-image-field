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
 * Black color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait BlackColorProviderTrait {

    /**
     * Black color provider.
     *
     * @var BlackColorProviderInterface|null
     */
    private $blackColorProvider;

    /**
     * Get the black color provider.
     *
     * @return BlackColorProviderInterface|null Returns the black color provider.
     */
    public function getBlackColorProvider(): ?BlackColorProviderInterface {
        return $this->blackColorProvider;
    }

    /**
     * Set the black color provider.
     *
     * @param BlackColorProviderInterface|null $blackColorProvider The black color provider.
     * @return self Returns this instance.
     */
    protected function setBlackColorProvider(?BlackColorProviderInterface $blackColorProvider): self {
        $this->blackColorProvider = $blackColorProvider;
        return $this;
    }
}
