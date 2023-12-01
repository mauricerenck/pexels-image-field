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
 * Boolean on post new trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanOnPostNewTrait {

    /**
     * On Post new.
     *
     * @var bool|null
     */
    protected $onPostNew;

    /**
     * Get the on post new.
     *
     * @return bool|null Returns the on post new.
     */
    public function getOnPostNew(): ?bool {
        return $this->onPostNew;
    }

    /**
     * Set the on post new.
     *
     * @param bool|null $onPostNew The on post new.
     * @return self Returns this instance.
     */
    public function setOnPostNew(?bool $onPostNew): self {
        $this->onPostNew = $onPostNew;
        return $this;
    }
}
