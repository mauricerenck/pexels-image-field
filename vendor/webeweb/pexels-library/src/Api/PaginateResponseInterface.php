<?php

declare(strict_types = 1);

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Api;

use WBW\Library\Pexels\Response\AbstractResponse;

/**
 * Paginate response interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\API
 */
interface PaginateResponseInterface {

    /**
     * Deserialize a response.
     *
     * @param string $rawResponse The raw response.
     * @return AbstractResponse Returns the deserialized response.
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse;

    /**
     * Get the next page.
     *
     * @return string Returns the next page.
     */
    public function getNextPage(): ?string;

    /**
     * Get the previous page.
     *
     * @return string Returns the previous page.
     */
    public function getPrevPage(): ?string;
}
