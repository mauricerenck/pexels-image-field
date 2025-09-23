<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Component;

use WBW\Library\Common\Traits\Strings\StringNameTrait;
use WBW\Library\Widget\Serializer\Component\JsonSerializer;

/**
 * Abstract color.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component
 * @abstract
 */
abstract class AbstractColor implements ColorInterface {

    use StringNameTrait;

    /**
     * Constructor.
     *
     * @param string $name The name.
     */
    protected function __construct(string $name) {
        $this->setName($name);
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeColor($this);
    }
}
