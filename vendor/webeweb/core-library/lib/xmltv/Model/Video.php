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
use WBW\Library\XmlTv\Traits\Objects\PresentPresentTrait;

/**
 * Video.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class Video extends AbstractModel {

    use PresentPresentTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "video";

    /**
     * Aspect.
     *
     * @var Aspect|null
     */
    private $aspect;

    /**
     * Colour.
     *
     * @var Colour|null
     */
    private $colour;

    /**
     * Quality.
     *
     * @var Quality|null
     */
    private $quality;

    /**
     * Get the aspect.
     *
     * @return Aspect|null Returns the aspect.
     */
    public function getAspect(): ?Aspect {
        return $this->aspect;
    }

    /**
     * Get the colour.
     *
     * @return Colour|null Returns the colour.
     */
    public function getColour(): ?Colour {
        return $this->colour;
    }

    /**
     * Get the quality.
     *
     * @return Quality|null Returns the quality.
     */
    public function getQuality(): ?Quality {
        return $this->quality;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeVideo($this);
    }

    /**
     * Set the aspect.
     *
     * @param Aspect|null $aspect The aspect.
     * @return Video Returns this video.
     */
    public function setAspect(?Aspect $aspect): Video {
        $this->aspect = $aspect;
        return $this;
    }

    /**
     * Set the colour.
     *
     * @param Colour|null $colour The colour.
     * @return Video Returns this video.
     */
    public function setColour(?Colour $colour): ?Video {
        $this->colour = $colour;
        return $this;
    }

    /**
     * Set the quality.
     *
     * @param Quality|null $quality The quality.
     * @return Video Returns this video.
     */
    public function setQuality(?Quality $quality): ?Video {
        $this->quality = $quality;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return XmlSerializer::serializeVideo($this);
    }
}
