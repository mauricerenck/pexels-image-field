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
 * String object trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringObjectTrait {

    /**
     * Object.
     *
     * @var string|null
     */
    protected $object;

    /**
     * Get the object.
     *
     * @return string|null Returns the object.
     */
    public function getObject(): ?string {
        return $this->object;
    }

    /**
     * Set the object.
     *
     * @param string|null $object The object.
     * @return self Returns this instance.
     */
    public function setObject(?string $object): self {
        $this->object = $object;
        return $this;
    }
}
