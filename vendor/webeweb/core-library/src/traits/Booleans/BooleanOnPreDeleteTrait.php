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
 * Boolean on pre delete trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanOnPreDeleteTrait {

    /**
     * On Pre delete.
     *
     * @var bool|null
     */
    protected $onPreDelete;

    /**
     * Get the on pre delete.
     *
     * @return bool|null Returns the on pre delete.
     */
    public function getOnPreDelete(): ?bool {
        return $this->onPreDelete;
    }

    /**
     * Set the on pre delete.
     *
     * @param bool|null $onPreDelete The on pre delete.
     * @return self Returns this instance.
     */
    public function setOnPreDelete(?bool $onPreDelete): self {
        $this->onPreDelete = $onPreDelete;
        return $this;
    }
}
