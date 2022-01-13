<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Model;

use JsonSerializable;

/**
 * JSON response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Model
 */
class JsonResponse implements JsonSerializable {

    /**
     * Data.
     *
     * @var array|null
     */
    protected $data;

    /**
     * Errors.
     *
     * @var string[]|null
     */
    protected $errors;

    /**
     * Message.
     *
     * @var string|null
     */
    protected $message;

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
        // NOTHING TO DO
    }

    /**
     * Get the data.
     *
     * @return array|null Returns the data.
     */
    public function getData(): ?array {
        return $this->data;
    }

    /**
     * Get the errors.
     *
     * @return string[]|null Returns the errors.
     */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * Gte the message.
     *
     * @return string|null Returns the message.
     */
    public function getMessage(): ?string {
        return $this->message;
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
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return [
            "success" => $this->getSuccess(),
            "data"    => $this->getData(),
            "message" => $this->getMessage(),
            "errors"  => $this->getErrors(),
        ];
    }

    /**
     * Set the data.
     *
     * @param array|null $data The data.
     * @return JsonResponse Returns this JSON response.
     */
    public function setData(?array $data): JsonResponse {
        $this->data = $data;
        return $this;
    }

    /**
     * Set the errors.
     *
     * @param string[]|null $errors The errors.
     * @return JsonResponse Returns this JSON response.
     */
    public function setErrors(?array $errors): JsonResponse {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Set the message.
     *
     * @param string|null $message The message.
     * @return JsonResponse Returns this JSON response.
     */
    public function setMessage(?string $message): JsonResponse {
        $this->message = $message;
        return $this;
    }

    /**
     * Set the success.
     *
     * @param bool|null $success The success.
     * @return JsonResponse Returns this JSON response.
     */
    public function setSuccess(?bool $success): JsonResponse {
        $this->success = $success;
        return $this;
    }
}