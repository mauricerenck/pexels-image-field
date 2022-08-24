<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

use WBW\Library\Symfony\Serializer\JsonSerializer;
use WBW\Library\Traits\Strings\StringNameTrait;
use WBW\Library\Traits\Strings\StringStyleTrait;

/**
 * Abstract icon.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
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
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeIcon($this);
    }
}
