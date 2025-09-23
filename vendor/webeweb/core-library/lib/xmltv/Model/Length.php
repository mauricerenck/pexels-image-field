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
use WBW\Library\Common\Traits\Strings\StringContentTrait;
use WBW\Library\XmlTv\Serializer\JsonSerializer;
use WBW\Library\XmlTv\Serializer\XmlSerializer;

/**
 * Length.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class Length extends AbstractModel {

    use StringContentTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "length";

    /**
     * Units "hours".
     *
     * @var string
     */
    public const UNITS_HOURS = "hours";

    /**
     * Units "minutes".
     *
     * @var string
     */
    public const UNITS_MINUTES = "minutes";

    /**
     * Units "seconds".
     *
     * @var string
     */
    public const UNITS_SECONDS = "seconds";

    /**
     * Units.
     *
     * @var string|null
     */
    private $units;

    /**
     * Enumerate the units.
     *
     * @return string[] Returns the units enumeration.
     */
    public static function enumUnits(): array {

        return [
            self::UNITS_HOURS,
            self::UNITS_MINUTES,
            self::UNITS_SECONDS,
        ];
    }

    /**
     * Get the units.
     *
     * @return string|null Returns the units.
     */
    public function getUnits(): ?string {
        return $this->units;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeLength($this);
    }

    /**
     * Set the units.
     *
     * @param string|null $units The units.
     * @return Length Returns this length.
     * @throws InvalidArgumentException Throws an invalid argument exception if the units is invalid.
     */
    public function setUnits(?string $units): Length {
        if (null !== $units && false === in_array($units, static::enumUnits())) {
            throw new InvalidArgumentException(sprintf('The units "%s" is invalid', $units));
        }
        $this->units = $units;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return XmlSerializer::serializeLength($this);
    }
}
