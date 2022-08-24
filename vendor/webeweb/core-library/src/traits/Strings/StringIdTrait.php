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
 * String id trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringIdTrait {

    /**
     * Id.
     *
     * @var string|null
     */
    protected $id;

    /**
     * Get the id.
     *
     * @return string|null Returns the id.
     */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return self Returns this instance.
     */
    public function setId(?string $id): self {
        $this->id = $id;
        return $this;
    }
}
