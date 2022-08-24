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
 * String account trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringAccountTrait {

    /**
     * Account
     *
     * @var string|null
     */
    protected $account;

    /**
     * Get the account.
     *
     * @return string|null Returns the account.
     */
    public function getAccount(): ?string {
        return $this->account;
    }

    /**
     * Set the account.
     *
     * @param string|null $account The account.
     * @return self Returns this instance.
     */
    public function setAccount(?string $account): self {
        $this->account = $account;
        return $this;
    }
}
