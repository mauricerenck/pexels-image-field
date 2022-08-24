<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

use DateTime;

/**
 * Quote interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
interface QuoteInterface {

    /**
     * Get the author.
     *
     * @return string|null Returns the author.
     */
    public function getAuthor(): ?string;

    /**
     * Get the content.
     *
     * @return string|null Returns the content.
     */
    public function getContent(): ?string;

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime;

    /**
     * Get the saint.
     *
     * @return string|null Returns the saint.
     */
    public function getSaint(): ?string;
}
