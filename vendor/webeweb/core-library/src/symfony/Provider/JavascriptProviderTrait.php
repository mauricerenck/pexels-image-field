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
 * Javascript provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider
 */
trait JavascriptProviderTrait {

    /**
     * Javascript provider.
     *
     * @var JavascriptProviderInterface|null
     */
    protected $javascriptProvider;

    /**
     * Get the javascript provider.
     *
     * @return JavascriptProviderInterface|null Returns the javascript provider.
     */
    public function getJavascriptProvider(): ?JavascriptProviderInterface {
        return $this->javascriptProvider;
    }

    /**
     * Set the javascript provider.
     *
     * @param JavascriptProviderInterface|null $javascriptProvider The javascript provider.
     * @return self Returns this instance.
     */
    protected function setJavascriptProvider(?JavascriptProviderInterface $javascriptProvider): self {
        $this->javascriptProvider = $javascriptProvider;
        return $this;
    }
}
