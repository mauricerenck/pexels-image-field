<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Validator\Status;

use WBW\Library\Validator\Api\StatusInterface;

/**
 * Abstract status.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Validator\Status
 * @abstract
 */
abstract class AbstractStatus implements StatusInterface {

    /**
     * Get the code.
     *
     * @var int
     */
    private $code;

    /**
     * Message.
     *
     * @var string
     */
    private $message;

    /**
     * Rule name.
     *
     * @var string
     */
    private $ruleName;

    /**
     * Constructor.
     *
     * @param int|null $code The code.
     * @param string|null $message The message.
     */
    protected function __construct(?int $code, ?string $message) {
        $this->setCode($code);
        $this->setMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode(): ?int {
        return $this->code;
    }

    /**
     * {@inheritDoc}
     */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * {@inheritDoc}
     */
    public function getRuleName(): ?string {
        return $this->ruleName;
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {

        return [
            "code"     => $this->getCode(),
            "message"  => $this->getMessage(),
            "ruleName" => $this->getRuleName(),
        ];
    }

    /**
     * Set the code.
     *
     * @param int|null $code The code.
     * @return StatusInterface Returns this status.
     */
    public function setCode(?int $code): StatusInterface {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the message.
     *
     * @param string|null $message The message.
     * @return StatusInterface Returns this status.
     */
    public function setMessage(?string $message): StatusInterface {
        $this->message = $message;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setRuleName(?string $ruleName): StatusInterface {
        $this->ruleName = $ruleName;
        return $this;
    }
}
