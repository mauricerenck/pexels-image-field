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

use WBW\Library\Common\Traits\Strings\StringContentTrait;
use WBW\Library\XmlTv\Serializer\JsonSerializer;
use WBW\Library\XmlTv\Serializer\XmlSerializer;
use WBW\Library\XmlTv\Traits\Strings\StringSystemTrait;

/**
 * Episode number.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class EpisodeNum extends AbstractModel {

    use StringContentTrait;
    use StringSystemTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "episode-num";

    /**
     * SYSTEM "onscreen".
     *
     * @var string
     */
    public const SYSTEM_ONSCREEN = "onscreen";

    /**
     * System "deaf signed".
     *
     * @var string
     */
    public const SYSTEM_XMLTV_NS = "xmltv_ns";

    /**
     * Enumerate the system.
     *
     * @return string[] Returns the system enumeration.
     */
    public static function enumSystem(): array {

        return [
            self::SYSTEM_ONSCREEN,
            self::SYSTEM_XMLTV_NS,
        ];
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeEpisodeNum($this);
    }

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return XmlSerializer::serializeEpisodeNum($this);
    }
}
