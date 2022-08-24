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
 * White color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait WhiteColorProviderTrait {

    /**
     * White color provider.
     *
     * @var WhiteColorProviderInterface|null
     */
    private $whiteColorProvider;

    /**
     * Get the white color provider.
     *
     * @return WhiteColorProviderInterface|null Returns the white color provider.
     */
    public function getWhiteColorProvider(): ?WhiteColorProviderInterface {
        return $this->whiteColorProvider;
    }

    /**
     * Set the white color provider.
     *
     * @param WhiteColorProviderInterface|null $whiteColorProvider The white color provider.
     * @return self Returns this instance.
     */
    protected function setWhiteColorProvider(?WhiteColorProviderInterface $whiteColorProvider): self {
        $this->whiteColorProvider = $whiteColorProvider;
        return $this;
    }
}
