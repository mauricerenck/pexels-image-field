<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Strings;

/**
 * String message trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Strings
 */
trait StringMessageTrait {

    /**
     * Message.
     *
     * @var string|null
     */
    protected $message;

    /**
     * Get the message.
     *
     * @return string|null Returns the message.
     */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Set the message.
     *
     * @param string|null $message The message.
     * @return self Returns this instance.
     */
    public function setMessage(?string $message): self {
        $this->message = $message;
        return $this;
    }
}
