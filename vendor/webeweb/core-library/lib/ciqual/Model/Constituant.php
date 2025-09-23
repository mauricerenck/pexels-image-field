<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Ciqual\Model;

use JsonSerializable;
use WBW\Library\Ciqual\Serializer\JsonSerializer;
use WBW\Library\Ciqual\Traits\Strings\StringNomEngTrait;
use WBW\Library\Ciqual\Traits\Strings\StringNomFrTrait;
use WBW\Library\Common\Traits\Strings\StringCodeTrait;

/**
 * Constituant.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Model
 */
class Constituant implements JsonSerializable {

    use StringCodeTrait;
    use StringNomEngTrait;
    use StringNomFrTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "CONST";

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeConstituant($this);
    }
}
