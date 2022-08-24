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
 * Red color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Color
 */
trait RedColorProviderTrait {

    /**
     * Red color provider.
     *
     * @var RedColorProviderInterface|null
     */
    private $redColorProvider;

    /**
     * Get the red color provider.
     *
     * @return RedColorProviderInterface|null Returns the red color provider.
     */
    public function getRedColorProvider(): ?RedColorProviderInterface {
        return $this->redColorProvider;
    }

    /**
     * Set the red color provider.
     *
     * @param RedColorProviderInterface|null $redColorProvider The red color provider.
     * @return self Returns this instance.
     */
    protected function setRedColorProvider(?RedColorProviderInterface $redColorProvider): self {
        $this->redColorProvider = $redColorProvider;
        return $this;
    }
}
