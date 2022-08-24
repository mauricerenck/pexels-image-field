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
     * @var TokenGeneratorService|null
     */
    private $tokenGeneratorService;

    /**
     * Get the token generator service.
     *
     * @return TokenGeneratorService|null Returns the token generator service.
     */
    public function getTokenGeneratorService(): ?TokenGeneratorService {
        return $this->tokenGeneratorService;
    }

    /**
     * Set the token generator service.
     *
     * @param TokenGeneratorService|null $tokenGeneratorService The token generator service.
     * @return self Returns this instance.
     */
    protected function setTokenGeneratorService(?TokenGeneratorService $tokenGeneratorService): self {
        $this->tokenGeneratorService = $tokenGeneratorService;
        return $this;
    }
}
