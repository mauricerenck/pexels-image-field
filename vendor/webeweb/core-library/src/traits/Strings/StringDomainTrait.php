<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String domain trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringDomainTrait {

    /**
     * Domain.
     *
     * @var string|null
     */
    protected $domain;

    /**
     * Get the domain.
     *
     * @return string|null Returns teh domain.
     */
    public function getDomain(): ?string {
        return $this->domain;
    }

    /**
     * Set the domain.
     *
     * @param string|null $domain The domain.
     * @return self Returns this instance.
     */
    public function setDomain(?string $domain): self {
        $this->domain = $domain;
        return $this;
    }
}
