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
 * Boolean disabled trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanDisabledTrait {

    /**
     * Disabled.
     *
     * @var bool|null
     */
    protected $disabled;

    /**
     * Get the disabled.
     *
     * @return bool|null Returns the disabled.
     */
    public function getDisabled(): ?bool {
        return $this->disabled;
    }

    /**
     * Set the disabled.
     *
     * @param bool|null $disabled The disabled.
     * @return self Returns this instance.
     */
    public function setDisabled(?bool $disabled): self {
        $this->disabled = $disabled;
        return $this;
    }
}
