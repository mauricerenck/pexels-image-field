<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Booleans;

/**
 * Boolean on post delete trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanOnPostDeleteTrait {

    /**
     * On Post delete.
     *
     * @var bool|null
     */
    protected $onPostDelete;

    /**
     * Get the on post delete.
     *
     * @return bool|null Returns the on post delete.
     */
    public function getOnPostDelete(): ?bool {
        return $this->onPostDelete;
    }

    /**
     * Set the on post delete.
     *
     * @param bool|null $onPostDelete The on post delete.
     * @return self Returns this instance.
     */
    public function setOnPostDelete(?bool $onPostDelete): self {
        $this->onPostDelete = $onPostDelete;
        return $this;
    }
}
