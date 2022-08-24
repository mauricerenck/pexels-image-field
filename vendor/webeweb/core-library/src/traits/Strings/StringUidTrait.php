<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String UID trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringUidTrait {

    /**
     * UID.
     *
     * @var string|null
     */
    protected $uid;

    /**
     * Get the UID.
     *
     * @return string|null Returns the UID.
     */
    public function getUid(): ?string {
        return $this->uid;
    }

    /**
     * Set the UID.
     *
     * @param string|null $uid The UID.
     * @return self Returns this instance.
     */
    public function setUid(?string $uid): self {
        $this->uid = $uid;
        return $this;
    }
}
