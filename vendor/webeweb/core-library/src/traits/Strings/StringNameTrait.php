<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String name trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringNameTrait {

    /**
     * Name.
     *
     * @var string|null
     */
    protected $name;

    /**
     * Get the name.
     *
     * @return string|null Returns the name.
     */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Set the name.
     *
     * @param string|null $name The name.
     * @return self Returns this instance.
     */
    public function setName(?string $name): self {
        $this->name = $name;
        return $this;
    }
}
