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

/**
 * Actor.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class Actor extends AbstractCredit {

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "actor";

    /**
     * Role.
     *
     * @var string|null
     */
    private $role;

    /**
     * Get the role.
     *
     * @return string|null Returns the role.
     */
    public function getRole(): ?string {
        return $this->role;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeActor($this);
    }

    /**
     * Set the role.
     *
     * @param string|null $role The role.
     * @return Actor Returns this actor.
     */
    public function setRole(?string $role): Actor {
        $this->role = $role;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return XmlSerializer::serializeActor($this);
    }
}
