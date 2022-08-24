<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String avatar trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringAvatarTrait {

    /**
     * Avatar
     *
     * @var string|null
     */
    protected $avatar;

    /**
     * Get the avatar.
     *
     * @return string|null Returns the avatar.
     */
    public function getAvatar(): ?string {
        return $this->avatar;
    }

    /**
     * Set the avatar.
     *
     * @param string|null $avatar The avatar.
     * @return self Returns this instance.
     */
    public function setAvatar(?string $avatar): self {
        $this->avatar = $avatar;
        return $this;
    }
}
