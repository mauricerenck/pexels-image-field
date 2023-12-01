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
 * Stylesheet provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider
 */
trait StylesheetProviderTrait {

    /**
     * Stylesheet provider.
     *
     * @var StylesheetProviderInterface|null
     */
    protected $stylesheetProvider;

    /**
     * Get the stylesheet provider.
     *
     * @return StylesheetProviderInterface|null Returns the stylesheet provider.
     */
    public function getStylesheetProvider(): ?StylesheetProviderInterface {
        return $this->stylesheetProvider;
    }

    /**
     * Set the stylesheet provider.
     *
     * @param StylesheetProviderInterface|null $stylesheetProvider The stylesheet provider.
     * @return self Returns this instance.
     */
    protected function setStylesheetProvider(?StylesheetProviderInterface $stylesheetProvider): self {
        $this->stylesheetProvider = $stylesheetProvider;
        return $this;
    }
}
