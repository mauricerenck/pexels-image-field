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

namespace WBW\Library\Easilys\Response\General;

use WBW\Library\Easilys\Model\Site;
use WBW\Library\Easilys\Response\AbstractResponse;

/**
 * GET sites response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Response\General
 */
class GetSitesResponse extends AbstractResponse {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Add a data.
     *
     * @param Site|null $data The data.
     * @return GetSitesResponse Returns this GET sites response.
     */
    public function addData(?Site $data): GetSitesResponse {

        if (null !== $data) {
            $this->data[] = $data;
        }

        return $this;
    }

    /**
     * Get the data.
     *
     * @return Site[] Returns the data.
     */
    public function getData(): array {
        return $this->data;
    }
}
