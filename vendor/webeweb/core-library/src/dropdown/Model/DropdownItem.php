<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Dropdown\Model;

use WBW\Library\Dropdown\Serializer\JsonSerializer;
use WBW\Library\Traits\Integers\IntegerPositionTrait;
use WBW\Library\Traits\Strings\StringLabelTrait;

/**
 * Dropdown item.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Dropdown\Model
 */
class DropdownItem implements DropdownItemInterface {

    use IntegerPositionTrait;
    use StringLabelTrait;

    /**
     * By default.
     *
     * @var bool|null
     */
    protected $byDefault;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritdoc}
     */
    public function getByDefault(): ?bool {
        return $this->byDefault;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeDropdownItem($this);
    }

    /**
     * {@inheritdoc}
     */
    public function setByDefault(?bool $byDefault): DropdownItemInterface {
        $this->byDefault = $byDefault;
        return $this;
    }
}
