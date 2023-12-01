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
 * Token generator service trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Service
 */
trait TokenGeneratorServiceTrait {

    /**
     * Token generator service.
     *
     * @var TokenGeneratorServiceInterface|null
     */
    private $tokenGeneratorService;

    /**
     * Get the token generator service.
     *
     * @return TokenGeneratorServiceInterface|null Returns the token generator service.
     */
    public function getTokenGeneratorService(): ?TokenGeneratorServiceInterface {
        return $this->tokenGeneratorService;
    }

    /**
     * Set the token generator service.
     *
     * @param TokenGeneratorServiceInterface|null $tokenGeneratorService The token generator service.
     * @return self Returns this instance.
     */
    protected function setTokenGeneratorService(?TokenGeneratorServiceInterface $tokenGeneratorService): self {
        $this->tokenGeneratorService = $tokenGeneratorService;
        return $this;
    }
}
