<?php

/*
 * Disclaimer: This source code is protected by copyright law and by
 * international conventions.
 *
 * Any reproduction or partial or total distribution of the source code, by any
 * means whatsoever, is strictly forbidden.
 *
 * Anyone not complying with these provisions will be guilty of the offense of
 * infringement and the penal sanctions provided for by law.
 *
 * (c) 2019 All rights reserved.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Model;

use WBW\Library\XmlTv\Serializer\JsonSerializer;
use WBW\Library\XmlTv\Serializer\XmlSerializer;
use WBW\Library\XmlTv\Traits\Arrays\ArrayChannelsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayProgrammesTrait;

/**
 * TV.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class Tv extends AbstractModel {

    use ArrayChannelsTrait;
    use ArrayProgrammesTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "tv";

    /**
     * Date.
     *
     * @var string|null
     */
    private $date;

    /**
     * Generator info name.
     *
     * @var string|null
     */
    private $generatorInfoName;

    /**
     * Generator info URL.
     *
     * @var string|null
     */
    private $generatorInfoUrl;

    /**
     * Source data URL.
     *
     * @var string|null
     */
    private $sourceDataUrl;

    /**
     * Source info name.
     *
     * @var string|null
     */
    private $sourceInfoName;

    /**
     * Source info URL.
     *
     * @var string|null
     */
    private $sourceInfoUrl;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setChannels([]);
        $this->setProgrammes([]);
    }

    /**
     * Get the date.
     *
     * @return string|null Returns the date.
     */
    public function getDate(): ?string {
        return $this->date;
    }

    /**
     * Get the generator info name.
     *
     * @return string|null Returns the generator info name.
     */
    public function getGeneratorInfoName(): ?string {
        return $this->generatorInfoName;
    }

    /**
     * Get the generator info URL.
     *
     * @return string|null Returns the generator info URL.
     */
    public function getGeneratorInfoUrl(): ?string {
        return $this->generatorInfoUrl;
    }

    /**
     * Get the source data URL.
     *
     * @return string|null Returns the source data URL.
     */
    public function getSourceDataUrl(): ?string {
        return $this->sourceDataUrl;
    }

    /**
     * Get the source info name.
     *
     * @return string|null Returns the source info name.
     */
    public function getSourceInfoName(): ?string {
        return $this->sourceInfoName;
    }

    /**
     * Get the source info URL.
     *
     * @return string|null Returns the source info URL.
     */
    public function getSourceInfoUrl(): ?string {
        return $this->sourceInfoUrl;
    }

    /**
     * Indexe the programmes by channel.
     *
     * @return Tv Returns this TV.
     */
    public function indexProgrammesByChannel(): Tv {

        $this->sortChannels();
        $this->sortProgrammes();

        $channels = $this->indexChannelsById();

        foreach ($this->programmes as $current) {
            if (true === array_key_exists($current->getChannel(), $channels)) {
                $channels[$current->getChannel()]->addProgramme($current);
            }
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeTv($this);
    }

    /**
     * Set the date.
     *
     * @param string|null $date The date.
     * @return Tv Returns this TV.
     */
    public function setDate(?string $date): Tv {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the generator info name.
     *
     * @param string|null $generatorInfoName The generator info name.
     * @return Tv Returns this TV.
     */
    public function setGeneratorInfoName(?string $generatorInfoName): Tv {
        $this->generatorInfoName = $generatorInfoName;
        return $this;
    }

    /**
     * Set the generator info URL.
     *
     * @param string|null $generatorInfoUrl The generator info URL.
     * @return Tv Returns this TV.
     */
    public function setGeneratorInfoUrl(?string $generatorInfoUrl): Tv {
        $this->generatorInfoUrl = $generatorInfoUrl;
        return $this;
    }

    /**
     * Set the source data URL.
     *
     * @param string|null $sourceDataUrl The source data URL.
     * @return Tv Returns this TV.
     */
    public function setSourceDataUrl(?string $sourceDataUrl): Tv {
        $this->sourceDataUrl = $sourceDataUrl;
        return $this;
    }

    /**
     * Set the source info name.
     *
     * @param string|null $sourceInfoName The source info name.
     * @return Tv Returns this TV.
     */
    public function setSourceInfoName(?string $sourceInfoName): Tv {
        $this->sourceInfoName = $sourceInfoName;
        return $this;
    }

    /**
     * Set the source info URL.
     *
     * @param string|null $sourceInfoUrl The source info URL.
     * @return Tv Returns this TV.
     */
    public function setSourceInfoUrl(?string $sourceInfoUrl): Tv {
        $this->sourceInfoUrl = $sourceInfoUrl;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return XmlSerializer::serializeTv($this);
    }
}
