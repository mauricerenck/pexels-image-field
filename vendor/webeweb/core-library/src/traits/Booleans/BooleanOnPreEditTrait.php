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
 * Boolean on pre edit trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanOnPreEditTrait {

    /**
     * On Pre edit.
     *
     * @var bool|null
     */
    protected $onPreEdit;

    /**
     * Get the on pre edit.
     *
     * @return bool|null Returns the on pre edit.
     */
    public function getOnPreEdit(): ?bool {
        return $this->onPreEdit;
    }

    /**
     * Set the on pre edit.
     *
     * @param bool|null $onPreEdit The on pre edit.
     * @return self Returns this instance.
     */
    public function setOnPreEdit(?bool $onPreEdit): self {
        $this->onPreEdit = $onPreEdit;
        return $this;
    }
}
