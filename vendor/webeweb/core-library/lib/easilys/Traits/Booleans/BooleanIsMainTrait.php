<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Traits\Booleans;

/**
 * Boolean is main trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Booleans
 */
trait BooleanIsMainTrait {

    /**
     * Is main.
     *
     * @var bool|null
     */
    protected $isMain;

    /**
     * Get the is main.
     *
     * @return bool|null Returns the is main.
     */
    public function getIsMain(): ?bool {
        return $this->isMain;
    }

    /**
     * Set the is main.
     *
     * @param bool|null $isMain The is main.
     * @return self Returns this instance.
     */
    public function setIsMain(?bool $isMain): self {
        $this->isMain = $isMain;
        return $this;
    }
}
