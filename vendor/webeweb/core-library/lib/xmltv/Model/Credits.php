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
use WBW\Library\XmlTv\Traits\Arrays\ArrayActorsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayAdaptersTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayCommentatorsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayComposersTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayDirectorsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayEditorsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayGuestsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayPresentersTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayProducersTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayWritersTrait;

/**
 * Credits.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class Credits extends AbstractModel {

    use ArrayActorsTrait;
    use ArrayAdaptersTrait;
    use ArrayCommentatorsTrait;
    use ArrayComposersTrait;
    use ArrayDirectorsTrait;
    use ArrayEditorsTrait;
    use ArrayGuestsTrait;
    use ArrayPresentersTrait;
    use ArrayProducersTrait;
    use ArrayWritersTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "credits";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setActors([]);
        $this->setAdapters([]);
        $this->setCommentators([]);
        $this->setComposers([]);
        $this->setDirectors([]);
        $this->setEditors([]);
        $this->setGuests([]);
        $this->setPresenters([]);
        $this->setProducers([]);
        $this->setWriters([]);
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeCredits($this);
    }

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return XmlSerializer::serializeCredits($this);
    }
}
