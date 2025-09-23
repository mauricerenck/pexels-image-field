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

/**
 * Stereo.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class Stereo extends AbstractModel {

    use StringContentTrait;

    /**
     * Content "bilingual".
     *
     * @var string
     */
    public const CONTENT_BILINGUAL = "bilingual";

    /**
     * Content "dolby".
     *
     * @var string
     */
    public const CONTENT_DOLBY = "dolby";

    /**
     * Content "dolby digital".
     *
     * @var string
     */
    public const CONTENT_DOLBY_DIGITAL = "dolby digital";

    /**
     * Content "mono".
     *
     * @var string
     */
    public const CONTENT_MONO = "mono";

    /**
     * Content "stereo".
     *
     * @var string
     */
    public const CONTENT_STEREO = "stereo";

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "stereo";

    /**
     * Enumerate the content.
     *
     * @return string[] Returns the content enumeration.
     */
    public static function enumContent(): array {

        return [
            self::CONTENT_BILINGUAL,
            self::CONTENT_DOLBY,
            self::CONTENT_DOLBY_DIGITAL,
            self::CONTENT_MONO,
            self::CONTENT_STEREO,
        ];
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeStereo($this);
    }

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return XmlSerializer::serializeStereo($this);
    }
}
