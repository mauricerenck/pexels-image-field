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
 * Audio.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class Audio extends AbstractModel {

    use PresentPresentTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "audio";

    /**
     * Stereo.
     *
     * @var Stereo|null
     */
    private $stereo;

    /**
     * Get the stereo.
     *
     * @return Stereo|null Returns the stereo.
     */
    public function getStereo(): ?Stereo {
        return $this->stereo;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeAudio($this);
    }

    /**
     * Get the stereo.
     *
     * @param Stereo|null $stereo The stereo.
     * @return Audio Returns this audio.
     */
    public function setStereo(?Stereo $stereo): Audio {
        $this->stereo = $stereo;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return XmlSerializer::serializeAudio($this);
    }
}
