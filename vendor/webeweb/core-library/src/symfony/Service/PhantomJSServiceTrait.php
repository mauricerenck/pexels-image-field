<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Service;

/**
 * PhantomJS service trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Service
 */
trait PhantomJSServiceTrait {

    /**
     * PhantomJS service.
     *
     * @var PhantomJSService|null
     */
    private $phantomJSService;

    /**
     * Get the PhantomJS service.
     *
     * @return PhantomJSService|null Returns the PhantomJS service.
     */
    public function getPhantomJSService(): ?PhantomJSService {
        return $this->phantomJSService;
    }

    /**
     * Set the PhantomJS service.
     *
     * @param PhantomJSService|null $phantomJSService The PhantomJS service.
     * @return self Returns this instance.
     */
    protected function setPhantomJSService(?PhantomJSService $phantomJSService): self {
        $this->phantomJSService = $phantomJSService;
        return $this;
    }
}
