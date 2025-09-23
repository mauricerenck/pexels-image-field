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

use WBW\Library\Common\Traits\Strings\StringNameTrait;
use WBW\Library\Common\Traits\Strings\StringStyleTrait;
use WBW\Library\Widget\Serializer\Component\JsonSerializer;

/**
 * Abstract icon.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component
 * @abstract
 */
abstract class AbstractIcon implements IconInterface {

    use StringNameTrait;
    use StringStyleTrait;

    /**
     * Constructor.
     */
    protected function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeIcon($this);
    }
}
