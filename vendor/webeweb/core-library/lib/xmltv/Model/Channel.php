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

use WBW\Library\Common\Traits\Strings\StringIdTrait;
use WBW\Library\XmlTv\Serializer\JsonSerializer;
use WBW\Library\XmlTv\Serializer\XmlSerializer;
use WBW\Library\XmlTv\Traits\Arrays\ArrayDisplayNamesTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayIconsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayProgrammesTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayUrlsTrait;

/**
 * Channel.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class Channel extends AbstractModel {

    use ArrayDisplayNamesTrait;
    use ArrayIconsTrait;
    use ArrayProgrammesTrait;
    use ArrayUrlsTrait;
    use StringIdTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "channel";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setDisplayNames([]);
        $this->setIcons([]);
        $this->setProgrammes([]);
        $this->setUrls([]);
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeChannel($this);
    }

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return XmlSerializer::serializeChannel($this);
    }
}
