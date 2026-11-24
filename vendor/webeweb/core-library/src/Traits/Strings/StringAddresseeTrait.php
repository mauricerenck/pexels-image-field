<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Strings;

/**
 * String addressee trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringAddresseeTrait {

    /**
     * Addressee.
     *
     * @var string|null
     */
    protected $addressee;

    /**
     * Get the addressee.
     *
     * @return string|null Returns the addressee.
     */
    public function getAddressee(): ?string {
        return $this->addressee;
    }

    /**
     * Set the addressee.
     *
     * @param string|null $addressee The addressee.
     * @return self Returns this instance.
     */
    public function setAddressee(?string $addressee): self {
        $this->addressee = $addressee;
        return $this;
    }
}
