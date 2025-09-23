<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Response;

use WBW\Library\Common\Provider\AbstractResponse as BaseResponse;
use WBW\Library\Common\Traits\Strings\StringMessageTrait;

/**
 * Abstract response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Response
 * @abstract
 */
abstract class AbstractResponse extends BaseResponse {

    use StringMessageTrait;

    /**
     * Data.
     *
     * @var mixed[]|null
     */
    protected $data;

    /**
     * Errors.
     *
     * @var string[]|null
     */
    protected $errors;

    /**
     * Success.
     *
     * @var bool|null
     */
    protected $success;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setData([]);
        $this->setErrors([]);
    }

    /**
     * Get the errors.
     *
     * @return string[] Returns the errors.
     */
    public function getErrors(): array {
        return $this->errors;
    }

    /**
     * Get the success.
     *
     * @return bool|null Returns the success.
     */
    public function getSuccess(): ?bool {
        return $this->success;
    }

    /**
     * Set the data.
     *
     * @param mixed[] $data The data.
     * @return AbstractResponse Returns this response.
     */
    protected function setData(array $data): AbstractResponse {
        $this->data = $data;
        return $this;
    }

    /**
     * Set the errors.
     *
     * @param string[] $errors The errors.
     * @return AbstractResponse Returns this response.
     */
    public function setErrors(array $errors): AbstractResponse {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Set the success.
     *
     * @param bool|null $success The success.
     * @return AbstractResponse Returns this response.
     */
    public function setSuccess(?bool $success): AbstractResponse {
        $this->success = $success;
        return $this;
    }
}
