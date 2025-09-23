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

use InvalidArgumentException;
use WBW\Library\Common\Traits\Strings\StringTypeTrait;
use WBW\Library\XmlTv\Serializer\JsonSerializer;
use WBW\Library\XmlTv\Serializer\XmlSerializer;
use WBW\Library\XmlTv\Traits\Objects\LanguageLanguageTrait;

/**
 * Subtitles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class Subtitles extends AbstractModel {

    use LanguageLanguageTrait;
    use StringTypeTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "subtitles";

    /**
     * Type "deaf signed".
     *
     * @var string
     */
    public const TYPE_DEAF_SIGNED = "deaf-signed";

    /**
     * Type "onscreen".
     *
     * @var string
     */
    public const TYPE_ONSCREEN = "onscreen";

    /**
     * Type "teletext".
     *
     * @var string
     */
    public const TYPE_TELETEXT = "teletext";

    /**
     * Enumerate the type.
     *
     * @return string[] Returns the type enumeration
     */
    public static function enumType(): array {

        return [
            self::TYPE_DEAF_SIGNED,
            self::TYPE_ONSCREEN,
            self::TYPE_TELETEXT,
        ];
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeSubtitles($this);
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Subtitles Returns this subtitles.
     * @throws InvalidArgumentException Throws an invalid argument exception if the type is invalid.
     */
    public function setType(?string $type): Subtitles {
        if (null !== $type && false === in_array($type, static::enumType())) {
            throw new InvalidArgumentException(sprintf('The type "%s" is invalid', $type));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return XmlSerializer::serializeSubtitles($this);
    }
}
