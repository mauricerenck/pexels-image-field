<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Model;

/**
 * Memory trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
trait MemoryTrait {

    /**
     * Memory.
     *
     * @var MemoryInterface|null
     */
    protected $memory;

    /**
     * Get the memory.
     *
     * @return MemoryInterface|null Returns the memory.
     */
    public function getMemory(): ?MemoryInterface {
        return $this->memory;
    }

    /**
     * Set the memory.
     *
     * @param MemoryInterface|null $memory The memory.
     * @return self Returns this instance.
     */
    protected function setMemory(?MemoryInterface $memory): self {
        $this->memory = $memory;
        return $this;
    }
}
