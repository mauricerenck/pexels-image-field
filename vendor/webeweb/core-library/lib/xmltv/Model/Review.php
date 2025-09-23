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
use WBW\Library\Common\Traits\Strings\StringLangTrait;
use WBW\Library\Common\Traits\Strings\StringTypeTrait;
use WBW\Library\XmlTv\Serializer\JsonSerializer;
use WBW\Library\XmlTv\Serializer\XmlSerializer;

/**
 * Review.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class Review extends AbstractModel {

    use StringLangTrait;
    use StringTypeTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "review";

    /**
     * Type "text".
     *
     * @var string
     */
    public const TYPE_TEXT = "text";

    /**
     * Type "url".
     *
     * @var string
     */
    public const TYPE_URL = "url";

    /**
     * Reviewer.
     *
     * @var string|null
     */
    private $reviewer;

    /**
     * Source.
     *
     * @var string|null
     */
    private $source;

    /**
     * Enumerate the type.
     *
     * @return string[] Returns the type enumeration.
     */
    public static function enumType(): array {

        return [
            self::TYPE_TEXT,
            self::TYPE_URL,
        ];
    }

    /**
     * Get the reviewer.
     *
     * @return string|null Returns the reviewer.
     */
    public function getReviewer(): ?string {
        return $this->reviewer;
    }

    /**
     * Get the source.
     *
     * @return string|null Returns the source.
     */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeReview($this);
    }

    /**
     * Set the reviewer.
     *
     * @param string|null $reviewer The reviewer.
     * @return Review Returns this review.
     */
    public function setReviewer(?string $reviewer): Review {
        $this->reviewer = $reviewer;
        return $this;
    }

    /**
     * Set the source.
     *
     * @param string|null $source The source.
     * @return Review Returns this review.
     */
    public function setSource(?string $source): Review {
        $this->source = $source;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Review Returns this review.
     * @throws InvalidArgumentException Throws an invalid argument exception if the type is invalid.
     */
    public function setType(?string $type): Review {
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
        return XmlSerializer::serializeReview($this);
    }
}
