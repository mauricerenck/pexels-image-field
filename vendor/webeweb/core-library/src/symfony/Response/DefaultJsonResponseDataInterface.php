<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Response;

use JsonSerializable;

/**
 * Default JSON response data.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Response
 */
interface DefaultJsonResponseDataInterface extends JsonSerializable {

    /**
     * Get the data.
     *
     * @return array|null Returns the data.
     */
    public function getData(): ?array;

    /**
     * Get the errors.
     *
     * @return string[]|null Returns the errors.
     */
    public function getErrors(): ?array;

    /**
     * Get the message.
     *
     * @return string|null Returns the message.
     */
    public function getMessage(): ?string;

    /**
     * Get the success.
     *
     * @return bool|null Returns the success.
     */
    public function getSuccess(): ?bool;

    /**
     * Set the data.
     *
     * @param array|null $data The data.
     * @return DefaultJsonResponseDataInterface Returns this default JSON response data.
     */
    public function setData(?array $data);

    /**
     * Set the errors.
     *
     * @param string[]|null $errors The errors.
     * @return DefaultJsonResponseDataInterface Returns this default JSON response data.
     */
    public function setErrors(?array $errors);

    /**
     * Set the message.
     *
     * @param string|null $message The message.
     * @return DefaultJsonResponseDataInterface Returns this default JSON response data.
     */
    public function setMessage(?string $message);

    /**
     * Set the success.
     *
     * @param bool|null $success The success.
     * @return DefaultJsonResponseData Returns this default JSON response data.
     */
    public function setSuccess(?bool $success): DefaultJsonResponseDataInterface;
}
