<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Validator;

use WBW\Library\Common\Traits\Integers\IntegerCodeTrait;
use WBW\Library\Common\Traits\Strings\StringMessageTrait;

/**
 * Abstract status.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Validator
 * @abstract
 */
abstract class AbstractStatus implements StatusInterface {

    use IntegerCodeTrait;
    use StringMessageTrait;

    /**
     * Rule name.
     *
     * @var string|null
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
    public function getRuleName(): ?string {
        return $this->ruleName;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        return [
            "code"     => $this->getCode(),
            "message"  => $this->getMessage(),
            "ruleName" => $this->getRuleName(),
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function setRuleName(?string $ruleName): StatusInterface {
        $this->ruleName = $ruleName;
        return $this;
    }
}
