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
 * Boolean on pre new trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanOnPreNewTrait {

    /**
     * On Pre new.
     *
     * @var bool|null
     */
    protected $onPreNew;

    /**
     * Get the on pre new.
     *
     * @return bool|null Returns the on pre new.
     */
    public function getOnPreNew(): ?bool {
        return $this->onPreNew;
    }

    /**
     * Set the on pre new.
     *
     * @param bool|null $onPreNew The on pre new.
     * @return self Returns this instance.
     */
    public function setOnPreNew(?bool $onPreNew): self {
        $this->onPreNew = $onPreNew;
        return $this;
    }
}
