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
 * Brown color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait BrownColorProviderTrait {

    /**
     * Brown color provider.
     *
     * @var BrownColorProviderInterface|null
     */
    private $brownColorProvider;

    /**
     * Get the brown color provider.
     *
     * @return BrownColorProviderInterface|null Returns the brown color provider.
     */
    public function getBrownColorProvider(): ?BrownColorProviderInterface {
        return $this->brownColorProvider;
    }

    /**
     * Set the brown color provider.
     *
     * @param BrownColorProviderInterface|null $brownColorProvider The brown color provider.
     * @return self Returns this instance.
     */
    protected function setBrownColorProvider(?BrownColorProviderInterface $brownColorProvider): self {
        $this->brownColorProvider = $brownColorProvider;
        return $this;
    }
}
