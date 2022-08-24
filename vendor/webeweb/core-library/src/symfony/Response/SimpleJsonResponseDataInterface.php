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
 * Simple JSON response data.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Response
 */
interface SimpleJsonResponseDataInterface extends JsonSerializable {

    /**
     * Get the notify.
     *
     * @return string|null Returns the notify.
     */
    public function getNotify(): ?string;

    /**
     * Get the status.
     *
     * @return int|null Returns the status.
     */
    public function getStatus(): ?int;

    /**
     * Set the notify.
     *
     * @param string|null $notify The notify.
     * @return SimpleJsonResponseDataInterface Returns this simple JSON response data.
     */
    public function setNotify(?string $notify): SimpleJsonResponseDataInterface;

    /**
     * Set the status.
     *
     * @param int|null $status The status.
     * @return SimpleJsonResponseDataInterface Returns this simple JSON response data.
     */
    public function setStatus(?int $status): SimpleJsonResponseDataInterface;
}
