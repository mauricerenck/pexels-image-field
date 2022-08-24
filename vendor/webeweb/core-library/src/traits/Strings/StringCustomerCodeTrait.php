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
 * String customer code trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringCustomerCodeTrait {

    /**
     * Customer code.
     *
     * @var string|null
     */
    protected $customerCode;

    /**
     * Get the customer code.
     *
     * @return string|null Returns the customer code.
     */
    public function getCustomerCode(): ?string {
        return $this->customerCode;
    }

    /**
     * Set the customer code.
     *
     * @param string|null $customerCode The customer code.
     * @return self Returns this instance.
     */
    public function setCustomerCode(?string $customerCode): self {
        $this->customerCode = $customerCode;
        return $this;
    }
}
