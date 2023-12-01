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
 * Boolean on pre show trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanOnPreShowTrait {

    /**
     * On Pre show.
     *
     * @var bool|null
     */
    protected $onPreShow;

    /**
     * Get the on pre show.
     *
     * @return bool|null Returns the on pre show.
     */
    public function getOnPreShow(): ?bool {
        return $this->onPreShow;
    }

    /**
     * Set the on pre show.
     *
     * @param bool|null $onPreShow The on pre show.
     * @return self Returns this instance.
     */
    public function setOnPreShow(?bool $onPreShow): self {
        $this->onPreShow = $onPreShow;
        return $this;
    }
}
