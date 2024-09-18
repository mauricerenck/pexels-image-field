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

use JsonSerializable;

/**
 * Processor interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
interface ProcessorInterface extends JsonSerializable {

    /**
     * Get the core id.
     *
     * @return string|null Returns the core id.
     */
    public function getCoreId(): ?string;

    /**
     * Get the CPU cores.
     *
     * @return string|null Returns the CPU cores.
     */
    public function getCpuCores(): ?string;

    /**
     * Get the CPU MHz.
     *
     * @return string|null Returns teh CPU MHz.
     */
    public function getCpuMhz(): ?string;

    /**
     * Get the keys.
     *
     * @return string[] Returns the keys.
     */
    public function getKeys(): array;

    /**
     * Get the model name.
     *
     * @return string|null Returns the model name.
     */
    public function getModelName(): ?string;

    /**
     * Get the processor.
     *
     * @return string|null Returns the processor.
     */
    public function getProcessor(): ?string;

    /**
     * Get the value.
     *
     * @param string $key The key.
     * @return string|null Returns the value.
     */
    public function getValue(string $key): ?string;

    /**
     * Get the values.
     *
     * @return string[] Returns the values.
     */
    public function getValues(): array;

    /**
     * Get the vendor id.
     *
     * @return string|null Returns the vendor id.
     */
    public function getVendorId(): ?string;
}
