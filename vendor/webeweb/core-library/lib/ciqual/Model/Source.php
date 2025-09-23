<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Ciqual\Model;

use JsonSerializable;
use WBW\Library\Ciqual\Serializer\JsonSerializer;
use WBW\Library\Common\Traits\Strings\StringCodeTrait;

/**
 * Source.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Model
 */
class Source implements JsonSerializable {

    use StringCodeTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "SOURCES";

    /**
     * Citation réf.
     *
     * @var string|null
     */
    protected $citationRef;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ciotation réf.
     *
     * @return string|null Returns the citation réf.
     */
    public function getCitationRef(): ?string {
        return $this->citationRef;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeSource($this);
    }

    /**
     * Set the citation réf.
     *
     * @param string|null $citationRef The citation réf.
     * @return Source Returns this source.
     */
    public function setCitationRef(?string $citationRef): Source {
        $this->citationRef = $citationRef;
        return $this;
    }
}
