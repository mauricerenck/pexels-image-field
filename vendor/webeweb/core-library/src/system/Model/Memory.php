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

use WBW\Library\System\Serializer\JsonSerializer;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Memory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
class Memory implements MemoryInterface {

    /**
     * Values.
     *
     * @var int[]
     */
    protected $values;

    /**
     * Constructor.
     *
     * @param int[] $values The values.
     */
    public function __construct(array $values) {
        $this->setValues($values);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeys(): array {
        return array_keys($this->values);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemAvailable(): ?int {
        return $this->getValue("MemAvailable");
    }

    /**
     * {@inheritDoc}
     */
    public function getMemFree(): ?int {
        return $this->getValue("MemFree");
    }

    /**
     * {@inheritDoc}
     */
    public function getMemTotal(): ?int {
        return $this->getValue("MemTotal");
    }

    /**
     * {@inheritDoc}
     */
    public function getSwapFree(): ?int {
        return $this->getValue("SwapFree");
    }

    /**
     * {@inheritDoc}
     */
    public function getSwapTotal(): ?int {
        return $this->getValue("SwapTotal");
    }

    /**
     * {@inheritDoc}
     */
    public function getValue(string $key): ?int {
        return ArrayHelper::get($this->values, $key);
    }

    /**
     * {@inheritDoc}
     */
    public function getValues(): array {
        return $this->values;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeMemory($this);
    }

    /**
     * Set the values.
     *
     * @param int[] $values The values.
     * @return MemoryInterface Returns this memory.
     */
    protected function setValues(array $values): MemoryInterface {
        $this->values = $values;
        return $this;
    }
}
