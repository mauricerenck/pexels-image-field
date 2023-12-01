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
 * Boolean on post show trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Booleans
 */
trait BooleanOnPostShowTrait {

    /**
     * On Post show.
     *
     * @var bool|null
     */
    protected $onPostShow;

    /**
     * Get the on post show.
     *
     * @return bool|null Returns the on post show.
     */
    public function getOnPostShow(): ?bool {
        return $this->onPostShow;
    }

    /**
     * Set the on post show.
     *
     * @param bool|null $onPostShow The on post show.
     * @return self Returns this instance.
     */
    public function setOnPostShow(?bool $onPostShow): self {
        $this->onPostShow = $onPostShow;
        return $this;
    }
}
