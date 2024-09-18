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
 * Processor.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
class Processor implements ProcessorInterface {

    /**
     * Values.
     *
     * @var array<string,string>
     */
    protected $values;

    /**
     * Constructor.
     *
     * @param array<string,string> $values The values.
     */
    public function __construct(array $values) {
        $this->setValues($values);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoreId(): ?string {
        return ArrayHelper::get($this->values, "core id");
    }

    /**
     * {@inheritDoc}
     */
    public function getCpuCores(): ?string {
        return ArrayHelper::get($this->values, "cpu cores");
    }

    /**
     * {@inheritDoc}
     */
    public function getCpuMhz(): ?string {
        return ArrayHelper::get($this->values, "cpu MHz");
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
    public function getModelName(): ?string {
        return ArrayHelper::get($this->values, "model name");
    }

    /**
     * {@inheritDoc}
     */
    public function getProcessor(): ?string {
        return ArrayHelper::get($this->values, "processor");
    }

    /**
     * {@inheritDoc}
     */
    public function getValue(string $key): ?string {
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
     */
    public function getVendorId(): ?string {
        return ArrayHelper::get($this->values, "vendor_id");
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeProcessor($this);
    }

    /**
     * Set the values.
     *
     * @param array<string,string> $values The values.
     * @return ProcessorInterface Returns this processor.
     */
    protected function setValues(array $values): ProcessorInterface {
        $this->values = $values;
        return $this;
    }
}
