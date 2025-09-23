<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Component;

use WBW\Library\Common\Traits\Strings\StringContentTrait;
use WBW\Library\Common\Traits\Strings\StringTypeTrait;
use WBW\Library\Widget\Serializer\Component\JsonSerializer;

/**
 * Abstract button.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component
 * @abstract
 */
abstract class AbstractButton implements ButtonInterface {

    use StringContentTrait;
    use StringTypeTrait;

    /**
     * Constructor.
     *
     * @param string|null $type The type.
     * @param string|null $content The content.
     */
    protected function __construct(?string $type, ?string $content = null) {
        $this->setContent($content);
        $this->setType($type);
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeButton($this);
    }
}
