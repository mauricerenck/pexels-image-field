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

use WBW\Library\Common\Traits\Integers\IntegerHeightTrait;
use WBW\Library\Common\Traits\Integers\IntegerWidthTrait;
use WBW\Library\XmlTv\Serializer\JsonSerializer;
use WBW\Library\XmlTv\Serializer\XmlSerializer;

/**
 * Icon.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class Icon extends AbstractModel {

    use IntegerHeightTrait;
    use IntegerWidthTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "icon";

    /**
     * Source.
     *
     * @var string|null
     */
    private $src;

    /**
     * Get the source.
     *
     * @return string|null Returns the source.
     */
    public function getSrc(): ?string {
        return $this->src;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeIcon($this);
    }

    /**
     * Set the source.
     *
     * @param string|null $src The source.
     * @return Icon Returns this icon.
     */
    public function setSrc(?string $src): Icon {
        $this->src = $src;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return XmlSerializer::serializeIcon($this);
    }
}
