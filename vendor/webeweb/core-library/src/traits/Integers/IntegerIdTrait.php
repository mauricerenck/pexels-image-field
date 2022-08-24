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
 * Integer id trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Integers
 */
trait IntegerIdTrait {

    /**
     * Id.
     *
     * @var int|null
     */
    protected $id;

    /**
     * Get the id.
     *
     * @return int|null Returns the id.
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Set the id.
     *
     * @param int|null $id The id.
     * @return self Returns this instance.
     */
    protected function setId(?int $id): self {
        $this->id = $id;
        return $this;
    }
}
