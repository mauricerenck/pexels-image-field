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

namespace WBW\Library\Easilys\Response\Suppliers;

use WBW\Library\Easilys\Model\Storehouse;
use WBW\Library\Easilys\Response\AbstractResponse;

/**
 * GET storehouses site response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Response\Suppliers
 */
class GetStorehousesSiteResponse extends AbstractResponse {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Add a data.
     *
     * @param Storehouse|null $data The data.
     * @return GetStorehousesSiteResponse Returns this GET storehouses site response.
     */
    public function addData(?Storehouse $data): GetStorehousesSiteResponse {

        if (null !== $data) {
            $this->data[] = $data;
        }

        return $this;
    }

    /**
     * Get the data.
     *
     * @return Storehouse[] Returns the data.
     */
    public function getData(): array {
        return $this->data;
    }
}
