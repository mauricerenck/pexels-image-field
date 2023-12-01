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
 * Boolean on post edit trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanOnPostEditTrait {

    /**
     * On Post edit.
     *
     * @var bool|null
     */
    protected $onPostEdit;

    /**
     * Get the on post edit.
     *
     * @return bool|null Returns the on post edit.
     */
    public function getOnPostEdit(): ?bool {
        return $this->onPostEdit;
    }

    /**
     * Set the on post edit.
     *
     * @param bool|null $onPostEdit The on post edit.
     * @return self Returns this instance.
     */
    public function setOnPostEdit(?bool $onPostEdit): self {
        $this->onPostEdit = $onPostEdit;
        return $this;
    }
}
