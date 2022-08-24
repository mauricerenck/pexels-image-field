<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String class trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringClassTrait {

    /**
     * Class.
     *
     * @var string|null
     */
    protected $class;

    /**
     * Get the class.
     *
     * @return string|null Returns the class.
     */
    public function getClass(): ?string {
        return $this->class;
    }

    /**
     * Set the class.
     *
     * @param string|null $class The class.
     * @return self Returns this instance.
     */
    public function setClass(?string $class): self {
        $this->class = $class;
        return $this;
    }
}
