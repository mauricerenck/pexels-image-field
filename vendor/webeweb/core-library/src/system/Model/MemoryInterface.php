<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Model;

use JsonSerializable;

/**
 * Memory interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
interface MemoryInterface extends JsonSerializable {

    /**
     * Get the keys.
     *
     * @return string[] Returns the keys.
     */
    public function getKeys(): array;

    /**
     * Get the memory "available".
     *
     * @return int|null Returns the memory "available".
     */
    public function getMemAvailable(): ?int;

    /**
     * Get the memory "free".
     *
     * @return int|null Returns the memory "free".
     */
    public function getMemFree(): ?int;

    /**
     * Get the memory "total".
     *
     * @return int|null Returns the memory "total".
     */
    public function getMemTotal(): ?int;

    /**
     * Get the swap "free".
     *
     * @return int|null Returns the swap "free".
     */
    public function getSwapFree(): ?int;

    /**
     * Get the swap "total".
     *
     * @return int|null Returns the swap "total".
     */
    public function getSwapTotal(): ?int;

    /**
     * Get the value.
     *
     * @param string $key The key.
     * @return int|null Returns the value.
     */
    public function getValue(string $key): ?int;

    /**
     * Get the values.
     *
     * @return int[] Returns the values.
     */
    public function getValues(): array;
}
