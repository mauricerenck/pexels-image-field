<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model;

use JsonSerializable;

/**
 * Memory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Model
 */
class Memory implements JsonSerializable {

    /**
     * Available.
     *
     * @var int|null
     */
    protected $available;

    /**
     * Buffer/cache.
     *
     * @var int|null
     */
    protected $buffCache;

    /**
     * Free.
     *
     * @var int|null
     */
    protected $free;

    /**
     * Shared.
     *
     * @var int|null
     */
    protected $shared;

    /**
     * Total.
     *
     * @var int|null
     */
    protected $total;

    /**
     * Used.
     *
     * @var int|null
     */
    protected $used;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the available.
     *
     * @return int|null Returns the available.
     */
    public function getAvailable(): ?int {
        return $this->available;
    }

    /**
     * Get the buffer/cache.
     *
     * @return int|null Returns the buffer/cache.
     */
    public function getBuffCache(): ?int {
        return $this->buffCache;
    }

    /**
     * Get the free.
     *
     * @return int|null Returns the free.
     */
    public function getFree(): ?int {
        return $this->free;
    }

    /**
     * Get the shared.
     *
     * @return int|null Returns the shared.
     */
    public function getShared(): ?int {
        return $this->shared;
    }

    /**
     * Get the total.
     *
     * @return int|null Returns the total.
     */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Get the used.
     *
     * @return int|null Returns the used.
     */
    public function getUsed(): ?int {
        return $this->used;
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {

        return [
            "total"     => $this->getTotal(),
            "used"      => $this->getUsed(),
            "free"      => $this->getFree(),
            "shared"    => $this->getShared(),
            "buffCache" => $this->getBuffCache(),
            "available" => $this->getAvailable(),
        ];
    }

    /**
     * Set the available.
     *
     * @param int|null $available The available.
     * @return Memory Returns this memory.
     */
    public function setAvailable(?int $available): Memory {
        $this->available = $available;
        return $this;
    }

    /**
     * Set the buffer/cache.
     *
     * @param int|null $buffCache The buffer/cache.
     * @return Memory Returns this memory.
     */
    public function setBuffCache(?int $buffCache): Memory {
        $this->buffCache = $buffCache;
        return $this;
    }

    /**
     * Set the free.
     *
     * @param int|null $free The free.
     * @return Memory Returns this memory.
     */
    public function setFree(?int $free): Memory {
        $this->free = $free;
        return $this;
    }

    /**
     * Set the shared.
     *
     * @param int|null $shared The shared.
     * @return Memory Returns the shared.
     */
    public function setShared(?int $shared): Memory {
        $this->shared = $shared;
        return $this;
    }

    /**
     * Set the total.
     *
     * @param int|null $total The total.
     * @return Memory Returns this memory.
     */
    public function setTotal(?int $total): Memory {
        $this->total = $total;
        return $this;
    }

    /**
     * Set the used.
     *
     * @param int|null $used The used.
     * @return Memory Returns this memory.
     */
    public function setUsed(?int $used): Memory {
        $this->used = $used;
        return $this;
    }
}
