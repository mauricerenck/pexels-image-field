<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Integers;

/**
 * Integer civility trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerCivilityTrait {

    /**
     * Civility.
     *
     * @var int|null
     */
    protected $civility;

    /**
     * Get the civility.
     *
     * @return int|null Returns the civility.
     */
    public function getCivility(): ?int {
        return $this->civility;
    }

    /**
     * Set the civility.
     *
     * @param int|null $civility The civility.
     * @return self Returns this instance.
     */
    public function setCivility(?int $civility): self {
        $this->civility = $civility;
        return $this;
    }
}
