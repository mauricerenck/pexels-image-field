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
 * Yellow color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait YellowColorProviderTrait {

    /**
     * Yellow color provider.
     *
     * @var YellowColorProviderInterface|null
     */
    private $yellowColorProvider;

    /**
     * Get the yellow color provider.
     *
     * @return YellowColorProviderInterface|null Returns the yellow color provider.
     */
    public function getYellowColorProvider(): ?YellowColorProviderInterface {
        return $this->yellowColorProvider;
    }

    /**
     * Set the yellow color provider.
     *
     * @param YellowColorProviderInterface|null $yellowColorProvider The yellow color provider.
     * @return self Returns this instance.
     */
    protected function setYellowColorProvider(?YellowColorProviderInterface $yellowColorProvider): self {
        $this->yellowColorProvider = $yellowColorProvider;
        return $this;
    }
}
