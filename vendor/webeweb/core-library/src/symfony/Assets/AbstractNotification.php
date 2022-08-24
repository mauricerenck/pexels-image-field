<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

use WBW\Library\Symfony\Serializer\JsonSerializer;

/**
 * Abstract notification.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 * @abstract
 */
abstract class AbstractNotification implements NotificationInterface {

    /**
     * Content.
     *
     * @var string
     */
    private $content;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Constructor.
     *
     * @param string $type The type.
     * @param string $content The content.
     */
    protected function __construct(string $type, string $content) {
        $this->setContent($content);
        $this->setType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getContent(): string {
        return $this->content;
    }

    /**
     * {@inheritdoc}
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeNotification($this);
    }

    /**
     * Set the content.
     *
     * @param string $content The content.
     * @return NotificationInterface Returns this notification.
     */
    protected function setContent(string $content): NotificationInterface {
        $this->content = $content;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return NotificationInterface Returns this notification.
     */
    protected function setType(string $type): NotificationInterface {
        $this->type = $type;
        return $this;
    }
}
