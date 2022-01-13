<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Booleans;

/**
 * Boolean enabled trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanEnabledTrait {

    /**
     * Enabled.
     *
     * @var bool|null
     */
    protected $enabled;

    /**
     * Get the enabled.
     *
     * @return bool|null Returns the enabled.
     */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return self Returns this instance.
     */
    public function setEnabled(?bool $enabled): self {
        $this->enabled = $enabled;
        return $this;
    }
}
