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

namespace WBW\Library\XmlTv\Model;

use WBW\Library\XmlTv\Serializer\JsonSerializer;
use WBW\Library\XmlTv\Serializer\XmlSerializer;
use WBW\Library\XmlTv\Traits\Arrays\ArrayIconsTrait;
use WBW\Library\XmlTv\Traits\Objects\ValueValueTrait;
use WBW\Library\XmlTv\Traits\Strings\StringSystemTrait;

/**
 * Rating.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class Rating extends AbstractModel {

    use ArrayIconsTrait;
    use StringSystemTrait;
    use ValueValueTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "rating";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setIcons([]);
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeRating($this);
    }

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return XmlSerializer::serializeRating($this);
    }
}
