<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Provider;

/**
 * Response interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Provider
 */
interface ResponseInterface {

    /**
     * Get the raw response.
     *
     * @return string|null Returns the raw response.
     */
    public function getRawResponse(): ?string;

    /**
     * Set the raw response.
     *
     * @param string|null $rawResponse The raw response.
     * @return ResponseInterface Returns this response.
     */
    public function setRawResponse(?string $rawResponse);
}
